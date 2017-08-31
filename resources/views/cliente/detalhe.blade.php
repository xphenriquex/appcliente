<script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>


@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
                    <li class="Active">Detalhe</li>
                </ol>

                <div class="panel-body">
                    <p> <b>Cliente</b> {{ $cliente->nome }} </p>
                    <p> <b>E-mail</b> {{ $cliente->email }} </p>
                    <p> <b>Endereço</b> {{ $cliente->endereco }} </p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Endereço</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cliente->telefones as $telefone)
                                <tr>
                                   <th scope="row">{{ $telefone->id }}</th> 
                                   <td>{{ $telefone->telefone }}</td>
                                   <td>{{ $cliente->email }}</td>
                                   <td>{{ $cliente->endereco }}</td>
                                   <td>
                                       <a class="btn btn-default" href="#">Editar</a>
                                       <a data-toggle="modal" id="#" data-target="#modalDeletar{{ $cliente->id }}" class="btn btn-danger exclusao" >Deletar</a>

                                       @include('cliente._modal-delete')

                                   </td>
                                </tr>

                             @endforeach
                        </tbody>

                    </table>

                    <p>
                        <a class="btn btn-info" href="{{ route('telefone.adicionar', $cliente->id) }}">Adcionar Telefones</a>
                    </p>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script type="text/javascript">
    $(document).ready(function() { 
        $('.deletar').click(function(){
            var id = this.id;
            var url = '{{ route('cliente.deletar', ':id') }}';
            url = url.replace(':id', id);
            window.location.href = url;
        });
    });
</script>
