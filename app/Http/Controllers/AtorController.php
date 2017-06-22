<?php

namespace App\Http\Controllers;

use App\Filme;
use App\Ator;
use Illuminate\Http\Request;

class AtorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atores =  Ator::all();
        
        return view('atores.index', compact('atores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filmes = Filme::all();
        return view('atores.create', compact('filmes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ator = new Ator();
        $ator->nome = $request->nome;
        $ator->filme_id = $request->filme_id;
        $ator->ano = $request->ano;
        $ator->save();

        return redirect('/atores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ator  $ator
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return $atore = $atore->with('filme')->first();
        //return view('atores.show', compact('atore'));
        $atore = Ator::with('filme')->findOrFail($id);
        return view('atores.show', compact('atore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ator  $ator
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return $atore = Ator::with('filmes')->findOrFail($id);
        
        
        //$atore = Ator::with('filme')->findOrFail($id);
        //$filmes = Filme::all();
        //return view('atores.edit', compact('atore', 'filmes'));      
       
        $atore = Ator::with('filme')->findOrFail($id);
        $filmes = Filme::all();
        return view('atores.edit', compact('atore', 'filmes'));
       
       // $filmes = Filme::all();
        //return view('atores.edit', compact('atore', 'filmes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ator  $ator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ator $atore)
    {
        //$atore = new Ator();
        $atore->nome = $request->nome;
        $atore->ano = $request->ano;
        $atore->filme_id = $request->filme_id;
        $atore->save();
        return redirect('/atores');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ator  $ator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ator $atore)
    {
        $atore->delete();
        return redirect('/atores');
    }
}
