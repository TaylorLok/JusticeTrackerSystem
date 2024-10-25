<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quartier extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'commune_id',
        'name',
        'description'
    ];

    /**
     * Get the commune that this quartier belongs to.
     *
     * @return BelongsTo
     */
    public function commune(): BelongsTo
    {
        return $this->belongsTo(Commune::class);
    }
}
