<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArrestOfficer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'arrest_id',
        'officer_id'
    ];


    /**
     * Get the arrest id that this case file belongs to.
     *
     * @return BelongsTo
     */
    public function arrest(): BelongsTo
    {
        return $this->belongsTo(Arrest::class);
    }

    /**
     * Get the officer id that this case file belongs to.
     *
     * @return BelongsTo
     */
    public function officer(): BelongsTo
    {
        return $this->belongsTo(Officer::class);
    }
}
