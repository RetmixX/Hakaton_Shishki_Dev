<?php

namespace Domain\Division\Models\Division;

use Domain\Division\Models\Document\Document;
use Domain\Shared\Models\Actor\Employee;
use Domain\Shared\Models\Actor\Supervisor;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


/**
 * @property int $id
 * @property string $name
 * @property int $supervisor_id
 * @property Collection documents
 */
class Division extends BaseModel
{
    protected $table = 'divisions';

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'division_id');
    }

    public function supervisor():BelongsTo{
        return $this->belongsTo(Supervisor::class);
    }

    public function documents():HasMany{
        return $this->hasMany(Document::class, 'division_id');
    }

    protected $fillable = [
        'name',
        'supervisor_id',
    ];
}
