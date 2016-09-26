@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Mostrar Área</h2>
        </div>
        @endsection
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('area.index') }}"> Voltar</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
            {{ $area->nome }}
        </div>
        <div class="form-group">
            <strong>Departamento:</strong>
            {{ $area->departamento->nome }}
        </div>
        <div class="form-group">
            <strong>Coordenador:</strong>
            {{ $area->fk_coordenador }}
        </div>

    </div>
</div>
@endsection