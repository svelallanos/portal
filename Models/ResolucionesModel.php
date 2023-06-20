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

    public function updateEstado(int $ralcaldia_id, int $ralcaldia_estado)
    {
        $sql = 'UPDATE re_alcaldia SET ralcaldia_estado = :ralcaldia_estado
        WHERE ralcaldia_id = :ralcaldia_id';
        $request = $this->update($sql, ['ralcaldia_estado' => $ralcaldia_estado, 'ralcaldia_id' => $ralcaldia_id], DB_PORTAL);

        return $request;
    }

    // Delete
}
