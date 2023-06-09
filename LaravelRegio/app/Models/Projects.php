<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'required_job_position',
        'talent_requirement',
        'project_description',
        'project_location',
        'project_start_date',
        'project_end_date',
        'deadline',
        'salary_min',
        'salary_max',
        'status',
        'talent_needed_min',
        'talent_needed_max',
    ];
    
    public function company(): BelongsTo {
        return $this->belongsTo(Company::class);
    }
    public function photoProject(): HasMany {
        return $this->hasMany(PhotoProject::class);
    }
    public function projectApplication(): HasMany {
        return $this->hasMany(ProjectApplication::class);
    }
    public function projectProgress(): HasOne {
        return $this->hasOne(ProjectProgress::class);
    }
    public function projectSkills(): HasMany {
        return $this->hasMany(ProjectSkills::class);
    }
    public function cities(): BelongsTo {
        return $this->belongsTo(City::class);
    }
}
