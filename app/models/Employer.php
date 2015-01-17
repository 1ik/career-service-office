<?php

class Employer extends \Eloquent {
	protected $fillable = ['user_id', 'organisation_id'];

    public function organisation() {
        return $this->belongsTo("Organisation");
    }

    public function user()
    {
        return $this->belongsTo("User");
    }


}