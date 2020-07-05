<?php require RUTA_APP . '/views/include/header.php'; ?>

    <!-- =========================================================================================== -->
    <!-- CONTENIDO DE LA PAGINA                                                                      -->
    <!-- =========================================================================================== -->

    <main>
        <div class="slideShow-container">

            <div class="mySlides fade">
                <img src="img/banner-1.jpg">
                <div class="banner banner-left">
                    <div class="banner-titulo"></div>
                    <a href="<?php echo RUTA_URL;?>productos">descubrir más</a>
                </div>
            </div>
            <div class="mySlides fade">
                <img src="img/banner-2.jpg">
                <div class="banner banner-right">
                    <div class="banner-titulo"></div>
                    <a href="<?php echo RUTA_URL;?>productos">descubrir más</a>
                </div>
            </div>
            <div class="mySlides fade">
                <img src="img/banner-3.jpg">
                <div class="banner banner-left">
                    <div class="banner-titulo"></div>
                    <a href="<?php echo RUTA_URL;?>productos">descubrir más</a>
                </div>
            </div>
            <div class="mySlides fade">
                <img src="img/banner-4.jpg">
                <div class="banner banner-right">
                    <div class="banner-titulo"></div>
                    <a href="<?php echo RUTA_URL;?>productos">descubrir más</a>
                </div>
            </div>

            <div class="prev" onclick='plusSlides(-1)' id="prevBtn"></div>
            <div class="next" onclick='plusSlides(1)' id="nextBtn"></div>

            <div class="dots-container">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>

        </div> <!-- .slideShow-container -->

        <div class="secciones">
            <section>
                <header>
                    <h2>Novedades</h2>
                </header>
                <div class="novedades">
                    <?php for($i = 0; $i < 4; $i++){ ?>
                    <div class="img-nov">
                        <a href="">
                            <img src="img/productos/<?php echo $datos['novedades'][$i]->CODIGO; ?>A-500x600.jpg">
                            <span class="txt-ref"><?php echo $datos['nombres'][$i]->NOMBRE; ?></span>
                        </a>                        
                    </div>
                    <?php } ?>
                </div> <!-- .novedades -->
            </section>

            <section>
                <header>
                    <h2>Categorias</h2>
                </header>
                <div class="categorias">
                    <?php $nameCat = ["blazers", "sacos", "chalinas", "casacas"];
                        for($i = 1; $i < 5; $i++){ ?>
                    <div class="img-cat">
                        <img src="img/categoria-<?php echo $i; ?>.jpg" alt="">
                        <div class="title-cat">
                            <span class="txt-cat"><?php echo $nameCat[$i-1]; ?></span>
                            <a href="">Ver Más</a>
                        </div>
                    </div>
                    <?php } ?>
                </div> <!-- .categorias -->
            </section>
        </div> <!-- .secciones -->
    </main>

<?php require RUTA_APP . '/views/include/footer.php'; ?>