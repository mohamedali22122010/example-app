<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Promotion\CreatePromotionRequest;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::select(DB::raw(" select promotion_id, group_concat(property_id SEPARATOR ', ') properties from promotion_properties group by promotion_id"));
        $promotions = Promotion::with(['properties' => function($query) use ($data){
            foreach($data as $promotionData) {
                $query->orwhere(function($query) use ($promotionData){
                    $lastIds = explode(",",$promotionData->properties);
                    $limit = array_slice($lastIds, -30, 30 , true);
                    $query->whereIn('property_id' , $limit);
                    $query->where('promotion_id' , $promotionData->promotion_id);
                });
            }
            $query->orderBy('property_id', 'desc');
        }])->paginate(20);
        return view('promotions.index', compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $promotion = new Promotion;
        return view('promotions.create', compact('promotion'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePromotionRequest $request)
    {
        $promotion = new Promotion;
        $promotion->fill($request->all());

        $promotion->save();

        return redirect(route('promotions.index'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
