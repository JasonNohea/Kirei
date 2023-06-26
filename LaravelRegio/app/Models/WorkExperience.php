<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_position',
        'company_name',
        'job_type',
        'work_time'
    ];
    
    public function talent(): BelongsTo {
        return $this->belongsTo(Talent::class);
    }
}
