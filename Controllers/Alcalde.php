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

        $this->model->selectsGestion();

        $data['page_id'] = 7;
        $data['page_tag'] = "MDESV - Portal Web";
        $data['page_title'] = ":. Alcalde - Portal Web";
        $data['page_name'] = "Alcalde";
        $data['page_function_js'] = "alcalde/functions_alcalde";
        $this->views->getView($this, "alcalde", $data);
    }

    public function selectsAlcalde()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(8, true);

        // Cargar datos gestion
        $dataGestion = $this->model->selectsGestion();
        $auxDataGestion = array();

        foreach ($dataGestion as $key => $value) {
            $auxDataGestion[$value['gestion_id']] = $value['gestion_nombre'];
        }

        $dataAlcalde = $this->model->selectsAlcalde();

        foreach ($dataAlcalde as $key => $value) {
            $dataAlcalde[$key]['options'] = '<button class="btn btn-sm btn-warning btn-icon"><i class="feather-edit"></i></button>&nbsp;<button class="btn btn-sm btn-danger btn-icon"><i class="feather-trash-2"></i></button>';


            $dataAlcalde[$key]['gestion'] = $auxDataGestion[$value['gestion_id']];

            $dataAlcalde[$key]['nombres'] = $value['alcalde_nombres'] . ', ' . $value['alcalde_apellidopaterno'] . ' ' . $value['alcalde_apellidomaterno'];

            $dataAlcalde[$key]['estado'] = '<span class="badge bg-danger">Inactivo</span>';
            if (intval($value['alcalde_estado']) === 1) {
                $dataAlcalde[$key]['estado'] = '<span class="badge bg-success">Activo</span>';
            }
        }



        json($dataAlcalde);
    }

    public function nuevo()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(7, true);

        $data['page_id'] = 7;
        $data['page_tag'] = "MDESV - Portal Web";
        $data['page_title'] = ":. Nuevo alcalde - Portal Web";
        $data['page_name'] = "Nuevo alcalde";
        $data['page_function_js'] = "alcalde/functions_alcalde";

        $data['gestion'] = $this->model->selectsGestion();

        $this->views->getView($this, "nuevo", $data);
    }

    public function saveAlcalde()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(7, true);

        json($_FILES);
    }
}
