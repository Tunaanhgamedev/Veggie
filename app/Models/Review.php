<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['user_id', 'product_id', 'rating', 'comment'];

    public function product()
    {
        return $this->belongsTo(Product::class); // thuộc về 1 sản phẩm nào đó
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}