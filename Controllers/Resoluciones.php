<?php


class Resoluciones extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function alcaldia()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(9, true);

        $data['page_id'] = 9;
        $data['page_tag'] = "MDESV - Portal Web";
        $data['page_title'] = ":. Resoluciones de Alcaldía - Portal Web";
        $data['page_name'] = "Resoluciones de Alcaldía";
        $data['page_function_js'] = "resoluciones/functions_alcaldia";

        $data['anios'] = $this->selectsAnios();
        $this->views->getView($this, "alcaldia", $data);
    }

    public function selectsReAlcaldia()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(9, true);

        // Consultamos los años
        $dataAnios = $this->selectsAnios();
        $auxDataAnios = [];

        foreach ($dataAnios as $key => $value) {
            $auxDataAnios[$value['anios_id']] = $value['anios_nombre'];
        }

        $dataAlcaldia = $this->model->selectsReAlcaldia();

        foreach ($dataAlcaldia as $key => $value) {
            $value['ralcaldia_fechapublicacion'] = new DateTime(str_replace(' ', 'T', $value['ralcaldia_fechapublicacion']) . 'America/Lima');
            $dataAlcaldia[$key]['ralcaldia_fechapublicacion'] = '<div class="text-center"><span class="fw-bold">' . $value['ralcaldia_fechapublicacion']->format('h:i A') . '</span> - ' . $value['ralcaldia_fechapublicacion']->format('d/m/Y') . '</div>';

            $dataAlcaldia[$key]['numero'] = $key + 1;

            $dataAlcaldia[$key]['anio'] = $auxDataAnios[$value['anios_id']];

            if ($value['ralcaldia_estado'] == 1) {
                $dataAlcaldia[$key]['estado'] = '<span class="badge bg-success-soft text-success border fw-bold">Publicado</span>';

                $dataAlcaldia[$key]['options'] = '<button class="btn btn-sm btn-icon btn-indigo __despublicar_ralcaldia" data-ralcaldia_id="' . $value['ralcaldia_id'] . '" title="Despublicar"><i class="feather-slash"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-primary __view_ralcaldia" title="Ver resolución de alcaldía"><i class="feather-eye"></i></button>';
            } else {
                $dataAlcaldia[$key]['estado'] = '<span class="badge bg-indigo-soft text-indigo border">Sin publicar</span>';

                $dataAlcaldia[$key]['options'] = '<button class="btn btn-sm btn-icon btn-danger __delete_ralcaldia" data-ralcaldia_id="' . $value['ralcaldia_id'] . '" data-ralcaldia_nombre = "' . $value['ralcaldia_nombre'] . '"><i class="feather-trash-2"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-warning __edit_ralcaldia" 
                data-ralcaldia_id = "' . $value['ralcaldia_id'] . '" 
                ><i class="feather-edit-3"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-teal __publicar_ralcaldia" data-ralcaldia_id="' . $value['ralcaldia_id'] . '"><i class="feather-airplay"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-primary __view_ralcaldia" title="Ver resolución de alcaldía"><i class="feather-eye"></i></button>';
            }
        }

        json($dataAlcaldia);
    }

    public function selectReAlcaldia()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(9, true);

        $selectReAlcaldia = $this->model->selectReAlcaldia($_POST['ralcaldia_id']);

        json($selectReAlcaldia);
    }

    public function selectsAnios()
    {
        return $this->model->selectsAnios();
    }

    public function changeEstado()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(9, true);

        $return = [
            'status' => false,
            'msg' => 'Error al momento de actualizar el estado de la Resolución de Alcaldía.',
            'value' => 'error',
        ];

        $msg = 'Resolución de Alcaldía Despublicado.';
        if ($_POST['ralcaldia_estado'] == 1) {
            $msg = 'Resolución de Alcaldía Publicado.';
        }

        $updateEstado = $this->model->updateEstado($_POST['ralcaldia_id'], $_POST['ralcaldia_estado']);

        if ($updateEstado) {
            $return = [
                'status' => true,
                'msg' => $msg,
                'value' => 'success',
            ];
        }

        json($return);
    }

    public function insertReAlcaldia()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(9, true);

        // validamos que selecciona el doc
        $return = array(
            'status' => false,
            'msg' => 'Error al momento de registrar la Resolución de Alcaldía.',
            'value' => 'error'
        );

        $file_name = 'sin_doc.png';

        if (isset($_FILES['ralcaldia_archivo']) && $_FILES['ralcaldia_archivo']['error'] === 0) {

            $file = $_FILES['ralcaldia_archivo'];

            if ($file['type'] !== 'application/pdf') {
                $return['msg'] = 'Formato de documento no válida.';
                $return['value'] = 'warning';

                json($return);
            }

            $file['name'] = getExtension($file['name']);
            $noValido = true;

            foreach (getExtDocs() as $key => $value) {
                if ($value == $file['name']) {
                    $noValido = false;
                    break;
                }
            }

            if ($file['name'] == false || $noValido) {
                $return['msg'] = 'Tipo de imagen no válida, seleccione otra';
                $return['value'] = 'warning';

                json($return);
            }

            $file['name'] = 'realcaldia_doc_' . date('Ymd_His') . '.' . $file['name'];

            $file_name = $file['name'];

            $file['name'] = getPathDocReAlcaldia() . $file['name'];

            $uploaded = move_uploaded_file($file['tmp_name'], $file['name']);

            if (!$uploaded) {
                json($return);
            }
        }

        $insertReAlcaldia = $this->model->insertReAlcaldia(
            $_POST['anios_id'],
            $_POST['ralcaldia_nombre'],
            $_POST['ralcaldia_descripcion'],
            $file_name,
            $_POST['ralcaldia_fechapublicacion'],
            $this->defineDatosUserPortal()['usuarios_id']
        );

        if (intval($insertReAlcaldia) > 0) {
            $return = array(
                'status' => true,
                'msg' => 'Datos registrados correctamente',
                'value' => 'success'
            );
        }
        json($return);
    }

    public function deleteReAlcaldia()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(9, true);

        $return = [
            'status' => false,
            'msg' => 'Error al momento de eliminar la Resolución de Alcaldía.',
            'value' => 'error',
        ];

        $deleteReAlcaldia = $this->model->deleteReAlcaldia($_POST['ralcaldia_id']);

        if ($deleteReAlcaldia) {
            $return = [
                'status' => true,
                'msg' => 'Resolución de Alcaldía eliminada correctamente.',
                'value' => 'success',
            ];
        }

        json($return);
    }
}
