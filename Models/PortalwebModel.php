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

    public function selectsReGerencia(int $anios_id, int $rgerencia_estado)
    {
        $sql = "SELECT * FROM re_gerencia
        WHERE rgerencia_estado = :rgerencia_estado AND anios_id = :anios_id";
        $request = $this->select_all($sql, ['rgerencia_estado' => $rgerencia_estado, 'anios_id' => $anios_id], DB_PORTAL);
        return $request;
    }

    public function selectsReConsejo(int $anios_id, int $rconsejo_estado)
    {
        $sql = "SELECT * FROM re_consejo
        WHERE rconsejo_estado = :rconsejo_estado AND anios_id = :anios_id";
        $request = $this->select_all($sql, ['rconsejo_estado' => $rconsejo_estado, 'anios_id' => $anios_id], DB_PORTAL);
        return $request;
    }

    public function selectsOrdenanzas(int $anios_id, int $ordenanza_estado)
    {
        $sql = "SELECT * FROM ordenanza_municipal
        WHERE ordenanza_estado = :ordenanza_estado AND anios_id = :anios_id";
        $request = $this->select_all($sql, ['ordenanza_estado' => $ordenanza_estado, 'anios_id' => $anios_id], DB_PORTAL);
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

    public function selectsEmails(int $email_estado = 1)
    {
        $sql = "SELECT * FROM email_institucional
        WHERE email_estado = :email_estado";
        $request = $this->select_all($sql, ['email_estado' => $email_estado], DB_PORTAL);
        return $request;
    }

    // Select

    public function selectGestion(int $gestion_estado = 1)
    {
        $sql = "SELECT * FROM gestion_municipal
        WHERE gestion_estado = :gestion_estado";
        $request = $this->select($sql, ['gestion_estado' => $gestion_estado], DB_PORTAL);
        return $request;
    }

    public function selectAlcalde(int $gestion_id, int $alcalde_estado = 1)
    {
        $sql = "SELECT * FROM alcalde
        WHERE gestion_id = :gestion_id AND alcalde_estado = :alcalde_estado";
        $request = $this->select($sql, ['gestion_id' => $gestion_id, 'alcalde_estado' => $alcalde_estado], DB_PORTAL);
        return $request;
    }

    public function selectEmpresa(int $empresa_estado = 1)
    {
        $sql = "SELECT * FROM empresa
        WHERE empresa_estado = :empresa_estado";
        $request = $this->select($sql, ['empresa_estado' => $empresa_estado], DB_PORTAL);
        return $request;
    }

}