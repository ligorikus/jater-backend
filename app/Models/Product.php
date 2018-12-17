<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use SoftDeletes, Searchable;

    protected $fillable = [
        'title', 'description', 'price', ''
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
