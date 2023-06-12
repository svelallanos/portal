<?php

class Gestion extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function gestion()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(6, true);

        $data['page_id'] = 6;
        $data['page_tag'] = "MDESV - Portal Web";
        $data['page_title'] = ":. Usuarios - Portal Web";
        $data['page_name'] = "Gestión - Alcaldía";
        $data['page_css'] = "gestion/gestion";
        $data['page_function_js'] = "gestion/functions_gestion";
        $this->views->getView($this, "gestion", $data);
    }

    public function selectsGestion()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(6, true);

        $dataGestion = $this->model->selectsGestion();

        foreach ($dataGestion as $key => $value) {

            $value['gestion_estado'] = 3;

            if (intval($value['gestion_estado']) == 1) {
                $dataGestion[$key]['gestion_estado'] = '<div class="badge bg-success">Activo</div>';

                $dataGestion[$key]['options'] = '<button class="btn btn-sm btn-danger btn-icon" title="Finalizar gestión"><i class="feather-clock"></i></button>&nbsp;<button class="btn btn-sm btn-info btn-icon" title="Pausar gestión"><i class="feather-pause-circle"></i></button>';
            } else if (intval($value['gestion_estado']) == 2) {
                $dataGestion[$key]['gestion_estado'] = '<div class="badge bg-secondary">Programado</div>';

                $dataGestion[$key]['options'] = '<button type="button" class="btn btn-sm btn-warning btn-icon" title="Editar gestión"><i class="feather-edit-3"></i></button>&nbsp;<button type="button" class="btn btn-sm btn-danger btn-icon" title="Eliminar gestión"><i class="feather-trash-2"></i></button>&nbsp;<button type="button" class="btn btn-sm btn-success btn-icon" title="Habilitar gestión"><i class="feather-chevrons-right"></i></button>';
            } else if (intval($value['gestion_estado']) == 3){
                $dataGestion[$key]['options'] = '<button type="button" class="btn btn-sm btn-success btn-icon" title="Habilitar gestión"><i class="feather-chevrons-right"></i></button>';

                $dataGestion[$key]['gestion_estado'] = '<div class="badge bg-warning">Pausado</div>';
            }else {
                $dataGestion[$key]['options'] = '<span class="text-body fst-italic">Sin acciones</span>';

                $dataGestion[$key]['gestion_estado'] = '<div class="badge bg-danger">Finalizado</div>';
            }
        }
        json($dataGestion);
    }
}
