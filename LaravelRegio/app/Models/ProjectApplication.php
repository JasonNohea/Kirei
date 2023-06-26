<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProjectApplication extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'talent_id'
    ];
    
    public function projects(): BelongsTo {
        return $this->belongsTo(Projects::class);
    }
    public function talent(): BelongsTo {
        return $this->belongsTo(Talents::class);
    }
}
