<?php

namespace App\Database;

use PDO;

final class Conexao
{
    private string $host;
    private string $databaseName = 'atacadao';
    private int $port = 3306;
    private PDO $pdo;

    public function __construct()
    { 
        $this->host = getenv('DB_HOST') ?? '127.0.0.1';
        $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->databaseName};charset=utf8mb4";
        $user = 'presidente';
        $password = 'inferno';
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Mostra erros como exceções
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Retorna resultados como arrays associativos
            PDO::ATTR_EMULATE_PREPARES => false, // Desativa a emulação de prepared statements para maior segurança
        ];

        try {
            $this->pdo = new PDO($dsn, $user, $password, $options);
        } catch (\PDOException $e) {
            // Lida com erros de conexão
            throw new \Exception('Erro ao conectar ao banco de dados: ' . $e->getMessage());
        }
    }

    /**
     * Conecta ao banco de dados.
     *
     * @return PDO
     */
    public function connect(): PDO
    {
        return $this->pdo;
    }

}