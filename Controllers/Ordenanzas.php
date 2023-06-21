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
        // $data['page_css'] = "web/index";
        $data['page_function_js'] = "ordenanzas/functions_ordenanzas";
        $data['anios'] = $this->selectAnios();
     

        $this->views->getView($this, "ordenanzas", $data);
    }


    public function selectsOrdenanzas()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(12, true);

        $dataAnios = $this->selectAnios();
        $auxDataAnios = array();

        foreach ($dataAnios as $key => $value) {
            $auxDataAnios[$value['anios_id']] = $value['anios_nombre'];
           
        }

        $dataOrdenanzas = $this->model->selectsOrdenanzas();


        foreach ($dataOrdenanzas as $key => $value) {
            $value['ordenanza_fechapublicacion'] = new DateTime(str_replace(' ', 'T', $value['ordenanza_fechapublicacion']) . 'America/Lima');
            $dataOrdenanzas[$key]['ordenanza_fechapublicacion'] = '<div class="text-center"><span class="fw-bold">' . $value['ordenanza_fechapublicacion']->format('h:i A') . '</span> - ' . $value['ordenanza_fechapublicacion']->format('d/m/Y') . '</div>';

            $dataOrdenanzas[$key]['numero'] = $key + 1;

            $dataOrdenanzas[$key]['anio'] = $auxDataAnios[$value['anios_id']];

            if ($value['ordenanza_estado'] == 1) {
                $dataOrdenanzas[$key]['estado'] = '<span class="badge bg-success-soft text-success border fw-bold">Publicado</span>';

                $dataOrdenanzas[$key]['options'] = '<button class="btn btn-sm btn-icon btn-indigo __despublicar_ordenanza" data-ordenanza_id="' . $value['ordenanza_id'] . '" title="Despublicar"><i class="feather-slash"></i></button>&nbsp;<button class="btn btn-sm btn-primary btn-icon __view" title="vista"><i class="feather-eye"></i></button>';
            } else {
                $dataOrdenanzas[$key]['estado'] = '<span class="badge bg-indigo-soft text-indigo border">Sin publicar</span>';

                $dataOrdenanzas[$key]['options'] = '<button class="btn btn-sm btn-danger btn-icon __delete_ordenanza" 
                data-ordenanza_id="' . $value['ordenanza_id'] . '" 
                data-ordenanza_nombre="' . $value['ordenanza_nombre'] . '"><i class="feather-trash-2"></i></button>&nbsp;
                <button class="btn btn-sm btn-icon btn-warning __edit_ordenanza"
                ><i class="feather-edit-3"></i></button>&nbsp;
                <button class="btn btn-sm btn-icon btn-teal __publicar_ordenanza" data-ordenanza_id="' . $value['ordenanza_id'] . '"><i class="feather-airplay"></i></button>&nbsp;<button class="btn btn-sm btn-primary btn-icon __view" title="vista"><i class="feather-eye"></i></button>';
            }
        }



        json($dataOrdenanzas);
    }

    public function selectAnios(){
        parent::verificarLogin(true);
        parent::verificarPermiso(12, true);

        return $this->model->selectAnios();
    }

    public function deleteOrdenanza()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(12, true);

        $return = [
            'status' => false,
            'msg' => 'error al momento de eliminar la ordenanza.',
            'value' => 'error'
        ];

        $deleteOrdenanza = $this->model->deleteOrdenanza($_POST['ordenanza_id']);

        if ($deleteOrdenanza) {
            $return = [
                'status' => true,
                'msg' => 'ordenanza eliminado correctamente.',
                'value' => 'success'
            ];
        }
        json($return);
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
        $msg = 'ordenanza municipal Despublicado.';
        if ($_POST['ordenanza_estado'] == 1) {
            $msg = 'ordenanza Municipal Publicado.';
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
    //cargamos los datos de la tabla ordenanzas_municipales
    public function saveOrdenanzas()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(12, true);

        // validamos que selecciona foto
        $return = array(
            'status' => false,
            'msg' => 'Error al momento de registrar la nueva Ordenanza ',
            'value' => 'error'
        );
        //se llama el nonmbre de las tablas del modal 
      
        $saveOrdenanzas = $this->model->saveOrdenanzas(
            $_POST['ranio_id'],
            $_POST['rordenanza_nombre'],
            $_POST['rordenanza_descripcion'], 
            $file_name,
            $_POST['rordenanza_fechapublicacion'],
             $this->defineDatosUserPortal()['usuarios_id']
        );

        if (intval($saveOrdenanzas) > 0) {
            $return = array(
                'status' => true,
                'msg' => 'Datos registrados correctamente',
                'value' => 'success'
            );
        }
        json($return);
}

}