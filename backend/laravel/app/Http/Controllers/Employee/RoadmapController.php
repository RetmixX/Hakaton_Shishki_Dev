<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Domain\Quiz\ViewModel\ThemeEmployeeViewModel;
use Illuminate\Http\Request;

class RoadmapController extends Controller
{
    public function __invoke(Request $request):ThemeEmployeeViewModel
    {
        return new ThemeEmployeeViewModel($request->user()->userable);
    }

}
