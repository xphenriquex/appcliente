    @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
                    <li><a href="{{ route('cliente.detalhe', $cliente->id) }}">Detalhe</a></li>
                    <li class="Active">Adicionar</li>
                </ol>

                <div class="panel-body">
                <form action="{{ route('telefone.salvar', $cliente->id) }}" method="post">
                    
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" name="titulo" class="form-control" placeholder="Titulo do telefone">
                    </div>

                    
                    <div class="form-group">
                        <label for="numero">Número</label>
                        <input type="text" name="telefone" class="form-control" placeholder="Número do telefone">
                    </div>

                    <button class="btn btn-info">Adicionar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
