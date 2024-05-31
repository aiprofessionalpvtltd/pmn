<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    use HasFactory;
    public $table = 'careers';

    protected $fillable = [
        'job_title',
        'closing_date',
        'description',
        'file_path',
    ];

    protected $casts = [
        'closing_date' => 'date',
    ];

    public function getClosingDateAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }
}
