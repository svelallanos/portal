<?php
class Empresa extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function empresa()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(8, true);

        $data['page_id'] = 8;
        $data['page_tag'] = "MDESV - Portal Web";
        $data['page_title'] = ":. Empresa - Portal Web";
        $data['page_name'] = "Empresa";
        // $data['page_css'] = "municipio/municipio";
        $data['page_function_js'] = "empresa/functions_empresa";
        $this->views->getView($this, "empresa", $data);
    }

    public function selectsEmpresa() {
        parent::verificarLogin(true);
        parent::verificarPermiso(8, true);

        // traemos todos lo emails
        $dataEmail = $this->model->selectsEmail();
        $auxDataEmail = array();
        foreach ($dataEmail as $key => $value) {
            $auxDataEmail[$value['email_id']] = $value['email_nombre'];
        }

        $dataEmpresa = $this->model->selectsEmpresa();

        foreach ($dataEmpresa as $key => $value) {
            $dataEmpresa[$key]['options'] = '<button class="btn btn-sm btn-danger btn-icon"><i class="feather-trash-2"></i></button>&nbsp;<button class="btn btn-sm btn-warning btn-icon"><i class="feather-edit"></i></button>';

            $dataEmpresa[$key]['email'] = $auxDataEmail[$value['email_id']];

            $dataEmpresa[$key]['estado'] = '<span class="badge bg-danger">Inactivo</span>';
            if(intval($value['empresa_estado']) == 1){
                $dataEmpresa[$key]['estado'] = '<span class="badge bg-success">Activo</span>';
            }
        }


        json($dataEmpresa);
    }
}