<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Territory extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'province_id',
        'territory_type_id',
        'name',
        'description'
    ];
    
    /**
     * Get the province that this territory belongs to.
     *
     * @return BelongsTo
     */
    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    /**
     * Get the type of this territory.
     *
     * @return BelongsTo
     */
    public function territoryType(): BelongsTo
    {
        return $this->belongsTo(TerritoryType::class);
    }

    /**
     * Get the communes for the territory.
     *
     * @return HasMany
     */
    public function communes(): HasMany
    {
        return $this->hasMany(Commune::class);
    }
}
