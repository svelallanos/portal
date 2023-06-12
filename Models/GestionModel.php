<?php

class GestionModel extends Mysql{
    public function __construct()
    {
        parent::__construct();
    }

    public function selectsGestion() {
        $sql = 'SELECT * FROM gestion';
        $request = $this->select_all($sql, array(), DB_PORTAL);

        return $request;
    }
}