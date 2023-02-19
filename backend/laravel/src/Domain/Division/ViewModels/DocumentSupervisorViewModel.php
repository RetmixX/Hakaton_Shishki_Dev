<?php

namespace Domain\Division\ViewModels;

use Domain\Division\DTO\DocumentData;
use Domain\Division\Models\Document\Document;
use Domain\Division\Repository\DocumentRepository;
use Domain\Shared\Models\Actor\Supervisor;
use Domain\Shared\ViewModels\ViewModel;
use Illuminate\Support\Collection;

class DocumentSupervisorViewModel extends ViewModel
{
    public function __construct(public readonly Supervisor $supervisor)
    {
    }

    public function documentsDivisions(): Collection
    {
        $documents = collect();
        DocumentRepository::getDocumentDivisionsSupervisor($this->supervisor)
            ->each(fn(Collection $documentCollection)=>$documentCollection
                ->each(fn(Document $document)=>$documents->push(DocumentData::from($document)
                    ->include('division'))));

        return $documents;
    }

    public function allDocuments(): Collection
    {
        $documents = collect();

        DocumentRepository::getOtherDivisionDocumentsSupervisor($this->supervisor)
            ->each(fn(Document $document)=>$documents->push(DocumentData::from($document)
                ->include('division')));

        return $documents;
    }

}
