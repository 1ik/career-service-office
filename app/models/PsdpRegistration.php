<?php

class PsdpRegistration extends \Eloquent {
	protected $fillable = ['semester', 'year', 'status', 'registration_id'];

    public function registration() {
        return $this->belongsTo('Registration');
    }

    public function registrants()
    {
        return $this->hasMany('Registrant', 'registration_id', 'registration_id');
    }

    public function openRegistration() {
        return $this->belongsTo('Registration', 'registration_id')->whereOpen(1);
    }

}