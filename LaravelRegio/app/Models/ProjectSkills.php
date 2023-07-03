<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProjectSkills extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'skill_id',
    ];

    public function project(): BelongsTo {
        return $this->belongsTo(Projects::class);
    }
    public function skills(): BelongsTo {
        return $this->belongsTo(Skills::class);
    }
}
