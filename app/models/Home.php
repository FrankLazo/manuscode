<?php

    class Home
    {
        private $db;

        public function __construct()
        {
            $this->db = new Base;
        }

        public function obtenerNovedades()
        {
            $this->db->query("SELECT * FROM novedades");
            return $this->db->registers();
        }

        public function obtenerNombres($codigos)
        {
            $nombres = [];

            for($i = 0; $i < 4; $i++)
            {
                $this->db->query("SELECT NOMBRE FROM productos WHERE CODIGO='$codigos[$i]'");
                $nombres[$i] = $this->db->register();
            }
            
            return $nombres;
        }
    }

?>