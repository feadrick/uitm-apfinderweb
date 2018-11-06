<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicProgram extends Model
{
    function faculty(){
        return $this->belongsTo('App\Faculty','facultyid');
    }
}
