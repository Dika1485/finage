<?php

namespace App\Http\Controllers;

use App\Models\Investasi;
use Illuminate\Http\Request;

class InvestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $investasi = Investasi::all();
        // return view("investasi.index", compact("investasi"));
        return response()->json($investasi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("investasi.create");
        return response()->json(Investasi::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $investasi = Investasi::create($request->all());
        // return redirect()->route("investasi.index")->with("success","");
        return response()->json($investasi);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $investasi = Investasi::find($id);
        // return view("investasi.show", compact("investasi"));
        return response()->json(($investasi)? $investasi : null,404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $investasi = Investasi::find($id);
        // return view("investasi.edit", compact("investasi"));
        return response()->json(($investasi)? $investasi : null,404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $investasi = Investasi::find($id);
        $investasi->update($request->all());
        // return redirect()->route("investasi.index")->with("success","");
        return response()->json(($investasi)? $investasi : null,404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $investasi = Investasi::find($id);
        $investasi->delete();
        // return redirect()->route("investasi.index")->with("success","");
        return response()->json(($investasi)? $investasi : null,404);
    }
}
