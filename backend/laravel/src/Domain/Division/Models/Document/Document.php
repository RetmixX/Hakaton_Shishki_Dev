<?php

namespace Domain\Division\Models\Document;

use Domain\Division\Models\Division\Division;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


/**
 * @property string $title
 * @property string $data,
 * @property int division_id
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
        'division_id'
    ];
}
