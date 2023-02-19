<?php

namespace App\Http\Controllers\Document;

use App\Http\Controllers\Controller;
use Domain\Division\Models\Document\Document;
use Domain\Division\ViewModels\DocumentsEmployeeViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): Response
    {

    }

    public function indexEmployee(Request $request){
        $this->authorize('viewEmployee', Document::class);
        return new DocumentsEmployeeViewModel($request->user()->userable);
    }

    public function indexSupervisor(Request $request){
        $this->authorize('viewSupervisor', Document::class);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
