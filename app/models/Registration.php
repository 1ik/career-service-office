<?php

class Registration extends \Eloquent {
	protected $fillable = ['starts_on','ends_on','open','capacity'];

    public function registrants() {
        return $this->hasMany('Registrant');
    }

    public function psdp_registration() {
        return $this->hasOne('PsdpRegistration');
    }

    public function job() {
        return $this->hasOne('Job');
    }

    public function poster()
    {
        return $this->belongsTo('User', 'submitted_by');
    }

    public function approver()
    {
        return $this->belongsTo('User', 'approved_by');
    }

}