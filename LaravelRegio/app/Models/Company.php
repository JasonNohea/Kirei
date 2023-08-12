<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'city_id',
        'province_id',
        'company_name',
        'address',
        'position',
        'city',
        'province',
        'number_of_employee',
        'profile_photo',
    ];
    
    //Relationship
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function project(): HasMany {
        return $this->hasMany(Projects::class);
    }
    public function cities(): BelongsTo {
        return $this->belongsTo(City::class);
    }

}
