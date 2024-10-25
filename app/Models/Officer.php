<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Officer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'rank',
        'badge_number',
        'commandement'
    ];
   
    /**
     * Get the officers for the arrest.
     *
     * @return HasMany
     */
    public function officers(): HasMany
    {
        return $this->hasMany(ArrestOfficer::class);
    } 
}
