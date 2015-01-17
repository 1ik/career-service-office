<?php

class Alumni extends \Eloquent {
	protected $fillable = [
        'organisation', 'designation', 'employment_status', 'url', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo("User");
    }
}