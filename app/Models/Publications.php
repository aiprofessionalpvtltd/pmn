<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publications extends Model
{
    use HasFactory;
    public $table = 'publications';

    protected $fillable = [
        'date_time',
        'title',
        'author',
        'file_path',
    ];

    protected $casts = [
        'date_time' => 'datetime',
    ];
}
