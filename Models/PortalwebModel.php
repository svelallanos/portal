<?php

class PortalwebModel extends Mysql
{
    public function __construct()
    {
        parent::__construct();
    }

    // Selects all

    public function selectsReAlcaldia(int $anios_id, int $ralcaldia_estado)
    {
        $sql = "SELECT * FROM re_alcaldia
        WHERE ralcaldia_estado = :ralcaldia_estado AND anios_id = :anios_id";
        $request = $this->select_all($sql, ['ralcaldia_estado' => $ralcaldia_estado, 'anios_id' => $anios_id], DB_PORTAL);
        return $request;
    }

    public function selectsAnios(int $anios_estado = 1)
    {
        $sql = "SELECT * FROM anios
        WHERE anios_estado = :anios_estado
        ORDER BY anios_nombre DESC";
        $request = $this->select_all($sql, ['anios_estado' => $anios_estado], DB_PORTAL);
        return $request;
    }

}