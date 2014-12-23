<?php

class Registrant extends \Eloquent {
	protected $fillable = ['user_id','registration_id'];

    public function user() {
        return $this->belongsTo('User');
    }

    public function student() {
        return $this->belongsTo('Student');
    }
}