<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Talent;

use App\Http\Requests\API\TalentRequest;

class Talents extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Talent::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TalentRequest $request)
    {
        $data = $request->all();

        return Talent::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Talent $talent)
    {
        return $talent;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TalentRequest $request, Talent $talent)
    {
        $data = $request->all();
        // update the article using the fill method // then save it to the database 
        $talent->fill($data)->save();
        // return the updated version
        return $talent;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talent $talent)
    {
        $talent-> delete();

        return response(null,204);
    }
}
