<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsAndEvents extends Model
{
    use HasFactory;
    public $table = 'news_and_events';

    protected $fillable = [
        'date_time',
        'title',
        'description',
        'file_path',
    ];

    protected $casts = [
        'date_time' => 'datetime',
    ];
}
