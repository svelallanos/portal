<?php

class Alcalde extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function alcalde()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(7, true);

        $data['page_id'] = 7;
        $data['page_tag'] = "MDESV - Portal Web";
        $data['page_title'] = ":. Alcalde - Portal Web";
        $data['page_name'] = "Alcalde";
        // $data['page_css'] = "alcalde/alcalde";
        $data['page_function_js'] = "alcalde/functions_alcalde";
        $this->views->getView($this, "alcalde", $data);
    }

    public function selectsAlcalde()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(8, true);

        $dataAlcalde = $this->model->selectsAlcalde();

        foreach ($dataAlcalde as $key => $value) {
            $dataAlcalde[$key]['options'] = '<button class="btn btn-sm btn-warning btn-icon"><i class="feather-edit"></i></button>&nbsp;<button class="btn btn-sm btn-danger btn-icon"><i class="feather-trash-2"></i></button>';
        }



        json($dataAlcalde);
    }
}
