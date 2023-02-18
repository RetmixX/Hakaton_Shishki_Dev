<?php

namespace Domain\Shared\Models\Avatar;


use Domain\Shared\Models\Actor\Employee;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property int $requireLevel
 * @property string $file
 */
class Avatar extends BaseModel
{
    protected $table = 'avatars';

    public function employees():HasMany{
        return $this->hasMany(Employee::class, 'avatar_id');
    }

    protected $fillable = [
        'requireLevel',
        'file',
    ];
}
