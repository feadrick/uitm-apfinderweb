<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    //
    function academic_program(){
        return $this->hasMany('App\AcademicProgram','facultyid');
    }
}
