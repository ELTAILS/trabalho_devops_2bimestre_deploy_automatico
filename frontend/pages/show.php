<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
    <div>
        <a href="<?= BASE_URL ?>/read" class="text-decoration-none text-secondary">
            <i class="bi bi-arrow-left me-1"></i>
            Voltar para produtos
        </a>
        <h1 class="fw-bold mb-1 mt-2">
            <i class="bi bi-box-seam text-danger me-2"></i>
            <?= htmlspecialchars($produto['nome']) ?>
        </h1>
        <p class="text-secondary mb-0">Detalhes do produto cadastrado.</p>
    </div>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-header bg-dark text-white py-3">
        <h2 class="h5 mb-0">
            <i class="bi bi-info-circle text-danger me-2"></i>
            Informações do produto
        </h2>
    </div>

    <div class="card-body">
        <div class="row g-4">
            <div class="col-md-6">
                <span class="text-secondary d-block small">Nome</span>
                <strong><?= htmlspecialchars($produto['nome']) ?></strong>
            </div>

            <div class="col-md-6">
                <span class="text-secondary d-block small">Quantidade</span>
                <span class="badge bg-secondary">
                    <?= (int) $produto['quantidade'] ?> unidades
                </span>
            </div>

            <div class="col-md-6">
                <span class="text-secondary d-block small">Marca</span>
                <strong><?= htmlspecialchars($produto['marca']) ?></strong>
            </div>

            <div class="col-md-6">
                <span class="text-secondary d-block small">Validade</span>
                <strong><?= date('d/m/Y', strtotime($produto['validade'])) ?></strong>
            </div>

            <div class="col-12 border-top pt-3">
                <span class="text-secondary d-block small">Preço</span>
                <strong class="text-success fs-3">
                    R$ <?= number_format((float) $produto['preco'], 2, ',', '.') ?>
                </strong>
            </div>
        </div>
    </div>
</div>