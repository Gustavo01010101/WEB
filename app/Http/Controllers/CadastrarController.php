<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnePiece;

class CadastrarController extends Controller
{
    //
   public function salvar(Request $request){
    $request->validate([
       "Nome" => "required|min:3|max:50",
        "data" => "required|date",
        "e_pirata" => "required|boolean",
        "Valor_Recompensa" => "required|decimal:2",
        "Idade" => "required|integer",

    ],
    [
       "nome.required" => "O campo 'nome' deve ser preenchido",
        "nome.min" => "O campo 'nome' deve ter no mínimo 3 caracteres",
        "nome.max" => "O campo 'nome' deve ter no máximo 50 caracteres",

        "data.required" => "O campo 'data' deve ser preenchido",
        "data.date" => "A data deve ser válida",

        "e_pirata.required" => "O campo 'e_pirata' deve ter uma seleção",
        "e_pirata.boolean" => "O valor deve ser booleano (verdadeiro ou falso)",

        "Valor_Recompensa.required" => "O campo 'Valor_Recompensa' deve ser preenchido",
        "Valor_Recompensa.decimal" => "O campo 'Valor_Recompensa' deve conter um número com duas casas decimais",

        "idade.required" => "O campo 'idade' deve ser preenchido",
        "idade.integer" => "O campo 'idade' deve ser um número inteiro",
            
    ]);
    $onepiece = new OnePiece();
    $onepiece->fill($request->all());
    $onepiece->save();

    return view('cadastrosalvo');
    }
}
