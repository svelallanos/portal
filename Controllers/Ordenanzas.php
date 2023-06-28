<?php

class Ordenanzas extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function ordenanzas()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(12, true);

        $data['page_id'] = 12;
        $data['page_tag'] = "MDESV - Portal Web";
        $data['page_title'] = ":. Ordenanzas Municipales - Portal Web";
        $data['page_name'] = "Ordenanzas Municipales";
        $data['page_function_js'] = "ordenanzas/functions_ordenanzas";

        $data['anios'] = $this->selectsAnios();
        $this->views->getView($this, "ordenanzas", $data);
    }

    public function selectsOrdenanzas()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(12, true);

        // Consultamos los años
        $dataAnios = $this->selectsAnios();
        $auxDataAnios = [];

        foreach ($dataAnios as $key => $value) {
            $auxDataAnios[$value['anios_id']] = $value['anios_nombre'];
        }

        $dataOrdenanzas = $this->model->selectsOrdenanzas();

        foreach ($dataOrdenanzas as $key => $value) {
            $value['ordenanza_fechapublicacion'] = new DateTime(str_replace(' ', 'T', $value['ordenanza_fechapublicacion']) . 'America/Lima');
            $dataOrdenanzas[$key]['ordenanza_fechapublicacion'] = '<div class="text-center"><span class="fw-bold">' . $value['ordenanza_fechapublicacion']->format('h:i A') . '</span> - ' . $value['ordenanza_fechapublicacion']->format('d/m/Y') . '</div>';

            $dataOrdenanzas[$key]['ordenanza_descripcion'] = recortar_cadena($value['ordenanza_descripcion'], 80);

            $dataOrdenanzas[$key]['numero'] = $key + 1;

            $dataOrdenanzas[$key]['anio'] = $auxDataAnios[$value['anios_id']];

            if ($value['ordenanza_estado'] == 1) {
                $dataOrdenanzas[$key]['estado'] = '<span class="badge bg-success-soft text-success border fw-bold">Publicado</span>';

                $dataOrdenanzas[$key]['options'] = '<button class="btn btn-sm btn-icon btn-indigo __despublicar_ordenanza" data-ordenanza_id="' . $value['ordenanza_id'] . '" title="Despublicar"><i class="feather-slash"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-primary __view_ordenanza" data-ordenanza_id="' . $value['ordenanza_id'] . '" title="Ver ordenanza municipal"><i class="feather-eye"></i></button>';
            } else {
                $dataOrdenanzas[$key]['estado'] = '<span class="badge bg-indigo-soft text-indigo border">Sin publicar</span>';

                $dataOrdenanzas[$key]['options'] = '<button class="btn btn-sm btn-icon btn-danger __delete_ordenanza" data-ordenanza_id="' . $value['ordenanza_id'] . '" data-ordenanza_nombre = "' . $value['ordenanza_nombre'] . '"><i class="feather-trash-2"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-warning __edit_ordenanza" 
                data-ordenanza_id = "' . $value['ordenanza_id'] . '" 
                ><i class="feather-edit-3"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-teal __publicar_ordenanza" data-ordenanza_id="' . $value['ordenanza_id'] . '"><i class="feather-airplay"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-primary __view_ordenanza" data-ordenanza_id="' . $value['ordenanza_id'] . '" title="Ver ordenanza municipal"><i class="feather-eye"></i></button>';
            }
        }

        json($dataOrdenanzas);
    }

    public function selectOrdenanza(bool $json = true, $ordenanza_id = null)
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(12, true);

        if (is_null($ordenanza_id)) {
            $ordenanza_id = $_POST['ordenanza_id'];
        }

        $selectOrdenanza = $this->model->selectOrdenanza($ordenanza_id);

        if ($json) {
            json($selectOrdenanza);
        }

        return $selectOrdenanza;
    }

    public function selectsAnios()
    {
        return $this->model->selectsAnios();
    }

    public function changeEstado()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(12, true);

        $return = [
            'status' => false,
            'msg' => 'Error al momento de actualizar el estado de la Ordenanza Municipal.',
            'value' => 'error',
        ];

        $msg = 'Ordenanza Municipal Despublicado.';
        if ($_POST['ordenanza_estado'] == 1) {
            $msg = 'Ordenanza Municipal Publicado.';
        }

        $updateEstado = $this->model->updateEstado($_POST['ordenanza_id'], $_POST['ordenanza_estado']);

        if ($updateEstado) {
            $return = [
                'status' => true,
                'msg' => $msg,
                'value' => 'success',
            ];
        }

        json($return);
    }

    public function saveOrdenanza()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(12, true);

        // validamos que selecciona el doc
        $return = array(
            'status' => false,
            'msg' => 'Error al momento de registrar la Ordenanza Municipal.',
            'value' => 'error'
        );

        $file_name = 'sin_doc.png';

        if (isset($_FILES['ordenanza_archivo']) && $_FILES['ordenanza_archivo']['error'] === 0) {

            $file = $_FILES['ordenanza_archivo'];

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

            $file['name'] = 'ordenanza_doc_' . date('Ymd_His') . '.' . $file['name'];

            $file_name = $file['name'];

            $file['name'] = getPathDocOrdenanza() . $file['name'];

            $uploaded = move_uploaded_file($file['tmp_name'], $file['name']);

            if (!$uploaded) {
                json($return);
            }
        }

        $saveOrdenanza = $this->model->saveOrdenanza(
            $_POST['anios_id'],
            $_POST['ordenanza_nombre'],
            $_POST['ordenanza_descripcion'],
            $file_name,
            $_POST['ordenanza_fechapublicacion'],
            $this->defineDatosUserPortal()['usuarios_id']
        );

        if (intval($saveOrdenanza) > 0) {
            $return = array(
                'status' => true,
                'msg' => 'Datos registrados correctamente',
                'value' => 'success'
            );
        }
        json($return);
    }

    public function updateOrdenanza()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(12, true);

        // json($_POST);

        // validamos que selecciona el doc
        $return = array(
            'status' => false,
            'msg' => 'Error al momento de actualizar la Ordenanza Municipal.',
            'value' => 'error'
        );

        $dataOrdenanza = $this->selectOrdenanza(false, $_POST['eordenanza_id']);

        $file_name = $dataOrdenanza['ordenanza_archivo'];

        if (isset($_FILES['eordenanza_archivo']) && $_FILES['eordenanza_archivo']['error'] === 0) {

            $file = $_FILES['eordenanza_archivo'];

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

            $file['name'] = getPathDocOrdenanza() . $file['name'];

            $uploaded = move_uploaded_file($file['tmp_name'], $file['name']);

            if (!$uploaded) {
                json($return);
            }
        }

        $updateOrdenanza = $this->model->updateOrdenanza(
            $_POST['eordenanza_id'],
            $_POST['eanios_id'],
            $_POST['eordenanza_nombre'],
            $_POST['eordenanza_descripcion'],
            $file_name,
            $_POST['eordenanza_fechapublicacion']
        );

        if ($updateOrdenanza) {
            $return = array(
                'status' => true,
                'msg' => 'Datos actualizados correctamente',
                'value' => 'success'
            );
        }

        json($return);
    }

    public function deleteOrdenanza()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(9, true);

        $return = [
            'status' => false,
            'msg' => 'Error al momento de eliminar la ordenanza municipal.',
            'value' => 'error',
        ];

        $deleteOrdenanza = $this->model->deleteOrdenanza($_POST['ordenanza_id']);

        if ($deleteOrdenanza) {
            $return = [
                'status' => true,
                'msg' => 'Ordenanza Municipal eliminada correctamente.',
                'value' => 'success',
            ];
        }

        json($return);
    }
}
