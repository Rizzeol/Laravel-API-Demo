<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentTextRequest;
use App\Http\Resources\StudentTextResource;
use App\StudentText;
use Illuminate\Http\Request;

class StudentTextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return StudentTextResource::collection(StudentText::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentTextRequest $request)
    {
        if ($studentText = StudentText::create($request->validated())){
            return response()->json(new StudentTextResource($studentText),201);
        }
        return response()->json(null, 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentText  $studentText
     * @return \Illuminate\Http\Response
     */
    public function show(StudentText $studentText)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentText  $studentText
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentText $studentText)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentText  $studentText
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentText $studentText)
    {
        //
    }
}
