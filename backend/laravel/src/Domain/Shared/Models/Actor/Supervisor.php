<?php

namespace Domain\Shared\Models\Actor;

use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;


/**
 * @property int $id
 */
class Supervisor extends BaseModel
{
    protected $table = 'supervisors';

    public function userable():MorphOne{
        return $this->morphOne(User::class, 'userable');
    }
}
