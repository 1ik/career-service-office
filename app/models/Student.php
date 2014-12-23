<?php

class Student extends \Eloquent {
	protected $fillable = [
        'student_id',
        'current_cgpa',
        'credits_completed',
        'department_id',
        'major',
        'minor',
        'semester',
        'present_address',
        'present_city',
        'present_postal_code',
        'permanent_address',
        'permanent_city',
        'permanent_postal_code',
        'web_url',
        'gurdian_name',
        'gurdian_relation',
        'gurdian_work_institute',
        'gurdian_designation',
        'gurdian_contact',
        'gurdian_email',
        'bio',
        'employment_status',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo('User');
    }

    public function department() {
        return $this->belongsTo('Department');
    }

    public function majorCourse() {
        return $this->belongsTo('Course', 'major');
    }
    public function minorCourse() {
        return $this->belongsTo('Course', 'minor');
    }
}