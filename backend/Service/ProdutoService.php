<?php

namespace App\Service;

use App\Repository\ProdutoRepo;
use InvalidArgumentException;

class ProdutoService
{
    public function __construct(private ProdutoRepo $repo){}

    // regra para um novo produto
    public function create(string $nome, int $quantidade, string $marca, string $validade, float $preco): void
    {
        if (trim($nome) === '' || trim($marca) === '' || empty($validade)) throw new InvalidArgumentException("Dados obrigatórios.");
    
        if ($quantidade < 0) throw new InvalidArgumentException("Quantidade não pode ser menor que zero.");

        if ($preco < 0) throw new InvalidArgumentException("Preço não pode ser menor que zero.");

        $this->repo->create($nome, $quantidade, $marca, $validade, $preco);
    }

    // regra para mostrar o produto
    public function read(): ?array
    {
        return $this->repo->read() ?? [];
    }

    // regra para atualizar o produto
    public function update(int $id, string $nome, int $quantidade, string $marca, string $validade, float $preco): void
    {
        if(!$this->repo->produtoById($id)) throw new InvalidArgumentException("Produto não encontrado.");

        if (trim($nome) === '' || trim($marca) === '' || empty($validade)) throw new InvalidArgumentException("Dados obrigatórios.");
    
        if ($quantidade < 0) throw new InvalidArgumentException("Quantidade não pode ser menor que zero.");

        if ($preco < 0) throw new InvalidArgumentException("Preço não pode ser menor que zero.");

        $this->repo->update($id, $nome, $quantidade, $marca, $validade, $preco);
    }

    // regra para deletar o produto
    public function delete(int $id): void
    {
        if(!$this->repo->produtoById($id)) throw new InvalidArgumentException("Produto não encontrado.");

        $this->repo->delete($id);
    }

    // regra para buscar o produto pelo id
    public function produtoById(int $id): ?array
    {
        return $this->repo->produtoById($id);
    }

}