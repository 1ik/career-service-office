<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 12/23/14
 * Time: 4:17 PM
 */

namespace cso\pages;


use cso\repositories\Repository;
use \Cache;
use \Section;

class SectionsRepository extends Repository {
    public static $messages = [];
    public static $rules = [];

    public function __construct()
    {
        parent::__construct(new \Section);
    }

    public function update($id, $prop = null)
    {
        $section = Section::find($id);

        if($section != NULL) {
            Cache::forget('section_' . $section->slug);
        }

        return parent::update($id,null);
    }

    public function findSectionBySlug($section_slug)
    {

        if(! Cache::has('section_' . $section_slug)) {
            $section = Section::whereSlug($section_slug)->get()->first();

            if($section != NULL) {
                Cache::forever('section_' . $section->slug, $section);
            } else {
                return NULL;
            }

        }

        return Cache::get('section_' . $section_slug);
    }

    public function getRelatedSections($section)
    {

        if( !Cache::has('related_section_of_' . $section->id)) {
            Cache::put('related_section_of_' . $section->id , Section::wherePageId($section->page_id)->whereNotIn('id',[$section->id])->get(), 10); //cache for 10 mins
        }

        return Cache::get('related_section_of_' . $section->id);
    }

} 