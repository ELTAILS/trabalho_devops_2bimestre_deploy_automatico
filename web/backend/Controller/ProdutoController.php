<?php

namespace App\Controller;
use App\Database\Conexao;
use App\Repository\ProdutoRepo;
use App\Service\ProdutoService;

class ProdutoController
{

    private ProdutoService $service;

    public function __construct()
    {
        $conexao = new Conexao();
        $repo = new ProdutoRepo($conexao->connect());
        $this->service = new ProdutoService($repo);
    }

    /**
     * Cria as paginas do site relacionadas ao produto.
     * @param string $page
     * @param array $data
     * @return void
     */
    public function render(string $page, string $titulo = "Atacadão", array $data = []): void
    {
        $title = $titulo;
        extract($data);
        require_once __DIR__ . '/../../frontend/componentes/header.php';
        require_once __DIR__ . "/../../frontend/pages/$page.php";
        require_once __DIR__ . '/../../frontend/componentes/footer.php';
    }

    // Paginas do produto
    public function index(): void
    {
        $produtos = $this->service->read() ?? [];
        $this->render('home', 'Atacadão infernal', ['produtos' => $produtos]);
    }

    public function read(): void
    {
        $produtos = $this->service->read();
        $this->render('produtos','Nossos Produtos', ['produtos' => $produtos]);
    }

    public function show(): void
    {
        $produto = $this->service->produtoById($_GET['id'] ?? 0);

        if(!isset($produto)) {
            header('Location: ' . BASE_URL . '/read');
            exit;
        }

        $this->render('show','Detalhes do Produto', ['produto' => $produto]);
    }

    public function create(): void
    {
        $this->render('create','Criar um novo Produto');
    }

    public function update(): void
    {
        $produto = $this->service->produtoById($_GET['id'] ?? 0);

        if(!isset($produto)) {
            header('Location: ' . BASE_URL . '/read');
            exit;
        }

        $this->render('update','Atualizar Produto', ['produto' => $produto]);
    }

    public function sobre(): void
    {
        $this->render('sobre','Sobre Nós');
    }

    // Redirecionando a Logica de negocio

    public function store(): void
    {
        $nome = $_POST['nome'] ?? '';
        $quantidade = $_POST['quantidade'] ?? 0;
        $marca = $_POST['marca'] ?? '';
        $validade = $_POST['validade'] ?? '';
        $preco = $_POST['preco'] ?? 0.0;

        $this->service->create($nome, $quantidade, $marca, $validade, $preco);
        header('Location: ' . BASE_URL . '/read');
        exit;
    }

    public function edit(): void
    {
        $id = $_GET['id'] ?? 0;
        $nome = $_POST['nome'] ?? '';
        $quantidade = $_POST['quantidade'] ?? 0;
        $marca = $_POST['marca'] ?? '';
        $validade = $_POST['validade'] ?? '';
        $preco = $_POST['preco'] ?? 0.0;

        $this->service->update($id, $nome, $quantidade, $marca, $validade, $preco);
        header('Location: ' . BASE_URL . '/read');
        exit;
    }

    public function delete(): void
    {
        $id = $_GET['id'] ?? 0;
        $this->service->delete($id);
        header('Location: ' . BASE_URL . '/read');
        exit;
    }
}