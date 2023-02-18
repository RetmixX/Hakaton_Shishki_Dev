<?php

namespace Domain\Shared\Models\Avatar;


use Domain\Shared\Models\BaseModel;

/**
 * @property int $id
 * @property int $requireLevel
 * @property string $file
 */
class Avatar extends BaseModel
{
    protected $table = 'avatars';

    protected $fillable = [
        'requireLevel',
        'file',
    ];
}
