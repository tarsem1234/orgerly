<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class RatingTemplateSection extends Model
{
    use SoftDeletes;

    public function session(): BelongsTo
    {
        return $this->belongsTo(\App\Models\RatingTemplate::class);
    }
}
