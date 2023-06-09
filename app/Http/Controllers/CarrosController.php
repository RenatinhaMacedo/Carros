<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

use function PHPUnit\Framework\returnSelf;

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
        $carro->marca = $requisicao->marca;
        $carro->data_fabricacao = $requisicao->data_fabricacao;
        $carro->cor = $requisicao->cor;
        $carro->carrografia = $requisicao->carrografia;

        // Salva o objeto no banco de dados
        $carro->save();

        // Redireciona para a página de detalhes do gato
        return redirect()->route('carros.show', $carro->id);
    }

    /**
     * Mostra um carro específico
     */
    public function show(Carro $carro)
    {
        return view('carros.view', compact('carro'));
    }

    /**
     * Mostra o formulário para editar um carro específico
     */
    public function edit(Carro $carro)
    {
        return view('carros.edit', compact('carro'));
    }

    /**
     * Atualiza um carro específico
     */
    public function update(Request $requisicao, Carro $carro)
    {
        $carro->update($requisicao->all());

        return redirect()->route('carros.show', $carro->id);
    }

    /**
     * Remove um carro específico
     */
    public function destroy(Carro $carro)
    {
        $carro->delete();

        return redirect()->route('carros.index');
    }
}
