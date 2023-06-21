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

    public function selectReAlcaldia(int $ralcaldia_id)
    {
        $sql = 'SELECT * FROM re_alcaldia
        WHERE ralcaldia_id = :ralcaldia_id';
        $request = $this->select($sql, array('ralcaldia_id' => $ralcaldia_id), DB_PORTAL);
        return $request;
    }

    // Insert

    public function saveReAlcaldia(int $anios_id, string $ralcaldia_nombre, string $ralcaldia_descripcion, string $ralcaldia_archivo, string $ralcaldia_fechapublicacion, int $usuarios_id)
    {
        $sql = 'INSERT INTO re_alcaldia(anios_id,ralcaldia_nombre,ralcaldia_descripcion,ralcaldia_archivo,ralcaldia_fechapublicacion,usuarios_id) VALUES (:anios_id,:ralcaldia_nombre,:ralcaldia_descripcion,:ralcaldia_archivo,:ralcaldia_fechapublicacion,:usuarios_id)';

        $arrData = [
            'anios_id' => $anios_id,
            'ralcaldia_nombre' => $ralcaldia_nombre,
            'ralcaldia_descripcion' => $ralcaldia_descripcion,
            'ralcaldia_archivo' => $ralcaldia_archivo,
            'ralcaldia_fechapublicacion' => $ralcaldia_fechapublicacion,
            'usuarios_id' => $usuarios_id
        ];

        $request = $this->insert($sql, $arrData, DB_PORTAL);

        return $request;
    }

    // Update

    public function updateEstado(int $ralcaldia_id, int $ralcaldia_estado)
    {
        $sql = 'UPDATE re_alcaldia SET ralcaldia_estado = :ralcaldia_estado
        WHERE ralcaldia_id = :ralcaldia_id';
        $request = $this->update($sql, ['ralcaldia_estado' => $ralcaldia_estado, 'ralcaldia_id' => $ralcaldia_id], DB_PORTAL);

        return $request;
    }

    public function updateReAlcaldia(int $ralcaldia_id, int $anios_id, string $ralcaldia_nombre, string $ralcaldia_descripcion, string $ralcaldia_archivo, string $ralcaldia_fechapublicacion)
    {
        $sql = 'UPDATE re_alcaldia SET 
        anios_id = :anios_id,
        ralcaldia_nombre = :ralcaldia_nombre,
        ralcaldia_descripcion = :ralcaldia_descripcion,
        ralcaldia_archivo = :ralcaldia_archivo,
        ralcaldia_fechapublicacion = :ralcaldia_fechapublicacion
        WHERE ralcaldia_id = :ralcaldia_id
        ';

        $arrData = [
            'anios_id' => $anios_id,
            'ralcaldia_nombre' => $ralcaldia_nombre,
            'ralcaldia_descripcion' => $ralcaldia_descripcion,
            'ralcaldia_archivo' => $ralcaldia_archivo,
            'ralcaldia_fechapublicacion' => $ralcaldia_fechapublicacion,
            'ralcaldia_id' => $ralcaldia_id
        ];

        $request = $this->update($sql, $arrData, DB_PORTAL);

        return $request;
    }

    // Delete

    public function deleteReAlcaldia(int $ralcaldia_id)
    {
        $sql = 'DELETE FROM re_alcaldia
        WHERE ralcaldia_id = :ralcaldia_id';
        $request = $this->delete($sql, array('ralcaldia_id' => $ralcaldia_id), DB_PORTAL);
        return $request;
    }
}
