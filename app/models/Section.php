<?php

class Section extends \Eloquent {
	protected $fillable = ['title', 'contents', 'page_id', 'summery','slug'];

    public function page()
    {
        return $this->belongsTo('Page');
    }
}