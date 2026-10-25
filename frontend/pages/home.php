<?php
$produtos = $produtos ?? [];
$produtosEmDestaque = array_slice($produtos, 0, 3);
$quantidadeTotal = array_sum(array_map(
	static fn(array $produto): int => (int) ($produto['quantidade'] ?? 0),
	$produtos
));
?>

<section class="bg-dark text-white rounded-4 shadow-sm overflow-hidden mb-5">
	<div class="row g-0 align-items-center">
		<div class="col-lg-7 p-4 p-md-5">
			<span class="badge text-bg-danger text-uppercase mb-3">Atacadão Infernal</span>
			<h1 class="display-5 fw-bold mb-3">Tudo para o seu negócio continuar em alta.</h1>
			<p class="lead text-white-50 mb-4">
				Encontre produtos de qualidade, acompanhe seu estoque e mantenha sua operação organizada em um só lugar.
			</p>
			<div class="d-flex flex-wrap gap-2">
				<a href="<?= BASE_URL ?>/read" class="btn btn-danger btn-lg">
					<i class="bi bi-box-seam me-2"></i>Ver produtos
				</a>
				<a href="<?= BASE_URL ?>/sobre" class="btn btn-outline-light btn-lg">
					Conheça o Atacadão
				</a>
			</div>
		</div>
		<div class="col-lg-5 bg-danger bg-gradient d-flex align-items-center justify-content-center p-5">
			<i class="bi bi-fire text-white" style="font-size: 9rem;" aria-hidden="true"></i>
		</div>
	</div>
</section>

<section class="mb-5" aria-labelledby="resumo-titulo">
	<div class="d-flex justify-content-between align-items-end mb-3">
		<div>
			<p class="text-danger text-uppercase fw-bold small mb-1">Visão geral</p>
			<h2 id="resumo-titulo" class="h3 fw-bold mb-0">Resumo do estoque</h2>
		</div>
		<i class="bi bi-bar-chart-line text-danger fs-2" aria-hidden="true"></i>
	</div>

	<div class="row g-3">
		<div class="col-md-4">
			<div class="card border-0 shadow-sm h-100">
				<div class="card-body">
					<i class="bi bi-boxes text-danger fs-3"></i>
					<p class="text-secondary mb-1 mt-3">Produtos cadastrados</p>
					<strong class="fs-2"><?= count($produtos) ?></strong>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card border-0 shadow-sm h-100">
				<div class="card-body">
					<i class="bi bi-stack text-danger fs-3"></i>
					<p class="text-secondary mb-1 mt-3">Itens em estoque</p>
					<strong class="fs-2"><?= $quantidadeTotal ?></strong>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card border-0 shadow-sm h-100">
				<div class="card-body">
					<i class="bi bi-shield-check text-danger fs-3"></i>
					<p class="text-secondary mb-1 mt-3">Gestão simplificada</p>
					<strong class="fs-2">24/7</strong>
				</div>
			</div>
		</div>
	</div>
</section>

<section aria-labelledby="destaques-titulo">
	<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-2 mb-3">
		<div>
			<p class="text-danger text-uppercase fw-bold small mb-1">Seleção do estoque</p>
			<h2 id="destaques-titulo" class="h3 fw-bold mb-0">Produtos em destaque</h2>
		</div>
		<a href="<?= BASE_URL ?>/read" class="link-danger fw-semibold text-decoration-none">Ver catálogo completo <i class="bi bi-arrow-right"></i></a>
	</div>

	<?php if ($produtosEmDestaque): ?>
		<div class="row g-3">
			<?php foreach ($produtosEmDestaque as $produto): ?>
				<div class="col-md-4">
					<article class="card border-0 shadow-sm h-100">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-start mb-3">
								<span class="bg-danger bg-opacity-10 text-danger rounded p-2"><i class="bi bi-box-seam"></i></span>
								<span class="badge text-bg-secondary"><?= (int) ($produto['quantidade'] ?? 0) ?> unidades</span>
							</div>
							<h3 class="h5 fw-bold"><?= htmlspecialchars($produto['nome'] ?? 'Produto') ?></h3>
							<p class="text-secondary mb-3"><?= htmlspecialchars($produto['marca'] ?? 'Marca não informada') ?></p>
							<strong class="text-success">R$ <?= number_format((float) ($produto['preco'] ?? 0), 2, ',', '.') ?></strong>
						</div>
					</article>
				</div>
			<?php endforeach; ?>
		</div>
	<?php else: ?>
		<div class="alert alert-light border shadow-sm mb-0">
			<i class="bi bi-info-circle text-danger me-2"></i>
			Ainda não há produtos cadastrados para destacar.
		</div>
	<?php endif; ?>
</section>