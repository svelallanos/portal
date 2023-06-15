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

        // validamos que selecciona foto
        $return = array(
            'status' => false,
            'msg' => 'Error al momento de registrar al Alcalde ',
            'value' => 'error'
        );

        $file_name = 'sin_foto.png';
        
        if (isset($_FILES['file_imagen_perfil']) && $_FILES['file_imagen_perfil']['error'] === 0) {
            
            $file = $_FILES['file_imagen_perfil'];

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

        if(intval($inserAlcalde) > 0){
            $return = array(
                'status' => true,
                'msg' => 'Datos registrados correctamente',
                'value' => 'success'
            );
        }
        json($return);
    }
    public function deleteAlcalde()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(7,true);

        $return =[
            'status'=>false,
            'msg'=> 'error al momento de eliminar la gestion',
            'value'=>'error'
        ];
        $deleteAlcalde =$this->model->deleteAlcalde($_POST['alcalde_id']);

        if($deleteAlcalde){
            $return =[
            'status'=>true,
            'msg'=> 'Gestion eliminada correctamente',
            'value'=>'succes' 
            ];
        }
        json($return);
    }
}
