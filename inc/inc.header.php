<header>
    <div class="header-area header-transparent">
        <div class="top_menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="header-social">
                            <a class="" href="<?php echo CONF_SOCIAL_FACEBOOK_PAGE; ?>" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a class="" href="<?php echo CONF_SOCIAL_INSTAGRAM_PAGE; ?>" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="" href="<?php echo CONF_SOCIAL_YOUTUBE_PAGE; ?>" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a class="" href="<?php echo CONF_SOCIAL_LINKEDIN_PAGE; ?>" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10 d-flex justify-content-end">
                        <div class="contact-menu">
                            <a class="dn_btn" href="<?php echo CONF_SITE_MAP_LINK; ?>" target="_blank">
                                <i class="fa-solid fa-map-location-dot"></i>
                                <?php echo CONF_SITE_STREET_1; ?>
                            </a>
                            <a class="dn_btn" href="mailto:<?php echo CONF_SITE_EMAIL; ?>">
                                <i class="fa-solid fa-envelopes-bulk"></i>
                                <?php echo CONF_SITE_EMAIL; ?>
                            </a>
                            <a class="dn_btn" href="tel:<?php echo CONF_SITE_PHONE_LINK; ?>">
                                <i class="fa-solid fa-phone"></i>
                                <?php echo CONF_SITE_PHONE; ?>
                            </a>
                            <a class="dn_btn" href="<?php echo CONF_SITE_WHATSAPP_LINK; ?>" target="_blank">
                                <i class="fa-brands fa-whatsapp"></i>
                                <?php echo CONF_SITE_WHATSAPP; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-main container">
            <a href="./">
                <div class="logo">
                    <img src="img/logo/logo-acrocabo.png" alt="Logo" title="Logo" class="img-fluid">
                </div>
            </a>
            <div class="open-nav-menu">
                <span></span>
            </div>
            <div class="menu-overlay"></div>
            <nav class="nav-menu">
                <div class="close-nav-menu">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <ul class="menu">
                    <li class="menu-item has-children">
                        <a class="nav-link" href="./">Home</a>
                    </li>
                    <li class="menu-item">
                        <a class="nav-link" href="institucional">Institucional</a>
                    </li>
                    <li class="menu-item has-children">
                        <a class="nav-link" href="javascript:void(0)" data-toggle="sub-menu">Produtos <i
                                class="plus"></i></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="produto-interna">Produto 1</a></li>
                            <li class="menu-item"><a href="produto-interna">Produto 2</a></li>
                            <li class="menu-item"><a href="produto-interna">Produto 3</a></li>
                            <li class="menu-item"><a href="produto-interna">Produto 4</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="nav-link" href="javascript:void(0)">Serviços</a>
                    </li>
                    <li class="menu-item">
                        <a class="nav-link" href="javascript:void(0)">Catálogo</a>
                    </li>
                    <li class="menu-item">
                        <a class="nav-link" href="javascript:void(0)">Vídeos</a>
                    </li>
                    <li class="menu-item">
                        <a class="nav-link" href="javascript:void(0)">Blog</a>
                    </li>
                    <li class="menu-item d-lg-none d-block">
                        <a class="nav-link" href="contato">Contato</a>
                    </li>
                </ul>
            </nav>

            <div class="contact-btn d-lg-block d-none">
                <a href="contato" class="btn">Contato</a>
            </div>
        </div>
    </div>
</header>