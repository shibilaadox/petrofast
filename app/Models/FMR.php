<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FMR extends Model
{
    use HasFactory;
    protected $fillable = [
      'category', 'issue_type','priority','notes','images','employee_notes','employee_images','status','station_id','supervisor','deadline','report_num','fmr_manager','fmr_employee','date','transport'
    ];
}
