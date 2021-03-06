@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="page-header">
                    Lista de Reprodução
                
                    
                </h1>


                <div class="panel panel-default">
                    <div class="panel-heading">Dados da tabela</div>
                    <div class="panel-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Titulo</th>
                                    <th>Ano</th>
                                    <th>Genero</th>
                                    <th></th>

                                </tr>
                            </thead>

                            <tbody>
                             @foreach($filmes as $filme)
                                <tr>
                                    <td>{{$filme->id}}</td>
                                    <td>{{$filme->titulo}}</td>
                                    <td>{{$filme->ano}}</td>
                                    <td>{{$filme->genero->nome}}</td>
                                    
                                </tr>
                                @endforeach 
                                                            </tbody>
                        </table>

                            <a href="/filmes/create" class="btn glyphicon glyphicon-plus">Cadastrar</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection