<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TerritoryType extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * Get the territories associated with this territory type.
     *
     * @return HasMany
     */
    public function territories(): HasMany
    {
        return $this->hasMany(Territory::class);
    }
}
