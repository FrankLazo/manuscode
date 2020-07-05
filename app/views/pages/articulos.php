<?php require RUTA_APP . '/views/include/header.php'; ?>

    <!-- =========================================================================================== -->
    <!-- CONTENIDO DE LA PAGINA                                                                      -->
    <!-- =========================================================================================== -->

    <main >
        <div class="articulos">
            <div class="articulos-container">
                <div class="articulo-galeria">
                    <?php $letra = ['A', 'B', 'C', 'D'];
                          for($i = 0; $i < 4; $i++) { ?>
                    <div class="articulo-img 
                        <?php if(!file_exists('img/productos/' . $datos['codigo'] . $letra[$i] . '-500x600.jpg')) {
                            echo 'articulo-invisible';} ?>">
                        <img src="<?php echo RUTA_URL; ?>img/productos/<?php echo $datos['codigo'] . $letra[$i]; ?>-500x600.jpg"
                            data-src="<?php echo RUTA_URL; ?>img/productos/<?php echo $datos['codigo'] . $letra[$i]; ?>-500x600.jpg"
                            class="img-data-src <?php if(!$i){echo 'actual-img';} ?>">
                    </div>
                    <?php } ?>
                </div> <!-- .articulo-galeria -->
                
                <div class="articulo-principal">
                    <div class="articulo-img">
                        <img src="<?php echo RUTA_URL; ?>img/productos/<?php echo $datos['codigo']; ?>A-500x600.jpg"
                            id="mainImg">
                    </div>
                </div>
            </div> <!-- .articulos-container -->
            
            <div class="articulo-descripcion">
                <h1>Detalles del Producto</h1>
                <p><?php echo $datos['producto']->NOMBRE; ?></p>
                <!-- <p>Descripción</p>
                <p>Colores</p>
                <p>Tallas</p>
                <p>Material</p>
                <p>Otros detalles</p>
                <p class="precio">Precio</p> -->
            </div>
        </div> <!-- .articulos -->
    </main>

<?php require RUTA_APP . '/views/include/footer.php'; ?>