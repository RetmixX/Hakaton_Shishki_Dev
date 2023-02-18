<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Domain\Shared\Actions\Employee\CreateEmployeeAction;
use Domain\Shared\DTO\Employee\EmployeeDataCreate;
use Domain\Shared\Models\Actor\Employee;
use Domain\Shared\ViewModels\Employee\EmployeeCreateViewModel;
use Domain\Shared\ViewModels\Employee\EmployeeShowProfileViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny', Employee::class);

        return new EmployeeShowProfileViewModel($request->user()->userable);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeDataCreate $data, Request $request)
    {
        $this->authorize('create', Employee::class);
        CreateEmployeeAction::execute($data, $request);
        return \response(new EmployeeCreateViewModel(), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
