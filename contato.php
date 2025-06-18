<?php include 'inc/inc.seo.php' ?>
</head>

<body>
    <!-- header-start -->
    <?php include 'inc/inc.header.php' ?>
    <!-- header-end -->

    <!--? Hero Start -->
    <?php include 'inc/inc.breadcrumb.php'; ?>

    <!-- Hero End -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 mb-4">
                    <h2>Entre em Contato</h2>
                </div>
                <div class="col-lg-7">
                    <form class="form-contact" action="contato_envia.php" method="post" id="form-contato"
                        novalidate="novalidate">
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
                        <div class="form-group mt-2 mb-5">
                            <div class="btn-contact">
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
                <div class="col-lg-4 col-md-8 col-sm-10 mb-5 m-auto">
                    <div class="info-container">
                        <div class="contact-info">
                            <span class="icon"><i class="fa-solid fa-house"></i></span>
                            <div class="media-body">
                                <h3><a href="<?php echo CONF_SITE_MAP_LINK;?>" target="_blank">
                                        <?php echo CONF_SITE_STREET_1;?></a>
                                </h3>
                                <p><?php echo CONF_SITE_STREET_2;?></p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <span class="icon"><i class="fa-solid fa-mobile-screen-button"></i></span>
                            <div class="media-body">
                                <h3><a class="dn_btn" href="tel:<?php echo CONF_SITE_PHONE_LINK;?>">
                                        <?php echo CONF_SITE_PHONE;?>
                                    </a> | <a class="dn_btn" href="<?php echo CONF_SITE_WHATSAPP_LINK;?>"
                                        target="_blank">
                                        <?php echo CONF_SITE_WHATSAPP;?>
                                    </a></h3>
                                <p>Seg. a Sex: 08hs às 18:00</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <span class="icon"><i class="fa-solid fa-envelope-circle-check"></i></span>
                            <div class="media-body">
                                <h3><a href="mailto:<?php echo CONF_SITE_EMAIL;?>"><?php echo CONF_SITE_EMAIL;?></a>
                                </h3>
                                <p>Envie-nos um e-mail a qualquer momento!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 mt-4">
            <div class="row g-0">
                <div class="col-lg-12">
                    <iframe src="<?php echo CONF_SITE_MAP_IFRAME;?>" width="100%" height="450" frameborder="0"
                        style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->

    <!-- footer start -->
    <?php include 'inc/inc.footer.php' ?>
    <!--/ footer end  -->

    <!-- JS here -->
    <?php include 'inc/inc.js.php' ?>
</body>

</html>