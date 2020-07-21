<?php

namespace App\Http\Controllers;

use App\Models\ProdutoData;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$modelos = ProdutoData::all();
        //error_log('Esta no metodo index ');
        return view('carrinho.index'); //->with(['produtos' => $modelos]);;
    }

    
    public function addProduto($idProduto, $qt) {

        //error_log('Entrou no metodo addProduto');
        $produto = ProdutoData::find($idProduto);
 
        if(!$produto) {
            
            abort(404);
        }
 
        $carrinho = session()->get('carrinho');
 
        // Se o carrinho está vazio então adicione o primeiro produto.
        if(!$carrinho) {
 
            $carrinho = [
                    $idProduto => [
                        "nome" => $produto->nome,
                        "quantidade" => $qt,
                        "valor" => $produto->valor,
                        "imagem_path" => $produto->imagem_path
                    ]
            ];
 
            session()->put('carrinho', $carrinho);            
            session()->flash('success', 'O produto foi adicionado.');
        }
 
        // Se o carrinho não está vazio, então tente encontrar o produto, e incremente a quantidade.
        if(isset($carrinho[$idProduto])) {
 
            $carrinho[$idProduto]['quantidade'] = $qt + $carrinho[$idProduto]['quantidade'];
 
            session()->put('carrinho', $carrinho);            
            session()->flash('success', 'O produto foi adicionado.');
 
        }
 
        // Se o item não existir no carrinho, então adicione o produto com quantidade 1.
        $carrinho[$idProduto] = [
            "nome" => $produto->nome,
            "quantidade" => $qt,
            "valor" => $produto->valor,
            "imagem_path" => $produto->imagem_path
        ];
 
        session()->put('carrinho', $carrinho);
 
        session()->flash('success', 'O produto foi adicionado.');
    }


    public function removerProduto(Request $request) {

        if($request->id) {
 
            $carrinho = session()->get('carrinho');
 
            if(isset($carrinho[$request->id])) {
 
                unset($carrinho[$request->id]);
 
                session()->put('carrinho', $carrinho);
            }
 
            session()->flash('success', 'O produto foi removido.');
        }

    }


    public function atualizarProduto(Request $request) {

        error_log('atualizarProduto id.: '.$request->id);
        error_log('atualizarProduto quantidade.: '.$request->quantidade);
    

        if($request->id and $request->quantidade)
        {
            $carrinho = session()->get('carrinho');
 
            $carrinho[$request->id]["quantidade"] = $request->quantidade;
 
            session()->put('carrinho', $carrinho);

            error_log('atualizarProduto nova quantidade.: '.$carrinho[$request->id]["quantidade"]);
 
            session()->flash('success', 'Cart updated successfully');
        }


    }
    


}
