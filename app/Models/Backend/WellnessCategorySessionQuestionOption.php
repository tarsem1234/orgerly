<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WellnessCategorySessionQuestionOption extends Model
{
    public function sessionQuestion(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Backend\WellnessCategorySessionQuestion::class);
    }
}
