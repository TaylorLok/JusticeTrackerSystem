<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sentence extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'case_file_id',
        'sentence_type_id',
        'sentence_length',
        'fine'
    ];

    /**
     * Get the case file that this quartier belongs to.
     *
     * @return BelongsTo
     */
    public function caseFile(): BelongsTo
    {
        return $this->belongsTo(CaseFile::class);
    }

    /**
     * Get the sentence type that this quartier belongs to.
     *
     * @return BelongsTo
     */
    public function sentenceType(): BelongsTo
    {
        return $this->belongsTo(SentenceType::class);
    }
}
