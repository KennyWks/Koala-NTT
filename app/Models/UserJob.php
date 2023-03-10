<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserJob extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'user_jobs'; 

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('pekerjaan', 'LIKE', $search);
        });
    }
}
