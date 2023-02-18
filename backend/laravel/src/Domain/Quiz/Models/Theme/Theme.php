<?php

namespace Domain\Quiz\Models\Theme;

use Domain\Shared\Models\BaseModel;


/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $numberOrder
 */
class Theme extends BaseModel
{
    protected $table = 'themes';

    protected $fillable = [
        'title',
        'description',
        'numberOrder'
    ];
}
