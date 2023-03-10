<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMasterEducation extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'user_master_educations'; 
}
