@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Lista de Gêneros</h1>

                <a href="/generos/create" class="btn btn-primary" style="margin-bottom: 15px;">Cadastrar</a>

                <div class="panel panel-primary">
                    <div class="panel-heading">Tabela de dados</div>
                    <div class="panel-body">


                        

                        <table class="table table-striped"  >
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                </tr>
                            </thead>

                            <tbody>
                            @forelse ($generos as $genero)
                                <tr>
                                    <td>{{$genero->id}}</td>
                                    <td>{{$genero->nome}}</td>
                                </tr>
                             @empty
                                <tr><td>Sem resultados</td></tr>
                             @endforelse
                                
                            </tbody>
                        </table>


                    </div>
                </div>






            </div>
        </div>
    </div>
@endsection