<?php

namespace Domain\Division\Models\Document;

use Domain\Division\Models\Division\Division;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


/**
 * @property int $id
 * @property string $title
 * @property string $data
 * @property int division_id
 * @property string $reference
 * @property bool $open
 * @property Division division
 */
class Document extends BaseModel
{
    protected $table = 'documents';

    public function division():BelongsTo{
        return $this->belongsTo(Division::class);
    }

    protected $fillable = [
        'title',
        'data',
        'division_id',
        'reference',
        'open'
    ];
}
