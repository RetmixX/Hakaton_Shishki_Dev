<?php

namespace Domain\Shared\Models\Actor;

use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\MorphOne;


/**
 * @property int $id
 * @property int $rang_id
 * @property int $division_id
 * @property int $hr_id
 * @property int $mentor_id
 * @property int $avatar_id
 */
class Employee extends BaseModel
{
    protected $table = 'employees';

    public function userable():MorphOne{
        return $this->morphOne(User::class, 'userable');
    }
    protected $fillable = [
        'rang_id',
        'division_id',
        'hr_id',
        'mentor_id',
        'avatar_id',
    ];
}
