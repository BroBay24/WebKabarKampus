<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'username',
        'avatar',
        'bio'

    ];

    public function News()
    {
        return $this->hasMany(News::class);
    }

    
}
