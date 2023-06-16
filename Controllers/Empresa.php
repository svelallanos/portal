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
            $dataEmpresa[$key]['options'] = '<button class="btn btn-sm btn-danger btn-icon"><i class="feather-trash-2"></i></button>&nbsp;<button class="btn btn-sm btn-warning btn-icon"><i class="feather-edit"></i></button>';

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

            $file['name'] = 'alcalde_profile_' . date('Ymd_His') . '.' . $file['name'];

            $file_name = $file['name'];

            $onlyName = $file['name'];
            $file['name'] = getPathFotoAlcalde() . $file['name'];

            $uploaded = move_uploaded_file($file['tmp_name'], $file['name']);

            if (!$uploaded) {
                json($return);
            }
        }

        $inserAlcalde = $this->model->insertAlcalde(
            $_POST['gestion_id'],
            $_POST['alcalde_nombres'],
            $_POST['alcalde_paterno'],
            $_POST['alcalde_materno'],
            $_POST['alcalde_dni'],
            $_POST['alcalde_ruc'],
            $_POST['alcalde_email'],
            $_POST['alcalde_celular'],
            $file_name,
            $_POST['alcalde_resumen'],
            $_POST['alcalde_saludo']
        );

        if (intval($inserAlcalde) > 0) {
            $return = array(
                'status' => true,
                'msg' => 'Datos registrados correctamente',
                'value' => 'success'
            );
        }
        json($return);
    }
}
