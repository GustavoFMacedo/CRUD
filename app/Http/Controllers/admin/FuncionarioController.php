<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function index()
    {
        $registros = Funcionario::all();
        return view('admin.funcionarios.index',compact('registros'));
    }
    public function adicionar()
    {
        return view('admin.funcionarios.adicionar');
    }
    public function salvar(Request $req)
    {
        $dados = $req->all();

        if(isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'nao';
        }
        
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/funcionarios/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Funcionario::create($dados);

        return redirect()->route('admin.funcionarios');

    }

    public function editar($id)
    {
        $registro = Funcionario::find($id);
        return view('admin.funcionarios.editar',compact('registro'));
    }
    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        if(isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'nao';
        }
        
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/funcionarios/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Funcionario::find($id)->update($dados);

        return redirect()->route('admin.funcionarios');

    }

    public function deletar($id)
    {
        $funcionario = Funcionario::find($id);
        
        if ($funcionario) {
            $funcionario->delete();
            return redirect()->route('admin.funcionarios');
        } else {
            return redirect()->route('admin.funcionarios')->with('error', 'funcionario não encontrado.');
        }
    }

    

}
