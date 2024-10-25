<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CaseFile extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'arrest_id',
        'case_status_id',
        'opened_date',
        'closed_date',
        'remark'
    ];


    /**
     * Get the arrest that this case file belongs to.
     *
     * @return BelongsTo
     */
    public function arrest(): BelongsTo
    {
        return $this->belongsTo(Arrest::class);
    }

    /**
     * Get the status that this case file belongs to.
     *
     * @return BelongsTo
     */
    public function caseStatus(): BelongsTo
    {
        return $this->belongsTo(CaseStatus::class);
    }

    /**
     * Get the sentences for the territory.
     *
     * @return HasMany
     */
    public function sentences(): HasMany
    {
        return $this->hasMany(Sentence::class);
    }
}
