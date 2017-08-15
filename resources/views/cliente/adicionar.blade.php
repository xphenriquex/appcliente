    @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
                    <li class="Active">Adicionar</li>
                </ol>

                <div class="panel-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" placeholder="Nome do cliente">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email do cliente">
                    </div>

                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" class="form-control" placeholder="Endereço do cliente">
                    </div>

                    <button class="btn btn-info">Adicionar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
