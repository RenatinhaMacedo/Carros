<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarrosController extends Controller
{
     /**
     * Lista todos os gatos cadastrados
     */
    public function index()
    {
        // Pega todos os registos da tabela relacionada ao modelo Gato
        $carros = Carro::all();

        return view('carros.index', compact('carros'));
    }

    /**
     * Mostra o formulário para criar um novo gato
     */
    public function create()
    {
        //
    }

    /**
     * Armazena um novo gato
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Mostra um gato específico
     */
    public function show($id)
    {
        //
    }

    /**
     * Mostra o formulário para editar um gato específico
     */
    public function edit($id)
    {
        //
    }

    /**
     * Atualiza um gato específico
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove um gato específico
     */
    public function destroy($id)
    {

    }
}
