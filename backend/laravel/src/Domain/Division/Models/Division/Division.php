<?php

namespace Domain\Division\Models\Division;

use Domain\Shared\Models\BaseModel;


/**
 * @property int $id
 * @property string $name
 * @property int $supervisor_id
 */
class Division extends BaseModel
{
    protected $table = 'divisions';

    protected $fillable = [
        'name',
        'supervisor_id',
    ];
}
