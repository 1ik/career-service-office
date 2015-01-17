<?php

class Job extends \Eloquent {
	protected $fillable = [
        'title',
        'responsibility',
        'category',
        'url',
        'vacancy',
        'salary',
        'organisation_id',
        'registration_id',
        'hot',
        'attachment',
        'poster_id',
        'approver_id'
    ];

    public function organisation()
    {
        return $this->belongsTo('Organisation');
    }

    public function registration()
    {
        return $this->belongsTo('Registration');
    }

    public function poster()
    {
        return $this->belongsTo('User', 'poster_id');
    }

    public function approver()
    {
        return $this->belongsTo('User', 'approver_id');
    }

    public function saved_jobs()
    {
        return $this->hasOne('SavedJob')->whereUserId(Sentry::getUser()->id);
    }

    public function applicant()
    {
        return $this->hasOne('Registrant', 'registration_id', 'registration_id')->whereUserId(Sentry::getUser()->id);
    }

    public function openRegistration()
    {
        return $this->belongsTo('Registration', 'registration_id')->whereOpen(1);
    }

}