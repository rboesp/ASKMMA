<?php

namespace App\Http\Controllers;

use App\Http\Resources\CareerResource;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $careers = Career::all();

        return CareerResource::collection($careers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return CareerResource
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'location' => 'required|string',
            'department' => 'nullable|string',
            'extra' => 'nullable|string',
            'requirements' => 'nullable|string',
            'responsibilities' => 'required|string',
            'core_competencies' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $career = new Career($data);
        $career->save();

        return new CareerResource($career);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return CareerResource
     */
    public function update(Request $request, $id)
    {
        $career = Career::find($id);
        $career->update($request->all());

        return new CareerResource($career);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career = Career::find($id);
        $career->delete();
    }
}
