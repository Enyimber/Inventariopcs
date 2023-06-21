<?php

class ModelUser extends CI_Model
{

    public function usuarios()
    {
        return $this->load->get("Usuarios")->result();
    }
}
