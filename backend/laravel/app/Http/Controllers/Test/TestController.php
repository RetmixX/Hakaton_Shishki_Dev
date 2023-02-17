<?php

namespace App\Http\Controllers\Test;

use Domain\Shared\DTO\Test\TestData;
use Domain\Shared\ViewModels\TestViewModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TestController extends Controller
{
    public function __invoke(TestData $data, Request $request): TestViewModel
    {
        return new TestViewModel($data);
    }

}
