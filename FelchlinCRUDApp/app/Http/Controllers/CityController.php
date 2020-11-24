<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Domain\CityAnalyzer;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = \App\City::paginate(25);
        return view('cities.index', ['cities' => $cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cities.create', ['city' => new \App\City]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\City::create($this->validateData($request));

        return redirect()->route('cities.index')
                         ->with('success', 'City added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('cities.show', ['city' => \App\City::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('cities.edit', ['city' => \App\City::find($id)]);
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
        $city = $this->validateData($request);
        \App\City::find($id)->update($city);

        return redirect()->route('cities.index')
                         ->with('success', 'City updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = \App\City::find($id);
        $city->delete();

        return redirect()->route('cities.index')
                         ->with('success', 'City deleted');
    }

    private function validateData(Request $request){
        return $request->validate([
            'name' => 'required',
            'state' => 'required',
            'population_2010' => 'required',
            'population_2010' => 'integer',
            'population_rank' => 'required',
            'population_rank' => 'integer'
        ]);
    }
}
