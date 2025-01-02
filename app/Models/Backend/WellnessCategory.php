<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class WellnessCategory extends Model
{
    use SoftDeletes;
    public function sessions(): HasMany
    {
        return $this->hasMany(\App\Models\Backend\WellnessCategorySession::class);
    }
    
}
