<?php

namespace Domain\Shared\Models\Actor;

use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;


/**
 * @property int $id
 * @property User userable
 */
class HR extends BaseModel
{
    protected $table = 'hrs';

    public function userable():MorphOne{
        return $this->morphOne(User::class, 'userable');
    }

    public function employees():HasMany{
        return $this->hasMany(Employee::class, 'hr_id');
    }
}
