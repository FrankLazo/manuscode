<?php

    class Homes extends Controller
    {
        public function __construct()
        {
            $this->homeModel = $this->model('Home');
        }

        public function index()
        {
            $novedades = $this->homeModel->obtenerNovedades();
            for($i = 0; $i < 4; $i++)
            {
                $codigos[$i] = $novedades[$i]->CODIGO;
            }
            $nombres = $this->homeModel->obtenerNombres($codigos);
            $datos = ['novedades' => $novedades,
                        'nombres' => $nombres];
            $this->view('pages/home', $datos);
        }
    }

?>