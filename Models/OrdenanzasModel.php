<?php

class OrdenanzasModel extends Mysql
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

    public function selectsOrdenanzas()
    {
        $sql = 'SELECT * FROM ordenanza_municipal';
        $request = $this->select_all($sql, array(), DB_PORTAL);
        return $request;
    }

    // Select

    public function selectOrdenanza(int $ordenanza_id)
    {
        $sql = 'SELECT * FROM ordenanza_municipal
        WHERE ordenanza_id = :ordenanza_id';
        $request = $this->select($sql, array('ordenanza_id' => $ordenanza_id), DB_PORTAL);
        return $request;
    }

    // Insert

    public function saveOrdenanza(int $anios_id, string $ordenanza_nombre, string $ordenanza_descripcion, string $ordenanza_archivo, string $ordenanza_fechapublicacion, int $usuarios_id)
    {
        $sql = 'INSERT INTO ordenanza_municipal(anios_id,ordenanza_nombre,ordenanza_descripcion,ordenanza_archivo,ordenanza_fechapublicacion,usuarios_id) VALUES (:anios_id,:ordenanza_nombre,:ordenanza_descripcion,:ordenanza_archivo,:ordenanza_fechapublicacion,:usuarios_id)';

        $arrData = [
            'anios_id' => $anios_id,
            'ordenanza_nombre' => $ordenanza_nombre,
            'ordenanza_descripcion' => $ordenanza_descripcion,
            'ordenanza_archivo' => $ordenanza_archivo,
            'ordenanza_fechapublicacion' => $ordenanza_fechapublicacion,
            'usuarios_id' => $usuarios_id
        ];

        $request = $this->insert($sql, $arrData, DB_PORTAL);

        return $request;
    }

    // Update

    public function updateEstado(int $ordenanza_id, int $ordenanza_estado)
    {
        $sql = 'UPDATE ordenanza_municipal SET ordenanza_estado = :ordenanza_estado
        WHERE ordenanza_id = :ordenanza_id';
        $request = $this->update($sql, ['ordenanza_estado' => $ordenanza_estado, 'ordenanza_id' => $ordenanza_id], DB_PORTAL);

        return $request;
    }

    public function updateOrdenanza(int $ordenanza_id, int $anios_id, string $ordenanza_nombre, string $ordenanza_descripcion, string $ordenanza_archivo, string $ordenanza_fechapublicacion)
    {
        $sql = 'UPDATE ordenanza_municipal SET 
        anios_id = :anios_id,
        ordenanza_nombre = :ordenanza_nombre,
        ordenanza_descripcion = :ordenanza_descripcion,
        ordenanza_archivo = :ordenanza_archivo,
        ordenanza_fechapublicacion = :ordenanza_fechapublicacion
        WHERE ordenanza_id = :ordenanza_id
        ';

        $arrData = [
            'anios_id' => $anios_id,
            'ordenanza_nombre' => $ordenanza_nombre,
            'ordenanza_descripcion' => $ordenanza_descripcion,
            'ordenanza_archivo' => $ordenanza_archivo,
            'ordenanza_fechapublicacion' => $ordenanza_fechapublicacion,
            'ordenanza_id' => $ordenanza_id
        ];

        $request = $this->update($sql, $arrData, DB_PORTAL);

        return $request;
    }

    // Delete

    public function deleteOrdenanza(int $ordenanza_id)
    {
        $sql = 'DELETE FROM ordenanza_municipal
        WHERE ordenanza_id = :ordenanza_id';
        $request = $this->delete($sql, array('ordenanza_id' => $ordenanza_id), DB_PORTAL);
        return $request;
    }
}