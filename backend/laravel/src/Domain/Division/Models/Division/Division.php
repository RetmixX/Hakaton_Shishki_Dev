<?php

namespace Domain\Division\Models\Division;

use Domain\Division\Models\Document\Document;
use Domain\Shared\Models\Actor\Employee;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;


/**
 * @property int $id
 * @property string $name
 * @property int $supervisor_id
 */
class Division extends BaseModel
{
    protected $table = 'divisions';

    public function employees(){
        return $this->hasMany(Employee::class, 'division_id');
    }

    public function documents():HasMany{
        return $this->hasMany(Document::class, 'division_id');
    }

    protected $fillable = [
        'name',
        'supervisor_id',
    ];
}
