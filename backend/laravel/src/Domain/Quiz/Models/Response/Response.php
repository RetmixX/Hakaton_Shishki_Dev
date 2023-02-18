<?php

namespace Domain\Quiz\Models\Response;

use Domain\Quiz\Models\Question\Question;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


/**
 * @property int $id
 * @property string $response
 * @property bool $status_response
 * @property int $question_id
 */
class Response extends BaseModel
{
    protected $table = 'responses';

    public function question():BelongsTo{
        return $this->belongsTo(Question::class);
    }

    protected $fillable = [
      'response',
      'status_response',
      'question_id',
    ];
}
