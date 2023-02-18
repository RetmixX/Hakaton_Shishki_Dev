<?php

namespace Domain\Shared\Models\Actor;

use Domain\Shared\Models\BaseModel;
use Domain\Shared\Models\Rang\Rang;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;


/**
 * @property int $id
 * @property int $rang_id
 */
class Supervisor extends BaseModel
{
    protected $table = 'supervisors';

    public function userable():MorphOne{
        return $this->morphOne(User::class, 'userable');
    }

    public function rang():BelongsTo{
        return $this->belongsTo(Rang::class);
    }

    protected $fillable = [
        'rang_id'
    ];
}
