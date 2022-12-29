<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function scopeSearch($query, $search)
    {
        $query->when($search ?? false, function($query, $search){
            return $query->where('name', 'like', "%$search%");
        });
    }
}
