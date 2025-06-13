<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Producto;
use App\Models\Cliente;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsuarios = Usuario::count();
        $totalProductos = Producto::count();
        $totalClientes = Cliente::count();

        return view('dashboard.dashboard', compact('totalUsuarios', 'totalProductos', 'totalClientes'));
    }
}

