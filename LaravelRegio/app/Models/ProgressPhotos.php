<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProgressPhotos extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo_url',
        'talent_id',
        'project_progress_id',
    ];
    
    public function talent(): BelongsTo {
        return $this->belongsTo(Talent::class);
    }
    
    public function projectProgress(): BelongsTo {
        return $this->belongsTo(ProjectProgress::class);
    }
}
