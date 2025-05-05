<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $fillable = [
        'tittle',
        'slug'
    ];

    public function News()
    {
        return $this->hasMany(News::class);
    }
}
