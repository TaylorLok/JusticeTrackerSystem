<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IdentityType extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description'
    ];

    /**
     * Get the peoples associated with this identity type.
     *
     * @return HasMany
     */
    public function persons(): HasMany
    {
        return $this->hasMany(Person::class);
    }

    /**
     * Get the profiles associated with this identity type.
     *
     * @return HasMany
     */
    public function profiles(): HasMany
    {
        return $this->hasMany(Profile::class);
    }
}
