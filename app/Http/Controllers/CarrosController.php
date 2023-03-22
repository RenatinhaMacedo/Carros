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
    public function store(Request $requisicao)
    {
        //// Cria um novo objeto do tipo Gato em branco
        $carro = new Carro();

        // Preenche os campos do objeto com os dados da requisição
        $carro->nome = $requisicao->nome;
        $carro->marca = $requisicao->raca;
        $carro->data_fabricante = $requisicao->idade;
        $carro->cor = $requisicao->cor;
        $carro->gatografia = $requisicao->gatografia;

        // Salva o objeto no banco de dados
        $carro->save();

        // Redireciona para a página de detalhes do gato
        return redirect()->route('carro.show', $carro->id);
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
