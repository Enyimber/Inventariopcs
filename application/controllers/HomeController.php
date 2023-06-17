<?php
/* 
    *Modulo: Home donde se cargara la vista despues de logearse en el aplicativo
    *Autor: Sergio Galvis
    *Fecha: 17/06/2023
*/
class HomeController extends CI_Controller
{
    // 
    public static $meses;
    // Metodo constructor para cargar los modelos y utilizarlos en las diferentes funciones de la clase
    public function __construct()
    {
        //$this->load->model('HomeModel');
        parent::__construct();
        self::$meses = ['', 'ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'];
    }

    public function index()
    {


        $data_header = array(
            'title' => 'Home',
            'description' => 'Página principal del aplicativo web Inventario PC`s',
        );

        $this->load->view('header', $data_header);
        $this->load->view('home/index');
    }
}
