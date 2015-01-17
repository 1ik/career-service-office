<?php

class SavedJob extends \Eloquent {
	protected $fillable = ['user_id', 'job_id'];

    public function job()
    {
        return $this->belongsTo("Job");
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

}