
@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Editar Departamento</h2>
        </div>
        @endsection 
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('disciplina.index') }}">Voltar</a>
        </div>
    </div>
</div>
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
{!! Form::model($disciplina, ['method' => 'PATCH','route' => ['departamento.update', $disciplina->id]]) !!}
<div class="row">
   
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
            {!! Form::text('nome_disciplina', null, array('placeholder' => 'Digite o nome','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Código:</strong>
            {!! Form::text('codigo_disciplina', null, array('placeholder' => 'Digite o código','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Carga Horária Total:</strong>
            {!! Form::number('ch_total_disciplina', null, array('placeholder' => 'Digite a carga horária total','class' => 'form-control')) !!}
        </div>
    </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Natureza:</strong>
            {!! Form::text('natureza_disciplina', null, array('placeholder' => 'Digite a natureza da disciplina','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Departamento:</strong>
            {!! Form::select('fk_departamento',$departamento, null, array('placeholder'=>'--Selecione--','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Área:</strong>
            {!! Form::select('fk_area',$area, null, array('placeholder'=>'--Selecione--','class' => 'form-control')) !!}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
{!! Form::close() !!}
@endsection