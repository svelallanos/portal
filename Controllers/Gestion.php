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

            if (intval($value['gestion_estado']) == 1) {
                $dataGestion[$key]['gestion_estado'] = '<div class="badge bg-success">Activo</div>';

                $dataGestion[$key]['options'] = '<button class="btn btn-sm btn-danger btn-icon" title="Finalizar gestión"><i class="feather-clock"></i></button>&nbsp;<button class="btn btn-sm btn-info btn-icon" title="Pausar gestión"><i class="feather-pause-circle"></i></button>';
            } else if (intval($value['gestion_estado']) == 2) {
                $dataGestion[$key]['gestion_estado'] = '<div class="badge bg-secondary">Programado</div>';

                $dataGestion[$key]['options'] = '<button type="button" class="btn btn-sm btn-warning btn-icon __editar_gestion" data-gestion_id = "' . $value['gestion_id'] . '" data-gestion_nombre = "' . $value['gestion_nombre'] . '" data-gestion_descripcion = "' . $value['gestion_descripcion'] . '" data-gestion_fecha_inicio = "' . $value['gestion_fecha_inicio'] . '" data-gestion_fecha_final = "' . $value['gestion_fecha_final'] . '" title="Editar gestión"><i class="feather-edit-3"></i></button>&nbsp;<button type="button" class="btn btn-sm btn-danger btn-icon __delete_gestion" data-gestion_id = "' . $value['gestion_id'] . '" data-gestion_nombre = "' . $value['gestion_nombre'] . '" title="Eliminar gestión"><i class="feather-trash-2"></i></button>&nbsp;<button type="button" class="btn btn-sm btn-success btn-icon" title="Habilitar gestión"><i class="feather-chevrons-right"></i></button>';
            } else if (intval($value['gestion_estado']) == 3) {
                $dataGestion[$key]['options'] = '<button type="button" class="btn btn-sm btn-success btn-icon" title="Habilitar gestión"><i class="feather-chevrons-right"></i></button>';

                $dataGestion[$key]['gestion_estado'] = '<div class="badge bg-warning">Pausado</div>';
            } else {
                $dataGestion[$key]['options'] = '<span class="text-body fst-italic">Sin acciones</span>';

                $dataGestion[$key]['gestion_estado'] = '<div class="badge bg-danger">Finalizado</div>';
            }
        }
        json($dataGestion);
    }

    public function saveGestion()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(6, true);

        // falta validar datos
        $return = [
            'status' => false,
            'msg' => 'Error al momento de registrar Gestión de Alcaldía.',
            'value' => 'error'
        ];

        $anioInicio = explode('-', $_POST['gestion_inicio'])[0];

        $anioFinal = explode('-', $_POST['gestion_fin'])[0];

        $nameGestion = 'Gestión ' . $anioInicio . ' - ' . $anioFinal;

        $saveGestion = $this->model->saveGestion($this->defineDatosUserPortal()['usuarios_id'], $nameGestion, $_POST['gestion_descripcion'], $_POST['gestion_inicio'], $_POST['gestion_fin']);

        if (intval($saveGestion) <= 0) {
            $return = [
                'msg' => 'Error al momento de registrar la Gestión.'
            ];

            json($return);
        }

        $return = [
            'status' => true,
            'msg' => 'Gestión registrada correctamente.',
            'value' => 'success'
        ];

        json($return);
    }

    public function deleteGestion()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(6, true);

        $return = [
            'status' => false,
            'msg' => 'Error al momento de eliminar la Gestión',
            'value' => 'error'
        ];

        $deleteGestion = $this->model->deleteGestion($_POST['gestion_id']);

        if ($deleteGestion) {
            $return = [
                'status' => true,
                'msg' => 'Gestión eliminada correctamente.',
                'value' => 'success'
            ];
        }

        json($return);
    }

    public function updateGestion() {
        parent::verificarLogin(true);
        parent::verificarPermiso(6, true);

        $return = [
            'status' => false,
            'msg' => 'Error al momento de actualizar la Gestión de Alcaldía.',
            'value' => 'error'
        ];

        $anioInicio = explode('-', $_POST['gestion_inicio_editar'])[0];

        $anioFinal = explode('-', $_POST['gestion_fin_editar'])[0];

        $nameGestion = 'Gestión ' . $anioInicio . ' - ' . $anioFinal;

        $updateGestion = $this->model->updateGestion($_POST['gestion_id'], $nameGestion, $_POST['gestion_descripcion_editar'], $_POST['gestion_inicio_editar'], $_POST['gestion_fin_editar']);

        if($updateGestion) {
            $return = [
                'status' => true,
                'msg' => 'Gestión actualizada correctamente.',
                'value' => 'success'
            ];
        }

        json($return);
    }
}
