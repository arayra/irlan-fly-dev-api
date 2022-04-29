<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['path', 'title', 'description', 'content', 'tags'];
    protected $casts = ['tags' => 'array'];
}
