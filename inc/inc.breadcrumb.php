<section class="position-relative d-flex align-items-center justify-content-center text-white"
    style="min-height: 60vh; margin-top: 6rem; background: linear-gradient(to bottom right, #064e3b, #111827);">
    <!-- Overlay escuro -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-50"></div>

    <!-- Imagem de fundo -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-cover bg-center"
        style="background-image: url('img/banners/bg-breadcrumb.jpg');     box-shadow: inset 0 0 0 1000px rgb(0 76 46 / 70%);">
    </div>

    <!-- Conteúdo central -->
    <div class="position-relative z-1 container text-center px-4">
        <div class="mx-auto" style="max-width: 960px;">
            <h1 class="display-4 fw-bold mb-4 lh-tight">
                <?= $title ?>
            </h1>
            <?php if (isset($hasSubtitle)): ?>
            <p class="fs-4 text-light mb-5" style="max-width: 720px; margin-inline: auto;">
                Mais de 25 anos construindo soluções que movem a indústria brasileira
            </p>
            <?php endif; ?>
        </div>
    </div>
</section>