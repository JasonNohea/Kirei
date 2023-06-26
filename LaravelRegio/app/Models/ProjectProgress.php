<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectProgress extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'date',
        'deadline',
        'project_id',
    ];
    
    //Relationship
    //PProgress belongsTo Project
    public function projects(): BelongsTo {
        return $this->belongsTo(Project::class);
    }

    //PProgress HasMany Project
    public function workExperience(): HasMany {
        return $this->HasMany(WorkExperience::class);
    }
    //Talent HasMany Project Application
    public function projectApplication(): HasMany {
        return $this->HasMany(ProjectApplication::class);
    }

}
