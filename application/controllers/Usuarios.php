<?php

class Usuarios extends CI_Controller
{
    public function index()
    {
        $this->load->model("ModelUser");
        $usuarios = $this->ModelUser->usuarios();
        $this->load->view('usuarios', compact('usuarios'));
    }
}
