<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
    <div>
        <h1 class="fw-bold mb-1"> <i class="bi bi-box-seam text-danger"></i> Produtos </h1>
        <p class="text-secondary mb-0">
            Gerencie os produtos cadastrados no Atacadão Infernal.
        </p>
    </div>

    <a href="<?= BASE_URL ?>/create" class="btn btn-danger">
        <i class="bi bi-plus-lg me-1"></i>
        Novo Produto
    </a>

</div>
<div class="card border-0 shadow-sm">
    <div class="card-header bg-dark text-white py-3">
        <div class="d-flex align-items-center justify-content-between">
            <span class="fw-bold">
                <i class="bi bi-fire text-danger me-2"></i>
                Lista de Produtoss
            </span>

            <span class="badge bg-danger">
                <?= count($produtos) ?? 0 ?> produtos
            </span>
        </div>
    </div>

    <div class="card-body p-0">

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">

                <thead class="table-dark">
                    <tr>
                        <th class="ps-4">ID</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Marca</th>
                        <th>Validade</th>
                        <th>Preço</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>

                    <?php if(isset($produtos)): ?>
                        <?php $id = 1; foreach ($produtos as $produto) : ?>

                            <tr>

                                <td class="ps-4 fw-bold text-secondary">
                                    #<?= $id++ ?>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="bg-danger bg-opacity-10 text-danger rounded p-2">
                                            <i class="bi bi-box-seam"></i>
                                        </div>

                                        <span class="fw-semibold">
                                            <?= $produto['nome'] ?>
                                        </span>
                                    </div>
                                </td>

                                <td>
                                    <span class="badge bg-secondary">
                                        <?= $produto['quantidade'] ?> unidades
                                    </span>
                                </td>

                                <td>
                                    <?= $produto['marca'] ?>
                                </td>

                                <td>
                                    <?= date('d/m/Y', strtotime($produto['validade'])) ?>
                                </td>

                                <td class="fw-bold text-success">
                                    R$ <?= number_format($produto['preco'], 2, ',', '.') ?>
                                </td>

                                <td class="text-center">

                                    <div class="btn-group" role="group">

                                        <a href="<?= BASE_URL ?>/show&id=<?= $produto['id'] ?>"
                                            class="btn btn-sm btn-outline-primary" title="Mostrar detalhes">
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        <a href="<?= BASE_URL ?>/update&id=<?= $produto['id'] ?>"
                                            class="btn btn-sm btn-outline-primary" title="Editar produto">
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        <a href="<?= BASE_URL ?>/delete&id=<?= $produto['id'] ?>"
                                            class="btn btn-sm btn-outline-danger" title="Excluir produto"
                                            onclick="return confirm('Tem certeza que deseja excluir este produto?')">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        

                                    </div>

                                </td>

                            </tr>

                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center text-muted">
                                Nenhum produto cadastrado.
                            </td>
                        </tr>
                    <?php endif; ?>

                </tbody>

            </table>
        </div>

    </div>

</div> 