<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CrimeType extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
    ];

    /**
     * Get the arrests for this crime type.
     *
     * @return HasMany
     */
    public function arrests(): HasMany
    {
        return $this->hasMany(Arrest::class);
    } 
}
