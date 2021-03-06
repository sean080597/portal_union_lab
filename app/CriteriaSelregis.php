<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CriteriaSelregis extends Model
{
    protected $fillable = [
        'content',
    ];

    public function students(){
        return $this->belongsToMany('App\Student', 'student_criteria_selregis');
    }
}
