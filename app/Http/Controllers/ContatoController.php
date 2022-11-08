<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContatoModel;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        

        $contato = ContatoModel::all();        
        return view('contato', compact('contato'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contato = new ContatoModel();

        $contato->nome = $request->txNome;
        $contato->email = $request->txEmail;
        $contato->telefone = $request->txTelefone;
        $contato->assunto = $request->txAssunto;
        $contato->mensagem = $request->txMensagem;
        
        $contato->save();

        return redirect("/contato");
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
        $contato = ContatoModel::find($id);
        $title = "Editar contato - {$contato->contato}";
        return view ('contatoEditar', compact('title','contato'));
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
        $contato = ContatoModel::find($id);
        $contato->update(['nome'=>$request->txNome]);
        $contato->update(['email'=>$request->txEmail]);
        $contato->update(['telefone'=>$request->txTelefone]);
        $contato->update(['assunto'=>$request->txAssunto]);
        $contato->update(['mensagem'=>$request->txMensagem]);
        return redirect("/contato");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ContatoModel::where('idContato', $id)->delete();
        return redirect("/contato");
    }
}
