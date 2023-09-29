<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Serie;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $series=Serie::all();
        $mensagem=$request->session()->get('mensagem.sucesso');
        //$series=Serie::query()->orderBy('name')->get();
        return view('series.index',compact('series'))->with('mensagem',$mensagem);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('series.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Serie::create($request->all());
        return to_route('series.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Serie $series)
    {
        return view('series.update',compact('series'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Serie $series)
    {
        $series->fill($request->all());
        $series->save();
        return to_route('series.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Serie $series,Request $request)
    {
        Serie::destroy($series->id);
        $request->session()->flash('mensagem.sucesso',"Serie $series->nome deletada com sucesso");
        return to_route('series.index');
    }
}
