<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class TalentSkill extends Model
{
    use HasFactory;
    protected $fillable = [
        'talent_id',
        'skill_id',
    ];
    public function talent(): BelongsTo {
        return $this->belongsTo(Talent::class);
    }
    public function skills(): BelongsTo {
        return $this->belongsTo(Skills::class);
    }
}
