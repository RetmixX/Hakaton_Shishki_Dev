<?php

namespace Domain\Division\Repository;

use Domain\Division\Models\Division\Division;
use Domain\Division\Models\Document\Document;
use Domain\Shared\Models\Actor\Employee;
use Domain\Shared\Models\Actor\Supervisor;
use Illuminate\Database\Eloquent\Collection;

class DocumentRepository
{
    public static function getAll(): Collection
    {
        return Document::all();
    }

    public static function getDocumentDivisionEmployee(Employee $employee): Collection
    {
        return $employee->division->documents;
    }

    public static function allDocumentOtherDivision(Employee $employee): Collection
    {
        return Document::all()->whereNotIn('division_id', [$employee->division_id])->where('open', true);
    }

    public static function getDocumentDivisionsSupervisor(Supervisor $supervisor): \Illuminate\Support\Collection
    {
        $documentsSupervisor = collect();

        $supervisor->divisions->each(fn(Division $division)=>
        $documentsSupervisor->push($division->documents));

        return $documentsSupervisor;
    }

    public static function getOtherDivisionDocumentsSupervisor(Supervisor $supervisor): Collection
    {
        return Document::all()->whereNotIn('division_id', $supervisor->divisions->pluck('id')->all())
            ->where('open', true);
    }
}
