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
	            <h2>Criar Nova Substituição</h2>
	        </div>
             @endsection 
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('substituicao.index') }}"> Voltar</a>
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
	{!! Form::open(array('route' => 'substituicao.store','method'=>'POST')) !!}
	<div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data inicial:</strong>
                {!! Form::text('inicio_substituicao', null, array('placeholder' => '','class' => 'form-control', 'style'=>'height:30px' , 'id' => 'dataInicio')) !!}

            </div>
        </div>    
            
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data Final:</strong>
                {!! Form::text('fim_substituicao', null, array('placeholder' => '','class' => 'form-control', 'style'=>'height:30px' , 'id' => 'dataFim')) !!}

            </div>
        </div>
            
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Motivo da substituicao:</strong>
                {!! Form::text('motivo_substituicao', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Portaria:</strong>
                {!! Form::text('portaria_substituicao', null, array('placeholder' => '','class' => 'form-control', 'style'=>'height:30px')) !!}

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nº COP:</strong>
                 {!! Form::text('numcop_substituicao', null, array('placeholder' => '','class' => 'form-control','style'=>'height:30px')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Professor Substituído:</strong>
                {!! Form::select('fk_professor_substituido', $professores, null, array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Professor Substituto:</strong>
                {!! Form::select('fk_professor_substituto', $professores, null, array('class' => 'form-control')) !!}
            </div>
        </div>
     
     
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Salvar</button>
        </div>
	</div>
	{!! Form::close() !!}
        
        
     <script>

      $(function($){
        $("#dataInicio").datepicker({

        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']

         });
       });

       $(function($){
         $("#dataFim").datepicker({

        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
          
           });
       });

     </script>
@endsection

