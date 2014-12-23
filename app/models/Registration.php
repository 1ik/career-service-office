<?php

class Registration extends \Eloquent {
	protected $fillable = ['starts_on','ends_on','open','capacity'];

    public function registrants() {
        return $this->hasMany('Registrant');
    }

    public function psdp_registration() {
        return $this->hasOne('PsdpRegistration');
    }
}