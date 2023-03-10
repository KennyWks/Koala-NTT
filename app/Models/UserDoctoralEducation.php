<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDoctoralEducation extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'user_doctoral_educations'; 

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama', 'LIKE', $search);
        });
    }
}
