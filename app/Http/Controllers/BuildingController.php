<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Compound;
use Illuminate\Http\Request;
use App\Http\Requests\Building\CreateBuildingRequest;
use App\Http\Requests\Building\UpdateBuildingRequest;
use App\Http\Requests\Compound\CreateCompoundRequest;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildings = Building::with('compound')->paginate(20);
        return view('buildings.index', compact('buildings'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $building = new Building;
        $compoundsArray = Compound::pluck('name', 'id');
        return view('buildings.create', compact('building', 'compoundsArray'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBuildingRequest $request)
    {
        $building = new Building;
        $building->fill($request->all());

        $building->save();

        return redirect(route('buildings.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $building = Building::findOrFail($id);
        $compoundsArray = Compound::pluck('name', 'id');

        return view('buildings.edit', compact('building', 'compoundsArray'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBuildingRequest $request, $id)
    {
        $building = Building::findOrFail($id);
        $building->fill($request->all());

        $building->save();

        return redirect(route('buildings.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
