@extends('layouts.main')

@section('titulo', 'Dashboard CEV HelpDesk')

@section('titulo-view', 'Dashboard')

@section('conteudo')

<!-- Cards Númericos -->
<div class="col-md-6 col-lg-3">
    <div class="card bg-flat-color-1 text-light">
        <div class="card-body">
            <div class="h4 m-0">{{ count($total_chamados) }}</div>
            <div class="font-weight-bold">Chamados Cadastrados</div>
            <div class="progress-bar bg-light mt-2 mb-2" role="progressbar" style="width: 20%; height: 5px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            <small class="text-light">Total de chamados no sistema.</small>
        </div>
    </div>
</div>

<div class="col-md-6 col-lg-3">
    <div class="card bg-flat-color-4 text-light">
        <div class="card-body">
            <div class="h4 m-0">{{ count($status_pendente) }}</div>
            <div class="font-weight-bold">Chamados Pendentes</div>
            <div class="progress-bar bg-light mt-2 mb-2" role="progressbar" style="width: 20%; height: 5px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            <small class="text-light">Total de chamados pendentes.</small>
        </div>
    </div>
</div>

<div class="col-md-6 col-lg-3">
    <div class="card bg-flat-color-3 text-light">
        <div class="card-body">
            <div class="h4 m-0">{{ count($status_em_analise) }}</div>
            <div class="font-weight-bold">Chamados em Análise</div>
            <div class="progress-bar bg-light mt-2 mb-2" role="progressbar" style="width: 20%; height: 5px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            <small class="text-light">Total de chamados em análise.</small>
        </div>
    </div>
</div>

<div class="col-md-6 col-lg-3">
    <div class="card bg-flat-color-2 text-light">
        <div class="card-body">
            <div class="h4 m-0">{{ count($status_concluido) }}</div>
            <div>Chamados Concluídos</div>
            <div class="progress-bar bg-light mt-2 mb-2" role="progressbar" style="width: 20%; height: 5px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            <small class="text-light">Total de chamados oncluídos.</small>
        </div>
    </div>
</div>
<!-- ./Cards Númericos -->

<!-- Categorias -->
<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-header">
            Categoria do Chamado
        </div>
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-server text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Hospedagem</div>
                    <div class="stat-digit">{{ count($categoria_hospedagem) }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-header">
            Categoria do Chamado
        </div>
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-settings text-primary border-primary"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Sistema Web</div>
                    <div class="stat-digit">{{ count($categoria_sistema_web) }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-header">
            Categoria do Chamado
        </div>
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-shopping-cart text-warning border-warning"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">E-commerce</div>
                    <div class="stat-digit">{{ count($categoria_ecommerce) }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-header">
            Categoria do Chamado
        </div>
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-layout text-danger border-danger"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Website</div>
                    <div class="stat-digit">{{ count($categoria_site) }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.Categorias -->

<div class="col-lg-12 col-md-6">
    <div class="card">
        <div class="card-header">
            Teste
        </div>
        
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <h4>
                        <img src="/images/logo-info.png" width="20%">
                        <small class="float-right">Data de Conclusão: 28/09/2022</small>
                    </h4>
                </div>
            </div>

            <div class="row invoice-info mt-4 mb-2">
                <div class="col-sm-4 invoice-col pb-3">
                    <section>
                        <strong>CEV HelpDesk</strong><br><br>
                        By Carlos Eduardo Vieira<br>
                        WhatsApp: (11) 97951-6391<br>
                        Email: carlosportalsocial@gemail.com<br>
                        Site: inovafactory.com.br
                    </section>
                </div>

                <div class="col-sm-4 invoice-col pb-3">
                    <section>
                        <strong>Sobre o Sistemas</strong><br><br>
                        Front-end: Bootstrap 4 - JavaScript<br>
                        Back-end: PHP Version 8.0.19<br>
                        Framework: Laravel Framework 9.31.0<br>
                        Database: MySQL Version 8.0.19
                    </section>
                </div>

                <div class="col-sm-4 invoice-col pb-3">
                    <b>GitHub: </b>https://github.com/carlos-e-vieira<br>
                    <b>Linkedin: </b>https://www.linkedin.com/in/carlos-eduardo-vieira-1a740a1a2/<br>
                    <b>Instagram: </b>https://www.instagram.com/carloseduvie/
                </div>
            </div>
        </div>
    </div>
</div>

@endsection