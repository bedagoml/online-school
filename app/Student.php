<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'admission_number', 'level_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Student Guardian Relationship
     */
    
    public function guardian() {
        return $this->belongsTo('App\Guardian');
    }

    /**
     * Student Class Relationship
     */

    public function class() {
        return $this->belongsTo('App\Level');
    }

    /**
     * Student Dorm Relationship
     */
    
    public function dorm() {
        return $this->belongsTo('App\Dorm');
    }

    /**
     * Student Subject Relationship
     * returns student results
     */
    public function subjects() {
        return $this->belongsToMany('App\Subject', 'results');
    }
}
