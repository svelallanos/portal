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

    public function selectsReGerencia()
    {
        $sql = 'SELECT * FROM re_gerencia';
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

    public function selectReGerencia(int $rgerencia_id)
    {
        $sql = 'SELECT * FROM re_gerencia
        WHERE rgerencia_id = :rgerencia_id';
        $request = $this->select($sql, array('rgerencia_id' => $rgerencia_id), DB_PORTAL);
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

    public function saveReGerencia(int $anios_id, string $rgerencia_nombre, string $rgerencia_descripcion, string $rgerencia_archivo, string $rgerencia_fechapublicacion, int $usuarios_id)
    {
        $sql = 'INSERT INTO re_gerencia(anios_id,rgerencia_nombre,rgerencia_descripcion,rgerencia_archivo,rgerencia_fechapublicacion,usuarios_id) VALUES (:anios_id,:rgerencia_nombre,:rgerencia_descripcion,:rgerencia_archivo,:rgerencia_fechapublicacion,:usuarios_id)';

        $arrData = [    
            'anios_id' => $anios_id,
            'rgerencia_nombre' => $rgerencia_nombre,
            'rgerencia_descripcion' => $rgerencia_descripcion,
            'rgerencia_archivo' => $rgerencia_archivo,
            'rgerencia_fechapublicacion' => $rgerencia_fechapublicacion,
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

    public function updateEstadoGerencia(int $rgerencia_id, int $rgerencia_estado)
    {
        $sql = 'UPDATE re_gerencia SET rgerencia_estado = :rgerencia_estado
        WHERE rgerencia_id = :rgerencia_id';
        $request = $this->update($sql, ['rgerencia_estado' => $rgerencia_estado, 'rgerencia_id' => $rgerencia_id], DB_PORTAL);

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

    public function updateReGerencia(int $rgerencia_id, int $anios_id, string $rgerencia_nombre, string $rgerencia_descripcion, string $rgerencia_archivo, string $rgerencia_fechapublicacion)
    {
        $sql = 'UPDATE re_gerencia SET 
        anios_id = :anios_id,
        rgerencia_nombre = :rgerencia_nombre,
        rgerencia_descripcion = :rgerencia_descripcion,
        rgerencia_archivo = :rgerencia_archivo,
        rgerencia_fechapublicacion = :rgerencia_fechapublicacion
        WHERE rgerencia_id = :rgerencia_id
        ';

        $arrData = [
            'anios_id' => $anios_id,
            'rgerencia_nombre' => $rgerencia_nombre,
            'rgerencia_descripcion' => $rgerencia_descripcion,
            'rgerencia_archivo' => $rgerencia_archivo,
            'rgerencia_fechapublicacion' => $rgerencia_fechapublicacion,
            'rgerencia_id' => $rgerencia_id
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

    public function deleteReGerencia(int $rgerencia_id)
    {
        $sql = 'DELETE FROM re_gerencia
        WHERE rgerencia_id = :rgerencia_id';
        $request = $this->delete($sql, array('rgerencia_id' => $rgerencia_id), DB_PORTAL);
        return $request;
    }
}
