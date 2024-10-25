<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SentenceType extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
    ];


    /**
     * Get the sentences for the sentence type.
     *
     * @return HasMany
     */
    public function sentences(): HasMany
    {
        return $this->hasMany(Sentence::class);
    }
}
