<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class WellnessCategorySession extends Model
{
    use SoftDeletes;
    public function category(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Backend\WellnessCategory::class);
    }
     public function questions(): HasMany
    {
        return $this->hasMany(\App\Models\Backend\WellnessCategorySessionQuestion::class);
    }
}
