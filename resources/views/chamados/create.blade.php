@extends('layouts.main')

@section('titulo', 'Abrir Chamado')

@section('titulo-view', 'Abrir Novo Chamado')

@section('conteudo')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            Formulário de Cadastro
        </div>

        <div class="card-body card-block">
            <form action="/chamados" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <!-- Nome -->
                <div class="row form-group">
                    <div class="col-md-2">
                        <label for="cliente" class=" form-control-label">Nome do Cliente:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" id="cliente" name="cliente" class="form-control" required>
                    </div>
                </div>
                <!-- /.Nome -->

                <!-- Data Inicio -->
                <div class="row form-group">
                    <div class="col-md-2">
                        <label for="data_inicio" class=" form-control-label">Data de Abertura:</label>
                    </div>
                    <div class="col-md-4">
                        <input type="date" id="data_inicio" name="data_inicio" class="form-control" required>
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
                            <option></option>
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
                        <input type="text" id="problema" name="problema" class="form-control" required>
                    </div>
                </div>
                <!-- /.Problema -->

                <!-- Descrição -->
                <div class="row form-group">
                    <div class="col-md-2">
                        <label for="descricao" class=" form-control-label">Descrição Completa:</label>
                    </div>
                    <div class="col-md-10">
                        <textarea name="descricao" id="descricao" rows="4" class="form-control"></textarea>
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
                            <option></option>
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
                        <input type="date" id="data_fim" name="data_fim" class="form-control">
                    </div>
                </div>
                <!-- /.Data Fim -->

                <!-- Botões-->
                <div class="row form-group mt-4">
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-primary" value="Cadastrar Chamado">
                        <a href="/chamados/index" class="btn btn-danger">Cancelar Cadastro</a>
                    </div>
                </div>
                <!-- /.Botões -->
                
            </form>
        </div>
    </div>
</div>

@endsection