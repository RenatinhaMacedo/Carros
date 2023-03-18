<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarrosController extends Controller
{
     /**
     * Lista todos os carros cadastrados
     */
    public function index()
    {
        // Pega todos os registos da tabela relacionada ao modelo carro
        $carros = Carro::all();

        return view('carros.index', compact('carros'));
    }

    /**
     * Mostra o formulário para criar um novo carro
     */
    public function create()
    {
        return view('carros.create');
    }

    /**
     * Armazena um novo carro
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Mostra um carro específico
     */
    public function show($id)
    {
        //
    }

    /**
     * Mostra o formulário para editar um carro específico
     */
    public function edit($id)
    {
        //
    }

    /**
     * Atualiza um carro específico
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove um carro específico
     */
    public function destroy($id)
    {

    }
}
