@extends('layouts.app')
 
@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Atividade de Pesquisa</h2>
        </div>
        @endsection
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('atividadePesquisa.index') }}"> Voltar</a>
        </div>
    </div>
</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo de Participação do Professor em Atividade de Pesquisa:</strong>
                {{ $atividade_pesquisa->tipo_part_prof_atividade_pesquisa }}
            </div>
            <div class="form-group">
                <strong>Carga Horária Total:</strong>
                {{ $atividade_pesquisa->ch_total_atividade_pesquisa}}
            </div>
            <div class="form-group">
                <strong>Professor:</strong>
                {{ $atividade_pesquisa->professor->nome_professor}}
            </div>
            <div class="form-group">
                <strong>Período Letivo:</strong>
                {{$atividade_pesquisa->periodo_letivo->periodo_periodoLetivo}}
            </div>
           
        </div>
	</div>
@endsection