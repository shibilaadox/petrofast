<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issuetype extends Model
{
    use HasFactory;
    protected $fillable = [
      'issue_category', 'issue_type','issue_type_ar'
    ];

    public function issuecategories()
    {
        return $this->belongsTo(Issuecategory::class, "issue_category");
    }
}
