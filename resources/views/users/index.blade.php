@extends('layouts.app')
 
@section('main-content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	    	@section('contentheader_title')
	        <div class="pull-left">
	            <h2>Administração de Usuários</h2>
	        </div>
	        @endsection
                <div class="pull-left">
	        	@permission('relatorioUsuario')
                        <a class="btn btn-default" href="{{ route('relatorio.usuario') }}">Gerar Relatório</a>
	       		@endpermission
	        </div>
	        <div class="pull-right">
	        	@permission('gestao_usuario-create')
	            <a class="btn btn-success" href="{{ route('users.create') }}"> Criar Novo Usuário</a>
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
			<th>Name</th>
			<th>Email</th>
			<th>Roles</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($data as $key => $user)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $user->name }}</td>
		<td>{{ $user->email }}</td>
		<td>
			@if(!empty($user->roles))
				@foreach($user->roles as $v)
					<label class="label label-success">{{ $v->display_name }}</label>
				@endforeach
			@endif
		</td>
		<td>
			@permission('gestao_usuario-create')
			<a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Visualizar</a>
			@endpermission
			@permission('gestao_usuario-edit')
			<a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Editar</a>
			@endpermission
			@permission('gestao_usuario-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $data->render() !!}
@endsection