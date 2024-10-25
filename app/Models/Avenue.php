<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Avenue extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'quartier_id',
        'name',
        'description'
    ];

    /**
     * Get the quartier that the avenue belongs to.
     *
     * @return BelongsTo
     */
    public function quartier(): BelongsTo
    {
        return $this->belongsTo(Quartier::class);
    }
}
