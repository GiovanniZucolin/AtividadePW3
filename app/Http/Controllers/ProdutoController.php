<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdutoModel;
use DB;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produto = ProdutoModel::all();
        return view('produto', compact('produto'));
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
        $produto = new ProdutoModel();

        $produto->idCategoria = $request->txCategoria;
        $produto->produto = $request->txProduto;
        $produto->valor = $request->txValor;
        
        $produto->save();

        return redirect("/produto");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $nomeProduto = $request->txProduto;

        if (isset($request->valorMin))
            $valorMin = $request->valorMin;
        else 
            $valorMin = 0;
        
        if (isset($request->valorMax))            
            $valorMax = $request->valorMax;
        else 
            $valorMax = 0;    

        
        if ($valorMax > $valorMin) {
            $produto = DB::table('tbproduto')->where('produto', 'like', '%'. $nomeProduto .'%')
            ->whereBetween('valor', array($valorMin , $valorMax))
            ->join('tbcategoria', 'tbproduto.idCategoria', '=', 'tbcategoria.idCategoria')
            ->select('categoria', 'produto', 'valor')->get();
        } elseif ($valorMin > 0) {
            $produto = DB::table('tbproduto')->where('produto', 'like', '%'. $nomeProduto .'%')
            ->where('valor','>=' , $valorMin)
            ->join('tbcategoria', 'tbproduto.idCategoria', '=', 'tbcategoria.idCategoria')
            ->select('categoria', 'produto', 'valor')->get();
        } else {
            $produto = DB::table('tbproduto')->where('produto', 'like', '%'. $nomeProduto .'%')
            ->join('tbcategoria', 'tbproduto.idCategoria', '=', 'tbcategoria.idCategoria')
            ->select('categoria', 'produto', 'valor')->get();
        }

        return view('welcome', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
