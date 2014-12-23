<?php

class Organisation extends \Eloquent {
	protected $fillable = ['name','initial','url','organisation_type_id'];

    public function organisation_type()
    {
        return $this->belongsTo("OrganisationType");
    }
}