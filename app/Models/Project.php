<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description', 'image', 
        'live_url', 'github_url', 'technologies', 
        'featured', 'order'
    ];

    protected $casts = [
        'technologies' => 'array',
        'featured' => 'boolean',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}