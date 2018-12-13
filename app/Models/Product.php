<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'description', 'price', ''
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
