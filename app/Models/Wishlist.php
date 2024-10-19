<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'wishlists';

    // Specify the fillable fields for mass assignment
    protected $fillable = [
        'ip_address', // Store the user's IP address
        'product_id', // ID of the product added to the wishlist
        'created_at', // Timestamp for when the item was added
        'updated_at'  // Timestamp for when the item was last updated
    ];

    // Define the relationship with the Product model if needed
    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
