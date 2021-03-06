@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Turmas solicitadas</h2>
        </div>
        @endsection
        <div class="pull-right">
            @permission('gestao_solicitacao-create')
            <a class="btn btn-primary" href="{{ route('solicitacao.create') }}"><span class="glyphicon glyphicon-arrow-up"></span> Solicitar turma</a>
            @endpermission
        </div>
    </div>
</div>
<br>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<br>
<div class="box">
    <table class="table table-bordered table-hover dataTable">
        <tr>
            <th>No</th>
            <th>Colegiado</th>
            <th>Departamento</th>
            <th>Período Letivo</th>
            <th>Curso</th>
            <th>Área</th>
            <th>Disciplina</th>
            <th>Status</th>

            <th>Data da Solicitação</th>
            <th>Data do Resultado</th>


            <th width="280px">Ação</th>
        </tr>
        @foreach ($solicitacaos as $key => $solicitacao)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $solicitacao->colegiado->sigla_colegiado }}</td>
            <td>{{ $solicitacao->departamento->sigla }}</td>
            <td>{{ $solicitacao->periodo_letivo->periodo_periodoLetivo }}</td>

            <td>{{ $solicitacao->curso->nome_curso }}</td>
            <td>{{ $solicitacao->area->nome}}</td>
            <td>{{ $solicitacao->disciplina->nome_disciplina }}</td>
            <td>{{ $solicitacao->status_solicitacao }}</td>
            <td>{{ $solicitacao->data_solicitacao }}</td>
            <td>{{ $solicitacao->data_resultado }}</td>

            <td>
                @permission('gestao_solicitacao-list')
                <a class="btn btn-info" href="{{ route('solicitacao.show',$solicitacao->id) }}">Visualizar</a>
                @endpermission

                @permission('gestao_solicitacao-edit')
                <a class="btn btn-primary" href="{{ route('solicitacao.edit',$solicitacao->id) }}">Editar</a>
                @endpermission

                @permission('gestao_solicitacao-edit')
                <a class="btn btn-primary" href="{{ route('solicitacao.responder',$solicitacao->id) }}">Responder</a>
                @endpermission

                @permission('gestao_solicitacao-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['solicitacao.destroy', $solicitacao->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                @endpermission
            </td>
        </tr>
        @endforeach
    </table>
</div>
{!! $solicitacaos->render() !!}
@endsection