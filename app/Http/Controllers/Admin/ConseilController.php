<?php

namespace App\Http\Controllers\Admin;

use App\Models\Conseil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ConseilRequest;
use Auth; 

class ConseilController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conseils = Conseil::paginate(10);

        return view('admin.conseils.index', compact('conseils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.conseils.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConseilRequest $request)
    {
        Conseil::create($request->all());


        return redirect()->route('entraineur.conseils.index');
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
    public function edit(Conseil $conseil)
    {
        return view('admin.conseils.edit', compact('conseil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConseilRequest $request, Conseil $conseil)
    {
        $conseil->update($request->all());

        return redirect()->route('entraineur.conseils.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conseil $conseil)
    {
        $conseil->delete();

        return response()->json(['deleted' => "Catégorie a été supprimé avec succée"], 200);
    
    }
}
