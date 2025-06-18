<?php include 'inc/inc.seo.php' ?>
</head>

<body>
    <!-- header-start -->
    <?php include 'inc/inc.header.php' ?>
    <!-- header-end -->

    <?php include 'inc/inc.breadcrumb.php' ?>

    <!-- ================ section start ================= -->
    <section class="product-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 mb-4">
                    <div class="mb-4">
                        <h2>Acabamento: Galvanizado à fogo</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quod laborum sapiente aliquid
                        provident porro atque! Repellendus aliquam ab quis.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem repellendus perspiciatis quasi
                        necessitatibus voluptatibus esse!</p>
                    <div class="d-flex justify-content-center mb-4">
                        <picture>
                            <source
                                srcset="https://www.acrocabo.com.br/img/produtos/cabos-de-aco-classe-6x7-alma-de-aco-1.webp"
                                type="image/webp">
                            <source
                                srcset="https://www.acrocabo.com.br/img/produtos/cabos-de-aco-classe-6x7-alma-de-aco-1.jpg"
                                type="image/jpg"><img
                                src="https://www.acrocabo.com.br/img/produtos/cabos-de-aco-classe-6x7-alma-de-aco-1.jpg"
                                class="img-fluid" alt="Cabos de Aço Classe 6X7 - Alma de Aço">
                        </picture>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-5">
                            <thead>
                                <tr class="text-center">
                                    <th class="bg-color-secondary text-color-light" colspan="2">Diâmetro</th>
                                    <th class="bg-color-secondary text-color-light" rowspan="2">Massa Aprox. <br> (Kg/m)
                                    </th>
                                    <th class="bg-color-secondary text-color-light">Carga de<br> Ruptura Min.(Tf) </th>
                                </tr>
                                <tr class="text-center">
                                    <td class="bg-color-secondary text-color-light">mm</td>
                                    <td class="bg-color-secondary text-color-light">pol.</td>
                                    <td class="bg-color-secondary text-color-light">IPS</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>2,4</td>
                                    <td>3/32”</td>
                                    <td>0,024</td>
                                    <td>0,37</td>
                                </tr>
                                <tr class="text-center">
                                    <td>3,2</td>
                                    <td>1/8”</td>
                                    <td>0,034</td>
                                    <td>0,66</td>
                                </tr>
                                <tr class="text-center">
                                    <td>4,0</td>
                                    <td>5/32”</td>
                                    <td>0,065</td>
                                    <td>1,04</td>
                                </tr>
                                <tr class="text-center">
                                    <td>4,8</td>
                                    <td>3/16”</td>
                                    <td>0,085</td>
                                    <td>1,49</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>O valor da massa indicado na tabela é referencial, podendo variar em função da tolerância do
                            passo do cabo.</p>
                        <ul class="p-0">
                            <li><strong>Material:</strong> Aço Carbono. Acabamento:
                                Galvanizado à fogo</li>
                            <li><strong>Classe:</strong> 6x7: 6 pernas com até 7
                                arames por perna.</li>
                            <li><strong>Aplicações:</strong> Excelente resistência á
                                abrasão e pressão mas com baixa flexibilidade, limitando as áreas de aplicação. </li>
                            <li> Fator de encablamento = 0,86. Fator de construção =
                                0,395</li>
                            <li> Módulo de elasticidade = 10.500 a 11.500 kgf/mm²</li>
                            <li> Raio de curvatura: 72 vezes o diâmetro.</li>
                            <li><strong>Norma:</strong> ABNT NBR ISO 2408</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section-title mb-4">
                        <h3 class="h3-form">Entre em contato agora mesmo <i class="fa-solid fa-turn-down"></i></h3>
                    </div>
                    <form class="form-contact" action="#" method="post" id="form-prod-int" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome'"
                                        placeholder="Nome">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email"
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Insira o endereço de e-mail'" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Assunto'"
                                        placeholder="Assunto">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensagem'"
                                        placeholder=" Mensagem"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3 text-center">
                            <div class="btn-prod">
                                <button type="submit" class="btn mb-3">
                                    <span>Enviar por E-mail</span>
                                </button>
                                <button type="submit" class="btn whats-form">
                                    <span>Enviar por Whatsapp</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ================ section end ================= -->

    <!-- footer start -->
    <?php include 'inc/inc.footer.php' ?>
    <!-- footer end  -->

    <!-- JS here -->
    <?php include 'inc/inc.js.php' ?>
</body>

</html>