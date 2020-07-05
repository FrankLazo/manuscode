<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo SITE_NAME; ?></title>

    <link rel="shortcut icon" href="<?php echo RUTA_URL; ?>img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo RUTA_URL; ?>css/style.css">
</head>

<body>

    <!-- =========================================================================================== -->
    <!-- MODAL - PUNTOS DE VENTA                                                                     -->
    <!-- =========================================================================================== -->

    <div class="sales-bg">
        <div class="sales-modal modal">
            <div class="title-modal">
                <span class="icon-modal"></span>
                <h2>Puntos de Venta</h2>
            </div>

            <ul>
                <li>
                    <button class="btn-location actual-location"
                        data-url="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.5414157064574!2d-77.04960696823764!3d-12.075041629162172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9b8a41af259%3A0x9c37b9f3cf906034!2sManu&#39;s%20Elegance%20Galeria%20Center!5e0!3m2!1ses-419!2spe!4v1573677265387!5m2!1ses-419!2spe">
                        <h3>Tienda Principal</h3>
                        <p>Jiron Mariscal Luzuriaga 355 Interior 103-110-111-128-136, Jesús María 15072</p>
                        <p>Galería Center</p>
                    </button>
                </li>
                <!-- <li>
                    <button class="btn-location"
                        data-url="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.3791342729032!2d-77.03578568578712!3d-12.086176745924096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c85ffd01e179%3A0x672131fafbb3fa00!2sJuegos%20Ponte%20Mosca!5e0!3m2!1ses-419!2spe!4v1570382595321!5m2!1ses-419!2spe">
                        <h3>Tienda Sucursal</h3>
                        <p>Avenida Tupac Amaru 210 Apartado 1301, Rimac 15333</p>
                        <p>Galería La Ideal</p>
                    </button>
                </li> -->
            </ul>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.5414157064574!2d-77.04960696823764!3d-12.075041629162172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9b8a41af259%3A0x9c37b9f3cf906034!2sManu&#39;s%20Elegance%20Galeria%20Center!5e0!3m2!1ses-419!2spe!4v1573677265387!5m2!1ses-419!2spe"
                frameborder="0" allowfullscreen id="iframe"></iframe>
            <div class="sales-close">
                <div class="icon-close"></div>
            </div>
        </div>
    </div>
    
    <!-- =========================================================================================== -->
    <!-- MODAL - CONTACTO                                                                            -->
    <!-- =========================================================================================== -->

    <div class="contact-bg">
        <div class="contact-modal modal">
            <div class="title-modal">
                <span class="icon-modal"></span>
                <h2>Contacto</h2>
            </div>

            <div class="datos-contacto">
                <div class="datos-1">
                    <p><span class="contacto-email icon-contact"></span>
                        <span class="data-contact">eavellaneda.uni@gmail.com</span></p>
                    <p><span class="contacto-direccion icon-contact"></span>
                        <span class="data-contact">Jiron Mariscal Luzuriaga 355 Interior 103-110-111-128-136, Jesús María 15072</span></p>
                </div>
                <div class="datos-2">
                    <p><span class="contacto-telefono icon-contact"></span>
                        <span class="data-contact">---</span></p>
                    <p><span class="contacto-whatsapp icon-contact"></span>
                        <span class="data-contact">981658350</span></p>
                    <p><span class="contacto-whatsapp icon-contact"></span>
                        <span class="data-contact">981626580</span></p>
                </div>
            </div> <!-- .datos-contacto -->
            
            <div class="title-modal">
                <span class="icon-modal escribenos"></span>
                <h2>Escribenos</h2>
            </div>

            <form action="" method="POST">
                <div class="label">
                    <label for="nombres">Nombres:</label>
                    <input class="input" type="text" placeholder="Nombres" name="name" id="nombres">
                </div>
                <div class="label">
                    <label for="correo">Correo:</label>
                    <input class="input" type="text" placeholder="Correo electrónico" name="mail" id="correo">
                </div>
                <div class="label">
                    <label for="mensaje">Mensaje:</label>
                    <textarea class="input" name="msge" id="mensaje" 
                        placeholder="Escribe aquí tu mensaje..." cols="30" rows="5"></textarea>
                </div>
                <div class="submit">
                    <input class="btn-black" type="submit" value="Enviar (No Disponible)" name="send" disabled>
                </div>
            </form>

            <div class="contact-close">
                <div class="icon-close"></div>
            </div>
        </div>
    </div>

    <!-- =========================================================================================== -->
    <!-- MODAL - ACERCA DE                                                                           -->
    <!-- =========================================================================================== -->

    <div class="about-bg">
        <div class="about-modal modal">
            <div class="title-modal">
                <span class="icon-modal"></span>
                <h2>Acerca de</h2>
            </div>
            <div class="portrait">
                <img src="<?php echo RUTA_URL; ?>img/manu.jpg" alt="Fotografía de Manu">
            </div>            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ullamcorper sem ac nibh tempus lacinia. Aenean tempor fringilla enim ac suscipit. Quisque sagittis fringilla mattis. Pellentesque non dui velit. Ut gravida tempus ligula at luctus. Vivamus convallis, justo non luctus ultricies, nibh ante dapibus nulla, nec suscipit nunc eros id ligula. Vivamus fermentum, quam quis scelerisque lacinia, orci elit vulputate nulla, vel facilisis elit lacus in nunc.</p>
            <br>
            <p>Morbi auctor ipsum sem, sit amet venenatis ante eleifend at. Duis ut sagittis enim. Etiam a metus vel libero vulputate facilisis. Morbi elementum rhoncus urna sit amet consectetur. Vivamus lorem enim, sagittis ut tempor vel, luctus vitae ante. Aliquam consectetur vitae tortor a pharetra. Integer purus felis, rutrum id nibh eu, feugiat interdum nulla.</p>
            <div class="about-close">
                <div class="icon-close"></div>
            </div>
        </div>
    </div>

    <!-- =========================================================================================== -->
    <!-- ENCABEZADO DE LA PAGINA                                                                     -->
    <!-- =========================================================================================== -->

    <header class="header-main">
        <div class="logo">
            <a href="<?php echo RUTA_URL;?>">
                <img src="<?php echo RUTA_URL; ?>img/logo.svg" alt="Logo Manu's Elegance">
            </a>
        </div> <!-- .logo -->

        <nav>
            <div class="main-nav">
                <ul>
                    <li class="actual-nav">
                        <a href="<?php echo RUTA_URL;?>">Novedades</a>
                    </li>
                    <li>
                        <a href="<?php echo RUTA_URL;?>productos">Productos</a>
                    </li>
                    <li>
                        <a href="<?php echo RUTA_URL;?>productos">Catalogo de Temporada</a>
                    </li>
                </ul>
            </div> <!-- .main-nav -->

            <div class="second-nav">
                <ul>
                    <li>
                        <button class="btn-sales">
                            <div class="icon-nav"></div>
                            <div class="text-nav">Puntos de Venta</div>
                        </button>
                    </li>
                    <li>
                        <button class="btn-contact">
                            <div class="icon-nav"></div>
                            <div class="text-nav">Contacto</div>
                        </button>
                    </li>
                    <li>
                        <button class="btn-about">
                            <div class="icon-nav"></div>
                            <div class="text-nav">Acerca de</div>
                        </button>
                    </li>
                </ul>
            </div> <!-- .second-nav -->
        </nav>

        <div class="menu-toggle">
            <div class="burger"></div>
        </div> <!-- .menu-toggle -->
    </header>