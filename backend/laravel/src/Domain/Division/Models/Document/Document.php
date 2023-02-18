<?php

namespace Domain\Division\Models\Document;

use Domain\Shared\Models\BaseModel;


/**
 * @property string $title
 * @property string $data,
 * @property int division_id
 */
class Document extends BaseModel
{
    protected $table = 'documents';

    protected $fillable = [
        'title',
        'data',
        'division_id'
    ];
}
