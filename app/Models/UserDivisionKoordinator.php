<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDivision extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'user_division_koodinators'; 

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('divisi_koordinator', 'LIKE', $search);
        });
    }
}
