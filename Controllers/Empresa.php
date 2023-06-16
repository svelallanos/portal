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

    public function selectsEmpresa()
    {
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
            $dataEmpresa[$key]['options'] = '<button data-empresa_id="' . $value['empresa_id'] . '" data-empresa_nombre="'.$value['empresa_nombre'].'" class="btn btn-sm btn-danger btn-icon __delete_empresa"><i class="feather-trash-2"></i></button>&nbsp;<button class="btn btn-sm btn-warning btn-icon __edit_empresa"><i class="feather-edit"></i></button>&nbsp;<button class="btn btn-sm btn-primary btn-icon __view_empresa"><i class="feather-eye"></i></button>';

            $dataEmpresa[$key]['email'] = $auxDataEmail[$value['email_id']];

            $dataEmpresa[$key]['estado'] = '<span class="badge bg-danger">Inactivo</span>';
            if (intval($value['empresa_estado']) == 1) {
                $dataEmpresa[$key]['estado'] = '<span class="badge bg-success">Activo</span>';
            }
        }


        json($dataEmpresa);
    }

    public function nuevo()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(8, true);

        $data['page_id'] = 8;
        $data['page_tag'] = "MDESV - Portal Web";
        $data['page_title'] = ":. Nueva empresa - Portal Web";
        $data['page_name'] = "Nueva empresa";
        $data['page_function_js'] = "empresa/functions_empresa";
        $data['email'] = $this->model->selectsEmail();
        $this->views->getView($this, "nuevo", $data);
    }

    public function saveEmpresa()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(8, true);

        // validamos que selecciona foto
        $return = array(
            'status' => false,
            'msg' => 'Error al momento de registrar al Alcalde ',
            'value' => 'error'
        );

        $file_name = 'sin_logo.png';

        if (isset($_FILES['empresa_logo']) && $_FILES['empresa_logo']['error'] === 0) {

            $file = $_FILES['empresa_logo'];

            if ($file['type'] !== 'image/jpeg' && $file['type'] !== 'image/png') {
                $return['msg'] = 'Formato de imagen no válida.';
                $return['value'] = 'warning';

                json($return);
            }

            $file['name'] = getExtension($file['name']);
            $noValido = true;

            foreach (getExtFotos() as $key => $value) {
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

            $file['name'] = 'empresa_profile_' . date('Ymd_His') . '.' . $file['name'];

            $file_name = $file['name'];

            $onlyName = $file['name'];
            $file['name'] = getPathFotoEmpresa() . $file['name'];

            $uploaded = move_uploaded_file($file['tmp_name'], $file['name']);

            if (!$uploaded) {
                json($return);
            }
        }

        $inserEmpresa = $this->model->insertEmpresa(
            $_POST['empresa_nombre'],
            $_POST['empresa_descripcion'],
            $_POST['empresa_ruc'],
            $_POST['empresa_email'],
            $file_name,
            $_POST['empresa_mision'],
            $_POST['empresa_vision'],
            $_POST['empresa_historia'],
            $_POST['empresa_poblacion']
        );

        if (intval($inserEmpresa) > 0) {
            $return = array(
                'status' => true,
                'msg' => 'Datos registrados correctamente',
                'value' => 'success'
            );
        }
        json($return);
    }

    public function deleteEmpresa()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(8, true);

        $return = [
            'status' => false,
            'msg' => 'Error al momento de eliminar la Empresa',
            'value' => 'error'
        ];

        $deleteEmpresa = $this->model->deleteEmpresa($_POST['empresa_id']);

        if ($deleteEmpresa) {
            $return = [
                'status' => true,
                'msg' => 'Datos eliminados correctamente.',
                'value' => 'success'
            ];
        }
        json($return);
    }
}
