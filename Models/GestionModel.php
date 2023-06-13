<?php

class GestionModel extends Mysql
{
    public function __construct()
    {
        parent::__construct();
    }

    // Select All
    public function selectsGestion()
    {
        $sql = 'SELECT * FROM gestion_municipal';
        $request = $this->select_all($sql, array(), DB_PORTAL);

        return $request;
    }

    // Insert

    public function saveGestion(int $usuarios_id, string $gestion_nombre, string $gestion_descripcion, string $gestion_fecha_inicio, string $gestion_fecha_final)
    {
        $sql = "INSERT INTO gestion_municipal (usuarios_id, gestion_nombre, gestion_descripcion, gestion_fecha_inicio, gestion_fecha_final) VALUES (:usuarios_id, :gestion_nombre, :gestion_descripcion, :gestion_fecha_inicio, :gestion_fecha_final)";

        $arrData = [
            'usuarios_id' => $usuarios_id,
            'gestion_nombre' => $gestion_nombre,
            'gestion_descripcion' => $gestion_descripcion,
            'gestion_fecha_inicio' => $gestion_fecha_inicio,
            'gestion_fecha_final' => $gestion_fecha_final,
        ];

        $request = $this->insert($sql, $arrData, DB_PORTAL);

        return $request;
    }

    // Delete

    public function updateGestion(int $gestion_id, string $gestion_nombre, string $gestion_descripcion, string $gestion_fecha_inicio, string $gestion_fecha_final)
    {
        $sql = 'UPDATE gestion_municipal SET gestion_nombre = :gestion_nombre,gestion_descripcion = :gestion_descripcion, gestion_fecha_inicio = :gestion_fecha_inicio, gestion_fecha_final = :gestion_fecha_final 
        WHERE gestion_id = :gestion_id';

        $arrData = [
            'gestion_id' => $gestion_id,
            'gestion_nombre' => $gestion_nombre,
            'gestion_descripcion' => $gestion_descripcion,
            'gestion_fecha_inicio' => $gestion_fecha_inicio,
            'gestion_fecha_final' => $gestion_fecha_final
        ];

        $request = $this->update($sql, $arrData, DB_PORTAL);

        return $request;
    }


    // Delete

    public function deleteGestion(int $gestion_id)
    {
        $sql = 'DELETE FROM gestion_municipal
        WHERE gestion_id =:gestion_id';

        $request = $this->delete($sql, ['gestion_id' => $gestion_id], DB_PORTAL);

        return $request;
    }
}
