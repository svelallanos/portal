<?php

class AlcaldeModel extends Mysql
{
    public function __construct()
    {
        parent::__construct();
    }

    // Select All

    public function selectsAlcalde()
    {
        $sql = 'SELECT * FROM alcalde';
        $request = $this->select_all($sql, array(), DB_PORTAL);
        return $request;
    }

    public function selectsGestion()
    {
        $sql = 'SELECT * FROM gestion_municipal';
        $request = $this->select_all($sql, array(), DB_PORTAL);
        return $request;
    }

    // Select

    public function selectAlcalde(int $alcalde_id)
    {
        $sql = 'SELECT * FROM alcalde 
        WHERE alcalde_id = :alcalde_id';
        $request = $this->select($sql, array('alcalde_id' => $alcalde_id), DB_PORTAL);
        return $request;
    }

    // Insert

    public function insertAlcalde(int $gestion_id, string $alcalde_nombres, string $alcalde_apellidopaterno, string $alcalde_apellidomaterno, string $alcalde_dni, string $alcalde_ruc, string $alcalde_email, string $alcalde_celular, string $alcalde_photo, string $alcalde_resumen, string $alcalde_saludo)
    {
        $sql = 'INSERT INTO alcalde(gestion_id,alcalde_nombres,alcalde_apellidopaterno,alcalde_apellidomaterno,alcalde_dni,alcalde_ruc,alcalde_email,alcalde_celular,alcalde_photo,alcalde_resumen,alcalde_saludo) VALUES (:gestion_id,:alcalde_nombres,:alcalde_apellidopaterno,:alcalde_apellidomaterno,:alcalde_dni,:alcalde_ruc,:alcalde_email,:alcalde_celular,:alcalde_photo,:alcalde_resumen,:alcalde_saludo)';

        $arrData = [
            'gestion_id' => $gestion_id,
            'alcalde_nombres' => $alcalde_nombres,
            'alcalde_apellidopaterno' => $alcalde_apellidopaterno,
            'alcalde_apellidomaterno' => $alcalde_apellidomaterno,
            'alcalde_dni' => $alcalde_dni,
            'alcalde_ruc' => $alcalde_ruc,
            'alcalde_email' => $alcalde_email,
            'alcalde_celular' => $alcalde_celular,
            'alcalde_photo' => $alcalde_photo,
            'alcalde_resumen' => $alcalde_resumen,
            'alcalde_saludo' => $alcalde_saludo
        ];

        $request = $this->insert($sql, $arrData, DB_PORTAL);

        return $request;
    }

    // Update

    public function updateAlcalde(int $alcalde_id, int $gestion_id, string $alcalde_nombres, string $alcalde_apellidopaterno, string $alcalde_apellidomaterno, string $alcalde_dni, string $alcalde_ruc, string $alcalde_email, string $alcalde_celular, string $alcalde_photo, string $alcalde_resumen, string $alcalde_saludo)
    {
        $sql = 'UPDATE alcalde SET 
        gestion_id = :gestion_id, 
        alcalde_nombres = :alcalde_nombres, 
        alcalde_apellidopaterno = :alcalde_apellidopaterno, 
        alcalde_apellidomaterno = :alcalde_apellidomaterno, 
        alcalde_dni = :alcalde_dni, 
        alcalde_ruc = :alcalde_ruc, 
        alcalde_email = :alcalde_email, 
        alcalde_celular = :alcalde_celular, 
        alcalde_photo = :alcalde_photo, 
        alcalde_resumen = :alcalde_resumen, 
        alcalde_saludo = :alcalde_saludo 
        WHERE alcalde_id = :alcalde_id';

        $arrData = [
            'gestion_id' => $gestion_id,
            'alcalde_nombres' => $alcalde_nombres,
            'alcalde_apellidopaterno' => $alcalde_apellidopaterno,
            'alcalde_apellidomaterno' => $alcalde_apellidomaterno,
            'alcalde_dni' => $alcalde_dni,
            'alcalde_ruc' => $alcalde_ruc,
            'alcalde_email' => $alcalde_email,
            'alcalde_celular' => $alcalde_celular,
            'alcalde_photo' => $alcalde_photo,
            'alcalde_resumen' => $alcalde_resumen,
            'alcalde_saludo' => $alcalde_saludo,
            'alcalde_id' => $alcalde_id
        ];

        $request = $this->update($sql, $arrData, DB_PORTAL);

        return $request;
    }


    // Delete

    public function deleteAlcalde(int $alcalde_id)
    {
        $sql = 'DELETE FROM alcalde
        WHERE alcalde_id = :alcalde_id';

        $request = $this->delete($sql, ['alcalde_id' => $alcalde_id], DB_PORTAL);

        return $request;
    }
}
