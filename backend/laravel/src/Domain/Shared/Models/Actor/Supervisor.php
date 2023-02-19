<?php

namespace Domain\Shared\Models\Actor;

use Domain\Division\Models\Division\Division;
use Domain\Shared\Models\BaseModel;
use Domain\Shared\Models\Rang\Rang;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;


/**
 * @property int $id
 * @property int $rang_id
 * @property Collection divisions
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

    public function divisions():HasMany{
        return $this->hasMany(Division::class, 'supervisor_id');
    }

    protected $fillable = [
        'rang_id'
    ];
}
