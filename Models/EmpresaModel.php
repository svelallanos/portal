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

    // Insert

    public function insertEmpresa(string $empresa_nombre, string $empresa_descripcion, string $empresa_ruc, int $email_id, string $empresa_logo, string $empresa_mision, string $empresa_vision, string $empresa_historia, string $empresa_poblacion)
    {
        $sql = 'INSERT INTO empresa(empresa_nombre,empresa_descripcion,empresa_ruc,email_id,empresa_logo,empresa_mision,empresa_vision,empresa_historia,empresa_poblacion) VALUES (:empresa_nombre,:empresa_descripcion,:empresa_ruc,:email_id,:empresa_logo,:empresa_mision,:empresa_vision,:empresa_historia,:empresa_poblacion)';

        $arrData = [
            'empresa_nombre' => $empresa_nombre,
            'empresa_descripcion' => $empresa_descripcion,
            'empresa_ruc' => $empresa_ruc,
            'email_id' => $email_id,
            'empresa_logo' => $empresa_logo,
            'empresa_mision' => $empresa_mision,
            'empresa_vision' => $empresa_vision,
            'empresa_historia' => $empresa_historia,
            'empresa_poblacion' => $empresa_poblacion
        ];

        $request = $this->insert($sql, $arrData, DB_PORTAL);

        return $request;
    }

    public function deleteEmpresa(int $empresa_id)
    {
        $sql = 'DELETE FROM empresa
        WHERE empresa_id = :empresa_id';
        $request = $this->delete($sql, ['empresa_id'=> $empresa_id], DB_PORTAL);

        return $request;
    }
}
