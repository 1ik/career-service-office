<?php

class NewsUpdate extends \Eloquent {
	protected $fillable = [
        'title',
        'image',
        'content',
        'summery',
        'category',
        'attachment',
        'slug',
        'attachment_label',
        'published',
        'poster_id',
        'approver_id'
    ];


    public function poster()
    {
        return $this->belongsTo('User', 'poster_id');
    }

    public function approver()
    {
        return $this->belongsTo('User', 'approver_id');
    }
}

