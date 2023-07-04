<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'province_name',
    ];

    public function talents(): HasMany {
        return $this->hasMany(Talent::class);
    }
    public function companies(): HasMany {
        return $this->hasMany(Company::class);
    }
    public function projects(): HasMany {
        return $this->hasMany(Projects::class);
    }
}
