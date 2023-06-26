<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
//use Illuminate\Database\Eloquent\Relations\HasMany;

class PhotoProject extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'photo_url'
    ];
    
    public function projects(): BelongsTo {
        return $this->belongsTo(Projects::class);
    }

}
