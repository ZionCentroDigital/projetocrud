<?php

namespace App\Http\Controllers;
use App\Models\produto;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
   

    public function create(){
        return view('produtos.create');
    }
    public function store(Request $request){
      Produto::create([
        'nome' => $request->nome,
        'preco' => $request->preco,
        'altura'=> $request->altura,
        'largura'=> $request->largura,
        'comprimento'=> $request->comprimento,
        'peso'=> $request->peso,
        
      ]);  
      return "Produto Criado com Sucesso!";
  
    }
    public function show(){
        $produto = Produto::all();
        return view ('produtos.show',['produto'=>$produto]);
    }
    public function edit($id){
        $produto = Produto::findOrFail($id);
        return view ('produtos.edit',['produto'=>$produto]);
    }
    public function update(Request $request, $id){
        $produto = Produto::findOrFail($id);

        $produto-> update([
            'nome' => $request->nome,
            'preco' => $request->preco,
            'altura'=> $request->altura,
            'largura'=> $request->largura,
            'comprimento'=> $request->comprimento,
            'peso'=> $request->peso,

        ]);
        return "Produto Atualizado com Sucesso!";
    }

    public function destroy($id){
        $produto = Produto::findOrFail($id);
        $produto ->delete();
         return "Produto excluido com sucesso";
    }



}
