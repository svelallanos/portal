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
    // Select

    // Insert

    // Update

    // Delete

}
