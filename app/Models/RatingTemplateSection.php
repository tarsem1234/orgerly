<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class RatingTemplateSection extends Model
{
    use SoftDeletes;
    public function session(): BelongsTo
    {
        return $this->belongsTo(\App\Models\RatingTemplate::class);
    }
}
