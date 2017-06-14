@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="page-header">
                    Lista de Filmes 
                
                    
                </h1>


                <div class="panel panel-default">
                    <div class="panel-heading">Dados da tabela</div>
                    <div class="panel-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Filme</th>

                                </tr>
                            </thead>

                            <tbody>
                             @foreach($listas as $lista)
                                <tr>
                                    <td>{{$lista->id}}</td>
                                    <td>{{$lista->nome}}</td>
                                    <td>{{$lista->filme->titulo}}</td>
                                    
                                    <td>
                                        <form style="display: inline;" action="{{route('listas.destroy', $lista->id)}}" method="post">
                                        
                                             {{csrf_field()}}

                                            <input type="hidden" name="_method" value="delete">

                                            <button class="btn btn-danger">Apagar</button>

                                        </form>

                                    </td>
                                </tr>
                                @endforeach 
                                                            </tbody>
                        </table>

                        <a href="/listas/create" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
