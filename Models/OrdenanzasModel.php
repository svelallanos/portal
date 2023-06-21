<?php

class OrdenanzasModel extends Mysql
{
    public function __construct()
    {
        parent::__construct();
    }

    // Select all
    public function selectsOrdenanzas()
    {
        $sql = 'SELECT * FROM ordenanza_municipal';
        $request = $this->select_all($sql, array(), DB_PORTAL);
        return $request;
    }

    public function selectAnios()
    {
        $sql = 'SELECT * FROM anios';
        $request = $this->select_all($sql, array(), DB_PORTAL);
        return $request;
    }
    // Select
   

    // Insert
    // Update
    // Delete
    
    public function deleteOrdenanza(int $ordenanza_id)
    {
        $sql = 'DELETE FROM ordenanza_municipal
        WHERE ordenanza_id =:ordenanza_id';

        $request = $this->delete($sql, ['ordenanza_id' => $ordenanza_id], DB_PORTAL);

        return $request;
    }

    public function updateEstado(int $ordenanza_id, int $ordenanza_estado)
    {
        $sql = 'UPDATE ordenanza_municipal SET ordenanza_estado = :ordenanza_estado
        WHERE ordenanza_id = :ordenanza_id';
        $request = $this->update($sql, ['ordenanza_estado' => $ordenanza_estado, 'ordenanza_id' => $ordenanza_id], DB_PORTAL);

        return $request;
    }
}

