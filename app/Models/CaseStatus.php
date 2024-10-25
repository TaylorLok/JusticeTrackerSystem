<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CaseStatus extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
    ];


    /**
     * Get the case files for the status.
     *
     * @return HasMany
     */
    public function caseFiles(): HasMany
    {
        return $this->hasMany(CaseFile::class);
    } 
}
