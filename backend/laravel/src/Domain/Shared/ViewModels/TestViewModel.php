<?php

namespace Domain\Shared\ViewModels;

use Domain\Shared\DTO\Test\TestData;
use Illuminate\Http\Request;

class TestViewModel extends ViewModel
{
    public function __construct(public readonly TestData $data)
    {
    }

    public function test():TestData{
        return $this->data; /*TestData::from($this->request)*/
    }
}
