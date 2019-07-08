<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
    //
    protected $fillable = [
        'group_id', 'student_id', 'valuation_1', 'valuation_2', 'valuation_3', 'valuation_4', 'valuation_2', 'accepted'
    ];
}
