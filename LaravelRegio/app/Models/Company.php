<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'address',
        'city',
        'province',
        'number_of_employee',
        'profile_photo',
    ];
    
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
