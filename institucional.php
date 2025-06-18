<?php include 'inc/inc.seo.php' ?>
<?php
$segmentosAtuacao = [
    [
        "nome"      => "Mineração",
        "descricao" => "Soluções robustas para operações de extração e beneficiamento mineral",
        "svg"       => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mountain w-8 h-8 text-emerald-800 group-hover:text-white"><path d="m8 3 4 8 5-5 5 15H2L8 3z"></path></svg>'
    ],
    [
        "nome"      => "Construção Civil",
        "descricao" => "Equipamentos para obras de grande porte e infraestrutura",
        "svg"       => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building w-8 h-8 text-emerald-800 group-hover:text-white"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect><path d="M9 22v-4h6v4"></path><path d="M8 6h.01"></path><path d="M16 6h.01"></path><path d="M12 6h.01"></path><path d="M12 10h.01"></path><path d="M12 14h.01"></path><path d="M16 10h.01"></path><path d="M16 14h.01"></path><path d="M8 10h.01"></path><path d="M8 14h.01"></path></svg>'
    ],
    [
        "nome"      => "Locadores de Equipamentos",
        "descricao" => "Produtos confiáveis para empresas de locação industrial",
        "svg"       => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-truck w-8 h-8 text-emerald-800 group-hover:text-white"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"></path><path d="M15 18H9"></path><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"></path><circle cx="17" cy="18" r="2"></circle><circle cx="7" cy="18" r="2"></circle></svg>'
    ],
    [
        "nome"      => "Esportes Radicais",
        "descricao" => "Equipamentos de segurança para atividades de aventura",
        "svg"       => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mountain w-8 h-8 text-emerald-800 group-hover:text-white"><path d="m8 3 4 8 5-5 5 15H2L8 3z"></path></svg>'
    ],
    [
        "nome"      => "Transportes Pesados",
        "descricao" => "Sistemas de amarração e movimentação de cargas especiais",
        "svg"       => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-truck w-8 h-8 text-emerald-800 group-hover:text-white"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"></path><path d="M15 18H9"></path><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"></path><circle cx="17" cy="18" r="2"></circle><circle cx="7" cy="18" r="2"></circle></svg>'
    ],
    [
        "nome"      => "Elevadores",
        "descricao" => "Cabos e componentes para sistemas de elevação vertical",
        "svg"       => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap w-8 h-8 text-emerald-800 group-hover:text-white"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>'
    ],
    [
        "nome"      => "Segurança",
        "descricao" => "Equipamentos de proteção individual e coletiva",
        "svg"       => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-8 h-8 text-emerald-800 group-hover:text-white"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>'
    ],
    [
        "nome"      => "Pesca",
        "descricao" => "Cabos e redes para embarcações pesqueiras industriais",
        "svg"       => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-fish w-8 h-8 text-emerald-800 group-hover:text-white"><path d="M6.5 12c.94-3.46 4.94-6 8.5-6 3.56 0 6.06 2.54 7 6-.94 3.47-3.44 6-7 6s-7.56-2.53-8.5-6Z"></path><path d="M18 12v.5"></path><path d="M16 17.93a9.77 9.77 0 0 1 0-11.86"></path><path d="M7 10.67C7 8 5.58 5.97 2.73 5.5c-1 1.5-1 5 .23 6.5-1.24 1.5-1.24 5-.23 6.5C5.58 18.03 7 16 7 13.33"></path><path d="M10.46 7.26C10.2 5.88 9.17 4.24 8 3h5.8a2 2 0 0 1 1.98 1.67l.23 1.4"></path><path d="m16.01 17.93-.23 1.4A2 2 0 0 1 13.8 21H9.5a5.96 5.96 0 0 0 1.49-3.98"></path></svg>'
    ],
    [
        "nome"      => "Agrobusiness",
        "descricao" => "Soluções para maquinário agrícola e armazenagem",
        "svg"       => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wheat w-8 h-8 text-emerald-800 group-hover:text-white"><path d="M2 22 16 8"></path><path d="M3.47 12.53 5 11l1.53 1.53a3.5 3.5 0 0 1 0 4.94L5 19l-1.53-1.53a3.5 3.5 0 0 1 0-4.94Z"></path><path d="M7.47 8.53 9 7l1.53 1.53a3.5 3.5 0 0 1 0 4.94L9 15l-1.53-1.53a3.5 3.5 0 0 1 0-4.94Z"></path><path d="M11.47 4.53 13 3l1.53 1.53a3.5 3.5 0 0 1 0 4.94L13 11l-1.53-1.53a3.5 3.5 0 0 1 0-4.94Z"></path><path d="M20 2h2v2a4 4 0 0 1-4 4h-2V6a4 4 0 0 1 4-4Z"></path><path d="M11.47 17.47 13 19l-1.53 1.53a3.5 3.5 0 0 1-4.94 0L5 19l1.53-1.53a3.5 3.5 0 0 1 4.94 0Z"></path><path d="M15.47 13.47 17 15l-1.53 1.53a3.5 3.5 0 0 1-4.94 0L9 15l1.53-1.53a3.5 3.5 0 0 1 4.94 0Z"></path><path d="M19.47 9.47 21 11l-1.53 1.53a3.5 3.5 0 0 1-4.94 0L13 11l1.53-1.53a3.5 3.5 0 0 1 4.94 0Z"></path></svg>'
    ],
    [
        "nome"      => "Indústrias Sucroalcooleiras",
        "descricao" => "Equipamentos para usinas de açúcar e álcool",
        "svg"       => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-factory w-8 h-8 text-emerald-800 group-hover:text-white"><path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"></path><path d="M17 18h1"></path><path d="M12 18h1"></path><path d="M7 18h1"></path></svg>'
    ],
    [
        "nome"      => "Naval e Offshore",
        "descricao" => "Produtos marinhos para embarcações e plataformas",
        "svg"       => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ship w-8 h-8 text-emerald-800 group-hover:text-white"><path d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1 .6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"></path><path d="M19.38 20A11.6 11.6 0 0 0 21 14l-9-4-9 4c0 2.9.94 5.34 2.81 7.76"></path><path d="M19 13V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v6"></path><path d="M12 10v4"></path><path d="M12 2v3"></path></svg>'
    ],
    [
        "nome"      => "Automobilística",
        "descricao" => "Componentes para indústria automotiva e autopeças",
        "svg"       => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-car w-8 h-8 text-emerald-800 group-hover:text-white"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"></path><circle cx="7" cy="17" r="2"></circle><path d="M9 17h6"></path><circle cx="17" cy="17" r="2"></circle></svg>'
    ],
    [
        "nome"      => "Metal Mecânica",
        "descricao" => "Soluções para usinagem e fabricação de componentes",
        "svg"       => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hammer w-8 h-8 text-emerald-800 group-hover:text-white"><path d="m15 12-8.373 8.373a1 1 0 1 1-3-3L12 9"></path><path d="m18 15 4-4"></path><path d="m21.5 11.5-1.914-1.914A2 2 0 0 1 19 8.172V7l-2.26-2.26a6 6 0 0 0-4.202-1.756L9 2.96l.92.82A6.18 6.18 0 0 1 12 8.4V10l2 2h1.172a2 2 0 0 1 1.414.586L18.5 14.5"></path></svg>'
    ],
    [
        "nome"      => "Siderúrgica e Petroquímica",
        "descricao" => "Equipamentos resistentes para ambientes extremos",
        "svg"       => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-flame w-8 h-8 text-emerald-800 group-hover:text-white"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"></path></svg>'
    ],
];
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.css" />
</head>

