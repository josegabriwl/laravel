<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PacienteController extends Controller{
    
    public function lista(){
            $html = '<h1>Listagem de produtos com Laravel </h1>';
            $html.= '<table>';

            $pacientes = DB::select('select * from pacientes');

            return view ('listagem')->with('pacientes', $pacientes);
            
    }

    public function adiciona(Request $request){
        $nome = $request->input('nome');
        $valor = $request->input('valor');
        $quantidade = $request->input('quantidade');
        $descricao = $request->input('descricao');

        DB::select('')
    }
}