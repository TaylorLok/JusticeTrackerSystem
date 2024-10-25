<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Person extends Model
{
    use SoftDeletes;

    protected $table = 'peoples';
    
    protected $fillable = [
        'identity_type_id',
        'commune_id',
        'firstname',
        'surname',
        'dob',
        'address',
        'gender',
        'id_number',
        'cellphone',
        'nationality',
        'profession',
        'alt_cellphone',
        'alt_email'
    ];

    /**
     * Get the identity type for the person.
     *
     * @return BelongsTo
     */
    public function identityType(): BelongsTo
    {
        return $this->belongsTo(IdentityType::class);
    }

    /**
     * Get the commune that the person belongs to.
     *
     * @return BelongsTo
     */
    public function commune(): BelongsTo
    {
        return $this->belongsTo(Commune::class);
    }

    /**
     * Get the arrests for this person.
     *
     * @return HasMany
     */
    public function arrests(): HasMany
    {
        return $this->hasMany(Arrest::class);
    } 
}
