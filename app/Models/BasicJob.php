<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicJob extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'basic_jobs';
    protected $casts = [
        'skills' => 'array'
    ];
}
