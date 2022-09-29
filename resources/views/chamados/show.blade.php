@extends('layouts.main')

@section('titulo', 'Chamado Cliente: ' . $chamado->cliente)

@section('titulo-view', 'Chamado para o cliente "' . $chamado->cliente .'"')

@section('conteudo')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            Número do Chamado: {{ $chamado->id }}
        </div>

        <div class="card-body card-block">
            <!-- Nome -->
            <div class="row form-group">
                <div class="col-md-2">
                    <label for="cliente" class=" form-control-label">Nome do Cliente:</label>
                </div>
                <div class="col-md-10">
                    <p class="text-primary">{{ $chamado->cliente }}</p>
                </div>
            </div>
            <!-- /.Nome -->

            <!-- Data Inicio -->
            <div class="row form-group">
                <div class="col-md-2">
                    <label for="data_inicio" class=" form-control-label">Data de Abertura:</label>
                </div>
                <div class="col-md-4">
                    <p class="text-primary">{{ date('d/m/Y', strtotime($chamado->data_inicio)) }}</p>
                </div>
            </div>
            <!-- /.Data Inicio -->

            <!-- Categoria -->
            <div class="row form-group">
                <div class="col-md-2">
                    <label for="categoria" class=" form-control-label">Categoria do Problema:</label>
                </div>
                <div class="col-md-4">
                    <p class="text-primary">{{ $chamado->categoria }}</p>
                </div>
            </div>
            <!-- /.Categoria -->

            <!-- Problema -->
            <div class="row form-group">
                <div class="col-md-2">
                    <label for="problema" class=" form-control-label">Título do Problema:</label>
                </div>
                <div class="col-md-10">
                    <p class="text-primary">{{ $chamado->problema }}</p>
                </div>
            </div>
            <!-- /.Problema -->

            <!-- Descrição -->
            <div class="row form-group">
                <div class="col-md-2">
                    <label for="descricao" class=" form-control-label">Descrição Completa:</label>
                </div>
                <div class="col-md-10">
                    <p class="text-primary">{{ $chamado->descricao }}</p>
                </div>
            </div>
            <!-- /.Descrição -->

            <!-- Status -->
            <div class="row form-group">
                <div class="col-md-2">
                    <label for="status" class=" form-control-label">Status do Chamado:</label>
                </div>
                <div class="col-md-4">
                    <p class="text-primary">{{ $chamado->status }}</p>
                </div>
            </div>
            <!-- /.Status -->

            <!-- Data Fim -->
            <div class="row form-group">
                <div class="col-md-2">
                    <label for="data_fim" class=" form-control-label">Data de Conclusão:</label>
                </div>
                <div class="col-md-4">
                    @if($chamado->data_fim == NULL)
                        <p class="text-danger">O chamado não foi concluido</p>
                    @else
                        <p class="text-primary">{{ date('d/m/Y', strtotime($chamado->data_fim)) }}</p>
                    @endif
                </div>
            </div>
            <!-- /.Data Fim -->

                <!-- Botões-->
                <div class="row form-group mt-4">
                    <div class="col-md-6">
                        <a href="/chamados/index" style="padding: 6px 45px" class="btn btn-success">
                            <i class="fa fa-arrow-left"></i> Voltar
                        </a>
                    </div>
                </div>
                <!-- /.Botões -->

        </div>
    </div>
</div>

@endsection