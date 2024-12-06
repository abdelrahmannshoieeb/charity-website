<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'skils' => 'array',
        'gallary' => 'array',
    ];

    public function jobs()
    {
        return $this->belongsToMany(Job::class, 'inst_jobs', 'inst_id', 'job_id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
  
}
