<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Arrest extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'person_id',
        'crime_type_id',
        'commune_id',
        'arrest_date',
        'number_of_officers'
    ];

    /**
     * Get the person that getting arrested.
     *
     * @return BelongsTo
     */
    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    /**
     * Get the type of crime that commited to be arrested for.
     *
     * @return BelongsTo
     */
    public function crimeType(): BelongsTo
    {
        return $this->belongsTo(CrimeType::class);
    }

    /**
     * Get the commune where the crime was commited for arrest.
     *
     * @return BelongsTo
     */
    public function commune(): BelongsTo
    {
        return $this->belongsTo(Commune::class);
    }

    /**
     * Get the case files for the arrest.
     *
     * @return HasMany
     */
    public function caseFiles(): HasMany
    {
        return $this->hasMany(CaseFile::class);
    } 

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
