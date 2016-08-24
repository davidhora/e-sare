@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Administração Periodo Letivo</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('gestao_periodo_letivo-create')
	            <a class="btn btn-success" href="{{ route('periodoLetivo.create') }}"> Criar Novo Período Letivo</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Período</th>
			<th>Ano</th>
			<th>Modalidade</th>
			<th>Inicio</th>
			<th>Termino</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($periodos as $key => $periodo)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $periodo->periodo_periodoLetivo }}</td>
		<td>{{ $periodo->ano_periodoLetivo }}</td>
		<td>{{ $periodo->modalidade_periodoLetivo }}</td>
		<td>{{ $periodo->inicio_periodoLetivo }}</td>
		<td>{{ $periodo->termino_periodoLetivo }}</td>
		<td>
			@permission('gestao_periodo_letivo-create')
			<a class="btn btn-info" href="{{ route('periodoLetivo.show',$periodo->id) }}">Show</a>
			@endpermission
			@permission('gestao_periodo_letivo-edit')
			<a class="btn btn-primary" href="{{ route('periodoLetivo.edit',$periodo->id) }}">Edit</a>
			@endpermission
			@permission('gestao_periodo_letivo-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['periodoLetivo.destroy', $periodo->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $periodos->render() !!}
@endsection