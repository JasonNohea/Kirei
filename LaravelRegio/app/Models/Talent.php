<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Talent extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'birth_date',
        'gender',
        'cv',
        'portofolio',
        'certificate',
        'status',
        'expectation_work_type',
        'available_work_hours_min',
        'available_work_hours_max',
        'skills',
        'preferences',
        'link_ig',
        'link_fb',
        'link_linkedin',
        'link_twitter',
        'profile_photo',
    ];
    
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
