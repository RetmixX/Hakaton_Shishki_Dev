<?php

namespace Domain\Shared\Models\Actor;

use Domain\Division\Models\Division\Division;
use Domain\Quiz\Models\Theme\Theme;
use Domain\Shared\Models\Avatar\Avatar;
use Domain\Shared\Models\BaseModel;
use Domain\Shared\Models\Rang\Rang;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;


/**
 * @property int $id
 * @property int $rang_id
 * @property int $division_id
 * @property int $hr_id
 * @property int $mentor_id
 * @property int $avatar_id
 * @property int $last_theme_id
 * @property int $lvl
 * @property int $exp
 * @property User userable
 * @property Division division
 * @property Rang rang
 * @property Theme theme
 */
class Employee extends BaseModel
{
    protected $table = 'employees';

    public function userable():MorphOne{
        return $this->morphOne(User::class, 'userable');
    }

    public function rang():BelongsTo{
        return $this->belongsTo(Rang::class);
    }

    public function hr():BelongsTo{
        return $this->belongsTo(HR::class);
    }

    public function avatar():BelongsTo{
        return $this->belongsTo(Avatar::class);
    }

    public function mentor():BelongsTo{
        return $this->belongsTo(Mentor::class);
    }

    public function theme():BelongsTo{
        return $this->belongsTo(Theme::class, 'last_theme_id');
    }

    public function division():BelongsTo{
        return $this->belongsTo(Division::class);
    }

    protected $fillable = [
        'rang_id',
        'division_id',
        'hr_id',
        'mentor_id',
        'avatar_id',
        'last_theme_id',
        'lvl',
        'exp',
    ];
}
