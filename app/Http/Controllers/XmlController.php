<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnePiece;

class XmlController extends Controller
{
    // gerar o XML com todos os registros
    public function gerarXML()
    {
        $dados = OnePiece::all();

        return response()
            ->view('data_xml', ['registros' => $dados])
            ->header('Content-Type', 'application/xml');
    }
}
