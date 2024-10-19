<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    public function scopeActive($query)
    {
        return $query->where('status', 1); // assuming '1' means active
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
