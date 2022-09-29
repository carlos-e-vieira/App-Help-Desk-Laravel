@extends('layouts.main')

@section('titulo', 'Editar Chamado')

@section('titulo-view', 'Editar Chamado do Cliente ' .$chamado->cliente)

@section('conteudo')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            Dados do Chamado
        </div>

        <div class="card-body card-block">
            <form action="/chamados/update/{{ $chamado->id }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @method('PUT')
                <!-- Nome -->
                <div class="row form-group">
                    <div class="col-md-2">
                        <label for="cliente" class=" form-control-label">Nome do Cliente:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" id="cliente" name="cliente" value="{{ $chamado->cliente }}" class="form-control" required>
                    </div>
                </div>
                <!-- /.Nome -->

                <!-- Data Inicio -->
                <div class="row form-group">
                    <div class="col-md-2">
                        <label for="data_inicio" class=" form-control-label">Data de Abertura:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="date" id="data_inicio" name="data_inicio" value="{{ $chamado->data_inicio->format('Y-m-d') }}" class="form-control" required>
                    </div>
                </div>
                <!-- /.Data Inicio -->

                <!-- Categoria -->
                <div class="row form-group">
                    <div class="col-md-2">
                        <label for="categoria" class=" form-control-label">Categoria do Problema:</label>
                    </div>
                    <div class="col-md-4">
                        <select name="categoria" id="categoria" class="form-control" required>
                            <option  value="{{ $chamado->categoria }}">{{ $chamado->categoria }}</option>
                            <option value="Email">Email</option>
                            <option value="Site">Site</option>
                            <option value="E-commerce">E-commerce</option>
                            <option value="Sistema Web">Sistema Web</option>
                            <option value="Hospedagem">Hospedagem</option>
                        </select>
                    </div>
                </div>
                <!-- /.Categoria -->

                <!-- Problema -->
                <div class="row form-group">
                    <div class="col-md-2">
                        <label for="problema" class=" form-control-label">Título do Problema:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" id="problema" name="problema" value="{{ $chamado->problema }}" class="form-control" required>
                    </div>
                </div>
                <!-- /.Problema -->

                <!-- Descrição -->
                <div class="row form-group">
                    <div class="col-md-2">
                        <label for="descricao" class=" form-control-label">Descrição Completa:</label>
                    </div>
                    <div class="col-md-10">
                        <textarea name="descricao" id="descricao" rows="4" class="form-control">{{ $chamado->descricao }}</textarea>
                    </div>
                </div>
                <!-- /.Descrição -->

                <!-- Status -->
                <div class="row form-group">
                    <div class="col-md-2">
                        <label for="status" class=" form-control-label">Status do Chamado:</label>
                    </div>
                    <div class="col-md-4">
                        <select name="status" id="status" class="form-control" required>
                            <option value="{{ $chamado->status }}">{{ $chamado->status }}</option>
                            <option value="Pendente">Pendente</option>
                            <option value="Em análise">Em análise</option>
                            <option value="Concluído">Concluído</option>
                        </select>
                    </div>
                </div>
                <!-- /.Status -->

                <!-- Data Fim -->
                <div class="row form-group">
                    <div class="col-md-2">
                        <label for="data_fim" class=" form-control-label">Data de Conclusão:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="date" id="data_fim" name="data_fim"  class="form-control" value="{{ $chamado->data_fim == NULL ? '' : $chamado->data_fim->format('Y-m-d') }}">
                    </div>
                </div>
                <!-- /.Data Fim -->

                <!-- Botões-->
                <div class="row form-group mt-4">
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-primary" value="Atualizar Chamado">
                        <a href="/chamados/index" class="btn btn-danger">Cancelar Alteração</a>
                    </div>
                </div>
                <!-- /.Botões -->
                
            </form>
        </div>
    </div>
</div>

@endsection