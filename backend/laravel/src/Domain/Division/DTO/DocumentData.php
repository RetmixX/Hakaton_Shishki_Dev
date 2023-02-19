<?php

namespace Domain\Division\DTO;

use Domain\Division\Models\Document\Document;
use Spatie\LaravelData\Lazy;

class DocumentData extends \Spatie\LaravelData\Data
{
    public function __construct(
        public readonly int $id,
        public readonly string $title,
        public readonly string $data,
        public readonly string $reference,
        public readonly null|Lazy|string $division
    )
    {
    }

    public static function fromModel(Document $document){
        return self::from([
            'id'=>$document->id,
            'title' => $document->title,
            'data' => $document->data,
            'reference' => $document->reference,
            'division' => Lazy::create(fn()=>!empty($document->division) ? $document->division->name : 'Не определен')
        ]);
    }

}
