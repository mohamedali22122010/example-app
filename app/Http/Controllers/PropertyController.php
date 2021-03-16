<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Requests\Property\CreatePropertyRequest;
use App\Http\Requests\Property\UpdatePropertyRequest;
use App\Models\Promotion;

class PropertyController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::with('building')->paginate(20);
        return view('properties.index', compact('properties'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $property = new Property;
        $buildingsArray = Building::pluck('name', 'id');
        $promotionsArray = Promotion::pluck('name', 'id');
        $selected_promotions = [];
        return view('properties.create', compact('property', 'buildingsArray', 'promotionsArray', 'selected_promotions'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePropertyRequest $request)
    {
        $property = new Property;
        $property->fill($request->all());

        $property->save();

        $property->promotions()->sync($request->promotions);

        return redirect(route('properties.index'));
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
        $property = Property::findOrFail($id);
        $buildingsArray = Building::pluck('name', 'id');
        $promotionsArray = Promotion::pluck('name', 'id');
        $selected_promotions = $property->promotions()->pluck('promotion_id')->toArray();

        return view('properties.edit', compact('property', 'buildingsArray', 'promotionsArray', 'selected_promotions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyRequest $request, $id)
    {
        $property = Property::findOrFail($id);
        $property->fill($request->all());

        $property->save();

        $property->promotions()->sync($request->promotions);

        return redirect(route('properties.index'));
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
