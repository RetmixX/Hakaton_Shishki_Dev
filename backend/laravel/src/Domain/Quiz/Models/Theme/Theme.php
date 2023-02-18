<?php

namespace Domain\Quiz\Models\Theme;

use Domain\Quiz\Models\Question\Question;
use Domain\Shared\Models\Actor\Employee;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;


/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $numberOrder
 */
class Theme extends BaseModel
{
    protected $table = 'themes';

    public function employees():HasMany{
        return $this->hasMany(Employee::class, 'last_theme_id');
    }

    public function questions():HasMany{
        return $this->hasMany(Question::class, 'theme_id');
    }

    protected $fillable = [
        'title',
        'description',
        'numberOrder'
    ];
}
