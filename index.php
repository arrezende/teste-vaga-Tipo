<?php
$products = [
    [
        'id' => 1,
        'title' => 'Cabos de Aço',
        'category' => 'Cabos',
        'image' => 'img/products/cabos-de-aco.webp',
        'description' => 'Cabos de aço de alta resistência para aplicações industriais pesadas.',
        'specifications' => [
            'Diâmetros de 6mm a 50mm',
            'Carga de trabalho até 50 toneladas',
            'Galvanização a quente',
            'Certificação ISO'
        ],
        'applications' => [
            'Guindastes',
            'Elevadores de carga',
            'Estruturas suspensas'
        ]
    ],
    [
        'id' => 2,
        'title' => 'Cordoalhas',
        'category' => 'Cabos',
        'image' => 'img/products/cordoalha.webp',
        'description' => 'Cordoalhas de alta resistência para aplicações industriais pesadas.',
        'specifications' => [
            'Capacidade de 1 a 50 toneladas',
            'Larguras de 30mm a 300mm',
            'Fator de segurança 7:1',
            'Resistente a abrasão'
        ],
        'applications' => [
            'Movimentação de peças',
            'Içamento industrial',
            'Transporte de equipamentos'
        ]
    ],
    [
        'id' => 3,
        'title' => 'Laços de Cabo de Aço',
        'category' => 'Laços',
        'image' => 'img/products/lacos-de-cabo-de-aco.webp',
        'description' => 'Laços de cabo de aço de alta resistência para aplicações industriais pesadas.',
        'specifications' => [
            'Grau 80 e 100 disponíveis',
            'Elos de 6mm a 32mm',
            'Tratamento térmico especial',
            'Teste individual de carga'
        ],
        'applications' => [
            'Amarração de cargas',
            'Sistemas de elevação',
            'Equipamentos portuários'
        ]
    ],
    [
        'id' => 4,
        'title' => 'Manilhas e Acessórios',
        'category' => 'Acessórios',
        'image' => 'img/products/acessorios-de-cabo-de-aco-manilha-curva-bn-p6036.webp',
        'description' => 'Linha completa de acessórios para complementar sistemas de elevação.',
        'specifications' => [
            'Aço forjado especial',
            'Galvanização por imersão',
            'Rosca métrica e BSW',
            'Certificado de qualidade'
        ],
        'applications' => [
            'Conexões de cabos',
            'Sistemas de ancoragem',
            'Equipamentos navais'
        ]
    ],
    [
        'id' => 5,
        'title' => 'Equipamentos de Içamento',
        'category' => 'Equipamentos',
        'image' => 'img/products/talhas.webp',
        'description' => 'Talhas, moitões e equipamentos especializados para operações de içamento.',
        'specifications' => [
            'Capacidade até 100 toneladas',
            'Certificação CE',
            'Manutenção programada',
            'Peças de reposição'
        ],
        'applications' => [
            'Construção civil',
            'Indústria naval',
            'Montagem industrial'
        ]
    ],
    [
        'id' => 6,
        'title' => 'Sistemas de Amarração',
        'category' => 'Sistemas',
        'image' => 'img/products/cintas-para-amarracao-de-cargas.webp',
        'description' => 'Soluções completas para amarração e fixação de cargas em transporte e armazenagem.',
        'specifications' => [
            'Sistemas modulares',
            'Componentes intercambiáveis',
            'Cálculo estrutural',
            'Projeto customizado'
        ],
        'applications' => [
            'Transporte rodoviário',
            'Navios cargueiros',
            'Armazenagem industrial'
        ]
    ]
];

?>
<?php include 'inc/inc.seo.php' ?>


</head>

