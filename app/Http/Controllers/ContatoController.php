<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index ()
    {

        $contatos = [
           (object) ["nome"=>"Maria","tel"=>"6192846"],
           (object) ["nome"=>"Pedro","tel"=>"1795468"]
        ];

        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);


        return view('contato.index',compact('contatos'));
    }

    public function criar (Request $req)
    {
        dd($req->all());
        return "Esse e o criar do ContatoController";
    }

    public function editar ()
    {
        return "Esse e o editar do ContatoController";
    }
}
