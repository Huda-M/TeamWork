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
        $programmers = Programmer::with('user')->get();
        return response()->json([
            'status' => 'success',
            'message' => 'Programmer list fetched successfully',
            'data' => $programmers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgrammerRequest $request)
    {
        $validated = $request->validated();
        $programmer = Programmer::create([$validated]);
        return response()->json([
            'status' => 'success',
            'message' => 'Programmer created successfully',
            'data' => $programmer
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Programmer $programmer)
    {
        $programmer = Programmer::with('user')->find($programmer->id);
        if(!$programmer){
            return response()->json([
                'status' => 'error',
                'message' => 'Programmer not found',
            ]);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Programmer fetched successfully',
            'data' => $programmer
        ]);
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
