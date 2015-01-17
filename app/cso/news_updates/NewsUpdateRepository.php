<?php
namespace cso\updates;

use cso\repositories\Repository;

use cso\utils\UserUtil;
use \Page;
use \NewsUpdate;

use \Cache;

class NewsUpdateRepository extends Repository {

    public static $rules = [];
    public static $messages = [];

    function __construct()
    {
        parent::__construct(new NewsUpdate);
    }

    public function findItemBySlug($slug)
    {

        if( ! Cache::has('news_' . $slug)) {
            $item = NewsUpdate::whereSlug($slug)->get()->first();

            if($item != NULL) {
                Cache::forever('news_' . $slug, $item);
            } else {
                return NULL;
            }
        }

        return Cache::get('news_' . $slug);
    }


    public function getRelatedContents($item)
    {

        if( ! Cache::has('related_news_of_' . $item->id)) {
            //cache it for 10 mins.
            Cache::put( 'related_news_of_' . $item->id, NewsUpdate::whereCategory($item->category)->orderBy('id', 'desc')->take(10)->where('id', '!=', $item->id)->get(), 10 );
        }

        return Cache::get('related_news_of_' . $item->id);
    }



    public function getTopFourNewsUpdates()
    {

        if( ! Cache::has('topFourNewsUpdates')) {
            Cache::forever('topFourNewsUpdates', NewsUpdate::whereCategory('update')->wherePublished(1)
                                                                                    ->orderBy('id')->take(4)->get());
        }

        return Cache::get('topFourNewsUpdates');
    }


    public function getTopFourNewsEvents()
    {

        if( ! Cache::has('topFourNewsEvents')) {
            Cache::forever('topFourNewsEvents', NewsUpdate::whereCategory('event')->wherePublished(1)
                                                                                ->orderBy('id')->take(4)->get());
        }

        return Cache::get('topFourNewsEvents');
    }


    public function store($properties = null)
    {

        if(!$this->checkFiles()){
            return false;
        }

        if(! $this->checkSlug(null, $properties['slug'])) {
            $this->errors[] = "There is already a post with the URI " . $properties['slug'] . " . Please try a different one";
            return false;
        }

        $post = parent::store(\Input::except("_token", 'attachment', 'attachment_label', 'image'));

        //upload necessary files
        $this->handleFileUploads($post);

        $poster_id = \Sentry::getUser()->id;
        $post->poster_id = $poster_id;

        if(UserUtil::isAdmin($poster_id)) {
            $post->approver_id = $poster_id;
        }

        $post->update();

        //forget all the caches.
        Cache::forget('topFourNewsUpdates');
        Cache::forget('topFourNewsEvents');

        return $post;
    }



    public function update($id, $prop = null)
    {

        if(!$this->checkFiles()) {
            return false;
        }

        $post = NewsUpdate::find($id);

        Cache::forget('news_' . $post->slug);

        if(! $this->checkSlug($post, \Input::get('slug'))) {
            $this->errors[] = "There is already a post with the URI " . $prop['slug'] . " . Please try a different one";
            return false;
        }

        $this->handleFileUploads($post);

        $properties = \Input::except('_token', 'attachment', 'image');

        if(isset($properties['published']) && $properties['published'] == '1') {
            $properties['published'] = 1;
        } else {
            $properties['published'] = 0;
        }

        $post->update($properties);

        Cache::forget('topFourNewsUpdates');
        Cache::forget('topFourNewsEvents');

        return $post;
    }




    public function checkSlug($post = null, $slug)
    {

        if($post == null) {
            //no post with this slug.
            return NewsUpdate::whereSlug($slug)->get() == null;
        }

        if( $post->slug != $slug ) {
            return NewsUpdate::whereSlug($slug)->get()->first() == NULL;
        }

        return true;
    }


    private function handleFileUploads($post)
    {

        if(\Input::hasFile('image')) {
            $file_name = "image_" . $post->id . '.' . \Input::file('image')->getClientOriginalExtension();
            \Input::file('image')->move( base_path() . '/public/files/news-updates/images', $file_name);
            $post->image = $file_name;
            $post->update();
        }

        if(\Input::hasFile('attachment')) {
            $file_name = "attachment_" . $post->slug . '.' . \Input::file('attachment')->getClientOriginalExtension();
            \Input::file('attachment')->move( base_path() . '/public/files/news-updates/attachments', $file_name);
            $post->attachment = $file_name;
            $post->attachment_label = \Input::get('attachment_label');
            $post->update();
        }
    }


    private function checkFiles()
    {

        if(\Input::hasFile('image'))
        {
            $mime = \Input::file('image')->getMimeType();
            $size = \Input::file('image')->getSize();

            if( $mime == "image/jpeg" || $mime == "image/png") {

                if($size <= 2000000) { //2(MB)
                    //let go.
                } else {
                    $this->errors[] = 'The image size must have be below 2Megabyte';
                    return false;
                }

            } else {
                $this->errors[] = "You have submitted unsupported file format for sdf. Please upload jpg or png type";
                return false;
            }

        }

        if(\Input::hasFile('attachment')) {
            $attachment_mime_types = ['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', "application/vnd.ms-office", "application/pdf", "application/zip", "audio/mpeg", "text/plain", "image/png", ""];
            $mime = \Input::file('attachment')->getMimeType();
            $size = \Input::file('attachment')->getSize();

            if(in_array($mime,$attachment_mime_types)) {
                if($size <= 5000000) { //5(MB)
                    //let go
                } else {
                    $this->errors[] = 'The Attachment size must have be below 5 Megabyte';
                    return false;
                }

            } else {
                $this->errors[] = "You have submitted unsupported file format for your profile picture. Please upload a file with valid format";
                return false;
            }

        }

        return true;
    }

}