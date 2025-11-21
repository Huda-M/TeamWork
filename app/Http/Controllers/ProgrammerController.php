<?php

namespace App\Http\Controllers;

use App\Models\Programmer;
use App\Http\Requests\StoreProgrammerRequest;
use App\Http\Requests\UpdateProgrammerRequest;

class ProgrammerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreProgrammerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Programmer $programmer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Programmer $programmer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgrammerRequest $request, Programmer $programmer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Programmer $programmer)
    {
        //
    }
}
