<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questioncategory extends Model
{
    use HasFactory;
    protected $fillable = [
      'question_category','question_category_ar'
    ];
}
