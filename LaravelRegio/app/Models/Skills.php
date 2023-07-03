<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Skills extends Model
{
    use HasFactory;
    protected $fillable = [
        'skill_name',
    ];
    
    public function talentSkills(): HasMany {
        return $this->hasMany(TalentSkill::class);
    }
    public function projectSkills(): HasMany {
        return $this->hasMany(Project_Skills::class);
    }
}
