<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</main>
    <footer class="site-footer mt-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <a class="footer-brand d-inline-flex align-items-center gap-2 mb-3" href="<?= BASE_URL ?>">
                        <i class="bi bi-fire fs-4"></i>
                        <span>Atacadão Infernal</span>
                    </a>

                    <p class="footer-text mb-4">
                        O mercado digital que facilita suas compras com produtos de
                        qualidade, preços acessíveis e um atendimento que não deixa
                        ninguém na mão.
                    </p>

                    <p class="footer-text mb-0">
                        &copy; <?= date('Y') ?> Atacadão Infernal. Todos os direitos reservados.
                    </p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h2 class="footer-title">Entre em contato</h2>

                    <div class="footer-contact">
                        <i class="bi bi-geo-alt footer-icon"></i>
                        <span>Rua das Chamas, 250<br>Goiânia - GO, 74000-000</span>
                    </div>
                    <div class="footer-contact">
                        <i class="bi bi-telephone footer-icon"></i>
                        <span>(62) 4000-2500</span>
                    </div>
                    <div class="footer-contact">
                        <i class="bi bi-envelope footer-icon"></i>
                        <a href="mailto:contato@atacadaoinfernal.com.br">
                            contato@atacadaoinfernal.com.br
                        </a>
                    </div>

                    <div class="footer-contact">
                        <i class="bi bi-telephone footer-icon"></i>
                        <a href="tel:+556240002500">(62) 4000-2500</a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h2 class="footer-title">Navegação</h2>

                    <a class="footer-link" href="<?= BASE_URL ?>">Início</a>
                    <a class="footer-link" href="<?= BASE_URL ?>/read">Produtos</a>
                    <a class="footer-link" href="<?= BASE_URL ?>/create">Cadastrar produto</a>
                    <a class="footer-link" href="<?= BASE_URL ?>/sobre">Sobre nós</a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="mb-3">
                        <span class="footer-social" aria-label="Wagner Junior">WJ</span>
                        <span class="footer-social" aria-label="Adrian Arcanjo">AA</span>
                    </div>

                    <p class="footer-text mb-0">
                        Projeto desenvolvido por Wagner Junior e Adrian Arcanjo,
                        unindo tecnologia e criatividade para criar uma experiência
                        simples para o seu mercado.
                    </p>
                </div>
            </div>

            <hr class="footer-divider my-4">

            <p class="footer-text mb-0 text-center">
                Atacadão Infernal — preços que queimam, qualidade que surpreende.
            </p>
        </div>
    </footer>
</body>
</html>
