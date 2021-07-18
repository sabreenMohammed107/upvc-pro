<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs_tag extends Model
{
    //main settings
    protected $table = 'blogs_tags';
    protected $primaryKey="id";
    protected $fillable = [
        'blog_id',
        'tag',
    ];

    protected $guarded = ['id'];

    public function Blog()
    {
        return $this->belongsTo(Blog::class,'blog_id');

    }
}
