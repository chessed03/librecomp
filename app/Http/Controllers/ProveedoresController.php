<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedoresController extends Controller
{

    public function index(Request $request)
    {

        return view('proveedores.view');

    }

}
