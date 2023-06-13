<?php
class EmpresaModel extends Mysql
{
    public function __construct()
    {
        parent::__construct();
    }
    
    // Select all
    public function selectsEmpresa()
    {
        $sql = 'SELECT * FROM empresa';
        $request = $this->select_all($sql, array(), DB_PORTAL);

        return $request;
    }

    public function selectsEmail()
    {
        $sql = 'SELECT * FROM email_institucional';
        $request = $this->select_all($sql, array(), DB_PORTAL);

        return $request;
    }
}
