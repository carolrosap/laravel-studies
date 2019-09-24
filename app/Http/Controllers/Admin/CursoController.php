<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{
    public function index(){
        $registros = Curso::all();
        return view('admin.cursos.index',compact('registros'));
    }
    public function adicionar(){
        return view('admin.cursos.adicionar');
    }
    
    public function salvar(Request $req){
        $dados = $req->all();
        
        //tratar checkbox
        if(isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'não';
        }
        //tratar valor, pra não ocorrer erro na hora de inserir no banco 
        $dados['valor'] = floatval($dados['valor']);
        //Trata imagem
        $dir = "img/cursos/";
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_" . $num . "." . $ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir . "/" . $nomeImagem;
        }else{
           $dados['imagem'] = $dir . "/" . "default.jpg";
        }
        //Salva no banco
        Curso::create($dados); //salva no banco, precisa do fillabe no model
        return redirect()->route('admin.cursos');
        
    }

    public function editar($id){
        $registro = Curso::find($id);
        return view('admin.cursos.editar',compact('registro'));

    }
    public function atualizar(Request $req,$id){
        $dados = $req->all();
        
        //tratar checkbox
        if(isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'não';
        }
        //tratar valor, pra não ocorrer erro na hora de inserir no banco 
        $dados['valor'] = floatval($dados['valor']);
        //Trata imagem
        $dir = "img/cursos/";
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_" . $num . "." . $ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir . "/" . $nomeImagem;
        }else{
           $dados['imagem'] = $dir . "/" . "default.jpg";
        }
        //Salva no banco
        Curso::find($id)->update($dados); //salva no banco, precisa do fillabe no model

        return redirect()->route('admin.cursos');
        
    }

    public function deletar($id){
        Curso::find($id)->delete();
        //pode colocar um confirm pra ser mais seguro
        return redirect()->route('admin.cursos');

    }
}
