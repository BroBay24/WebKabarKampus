<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'author_id',
        'news_category_id',
        'title',
        'slug',
        'thumbnail',
        'content',
        'is_featured'

    ];

     
    public function Author()
    {
        return $this->belongsTo(author::class);
    }
 
    public function newsCategory()
    {
        return $this->belongsTo(newsCategory::class);
    }
    
    public function Banner()
    {
        return $this->hasOne(Banner::class);
    }

}
