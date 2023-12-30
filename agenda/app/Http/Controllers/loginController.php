<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function validacao(Request $request)
    {
        $email = 'Athanio@prof.com';
        $senha = 'senha123';


        if ($request->email == $email and $request->senha == $senha) {
            // Autenticação bem-sucedida
            return redirect('/telaLogin');
        } else {
            // Autenticação falhou
            return back()->with('message', 'Credenciais inválidas');
        }
    }
}
