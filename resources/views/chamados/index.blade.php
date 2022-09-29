@extends('layouts.main')

@section('titulo', 'Chamados Cadastrados')

@section('titulo-view', 'Chamados Cadastrados')

@section('conteudo')

<!-- Table -->
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Todos os Chamados</strong>
                    </div>

                    <div class="card-body">
                        <!-- Pesquisar -->
                        <div style="margin-left: -30px;" class="row mb-5">
                            <div class="col col-md-12">
                                <div class="d-inline">
                                    <div class="form-group">
                                        <form action="/chamados/index" method="GET" class="form">
                                            <div class="col-md-4">
                                                <input type="text" id="pesquisar_cliente" name="pesquisar_cliente" class="form-control" placeholder="Pesquisar por Cliente">
                                            </div>

                                            <div class="col-md-3">
                                                <select name="pesquisar_categoria" id="pesquisar_categoria" class="form-control">
                                                    <option value="">Pesquisar por Categoria</option>
                                                    <option value="Email">Email</option>
                                                    <option value="Site">Site</option>
                                                    <option value="E-commerce">E-commerce</option>
                                                    <option value="Sistema Web">Sistema Web</option>
                                                    <option value="Hospedagem">Hospedagem</option>
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <select name="pesquisar_status" id="pesquisar_status" class="form-control">
                                                    <option value="">Pesquisar por Status</option>
                                                    <option value="Pendente">Pendente</option>
                                                    <option value="Em análise">Em análise</option>
                                                    <option value="Concluído">Concluído</option>
                                                </select>
                                            </div>

                                            <div class="col-md-2 d-inline-block">
                                                <button type="submit" class="btn btn-success">
                                                    <i class="fa fa-search"></i> Pesquisar
                                                </button>

                                                <a href="/chamados/index" class="btn btn-primary">
                                                    <i class="fa fa-refresh"></i>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./Pesquisar -->

                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="w-25">Cliente</th>
                                    <th class="w-25">Categoria</th>
                                    <th class="w-25">Status</th>
                                    <th class="w-25">Acões</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($chamados as $chamado)
                                    <tr>
                                        <td>{{ $chamado->cliente }}</td>
                                        <td>{{ $chamado->categoria }}</td>
                                        <td>{{ $chamado->status }}</td>
                                        <td>
                                            <a href="/chamados/{{ $chamado->id }}" style="padding: 4px 16px;" class="btn btn-secondary btn-sm text-white">
                                                <i class="fa fa-eye"></i> Ver
                                            </a>    
                                        
                                            <a href="/chamados/edit/{{ $chamado->id }}" style="padding: 4px 16px;" class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil"></i> Editar
                                            </a>

                                            <form action="/chamados/{{ $chamado->id }}" method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" style="padding: 4px 16px;" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i> Excluir
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div>
<!-- .Table -->

@endsection