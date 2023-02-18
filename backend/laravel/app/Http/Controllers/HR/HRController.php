<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Domain\Shared\Models\Actor\HR;
use Domain\Shared\ViewModels\HRProfileViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): HRProfileViewModel
    {
        $this->authorize('viewAny', HR::class);
        return new HRProfileViewModel($request->user()->userable);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
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
