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

    public function gerencia()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(10, true);

        $data['page_id'] = 10;
        $data['page_tag'] = "MDESV - Portal Web";
        $data['page_title'] = ":. Resoluciones de Gerencia - Portal Web";
        $data['page_name'] = "Resoluciones de Gerencia";
        $data['page_function_js'] = "resoluciones/functions_gerencia";

        $data['anios'] = $this->selectsAnios();
        $this->views->getView($this, "gerencia", $data);
    }

    public function consejo()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(11, true);

        $data['page_id'] = 11;
        $data['page_tag'] = "MDESV - Portal Web";
        $data['page_title'] = ":. Resoluciones de Consejo - Portal Web";
        $data['page_name'] = "Resoluciones de Consejo";
        $data['page_function_js'] = "resoluciones/functions_consejo";

        $data['anios'] = $this->selectsAnios();
        $this->views->getView($this, "consejo", $data);
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

            $dataAlcaldia[$key]['ralcaldia_descripcion'] = recortar_cadena($value['ralcaldia_descripcion'], 80);

            $dataAlcaldia[$key]['numero'] = $key + 1;

            $dataAlcaldia[$key]['anio'] = $auxDataAnios[$value['anios_id']];

            if ($value['ralcaldia_estado'] == 1) {
                $dataAlcaldia[$key]['estado'] = '<span class="badge bg-success-soft text-success border fw-bold">Publicado</span>';

                $dataAlcaldia[$key]['options'] = '<button class="btn btn-sm btn-icon btn-indigo __despublicar_ralcaldia" data-ralcaldia_id="' . $value['ralcaldia_id'] . '" title="Despublicar"><i class="feather-slash"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-primary __view_ralcaldia" data-ralcaldia_id="' . $value['ralcaldia_id'] . '" title="Ver resolución de alcaldía"><i class="feather-eye"></i></button>';
            } else {
                $dataAlcaldia[$key]['estado'] = '<span class="badge bg-indigo-soft text-indigo border">Sin publicar</span>';

                $dataAlcaldia[$key]['options'] = '<button class="btn btn-sm btn-icon btn-danger __delete_ralcaldia" data-ralcaldia_id="' . $value['ralcaldia_id'] . '" data-ralcaldia_nombre = "' . $value['ralcaldia_nombre'] . '"><i class="feather-trash-2"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-warning __edit_ralcaldia" 
                data-ralcaldia_id = "' . $value['ralcaldia_id'] . '" 
                ><i class="feather-edit-3"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-teal __publicar_ralcaldia" data-ralcaldia_id="' . $value['ralcaldia_id'] . '"><i class="feather-airplay"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-primary __view_ralcaldia" data-ralcaldia_id="' . $value['ralcaldia_id'] . '" title="Ver resolución de alcaldía"><i class="feather-eye"></i></button>';
            }
        }

        json($dataAlcaldia);
    }

    public function selectsReGerencia()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(10, true);

        // Consultamos los años
        $dataAnios = $this->selectsAnios();
        $auxDataAnios = [];

        foreach ($dataAnios as $key => $value) {
            $auxDataAnios[$value['anios_id']] = $value['anios_nombre'];
        }

        $dataGerencia = $this->model->selectsReGerencia();

        foreach ($dataGerencia as $key => $value) {
            $value['rgerencia_fechapublicacion'] = new DateTime(str_replace(' ', 'T', $value['rgerencia_fechapublicacion']) . 'America/Lima');
            $dataGerencia[$key]['rgerencia_fechapublicacion'] = '<div class="text-center"><span class="fw-bold">' . $value['rgerencia_fechapublicacion']->format('h:i A') . '</span> - ' . $value['rgerencia_fechapublicacion']->format('d/m/Y') . '</div>';

            $dataGerencia[$key]['rgerencia_descripcion'] = recortar_cadena($value['rgerencia_descripcion'], 80);

            $dataGerencia[$key]['numero'] = $key + 1;

            $dataGerencia[$key]['anio'] = $auxDataAnios[$value['anios_id']];

            if ($value['rgerencia_estado'] == 1) {
                $dataGerencia[$key]['estado'] = '<span class="badge bg-success-soft text-success border fw-bold">Publicado</span>';

                $dataGerencia[$key]['options'] = '<button class="btn btn-sm btn-icon btn-indigo __despublicar_rgerencia" data-rgerencia_id="' . $value['rgerencia_id'] . '" title="Despublicar"><i class="feather-slash"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-primary __view_rgerencia" data-rgerencia_id="' . $value['rgerencia_id'] . '" title="Ver resolución de alcaldía"><i class="feather-eye"></i></button>';
            } else {
                $dataGerencia[$key]['estado'] = '<span class="badge bg-indigo-soft text-indigo border">Sin publicar</span>';

                $dataGerencia[$key]['options'] = '<button class="btn btn-sm btn-icon btn-danger __delete_rgerencia" data-rgerencia_id="' . $value['rgerencia_id'] . '" data-rgerencia_nombre = "' . $value['rgerencia_nombre'] . '"><i class="feather-trash-2"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-warning __edit_rgerencia" 
                data-rgerencia_id = "' . $value['rgerencia_id'] . '" 
                ><i class="feather-edit-3"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-teal __publicar_rgerencia" data-rgerencia_id="' . $value['rgerencia_id'] . '"><i class="feather-airplay"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-primary __view_rgerencia" data-rgerencia_id="' . $value['rgerencia_id'] . '" title="Ver resolución de alcaldía"><i class="feather-eye"></i></button>';
            }
        }

        json($dataGerencia);
    }

    public function selectsReConsejo()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(11, true);

        // Consultamos los años
        $dataAnios = $this->selectsAnios();
        $auxDataAnios = [];

        foreach ($dataAnios as $key => $value) {
            $auxDataAnios[$value['anios_id']] = $value['anios_nombre'];
        }

        $dataConsejo = $this->model->selectsReConsejo();

        foreach ($dataConsejo as $key => $value) {
            $value['rconsejo_fechapublicacion'] = new DateTime(str_replace(' ', 'T', $value['rconsejo_fechapublicacion']) . 'America/Lima');
            $dataConsejo[$key]['rconsejo_fechapublicacion'] = '<div class="text-center"><span class="fw-bold">' . $value['rconsejo_fechapublicacion']->format('h:i A') . '</span> - ' . $value['rconsejo_fechapublicacion']->format('d/m/Y') . '</div>';

            $dataConsejo[$key]['rconsejo_descripcion'] = recortar_cadena($value['rconsejo_descripcion'], 80);

            $dataConsejo[$key]['numero'] = $key + 1;

            $dataConsejo[$key]['anio'] = $auxDataAnios[$value['anios_id']];

            if ($value['rconsejo_estado'] == 1) {
                $dataConsejo[$key]['estado'] = '<span class="badge bg-success-soft text-success border fw-bold">Publicado</span>';

                $dataConsejo[$key]['options'] = '<button class="btn btn-sm btn-icon btn-indigo __despublicar_rconsejo" data-rconsejo_id="' . $value['rconsejo_id'] . '" title="Despublicar"><i class="feather-slash"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-primary __view_rconsejo" data-rconsejo_id="' . $value['rconsejo_id'] . '" title="Ver resolución de alcaldía"><i class="feather-eye"></i></button>';
            } else {
                $dataConsejo[$key]['estado'] = '<span class="badge bg-indigo-soft text-indigo border">Sin publicar</span>';

                $dataConsejo[$key]['options'] = '<button class="btn btn-sm btn-icon btn-danger __delete_rconsejo" data-rconsejo_id="' . $value['rconsejo_id'] . '" data-rconsejo_nombre = "' . $value['rconsejo_nombre'] . '"><i class="feather-trash-2"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-warning __edit_rconsejo" 
                data-rconsejo_id = "' . $value['rconsejo_id'] . '" 
                ><i class="feather-edit-3"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-teal __publicar_rconsejo" data-rconsejo_id="' . $value['rconsejo_id'] . '"><i class="feather-airplay"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-primary __view_rconsejo" data-rconsejo_id="' . $value['rconsejo_id'] . '" title="Ver resolución de alcaldía"><i class="feather-eye"></i></button>';
            }
        }

        json($dataConsejo);
    }

    public function selectReAlcaldia(bool $json = true, $ralcaldia_id = null)
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(9, true);

        if (is_null($ralcaldia_id)) {
            $ralcaldia_id = $_POST['ralcaldia_id'];
        }

        $selectReAlcaldia = $this->model->selectReAlcaldia($ralcaldia_id);

        if ($json) {
            json($selectReAlcaldia);
        }

        return $selectReAlcaldia;
    }

    public function selectReGerencia(bool $json = true, $rgerencia_id = null)
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(10, true);

        if (is_null($rgerencia_id)) {
            $rgerencia_id = $_POST['rgerencia_id'];
        }

        $selectReGerencia = $this->model->selectReGerencia($rgerencia_id);

        if ($json) {
            json($selectReGerencia);
        }

        return $selectReGerencia;
    }

    public function selectReConsejo(bool $json = true, $rconsejo_id = null)
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(11, true);

        if (is_null($rconsejo_id)) {
            $rconsejo_id = $_POST['rconsejo_id'];
        }

        $selectReConsejo = $this->model->selectReConsejo($rconsejo_id);

        if ($json) {
            json($selectReConsejo);
        }

        return $selectReConsejo;
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

    public function changeEstadoGerencia()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(10, true);

        $return = [
            'status' => false,
            'msg' => 'Error al momento de actualizar el estado de la Resolución de Gerencia.',
            'value' => 'error',
        ];

        $msg = 'Resolución de Gerencia Despublicado.';
        if ($_POST['rgerencia_estado'] == 1) {
            $msg = 'Resolución de Gerencia Publicado.';
        }

        $updateEstado = $this->model->updateEstadoGerencia($_POST['rgerencia_id'], $_POST['rgerencia_estado']);

        if ($updateEstado) {
            $return = [
                'status' => true,
                'msg' => $msg,
                'value' => 'success',
            ];
        }

        json($return);
    }

    public function changeEstadoConsejo()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(11, true);

        $return = [
            'status' => false,
            'msg' => 'Error al momento de actualizar el estado de la Resolución de Consejo.',
            'value' => 'error',
        ];

        $msg = 'Resolución de Consejo Despublicado.';
        if ($_POST['rconsejo_estado'] == 1) {
            $msg = 'Resolución de Consejo Publicado.';
        }

        $updateEstado = $this->model->updateEstadoConsejo($_POST['rconsejo_id'], $_POST['rconsejo_estado']);

        if ($updateEstado) {
            $return = [
                'status' => true,
                'msg' => $msg,
                'value' => 'success',
            ];
        }

        json($return);
    }

    public function saveReAlcaldia()
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

        $saveReAlcaldia = $this->model->saveReAlcaldia(
            $_POST['anios_id'],
            $_POST['ralcaldia_nombre'],
            $_POST['ralcaldia_descripcion'],
            $file_name,
            $_POST['ralcaldia_fechapublicacion'],
            $this->defineDatosUserPortal()['usuarios_id']
        );

        if (intval($saveReAlcaldia) > 0) {
            $return = array(
                'status' => true,
                'msg' => 'Datos registrados correctamente',
                'value' => 'success'
            );
        }
        json($return);
    }

    public function saveReGerencia()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(10, true);

        // validamos que selecciona el doc
        $return = array(
            'status' => false,
            'msg' => 'Error al momento de registrar la Resolución de Gerencia.',
            'value' => 'error'
        );

        $file_name = 'sin_doc.png';

        if (isset($_FILES['rgerencia_archivo']) && $_FILES['rgerencia_archivo']['error'] === 0) {

            $file = $_FILES['rgerencia_archivo'];

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

            $file['name'] = 'regerencia_doc_' . date('Ymd_His') . '.' . $file['name'];

            $file_name = $file['name'];

            $file['name'] = getPathDocReGerencia() . $file['name'];

            $uploaded = move_uploaded_file($file['tmp_name'], $file['name']);

            if (!$uploaded) {
                json($return);
            }
        }

        $saveReGerencia = $this->model->saveReGerencia(
            $_POST['anios_id'],
            $_POST['rgerencia_nombre'],
            $_POST['rgerencia_descripcion'],
            $file_name,
            $_POST['rgerencia_fechapublicacion'],
            $this->defineDatosUserPortal()['usuarios_id']
        );

        if (intval($saveReGerencia) > 0) {
            $return = array(
                'status' => true,
                'msg' => 'Datos registrados correctamente',
                'value' => 'success'
            );
        }
        json($return);
    }

    public function saveReConsejo()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(11, true);

        // validamos que selecciona el doc
        $return = array(
            'status' => false,
            'msg' => 'Error al momento de registrar la Resolución de Consejo.',
            'value' => 'error'
        );

        $file_name = 'sin_doc.png';

        if (isset($_FILES['rconsejo_archivo']) && $_FILES['rconsejo_archivo']['error'] === 0) {

            $file = $_FILES['rconsejo_archivo'];

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

            $file['name'] = 'reconsejo_doc_' . date('Ymd_His') . '.' . $file['name'];

            $file_name = $file['name'];

            $file['name'] = getPathDocReConsejo() . $file['name'];

            $uploaded = move_uploaded_file($file['tmp_name'], $file['name']);

            if (!$uploaded) {
                json($return);
            }
        }

        $saveReConsejo = $this->model->saveReConsejo(
            $_POST['anios_id'],
            $_POST['rconsejo_nombre'],
            $_POST['rconsejo_descripcion'],
            $file_name,
            $_POST['rconsejo_fechapublicacion'],
            $this->defineDatosUserPortal()['usuarios_id']
        );

        if (intval($saveReConsejo) > 0) {
            $return = array(
                'status' => true,
                'msg' => 'Datos registrados correctamente',
                'value' => 'success'
            );
        }
        json($return);
    }

    public function updateReAlcaldia()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(9, true);

        // json($_POST);

        // validamos que selecciona el doc
        $return = array(
            'status' => false,
            'msg' => 'Error al momento de actualizar la Resolución de Alcaldía.',
            'value' => 'error'
        );

        $dataReAlcaldia = $this->selectReAlcaldia(false, $_POST['eralcaldia_id']);

        $file_name = $dataReAlcaldia['ralcaldia_archivo'];

        if (isset($_FILES['eralcaldia_archivo']) && $_FILES['eralcaldia_archivo']['error'] === 0) {

            $file = $_FILES['eralcaldia_archivo'];

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

        $updateReAlcaldia = $this->model->updateReAlcaldia(
            $_POST['eralcaldia_id'],
            $_POST['eanios_id'],
            $_POST['eralcaldia_nombre'],
            $_POST['eralcaldia_descripcion'],
            $file_name,
            $_POST['eralcaldia_fechapublicacion']
        );

        if ($updateReAlcaldia) {
            $return = array(
                'status' => true,
                'msg' => 'Datos actualizados correctamente',
                'value' => 'success'
            );
        }

        json($return);
    }

    public function updateReGerencia()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(10, true);

        // json($_POST);

        // validamos que selecciona el doc
        $return = array(
            'status' => false,
            'msg' => 'Error al momento de actualizar la Resolución de Gerencia.',
            'value' => 'error'
        );

        $dataReGerencia = $this->selectReGerencia(false, $_POST['ergerencia_id']);

        $file_name = $dataReGerencia['rgerencia_archivo'];

        if (isset($_FILES['ergerencia_archivo']) && $_FILES['ergerencia_archivo']['error'] === 0) {

            $file = $_FILES['ergerencia_archivo'];

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

            $file['name'] = 'regerencia_doc_' . date('Ymd_His') . '.' . $file['name'];

            $file_name = $file['name'];

            $file['name'] = getPathDocReGerencia() . $file['name'];

            $uploaded = move_uploaded_file($file['tmp_name'], $file['name']);

            if (!$uploaded) {
                json($return);
            }
        }

        $updateReGerencia = $this->model->updateReGerencia(
            $_POST['ergerencia_id'],
            $_POST['eanios_id'],
            $_POST['ergerencia_nombre'],
            $_POST['ergerencia_descripcion'],
            $file_name,
            $_POST['ergerencia_fechapublicacion']
        );

        if ($updateReGerencia) {
            $return = array(
                'status' => true,
                'msg' => 'Datos actualizados correctamente',
                'value' => 'success'
            );
        }

        json($return);
    }

    public function updateReConsejo()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(11, true);

        // json($_POST);

        // validamos que selecciona el doc
        $return = array(
            'status' => false,
            'msg' => 'Error al momento de actualizar la Resolución de Consejo.',
            'value' => 'error'
        );

        $dataReConsejo = $this->selectReConsejo(false, $_POST['erconsejo_id']);

        $file_name = $dataReConsejo['rconsejo_archivo'];

        if (isset($_FILES['erconsejo_archivo']) && $_FILES['erconsejo_archivo']['error'] === 0) {

            $file = $_FILES['erconsejo_archivo'];

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

            $file['name'] = 'reconsejo_doc_' . date('Ymd_His') . '.' . $file['name'];

            $file_name = $file['name'];

            $file['name'] = getPathDocReConsejo() . $file['name'];

            $uploaded = move_uploaded_file($file['tmp_name'], $file['name']);

            if (!$uploaded) {
                json($return);
            }
        }

        $updateReConsejo = $this->model->updateReConsejo(
            $_POST['erconsejo_id'],
            $_POST['eanios_id'],
            $_POST['erconsejo_nombre'],
            $_POST['erconsejo_descripcion'],
            $file_name,
            $_POST['erconsejo_fechapublicacion']
        );

        if ($updateReConsejo) {
            $return = array(
                'status' => true,
                'msg' => 'Datos actualizados correctamente',
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

    public function deleteReGerencia()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(10, true);

        $return = [
            'status' => false,
            'msg' => 'Error al momento de eliminar la Resolución de Gerencia.',
            'value' => 'error',
        ];

        $deleteReGerencia = $this->model->deleteReGerencia($_POST['rgerencia_id']);

        if ($deleteReGerencia) {
            $return = [
                'status' => true,
                'msg' => 'Resolución de Gerencia eliminada correctamente.',
                'value' => 'success',
            ];
        }

        json($return);
    }

    public function deleteReConsejo()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(11, true);

        $return = [
            'status' => false,
            'msg' => 'Error al momento de eliminar la Resolución de Consejo.',
            'value' => 'error',
        ];

        $deleteReConsejo = $this->model->deleteReConsejo($_POST['rconsejo_id']);

        if ($deleteReConsejo) {
            $return = [
                'status' => true,
                'msg' => 'Resolución de Consejo eliminada correctamente.',
                'value' => 'success',
            ];
        }

        json($return);
    }
}
