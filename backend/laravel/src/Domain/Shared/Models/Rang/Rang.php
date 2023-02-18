<?php

namespace Domain\Shared\Models\Rang;

use Domain\Shared\Models\BaseModel;


/**
 * @property int $id
 * @property string $name
 */
class Rang extends BaseModel
{
    protected $table = 'ranges';

    protected $fillable = [
        'name',
    ];
}
