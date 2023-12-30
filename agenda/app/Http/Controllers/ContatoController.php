<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

use function Laravel\Prompts\alert;

class ContatoController extends Controller
{
   public function store(){
      $contato = new Contato();
      $contato->name = request('name');
      $contato->email = request('email');
      $contato->nascimento = request('nascimento');
      $contato->telefone = request('telefone');
      $contato->save();
      return redirect('/telaLogin')->with('success', 'Cadastro realizado com sucesso');
   }

   public function pesquisa(){
      $numero = request('telefone');
      $contato = Contato::where('telefone', $numero)->first();

      // return redirect('/telaPesquisa')->with('success', $contato);
      return view('telaPesquisa', ['contato' => $contato]);
   }

   public function excluir(){
      $numero = request('telefone');
      $contato = Contato::where('telefone', $numero)->first();

      if($contato){
         $contato->delete();
         return redirect('/telaLogin')->with('success', 'Contato excluído com sucesso!');
     } else {
         return redirect('/telaLogin')->with('error', 'Contato não encontrado.');
     }
   }
}

