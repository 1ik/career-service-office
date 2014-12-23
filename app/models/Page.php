<?php

class Page extends \Eloquent {
	protected $fillable = ['overlay_title', 'overlay_text', 'title', 'body_title', 'contents', 'slug'];

    public function sections() {
        return $this->hasMany('section');
    }
}