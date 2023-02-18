<?php

namespace Domain\Quiz\Models\Question;

use Domain\Quiz\Models\Response\Response;
use Domain\Quiz\Models\Theme\Theme;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $text
 * @property int $theme_id
 */
class Question extends BaseModel
{
    protected $table = 'questions';

    public function theme():BelongsTo{
        return $this->belongsTo(Theme::class);
    }

    public function responses():HasMany{
        return $this->hasMany(Response::class, 'question_id');
    }

    protected $fillable = [
        'text',
        'theme_id'
    ];
}
