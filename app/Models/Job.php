<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'skills' => 'array',
    ];


    public function institutions()
    {
        return $this->belongsToMany(Institution::class, 'inst_jobs', 'job_id', 'inst_id');
    }
}
