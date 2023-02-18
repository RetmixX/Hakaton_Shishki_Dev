<?php

namespace Domain\Shared\Models\Rang;

use Domain\Shared\Models\Actor\Employee;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;


/**
 * @property int $id
 * @property string $name
 */
class Rang extends BaseModel
{
    protected $table = 'ranges';

    public function employees():HasMany{
        $this->hasMany(Employee::class, 'rang_id');
    }

    protected $fillable = [
        'name',
    ];
}