<body>
    <!-- header-start -->
    <?php include 'inc/inc.header.php' ?>
    <!-- header-end -->

    <!--? Hero Start -->
    <?php include 'inc/inc.breadcrumb.php' ?>
    <!-- Hero End -->
    <section class="py-5 bg-white">
        <div class="container px-4">
            <div class="row align-items-center g-5">

                <!-- Texto -->
                <div class="col-lg-6">
                    <div
                        class="d-inline-flex align-items-center bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill text-sm fw-medium mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="me-2"
                            viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="6" fill="none" stroke="currentColor" stroke-width="2" />
                            <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11" fill="none" stroke="currentColor"
                                stroke-width="2" />
                        </svg>
                        Sobre a Acro Cabos
                    </div>

                    <h2 class="display-5 fw-bold text-dark mb-4">Construindo o Futuro da Indústria</h2>
                    <p class="mb-3">
                        Desde 1999 a Acro Cabos de Aço oferece soluções para os mais variados projetos de elevação,
                        amarração e movimentação de cargas.


                    </p>
                    <p class="mb-4">
                        Considerada uma das 3 principais distribuidoras nacionais de cabos de aço, contamos também com
                        uma linha completa de acessórios, linhas Grau 8 e Grau 10, correntes, cordas, cabos navais,
                        cabos PVC e Nylon, cintas de elevação e amarração de cargas, mais equipamentos, serviços
                        especializados e treinamentos.
                    </p>

                    <!-- Números -->
                    <div class="row text-center g-3 mb-4">
                        <div class="col-6">
                            <div class="bg-light rounded p-3">
                                <div class="h2 text-success fw-bold mb-1">500+</div>
                                <small class="text-muted">Clientes Ativos</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light rounded p-3">
                                <div class="h2 text-success fw-bold mb-1">25+</div>
                                <small class="text-muted">Anos de Mercado</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Imagem com selo -->
                <div class="col-lg-6 position-relative">
                    <div class="rounded-4 shadow-lg overflow-hidden position-relative">
                        <img src="https://images.pexels.com/photos/3862132/pexels-photo-3862132.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop"
                            alt="Equipe Acro Cabos" class="img-fluid w-100" style="height: 24rem; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 w-100 h-100"
                            style="background: linear-gradient(to top, rgba(0,0,0,0.5), transparent);"></div>
                    </div>

                    <!-- Selo ISO -->
                    <div class="position-absolute translate-middle bg-warning rounded-3 shadow p-3"
                        style="bottom: -1rem; right: -1rem;">
                        <div class="text-center">
                            <div class="h4 fw-bold text-dark mb-0">ISO 9001</div>
                            <small class="text-muted">Certificado</small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="segments py-5 bg-light">
        <div class="container px-4">
            <div class="text-center mb-5">
                <div
                    class="d-inline-flex align-items-center bg-success bg-opacity-25 text-success px-3 py-2 rounded-pill mb-3 small fw-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                        class="me-2">
                        <path d="M12 16h.01" />
                        <path d="M16 16h.01" />
                        <path
                            d="M3 19a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.5a.5.5 0 0 0-.769-.422l-4.462 2.844A.5.5 0 0 1 15 10.5v-2a.5.5 0 0 0-.769-.422L9.77 10.922A.5.5 0 0 1 9 10.5V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2z" />
                        <path d="M8 16h.01" />
                    </svg>
                    Segmentos de Atuação
                </div>
                <h2 class="title mb-3">Principais Segmentos de Atuação</h2>
                <p class="subtitle mx-auto" style="max-width: 720px;">Atendemos uma ampla gama de setores
                    industriais com soluções especializadas e produtos certificados para cada aplicação específica</p>
            </div>

            <div class="row g-4 mb-5">
                <?php foreach ($segmentosAtuacao as $segmento): ?>
                <div class="col-12 mb-3 col-md-6 col-lg-4 col-xl-3">
                    <div class="card border-0 shadow h-100 text-center transition">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div
                                class="rounded-circle bg-success bg-opacity-25 d-flex justify-content-center align-items-center mb-3">
                                <?= $segmento['svg']; ?>
                            </div>
                            <h5 class="card-title fw-bold text-dark">
                                <?= htmlspecialchars($segmento['nome'], ENT_QUOTES, 'UTF-8'); ?>
                            </h5>
                            <p class="text-muted small">
                                <?= htmlspecialchars($segmento['descricao'], ENT_QUOTES, 'UTF-8'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- CTA Final -->
            <div class="bg-success text-white rounded-4 p-5 text-center">
                <h3 class="title text-white fw-bold mb-3">E muito mais!</h3>
                <p class="subtitle text-white mb-4 mx-auto">
                    Nossa expertise se estende a diversos outros setores industriais. Entre em contato conosco para
                    descobrir como podemos atender às necessidades específicas do seu segmento.
                </p>
                <a href="#" class="btn btnSecondary px-4 py-2">Consulte Nossos Especialistas</a>
            </div>
        </div>
    </section>
    <section class="py-5 bg-white">
        <div class="container px-4">
            <div class="text-center mb-5">
                <div
                    class="d-inline-flex align-items-center bg-success bg-opacity-10 text-success px-3 py-1 rounded-pill text-sm fw-medium mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="me-2"
                        viewBox="0 0 24 24">
                        <polygon points="5 3 19 12 5 21 5 3"></polygon>
                    </svg>
                    Conheça Nossa Empresa
                </div>
                <h2 class="title mb-3">Veja Como Trabalhamos</h2>
                <p class="subtitle mx-auto" style="max-width: 48rem;">
                    Descubra nossos processos, instalações e o comprometimento da nossa equipe em entregar soluções
                    industriais de excelência
                </p>
            </div>

            <div class="mx-auto" style="max-width: 64rem;">
                <div class="position-relative bg-dark rounded-4 overflow-hidden shadow-lg">
                    <div class="ratio ratio-16x9">
                        <img src="img/videoframe_0.png" alt="Vídeo institucional Acro Cabos"
                            class="w-100 h-100 object-fit-cover">
                        <div
                            class="position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-50 d-flex justify-content-center align-items-center">
                            <a href="https://www.acrocabo.com.br/video/institucional.mp4" data-fancybox data-width="640"
                                data-height="360">

                                <button class="videoBtn btn-lg rounded-circle shadow"
                                    style="width: 5rem; height: 5rem; transition: transform 0.3s;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none"
                                        stroke="#212529" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        viewBox="0 0 24 24" class="ms-1">
                                        <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="videoTitle position-absolute bottom-0 start-0 end-0 p-3"
                        style="background: linear-gradient(to top, rgba(0,0,0,.8), transparent);">
                        <h3 class="text-white fs-5 fw-bold mb-1">Acro Cabos - Institucional 2024</h3>
                        <p class="text-white-50 small mb-0">Conheça nossa história, processos e compromisso com a
                            excelência</p>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
                    <div class="col">
                        <div class="text-center p-4 bg-light rounded-4 h-100">
                            <div class="bg-success bg-opacity-10 rounded-3 d-flex align-items-center justify-content-center mx-auto mb-3"
                                style="width: 3rem; height: 3rem;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    stroke="#2f855a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    viewBox="0 0 24 24" class="w-75 h-75">
                                    <path
                                        d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z">
                                    </path>
                                    <path d="M17 18h1"></path>
                                    <path d="M12 18h1"></path>
                                    <path d="M7 18h1"></path>
                                </svg>
                            </div>
                            <h4 class="fw-semibold text-dark mb-2">Nossas Instalações</h4>
                            <p class="small text-secondary mb-0">Conheça nossa moderna infraestrutura industrial</p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="text-center p-4 bg-light rounded-4 h-100">
                            <div class="bg-success bg-opacity-10 rounded-3 d-flex align-items-center justify-content-center mx-auto mb-3"
                                style="width: 3rem; height: 3rem;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    stroke="#2f855a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    viewBox="0 0 24 24" class="w-75 h-75">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <h4 class="fw-semibold text-dark mb-2">Nossa Equipe</h4>
                            <p class="small text-secondary mb-0">Profissionais especializados e comprometidos</p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="text-center p-4 bg-light rounded-4 h-100">
                            <div class="bg-success bg-opacity-10 rounded-3 d-flex align-items-center justify-content-center mx-auto mb-3"
                                style="width: 3rem; height: 3rem;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    stroke="#2f855a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    viewBox="0 0 24 24" class="w-75 h-75">
                                    <circle cx="12" cy="8" r="6"></circle>
                                    <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path>
                                </svg>
                            </div>
                            <h4 class="fw-semibold text-dark mb-2">Qualidade</h4>
                            <p class="small text-secondary mb-0">Processos certificados e controle rigoroso</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container px-4">

            <!-- Título principal -->
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-dark mb-3">Nossos Pilares</h2>
                <p class="fs-4 text-secondary mx-auto" style="max-width: 768px;">
                    Os valores que guiam nossa empresa e definem nossa identidade
                </p>
            </div>

            <!-- Blocos: Missão, Visão, Valores -->
            <div class="row g-4 mb-5">
                <div class="col-md-4 mb-4">
                    <div class="bg-white rounded-4 shadow text-center p-4 h-100">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                            style="width: 64px; height: 64px; background-color: #d1fae5;">
                            <!-- Ícone Target -->
                            <svg width="32" height="32" fill="none" stroke="#065f46" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" />
                                <circle cx="12" cy="12" r="6" />
                                <circle cx="12" cy="12" r="2" />
                            </svg>
                        </div>
                        <h3 class="h4 fw-bold text-dark mb-3">Missão</h3>
                        <p class="text-muted">
                            Oferecer soluções para seus clientes nas operações de elevação, amarração e movimentação de
                            cargas através de conhecimentos técnicos capazes de garantir segurança, qualidade e um
                            relacionamento duradouro.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="bg-white rounded-4 shadow text-center p-4 h-100">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                            style="width: 64px; height: 64px; background-color: #d1fae5;">
                            <!-- Ícone Eye -->
                            <svg width="32" height="32" fill="none" stroke="#065f46" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                        </div>
                        <h3 class="h4 fw-bold text-dark mb-3">Visão</h3>
                        <p class="text-muted">
                            Manter-se referência nacional em soluções para elevação, amarração e movimentação de cargas
                            e expandir seus negócios para o mercado internacional.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="bg-white rounded-4 shadow text-center p-4 h-100">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                            style="width: 64px; height: 64px; background-color: #d1fae5;">
                            <!-- Ícone Heart -->
                            <svg width="32" height="32" fill="none" stroke="#065f46" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path
                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                            </svg>
                        </div>
                        <h3 class="h4 fw-bold text-dark mb-3">Valores</h3>
                        <p class="text-muted">
                            • Integridade e Ética • Trabalho em Equipe • Compromisso com o Cliente • Qualidade •
                            Respeito aos Colaboradores • Inovação • Foco em resultados
                        </p>
                    </div>
                </div>
            </div>

            <!-- Mini Cards de Valores -->
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="bg-white rounded-3 text-center p-4 h-100 shadow-sm hover-shadow transition">
                        <div class="d-flex align-items-center justify-content-center mx-auto mb-3 rounded"
                            style="width: 48px; height: 48px; background-color: #d1fae5;">
                            <!-- Award Icon -->
                            <svg width="24" height="24" fill="none" stroke="#065f46" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <circle cx="12" cy="8" r="6" />
                                <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11" />
                            </svg>
                        </div>
                        <h4 class="fw-semibold text-dark mb-2">Excelência</h4>
                        <p class="text-muted small">Buscamos constantemente a perfeição em nossos produtos e serviços
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="bg-white rounded-3 text-center p-4 h-100 shadow-sm hover-shadow transition">
                        <div class="d-flex align-items-center justify-content-center mx-auto mb-3 rounded"
                            style="width: 48px; height: 48px; background-color: #d1fae5;">
                            <!-- Users Icon -->
                            <svg width="24" height="24" fill="none" stroke="#065f46" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <h4 class="fw-semibold text-dark mb-2">Compromisso</h4>
                        <p class="text-muted small">Dedicação total ao sucesso e satisfação de nossos clientes</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="bg-white rounded-3 text-center p-4 h-100 shadow-sm hover-shadow transition">
                        <div class="d-flex align-items-center justify-content-center mx-auto mb-3 rounded"
                            style="width: 48px; height: 48px; background-color: #d1fae5;">
                            <!-- Globe Icon -->
                            <svg width="24" height="24" fill="none" stroke="#065f46" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                                <path d="M2 12h20" />
                            </svg>
                        </div>
                        <h4 class="fw-semibold text-dark mb-2">Sustentabilidade</h4>
                        <p class="text-muted small">Responsabilidade ambiental e social em todas nossas operações</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="bg-white rounded-3 text-center p-4 h-100 shadow-sm hover-shadow transition">
                        <div class="d-flex align-items-center justify-content-center mx-auto mb-3 rounded"
                            style="width: 48px; height: 48px; background-color: #d1fae5;">
                            <!-- Target Icon -->
                            <svg width="24" height="24" fill="none" stroke="#065f46" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" />
                                <circle cx="12" cy="12" r="6" />
                                <circle cx="12" cy="12" r="2" />
                            </svg>
                        </div>
                        <h4 class="fw-semibold text-dark mb-2">Inovação</h4>
                        <p class="text-muted small">Investimento contínuo em tecnologia e desenvolvimento</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 ctaInt" style="background-color: #065f46;">
        <div class="container text-center text-white">

            <!-- Título e subtítulo -->
            <h2 class="display-5 fw-bold mb-3">Faça parte da Nossa História</h2>
            <p class="subtitle text-white mb-4 mx-auto" style="max-width: 768px;">
                Junte-se aos mais de 500 clientes que confiam na Acro Cabos para suas soluções industriais
            </p>

            <!-- Botões -->
            <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">

                <!-- Botão principal -->
                <a href="#" class="btn fw-bold d-inline-flex align-items-center px-4 py-3 text-dark">
                    Solicite um Orçamento
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ms-2">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </a>

                <!-- Botão secundário -->
                <a href="#" class="btn btnSecondary px-4 py-3">
                    Entre em Contato
                </a>
            </div>

        </div>
    </section>

    <!-- ================ section end ================= -->

    <!-- footer start -->
    <?php include 'inc/inc.footer.php' ?>
    <!--/ footer end  -->

    <!-- JS here -->
    <?php include 'inc/inc.js.php' ?>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const videoButton = document.querySelector('.videoBtn');
        const videoContainer = document.querySelector('.ratio');

        videoButton.addEventListener('click', function(event) {
            event.preventDefault();

            const videoElement = document.createElement('iframe');
            videoElement.src = "https://www.acrocabo.com.br/video/institucional.mp4";
            videoElement.width = "100%";
            videoElement.height = "100%";
            videoElement.style.border = "none";
            videoElement.allow = "autoplay; fullscreen";
            videoContainer.innerHTML = '';
            videoContainer.appendChild(videoElement);
        });
    });
    </script>
</body>

</html>