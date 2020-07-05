<?php

    class Producto
    {
        private $db;

        public function __construct()
        {
            $this->db = new Base;
        }

        public function obtenerProductos($empezar_desde, $tamano_pagina)
        {
            $this->db->query("SELECT * FROM productos LIMIT $empezar_desde, $tamano_pagina");
            return $this->db->registers();
        }

        public function obtenerProducto($codigo)
        {
            $this->db->query("SELECT * FROM productos WHERE codigo = '$codigo'");
            return $this->db->register();
        }

        public function obtenerNumeroProductos()
        {
            $this->db->query("SELECT * FROM productos");
            return $this->db->registersArray();
        }

        public function pagina()
        {
            if(isset($_GET["pagina"]))
            {
                if($_GET["pagina"] == 1)
                {
                    header("Location:" . RUTA_URL . "productos");
                }
                else
                {
                    $pagina = $_GET["pagina"];
                }
            }
            else
            {
                $pagina = 1;
            }
            return $pagina;
        }
    }

?>