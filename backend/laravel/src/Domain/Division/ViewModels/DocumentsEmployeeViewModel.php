<?php

namespace Domain\Division\ViewModels;

use Domain\Division\DTO\DocumentData;
use Domain\Division\Models\Document\Document;
use Domain\Division\Repository\DocumentRepository;
use Domain\Shared\Models\Actor\Employee;
use Illuminate\Support\Collection;

class DocumentsEmployeeViewModel extends \Domain\Shared\ViewModels\ViewModel
{
    public function __construct(public readonly Employee $employee)
    {
    }

    public function divisionDocuments(): Collection{
        $divisionDocuments = collect();

        DocumentRepository::getDocumentDivisionEmployee($this->employee)
            ->each(fn(Document $document)=>$divisionDocuments->push(DocumentData::from($document)));

        return $divisionDocuments;
    }

    public function allDocuments(): Collection
    {
        $documents = collect();

        DocumentRepository::allDocumentOtherDivision($this->employee)
            ->each(fn(Document $document)=>$documents
                ->push(DocumentData::from($document)->include('division')));

        return $documents;
    }
}
