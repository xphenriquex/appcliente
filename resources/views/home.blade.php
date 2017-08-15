@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @if (!Auth::guest())
                    <div class="panel-heading">Bem vindo</div>
                @endif

                <div class="panel-body">
                    Sistem de Gerenciamento de Clientes
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
