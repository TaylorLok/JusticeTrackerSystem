<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commune extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'territory_id',
        'name',
        'description'
    ];

    /**
     * Get the territory that this commune belongs to.
     *
     * @return BelongsTo
     */
    public function territory(): BelongsTo
    {
        return $this->belongsTo(Territory::class);
    }

    /**
     * Get the quartiers for the commune.
     *
     * @return HasMany
     */
    public function quartiers(): HasMany
    {
        return $this->hasMany(Quartier::class);
    }

    /**
     * Get the arrests happened for this commune.
     *
     * @return HasMany
     */
    public function arrests(): HasMany
    {
        return $this->hasMany(Arrest::class);
    } 
}
