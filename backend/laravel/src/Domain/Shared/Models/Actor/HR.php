<?php

namespace Domain\Shared\Models\Actor;

use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\MorphOne;


/**
 * @property int $id
 */
class HR extends BaseModel
{
    protected $table = 'hrs';

    public function userable():MorphOne{
        return $this->morphOne(User::class, 'userable');
    }
}
