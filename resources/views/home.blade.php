@extends('layout.site')

@section('titulo', 'Cursos')
    
@section('conteudo')
    <div class="container">
        <h4 class="center">Lista de Cursos</h4>
        <div class="row">
            @foreach($cursos as $curso)
            <div class="col s12 m4"> <!--s = celular // m=mobile-->
                <div class="card">
                    <div class="card-image">
                        <img src="{{asset($curso->imagem)}}">
                        
                    </div>
                    <div class="card-content">
                        <h4>{{$curso->titulo}}</h4>
                        <p>{{$curso->descricao}}</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Ver mais..</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
@endsection
