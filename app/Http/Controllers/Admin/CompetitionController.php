<?php

namespace App\Http\Controllers\Admin;

use App\Models\Competition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompetitionRequest;

class CompetitionController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competitions = Competition::paginate(10);

        return view('admin.competitions.index', compact('competitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.competitions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompetitionRequest $request)
    {
        Competition::create($request->all());

        return redirect()->route('admin.competitions.index');
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
    public function edit(Competition $competition)
    {
        return view('admin.competitions.edit', compact('competition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompetitionRequest $request, Competition $competition)
    {
        $competition->update($request->all());

        return redirect()->route('admin.competitions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competition $competition)
    {
        $competition->delete();

        return response()->json(['deleted' => "Compétition a été supprimé avec succée"], 200);
    
    }
}
