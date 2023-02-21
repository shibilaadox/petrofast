<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issuecategory extends Model
{
    use HasFactory;
    protected $fillable = [
      'category_name', 'category_name_ar'
    ];

    public function issuetypes()
    {
        return $this->hasMany(Issuetype::class,"issue_category");
    }
}
