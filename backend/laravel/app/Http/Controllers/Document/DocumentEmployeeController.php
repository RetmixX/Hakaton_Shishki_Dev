<?php

namespace App\Http\Controllers\Document;

use App\Http\Controllers\Controller;
use Domain\Division\Models\Document\Document;
use Domain\Division\ViewModels\DocumentsEmployeeViewModel;
use Illuminate\Http\Request;

class DocumentEmployeeController extends Controller
{
    public function __invoke(Request $request):DocumentsEmployeeViewModel
    {
        $this->authorize('viewEmployee', Document::class);

        return new DocumentsEmployeeViewModel($request->user()->userable);
    }


}
