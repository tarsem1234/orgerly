<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class RatingTemplate extends Model
{
    use SoftDeletes;

    public function template_option(): HasMany
    {
        return $this->hasMany(\App\Models\RatingTemplateSection::class);
    }
}
