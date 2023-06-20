<?php

class ResolucionesModel extends Mysql
{
    public function __construct()
    {
        parent::__construct();
    }

    // Select all

    public function selectsAnios()
    {
        $sql = 'SELECT * FROM anios';
        $request = $this->select_all($sql, array(), DB_PORTAL);
        return $request;
    }

    public function selectsReAlcaldia()
    {
        $sql = 'SELECT * FROM re_alcaldia';
        $request = $this->select_all($sql, array(), DB_PORTAL);
        return $request;
    }


    // Select
    // Insert
    // Update
    // Delete
}
