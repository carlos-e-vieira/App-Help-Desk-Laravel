<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chamado;

class DashboardController extends Controller
{

    public function index() {
        
        $status_pendente   = Chamado::where([['status', '=', 'Pendente']])->get();
        $status_em_analise = Chamado::where([['status', '=', 'Em análise']])->get();
        $status_concluido  = Chamado::where([['status', '=', 'Concluído']])->get();
        $total_chamados    = Chamado::all();

        $categoria_hospedagem  = Chamado::where([['categoria', '=', 'Hospedagem']])->get();
        $categoria_sistema_web = Chamado::where([['categoria', '=', 'Sistema Web']])->get();
        $categoria_ecommerce   = Chamado::where([['categoria', '=', 'E-commerce']])->get();
        $categoria_site        = Chamado::where([['categoria', '=', 'Site']])->get();

        return view('dashboard', [
            'status_pendente'       => $status_pendente, 
            'status_em_analise'     => $status_em_analise,
            'status_concluido'      => $status_concluido,
            'total_chamados'        => $total_chamados,
            'categoria_hospedagem'  => $categoria_hospedagem,
            'categoria_sistema_web' => $categoria_sistema_web,
            'categoria_ecommerce'   => $categoria_ecommerce,
            'categoria_site'        => $categoria_site
        ]);
    }

}
