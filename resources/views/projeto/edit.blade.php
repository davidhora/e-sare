@extends('layouts.app')

    <script src = "{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
    <script src = "{{ asset('js/jquery.maskedinput.js') }}" type = "text/javascript" ></script>
    <script src = "{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
    <link href="{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">

  @section('main-content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
             @section('contentheader_title')
	        <div class="pull-left">
	            <h2>Editar Projeto</h2>
	        </div>
            @endsection
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('projeto.index') }}"> Voltar</a>
	        </div>
	    </div>
	</div>
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	{!! Form::model($projeto, ['method' => 'PATCH','route' => ['projeto.update', $projeto->id]]) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome Projeto:</strong>
                {!! Form::text('nome_projeto', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
            
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo Projeto:</strong>
                {!! Form::text('tipo_projeto', null, array('placeholder' => '','class' => 'form-control', 'style'=>'height:30px')) !!}

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo Participação Projeto:</strong>
                 {!! Form::text('tipo_participacao_projeto', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
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
                {!! Form::select('fk_periodo_letivo', $periodoLetivo, null, array('class' => 'form-control')) !!}
            </div>
        </div>
     
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Salvar</button>
        </div>
	</div>
	{!! Form::close() !!}

      
@endsection

