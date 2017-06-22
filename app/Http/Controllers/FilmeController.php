<?php

namespace App\Http\Controllers;

use App\Filme;
use App\Genero;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filmes = Filme::all();
        
        return view('filmes.index', compact('filmes'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos = Genero::all();
        return view('filmes.create', compact('generos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filme = new Filme();
        $filme->titulo = $request->titulo;
        $filme->descricao = $request->descricao;
        $filme->genero_id = $request->genero_id;

        $filme->save();

        return redirect('/filmes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$filme = $filme->with('genero')->first();
       $filme = Filme::with('genero')->findOrFail($id);
        return view('filmes.show', compact('filme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filme = Filme::with('genero')->findOrFail($id);
        $generos = Genero::all();
        return view('filmes.edit', compact('filme', 'generos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filme $filme)
    {
        $filme->titulo = $request->titulo;
        $filme->descricao = $request->descricao;
        $filme->genero_id = $request->genero_id;
        $filme->save();

        return redirect('/filmes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filme $filme)
    {
        $filme->delete();
        return redirect('/filmes');
        
    }
}
