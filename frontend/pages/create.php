<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
    <div>
        <a href="<?= BASE_URL ?>/read" class="text-decoration-none text-secondary">
            <i class="bi bi-arrow-left me-1"></i>
            Voltar para produtos
        </a>
        <h1 class="fw-bold mb-1 mt-2">
            <i class="bi bi-plus-circle text-danger me-2"></i>
            Novo produto
        </h1>
        <p class="text-secondary mb-0">Cadastre um produto no estoque do Atacadão Infernal.</p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-dark text-white py-3">
                <h2 class="h5 mb-0">
                    <i class="bi bi-box-seam text-danger me-2"></i>
                    Informações do produto
                </h2>
            </div>

            <div class="card-body p-4">
                <form action="<?= BASE_URL ?>/store" method="POST">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <label for="nome" class="form-label fw-semibold">Nome do produto</label>
                            <input type="text" class="form-control" id="nome" name="nome"
                                placeholder="Ex.: Arroz branco" maxlength="150" required>
                        </div>

                        <div class="col-md-4">
                            <label for="marca" class="form-label fw-semibold">Marca</label>
                            <input type="text" class="form-control" id="marca" name="marca"
                                placeholder="Ex.: Tio João" maxlength="100" required>
                        </div>

                        <div class="col-md-4">
                            <label for="quantidade" class="form-label fw-semibold">Quantidade</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="quantidade" name="quantidade"
                                    min="0" step="1" placeholder="0" required>
                                <span class="input-group-text">un.</span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="validade" class="form-label fw-semibold">Validade</label>
                            <input type="date" class="form-control" id="validade" name="validade" required>
                        </div>

                        <div class="col-md-4">
                            <label for="preco" class="form-label fw-semibold">Preço</label>
                            <div class="input-group">
                                <span class="input-group-text">R$</span>
                                <input type="number" class="form-control" id="preco" name="preco"
                                    min="0" step="0.01" placeholder="0,00" required>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="d-flex flex-column-reverse flex-sm-row justify-content-end gap-2">
                        <a href="<?= BASE_URL ?>/read" class="btn btn-outline-secondary">
                            <i class="bi bi-x-lg me-1"></i>
                            Cancelar
                        </a>
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-check-lg me-1"></i>
                            Cadastrar produto
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>