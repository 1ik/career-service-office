<?php

class Registrant extends \Eloquent {
	protected $fillable = ['user_id','registration_id'];


    public function registration()
    {
        return $this->belongsTo('Registration');
    }

    public function user() {
        return $this->belongsTo('User');
    }
}