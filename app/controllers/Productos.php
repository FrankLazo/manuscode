<?php

    class Productos extends Controller
    {
        public function __construct()
        {
            $this->productoModel = $this->model('Producto');
        }

        public function index()
        {
            $pagina = $this->productoModel->pagina();
            $tamano_pagina = 12;
            $empezar_desde = ($pagina - 1) * $tamano_pagina;
            $num_resultados = $this->productoModel->obtenerNumeroProductos();
            $num_paginas = ceil($num_resultados/$tamano_pagina);

            $productos = $this->productoModel->obtenerProductos($empezar_desde, $tamano_pagina);
            $datos = ['productos' => $productos,
                      'pagina' => $pagina,
                      'tamano_pagina' => $tamano_pagina,
                      'empezar_desde' => $empezar_desde,
                      'num_resultados' => $num_resultados,
                      'num_paginas' => $num_paginas];
                      
            $this->view('pages/productos', $datos);
        }

        public function articulos($articulo)
        {
            $producto = $this->productoModel->obtenerProducto($articulo);
            $datos = ['codigo' => $articulo,
                      'producto' => $producto];
            $this->view('pages/articulos', $datos);
        }
    }

?>