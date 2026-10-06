<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'title', 'company', 'start_date', 
        'end_date', 'description', 'order'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}