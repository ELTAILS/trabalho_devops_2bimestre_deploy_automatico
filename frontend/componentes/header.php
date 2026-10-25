<?php ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Atacadão Infernal - Preços que queimam,Creator: Wagner, Hiago e Adrian">
    <title><?= $title ?? 'Atacadão Infernal' ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="bg-light">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-danger border-3">
            <div class="container">
                <a href="index.php" class="navbar-brand d-flex align-items-center gap-2 mx-auto mx-lg-0">
                    <span class="bg-danger rounded-3 p-2">
                        <i class="bi bi-fire fs-4"></i>
                    </span>

                    <span>
                        <span class="fw-bold text-uppercase">
                            Atacadão Infernal
                        </span>

                        <small class="d-block text-danger">
                            Preços que queimam
                        </small>
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarInfernal"
                    aria-controls="navbarInfernal" aria-expanded="false" aria-label="Abrir menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarInfernal">
                    <ul class="navbar-nav align-items-lg-center">

                        <li class="nav-item">
                            <a class="nav-link active px-3" href="index.php">
                                <i class="bi bi-house-door me-1"></i>
                                Início
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link px-3" href="<?= BASE_URL ?>/read">
                                <i class="bi bi-box-seam me-1"></i>
                                Produtos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="<?= BASE_URL ?>/sobre">
                                <i class="bi bi-info-circle me-1"></i>
                                Sobre nós
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <main class="container py-4">