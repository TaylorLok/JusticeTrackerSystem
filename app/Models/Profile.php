<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
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
     * Get the user that owns the profile.
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the identity type for the profile.
     *
     * @return BelongsTo
     */
    public function identityType(): BelongsTo
    {
        return $this->belongsTo(IdentityType::class);
    }

    /**
     * Get the commune that the profile belongs to.
     *
     * @return BelongsTo
     */
    public function commune(): BelongsTo
    {
        return $this->belongsTo(Commune::class);
    }
}
