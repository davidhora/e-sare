@extends('layouts.app')

<script src = "{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
<script src = "{{ asset('js/jquery.maskedinput.js') }}" type = "text/javascript" ></script>
<script src = "{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
<link href="{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
           @section('contentheader_title') 
            <h2>Editar Atividade Administrativa</h2>
        </div>
           @endsection  
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('atividadeAdministrativa.index') }}"> Voltar</a>
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
{!! Form::model($atividade_administrativa, ['method' => 'PATCH','route' => ['atividadeAdministrativa.update', $atividade_administrativa->id]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tipo De Atividade:</strong>
            {!! Form::text('tipo_atividade_administrativa', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>
   
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Professor</strong>
            {!! Form::select('fk_professor', $professores, null, array('class' => 'form-control')) !!}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Período Letivo</strong>
            {!! Form::select('fk_periodo_letivo', $periodo_letivos, null, array('class' => 'form-control')) !!}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Carga Horária:</strong>
            {!! Form::text('ch_atividade_administrativa', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
{!! Form::close() !!}


@endsection

