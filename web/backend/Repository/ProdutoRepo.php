<?php

namespace App\Repository;

use PDO;

class ProdutoRepo
{
    public function __construct(private PDO $pdo){}

    // Cria um novo produto
    public function create(string $nome, int $quantidade, string $marca, string $validade, float $preco): void
    {
        $sql = "INSERT INTO produtos (nome, quantidade, marca, validade, preco, created_at, updated_at) VALUES (:nome, :quantidade, :marca, :validade, :preco, NOW(), NOW())";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':quantidade', $quantidade);
        $stmt->bindParam(':marca', $marca);
        $stmt->bindParam(':validade', $validade);
        $stmt->bindParam(':preco', $preco);
        $stmt->execute();
    }

    // Lista todos os produtos
    public function read(): ?array
    {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: null;
    }

    // Atualiza um produto existente
    public function update(int $id, string $nome, int $quantidade, string $marca, string $validade, float $preco): void
    {
        $sql = "UPDATE produtos SET nome = :nome, quantidade = :quantidade, marca = :marca, validade = :validade, preco = :preco, updated_at = NOW() WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':quantidade', $quantidade);
        $stmt->bindParam(':marca', $marca);
        $stmt->bindParam(':validade', $validade);
        $stmt->bindParam(':preco', $preco);
        $stmt->execute();
    }

    // Deleta um produto
    public function delete(int $id): void
    {
        $sql = "DELETE FROM produtos WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    // Busca um produto pelo ID
    public function produtoById(int $id): ?array
    {
        $sql = "SELECT * FROM produtos WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

}