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
    
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function project(): HasMany {
        return $this->hasMany(Projects::class);
    }
    public function cities(): BelongsTo {
        return $this->belongsTo(City::class);
    }

/*
    // Accessor to get the full URL of the profile photo
    public function getProfilePhotoUrlAttribute()
    {
        return $this->profile_photo
            ? Storage::url($this->profile_photo)
            : null;
    }

    // Mutator to save the file to storage and store its path
    public function setProfilePhotoAttribute($value)
    {
        if ($value) {
            $path = $value->store('public/company_pfp'); // Update the path to 'public/company_pfp'
            $this->attributes['profile_photo'] = $path;
        }
    } 
    
    public static function createWithProfilePhoto(array $attributes)
        {
            if (isset($attributes['profile_photo']) && $attributes['profile_photo'] instanceof \Illuminate\Http\UploadedFile) {
                $path = $attributes['profile_photo']->store('public/company_pfp');
                $attributes['profile_photo'] = $path;
            }
            return static::create($attributes);
        }
*/
}
