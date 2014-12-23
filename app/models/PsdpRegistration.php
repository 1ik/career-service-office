<?php

class PsdpRegistration extends \Eloquent {
	protected $fillable = ['semester', 'year', 'status', 'registration_id'];

    public function registration() {
        return $this->belongsTo('Registration');
    }
}