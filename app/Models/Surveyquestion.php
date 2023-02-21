<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surveyquestion extends Model
{
    use HasFactory;
    protected $fillable = [
      'question_category', 'question_category_ar','question_type','question','response1','response2','question_ar','response1_ar','response2_ar'
    ];
}
