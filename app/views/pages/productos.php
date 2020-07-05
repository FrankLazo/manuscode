<?php require RUTA_APP . '/views/include/header.php'; ?>

    <!-- =========================================================================================== -->
    <!-- CONTENIDO DE LA PAGINA                                                                      -->
    <!-- =========================================================================================== -->

    <?php $pagina = $datos['pagina'];
          $tamano_pagina = $datos['tamano_pagina'];
          $empezar_desde = $datos['empezar_desde'];
          $num_resultados = $datos['num_resultados'];
          $num_paginas = $datos['num_paginas']; ?>

    <main>
        <div class="productos">
            <div class="filtros">
                <ul>
                    <li>Filtros</li>
                    <li>Número de artículos encontrados</li>
                    <li>Ordenar por</li>
                </ul>
            </div>

            <div class="productos_lista">
                <?php foreach($datos['productos'] as $producto) { ?>
                <div class="producto">
                    <a href="<?php echo RUTA_URL; ?>productos/articulos/<?php echo $producto->CODIGO; ?>">
                        <img src="img/productos/<?php echo $producto->CODIGO; ?>A-500x600.jpg">
                        <span><?php echo $producto->NOMBRE; ?></span>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div> <!-- .productos -->

        <div class="paginacion">
            <a href="?pagina=<?php if($pagina != 1){echo $pagina-1;}else{echo $pagina;}?>">
                <button class="pagina">&lt</button></a>
                
            <?php
                for($i = 1; $i <= $num_paginas; $i++):
            ?>
            <a href="?pagina=<?php echo $i?>">
                <button class="pagina <?php if($i == $pagina){echo "actual";}?>"><?php echo $i?></button></a>
            <?php
                endfor;
            ?>

            <a href="?pagina=<?php if($pagina != $num_paginas){echo $pagina+1;}else{echo $pagina;}?>">
                <button class="pagina">&gt</button></a>
        </div> <!-- end .paginacion -->

        <div class="resultados">
            <p>Mostrando resultados del <?php echo $empezar_desde + 1?> al
                <?php if($pagina != $num_paginas){echo $empezar_desde + $tamano_pagina;}
                    else{echo $num_resultados;}?><br>
                de <?php echo $num_resultados?> encontrados.</p>
        </div> <!-- end .resultados -->
    </main>

<?php require RUTA_APP . '/views/include/footer.php'; ?>