<?php

namespace App\Http\Controllers\Document;

use App\Http\Controllers\Controller;
use Domain\Division\Models\Document\Document;
use Domain\Division\ViewModels\DocumentSupervisorViewModel;
use Illuminate\Http\Request;

class DocumentSupervisorController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->authorize('viewSupervisor', Document::class);
        return new DocumentSupervisorViewModel($request->user()->userable);
    }

}
