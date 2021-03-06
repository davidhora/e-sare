<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Secretario;
use App\User;

class secretarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $secretarios = Secretario::orderBy('id','DESC')->paginate(5);
        return view('secretario.index',compact('secretarios'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('secretario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'matricula_secretario' => 'required',
            'inicio_mandato_secretario' => 'required',
            'termino_mandato_secretario' => 'required',
            'nome_secretario' => 'required',
            'telefone_secretario' => 'required',
            'endereco_secretario' => 'required',
 
        ]);

        secretario::create($request->all());

        return redirect()->route('secretario.index')
                        ->with('success','Secretário cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $secretario = secretario::find($id);
        return view('secretario.show',compact('secretario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $secretario = secretario::find($id);
        return view('secretario.edit',compact('secretario', 'usuarios'));
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
        $this->validate($request, [
           'matricula_secretario' => 'required',
            'inicio_mandato_secretario' => 'required',
            'termino_mandato_secretario' => 'required',
            'nome_secretario' => 'required',
            'telefone_secretario' => 'required',
            'endereco_secretario' => 'required',
        ]);

        secretario::find($id)->update($request->all());

        return redirect()->route('secretario.index')
                        ->with('success','Secretário atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        secretario::find($id)->delete();
        return redirect()->route('secretario.index')
                        ->with('success','Secretário excluído com sucesso!');
    }
}