<body>
    <?php include 'inc/inc.header.php' ?>

    <div class="padding-banner banner-area">
        <div class="container-fluid p-0 m-0">
            <div class="row g-0">
                <div class="col-lg-12">

                    <div data-carouzel id="banner-carousel" aria-roledescription="carousel">
                        <div data-carouzel-trackwrapper>
                            <div data-carouzel-trackmask>
                                <div data-carouzel-trackouter>
                                    <div data-carouzel-track aria-live="polite">
                                        <div data-carouzel-slide role="group" aria-roledescription="slide"
                                            aria-label="1 of 6">
                                            <div class="banner-img">
                                                <picture>
                                                    <source media="(max-width: 575px)"
                                                        srcset="./img/banners/banner-01.webp">

                                                    <source media="(min-width: 576px)"
                                                        srcset="./img/banners/banner-01.webp">
                                                    <img class="img-slide img-fluid" src="./img/banners/banner-01.webp"
                                                        alt="AMPLO ESTOQUE À PRONTA ENTREGA"
                                                        title="AMPLO ESTOQUE À PRONTA ENTREGA">
                                                </picture>

                                                <div class="content">
                                                    <span>AMPLO ESTOQUE À PRONTA ENTREGA
                                                    </span>
                                                    <p>Uma linha completa de produtos e serviços


                                                    </p>
                                                    <a href="#">Saiba Mais</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-carouzel-slide role="group" aria-roledescription="slide"
                                            aria-label="2 of 6">
                                            <div class="banner-img">
                                                <picture>
                                                    <source media="(max-width: 575px)"
                                                        srcset="./img/banners/banner-02.webp">

                                                    <source media="(min-width: 576px)"
                                                        srcset="./img/banners/banner-02.webp">
                                                    <img class="img-slide img-fluid" src="./img/banners/banner-02.webp"
                                                        alt="LINHA COMPLETA DE CABOS DE AÇO"
                                                        title="LINHA COMPLETA DE CABOS DE AÇO">
                                                </picture>

                                                <div class="content">
                                                    <span>LINHA COMPLETA DE CABOS DE AÇO
                                                    </span>
                                                    <p>Atuamos com uma linha completa de cabos de aço de até 3
                                                        polegadas.


                                                    </p>
                                                    <a href="#">Saiba Mais</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-carouzel-navigationwrapper>
                            <ul data-carouzel-navigation></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="product-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 padding-content mb-4 pb-4">
                    <div class="section-title">

                        <h2 class="title">Nossos Produtos</h2>
                        <div class="mb-4"></div>
                    </div>
                    <p class="subtitle m-auto">Oferecemos uma linha completa de produtos para manuseio de materiais,
                        todos
                        certificados e
                        testados para garantir máxima segurança e durabilidade</p>

                </div>

                <?php foreach ($products as $product): ?>
                <div class="col-md-4">
                    <div class="cardProd">
                        <div class="img-wrapper">
                            <img src="<?= $product['image'] ?>" alt="<?= htmlspecialchars($product['title']) ?>"
                                class="w-100" />

                            <div class="category">
                                <span class="">
                                    <?= htmlspecialchars($product['category']) ?>
                                </span>
                            </div>
                        </div>

                        <div class="content">
                            <h3 class="title"><?= htmlspecialchars($product['title']) ?></h3>
                            <p class="description"><?= htmlspecialchars($product['description']) ?></p>

                            <div>
                                <h4 class="subtitle">Especificações:</h4>
                                <ul>
                                    <?php foreach (array_slice($product['specifications'], 0, 2) as $spec): ?>
                                    <li>
                                        <!-- Ícone pode ser uma imagem ou SVG inline -->
                                        <svg class="me-2" width="16" height="16" fill="#059669" viewBox="0 0 24 24">
                                            <path d="M9 16.2l-4.2-4.2 1.4-1.4L9 13.4l8.8-8.8 1.4 1.4z" />
                                        </svg>
                                        <?= htmlspecialchars($spec) ?>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                            <div class="mb-4">
                                <h4 class="subtitle">Aplicações:</h4>
                                <div class="d-flex flex-wrap gap-2">
                                    <?php foreach ($product['applications'] as $app): ?>
                                    <span class="badge px-2 py-1 small rounded">
                                        <?= htmlspecialchars($app) ?>
                                    </span>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="d-flex flex-column flex-md-row gap-3">
                                <button class="btn w-50 fw-semibold text-sm">
                                    Ver Detalhes
                                </button>
                                <button class="btn bntSecondary">
                                    <span>Orçamento</span>
                                    <!-- ícone -->
                                    <svg class="ms-1" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <a href="#" class="btn w-auto mt-5">Veja todos os Produtos</a>

            </div>
        </div>
    </section>


    <section class="services-area">
        <div class="container">
            <div class="row align-items-center">

                <!-- Texto à esquerda -->
                <div class="col-lg-6">
                    <span class="subtitle mb-3 flex gap-05rem">
                        <div class="badged">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-shield-plus-icon lucide-shield-plus">
                                <path
                                    d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                <path d="M9 12h6" />
                                <path d="M12 9v6" />
                            </svg>
                        </div>
                        Serviço Especializado
                    </span>

                    <h2 class="title fw-bold mb-4">Inspeção e Certificação de Equipamentos</h2>

                    <p class="mb-4 content">
                        <strong>Você está disposto a assumir riscos em sua operação?</strong><br>
                        Quando o desempenho de uma operação — ou pior, vidas — estão em jogo, a resposta é clara:
                        <strong>zero riscos</strong>.
                        Por isso, é essencial garantir que os equipamentos de movimentação, elevação e amarração estejam
                        em perfeitas condições e dentro das <strong>normas vigentes</strong>.
                    </p>

                    <p class="mb-5 content">
                        Pensando nisso, a Acro criou o <strong>Acro Services</strong>: uma divisão especializada que
                        oferece <strong>serviços técnicos de inspeção e certificação</strong>,
                        ajudando empresas a operar com segurança, eficiência e em conformidade com as exigências legais.
                    </p>

                    <!-- Benefícios -->
                    <div class="row mb-4">
                        <div class="col-md-6 mb-3 flex gap-05rem">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <div class="content">
                                <strong>Laudos Técnicos Certificados</strong><br>
                                <small>Conformidade garantida com documentação oficial.</small>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3  flex gap-05rem">

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-clock9-icon lucide-clock-9">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 7.5 12" />
                            </svg>
                            <div class="content">
                                <strong>Profissionais Qualificados</strong><br>
                                <small>Equipe técnica especializada nas normas ABNT e NR.</small>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3  flex gap-05rem">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-shield-user-icon lucide-shield-user">
                                <path
                                    d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                <path d="M6.376 18.91a6 6 0 0 1 11.249.003" />
                                <circle cx="12" cy="11" r="4" />
                            </svg>
                            <div class="content">
                                <strong>Atendimento Rápido</strong><br>
                                <small>Disponibilidade 24h para emergências e manutenções críticas.</small>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3  flex gap-05rem">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-book-open-check-icon lucide-book-open-check">
                                <path d="M12 21V7" />
                                <path d="m16 12 2 2 4-4" />
                                <path
                                    d="M22 6V4a1 1 0 0 0-1-1h-5a4 4 0 0 0-4 4 4 4 0 0 0-4-4H3a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h6a3 3 0 0 1 3 3 3 3 0 0 1 3-3h6a1 1 0 0 0 1-1v-1.3" />
                            </svg>
                            <div class="content">
                                <strong>Conformidade Total</strong><br>
                                <small>Inspeção conforme exigências regulatórias.</small>
                            </div>
                        </div>
                    </div>

                    <!-- Botões -->
                    <div class="d-flex gap-3">
                        <a href="#contato" class="btn btn-warning fw-semibold">Solicitar Inspeção</a>
                    </div>
                </div>

                <!-- Imagem à direita -->
                <div class="col-lg-6 position-relative mt-5 mt-lg-0">
                    <div class="img-wrapper">
                        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=2070&auto=format&fit=crop"
                            alt="Técnico especializado em inspeção" class="img-fluid w-100 h-auto">
                    </div>

                    <!-- Card flutuante -->
                    <div class="badgedIso">
                        <small><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-award-icon lucide-award">
                                <path
                                    d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526" />
                                <circle cx="12" cy="8" r="6" />
                            </svg> Certificado ISO 9001</small>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="different-area">
        <div class="container">
            <div class="row align-items-center">

                <div class="mt-4 mb-4">
                    <h2 class="title">Por que escolher a <span>Acro Cabos</span>?</h2>
                    <p class="subtitle mx-auto">Mais de 15 anos de experiência no mercado, atendendo os mais diversos
                        segmentos
                        industriais com
                        excelência e confiabilidade.</p>
                </div>
                <div class="d-flex flex-column flex-md-row gap-3">
                    <div class="card">
                        <div class="flex gap-05rem justify-content-center">
                            <div class="icon mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                    </path>
                                    <circle cx="12" cy="8" r="6"></circle>
                                </svg>
                            </div>
                        </div>
                        <h3 class="title">Produtos Certificados</h3>
                        <p class="subtitle">Todos os nossos produtos possuem certificações internacionais de qualidade e
                            segurança,
                            garantindo conformidade com as normas mais rigorosas do mercado.</p>
                    </div>
                    <div class="card">
                        <div class="flex gap-05rem justify-content-center">
                            <div class="icon mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="title">Alta Qualidade</h3>
                        <p class="subtitle">Trabalhamos apenas com fornecedores homologados e materiais de primeira
                            linha, assegurando
                            durabilidade e performance superior em aplicações industriais.</p>
                    </div>
                    <div class="card">
                        <div class="flex gap-05rem justify-content-center">
                            <div class="icon mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <h3 class='title'>Suporte Técnico Especializado</h3>
                        <p class="subtitle">Nossa equipe técnica está sempre disponível para orientações,
                            dimensionamentos e suporte
                            pós-venda, garantindo o sucesso de seus projetos.</p>
                    </div>
                </div>
                <div class="data d-flex flex-column flex-md-row gap-3">
                    <div class="dataItem">
                        <div class="number">15+</div>
                        <div class="text">Anos de Experiência</div>
                    </div>
                    <div class="dataItem">
                        <div class="number">500+</div>
                        <div class="text">Clientes Atendidos</div>
                    </div>
                    <div class="dataItem">
                        <div class="number">24h</div>
                        <div class="text">Suporte Técnico</div>
                    </div>
                    <div class="dataItem">
                        <div class="number">100%</div>
                        <div class="text">Produtos Certificados</div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="cta">
        <div class="container">
            <div class="text-center mt-5">
                <div class="bg-theme rounded-4 p-4 p-md-5 text-white">
                    <h3 class="title mb-3">Pronto para otimizar sua operação?</h3>
                    <p class="subtitle mb-4 mx-auto" style="max-width: 800px;">
                        Nossa equipe está pronta para analisar suas necessidades e desenvolver a solução ideal para seu
                        projeto industrial
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center align-items-center">
                        <button class="btn btn-warning fw-bold py-2 px-4 d-flex align-items-center">
                            <span>Agendar Consultoria Gratuita</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="ms-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </button>
                        <div class="d-flex flex-column flex-sm-row align-items-center text-white-50 gap-3">
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="me-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>
                                <span class="text-white">Sem compromisso</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="me-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg>
                                <span class="text-white">Resposta em 24h</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <section class="depoiments">
        <div class="container px-4 mx-auto">
            <div class="mx-auto" style="max-width: 960px;">
                <div class="text-center mb-5">
                    <h2 class="title mb-3">Depoimentos e Confiança</h2>
                    <p class="subtitle">Veja o que nossos clientes dizem sobre nossos serviços</p>
                </div>


                <div class="quote rounded-4 shadow p-5 position-relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                        class="position-absolute">
                        <path
                            d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                        </path>
                        <path
                            d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                        </path>
                    </svg>

                    <div class="d-flex flex-column flex-md-row align-items-center gap-4">
                        <div class="flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&amp;w=200&amp;h=200&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3"
                                alt="Cliente satisfeito" class="rounded-circle border border-4"
                                style="width: 128px; height: 128px; object-fit: cover; border-color: var(--bs-primary);">
                        </div>
                        <div class="flex-grow-1 text-center text-md-start">
                            <blockquote class="fs-5 fst-italic text-muted mb-4">
                                "A Acro Cabos tem sido nossa parceira há mais de 5 anos. A qualidade dos produtos e o
                                suporte técnico são excepcionais. Recomendo para qualquer empresa que busca segurança e
                                confiabilidade."
                            </blockquote>
                            <cite class="fw-semibold text-primary d-block mb-1">Carlos Silva</cite>
                            <p class="text-muted mb-0">Gerente de Operações - Industrias Brasil SA</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column flex-md-row gap-3 g-4 mt-5 align-items-center">
                    <div class="col text-center">
                        <div class="bg-white rounded p-4 shadow">
                            <a href="#"><img src="img/certificado-1.webp" alt="Certificado" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="bg-white rounded p-4 shadow">
                            <a href="#"><img src="img/certificado-2.webp" alt="Certificado" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="bg-white rounded p-4 shadow">
                            <a href="#"><img src="img/certificado-3.webp" alt="Certificado" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col text-center h-100">
                        <div class="bg-white rounded p-4 shadow">
                            <a href="#"><img src="img/certificado-4.webp" alt="Certificado" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <?php include 'inc/inc.footer.php' ?>
    <?php include 'inc/inc.js.php' ?>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const counters = document.querySelectorAll(".dataItem .number");
        const options = {
            root: null,
            threshold: 0.5
        };

        const animateCounter = (element, start, end, duration) => {
            let current = start;
            const increment = (end - start) / (duration / 10);

            const updateCounter = () => {
                current += increment;
                if (current >= end) {
                    element.textContent = end + (element.textContent.includes('+') ? '+' : '');
                } else {
                    element.textContent = Math.floor(current) + (element.textContent.includes('+') ?
                        '+' : '');
                    setTimeout(updateCounter, 10);
                }
            };

            updateCounter();
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const endValue = parseInt(element.textContent.replace(/\D/g, ""), 10);
                    animateCounter(element, 0, endValue, 2000);
                    observer.unobserve(element);
                }
            });
        }, options);

        counters.forEach(counter => observer.observe(counter));
    });
    </script>
</body>

</html>