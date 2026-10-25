<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Página não encontrada</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		:root {
			--preto: #101010;
			--vermelho: #dc3545;
			--cinza: #b7b7b7;
		}

		body {
			min-height: 100vh;
			background: linear-gradient(145deg, var(--preto) 0%, #292929 100%);
			color: #fff;
		}

		.erro-container {
			min-height: 100vh;
		}

		.erro-card {
			max-width: 620px;
			background-color: rgba(16, 16, 16, 0.94);
			border: 1px solid #4a4a4a;
			border-top: 5px solid var(--vermelho);
			box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.35);
		}

		.erro-codigo {
			color: var(--vermelho);
			font-size: clamp(4rem, 12vw, 7rem);
			font-weight: 800;
			line-height: 1;
		}

		.erro-texto {
			color: var(--cinza);
		}

		.btn-vermelho {
			background-color: var(--vermelho);
			border-color: var(--vermelho);
			color: #fff;
		}

		.btn-vermelho:hover,
		.btn-vermelho:focus {
			background-color: #bb2d3b;
			border-color: #b02a37;
			color: #fff;
		}
	</style>
</head>
<body>
	<main class="erro-container d-flex align-items-center justify-content-center p-4">
		<section class="erro-card rounded-3 text-center p-4 p-md-5" aria-labelledby="titulo-erro">
			<div class="erro-codigo mb-3">404</div>
			<h1 id="titulo-erro" class="h2 mb-3">Página não encontrada</h1>
			<p class="erro-texto fs-5 mb-4">
				Parece que o endereço acessado não existe ou foi movido.
				Vamos levar você para um lugar conhecido?
			</p>
			<div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
				<a href="<?= BASE_URL ?>" class="btn btn-vermelho px-4">Ir para a home</a>
				<a href="<?= BASE_URL ?>/create" class="btn btn-vermelho px-4">Criar produto</a>
			</div>
		</section>
	</main>
</body>
</html>
