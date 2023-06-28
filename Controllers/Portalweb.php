<?php

class Portalweb extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function portalweb()
    {
        $data['page_id'] = 50;
        $data['page_tag'] = "MDESV - Sistema Caja";
        $data['page_title'] = ":. Roles - Sistema Caja";
        $data['page_name'] = "Lista de Roles";
        $data['page_css'] = "web/index";
        $data['page_function_js'] = "web/functions_index";
        $this->views->getView($this, "index", $data);
    }

    public function historia()
    {
        $data['page_id'] = 51;
        $data['page_tag'] = "MDESV - Sistema Caja";
        $data['page_title'] = ":. Roles - Sistema Caja";
        $data['page_name'] = "Lista de Roles";
        $data['page_css'] = "web/historia";
        $data['page_function_js'] = "web/functions_historia";
        $this->views->getView($this, "historia", $data);
    }

    public function normatividad()
    {
        $data['page_id'] = 51;
        $data['page_tag'] = "MDESV - Sistema Caja";
        $data['page_title'] = ":. Roles - Sistema Caja";
        $data['page_name'] = "Lista de Roles";
        $data['page_css'] = "web/normatividad";
        $data['page_function_js'] = "web/functions_normatividad";
        $this->views->getView($this, "normatividad", $data);
    }

    public function consejo()
    {
        $data['page_id'] = 51;
        $data['page_tag'] = "MDESV - Sistema Caja";
        $data['page_title'] = ":. Roles - Sistema Caja";
        $data['page_name'] = "Lista de Roles";
        $data['page_css'] = "web/consejo";
        $data['page_function_js'] = "web/functions_consejo";

        $data['funcionarios'] = [
            0 => array(
                'funcionario_nombres' => 'Samuel',
                'funcionario_paterno' => 'Vela',
                'funcionario_materno' => 'Llanos',
                'funcionario_cargo' => 'Jefe de la Oficina de Informatica y Estadistica',
                'funcionario_perfil' => 'sin_foto.png',
                'funcionario_link_facebook' => 'https://www.facebook.com/',
                'funcionario_link_ig' => '',
                'funcionario_link_linkedln' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY',
                'funcionario_link_twitter' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY'
            ),
            1 => array(
                'funcionario_nombres' => 'Samuel',
                'funcionario_paterno' => 'Vela',
                'funcionario_materno' => 'Llanos',
                'funcionario_cargo' => 'Jefe de la Oficina de Informatica y Estadistica',
                'funcionario_perfil' => 'sin_foto.png',
                'funcionario_link_facebook' => 'https://www.facebook.com/',
                'funcionario_link_ig' => '',
                'funcionario_link_linkedln' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY',
                'funcionario_link_twitter' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY'
            ),
            2 => array(
                'funcionario_nombres' => 'Samuel',
                'funcionario_paterno' => 'Vela',
                'funcionario_materno' => 'Llanos',
                'funcionario_cargo' => 'Jefe de la Oficina de Informatica y Estadistica',
                'funcionario_perfil' => 'sin_foto.png',
                'funcionario_link_facebook' => 'https://www.facebook.com/',
                'funcionario_link_ig' => '',
                'funcionario_link_linkedln' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY',
                'funcionario_link_twitter' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY'
            ),
            3 => array(
                'funcionario_nombres' => 'Samuel',
                'funcionario_paterno' => 'Vela',
                'funcionario_materno' => 'Llanos',
                'funcionario_cargo' => 'Jefe de la Oficina de Informatica y Estadistica',
                'funcionario_perfil' => 'funcionarios_7.webp',
                'funcionario_link_facebook' => 'https://www.facebook.com/',
                'funcionario_link_ig' => '',
                'funcionario_link_linkedln' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY',
                'funcionario_link_twitter' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY'
            ),
            4 => array(
                'funcionario_nombres' => 'Samuel',
                'funcionario_paterno' => 'Vela',
                'funcionario_materno' => 'Llanos',
                'funcionario_cargo' => 'Jefe de la Oficina de Informatica y Estadistica',
                'funcionario_perfil' => 'sin_foto.png',
                'funcionario_link_facebook' => 'https://www.facebook.com/',
                'funcionario_link_ig' => '',
                'funcionario_link_linkedln' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY',
                'funcionario_link_twitter' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY'
            ),
            5 => array(
                'funcionario_nombres' => 'Samuel',
                'funcionario_paterno' => 'Vela',
                'funcionario_materno' => 'Llanos',
                'funcionario_cargo' => 'Jefe de la Oficina de Informatica y Estadistica',
                'funcionario_perfil' => 'funcionarios_7.webp',
                'funcionario_link_facebook' => 'https://www.facebook.com/',
                'funcionario_link_ig' => '',
                'funcionario_link_linkedln' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY',
                'funcionario_link_twitter' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY'
            )
        ];

        $this->views->getView($this, "consejo", $data);
    }

    public function funcionarios()
    {
        $data['page_id'] = 51;
        $data['page_tag'] = "MDESV - Sistema Caja";
        $data['page_title'] = ":. Roles - Sistema Caja";
        $data['page_name'] = "Lista de Roles";
        $data['page_css'] = "web/funcionarios";
        $data['page_function_js'] = "web/functions_funcionarios";

        $data['funcionarios'] = [
            0 => array(
                'funcionario_nombres' => 'Samuel',
                'funcionario_paterno' => 'Vela',
                'funcionario_materno' => 'Llanos',
                'funcionario_cargo' => 'Jefe de la Oficina de Informatica y Estadistica',
                'funcionario_perfil' => 'sin_foto.png',
                'funcionario_link_facebook' => 'https://www.facebook.com/',
                'funcionario_link_ig' => '',
                'funcionario_link_linkedln' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY',
                'funcionario_link_twitter' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY'
            ),
            1 => array(
                'funcionario_nombres' => 'Samuel',
                'funcionario_paterno' => 'Vela',
                'funcionario_materno' => 'Llanos',
                'funcionario_cargo' => 'Jefe de la Oficina de Informatica y Estadistica',
                'funcionario_perfil' => 'sin_foto.png',
                'funcionario_link_facebook' => 'https://www.facebook.com/',
                'funcionario_link_ig' => '',
                'funcionario_link_linkedln' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY',
                'funcionario_link_twitter' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY'
            ),
            2 => array(
                'funcionario_nombres' => 'Samuel',
                'funcionario_paterno' => 'Vela',
                'funcionario_materno' => 'Llanos',
                'funcionario_cargo' => 'Jefe de la Oficina de Informatica y Estadistica',
                'funcionario_perfil' => 'sin_foto.png',
                'funcionario_link_facebook' => 'https://www.facebook.com/',
                'funcionario_link_ig' => '',
                'funcionario_link_linkedln' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY',
                'funcionario_link_twitter' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY'
            ),
            3 => array(
                'funcionario_nombres' => 'Samuel',
                'funcionario_paterno' => 'Vela',
                'funcionario_materno' => 'Llanos',
                'funcionario_cargo' => 'Jefe de la Oficina de Informatica y Estadistica',
                'funcionario_perfil' => 'funcionarios_7.webp',
                'funcionario_link_facebook' => 'https://www.facebook.com/',
                'funcionario_link_ig' => '',
                'funcionario_link_linkedln' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY',
                'funcionario_link_twitter' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY'
            ),
            4 => array(
                'funcionario_nombres' => 'Samuel',
                'funcionario_paterno' => 'Vela',
                'funcionario_materno' => 'Llanos',
                'funcionario_cargo' => 'Jefe de la Oficina de Informatica y Estadistica',
                'funcionario_perfil' => 'sin_foto.png',
                'funcionario_link_facebook' => 'https://www.facebook.com/',
                'funcionario_link_ig' => '',
                'funcionario_link_linkedln' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY',
                'funcionario_link_twitter' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY'
            ),
            5 => array(
                'funcionario_nombres' => 'Samuel',
                'funcionario_paterno' => 'Vela',
                'funcionario_materno' => 'Llanos',
                'funcionario_cargo' => 'Jefe de la Oficina de Informatica y Estadistica',
                'funcionario_perfil' => 'funcionarios_7.webp',
                'funcionario_link_facebook' => 'https://www.facebook.com/',
                'funcionario_link_ig' => '',
                'funcionario_link_linkedln' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY',
                'funcionario_link_twitter' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY'
            )
        ];

        $this->views->getView($this, "funcionarios", $data);
    }

    public function alcalde()
    {
        $data['page_id'] = 30;
        $data['page_tag'] = "MDESV - Portal Web";
        $data['page_title'] = ":. DMESV - Portal Web";
        $data['page_name'] = "Alcalde Distrital";
        $data['page_css'] = "web/alcalde";
        $data['alcalde'] = $this->selectViewAlcalde(1);

        $this->views->getView($this, "alcalde", $data);
    }

    // Select view

    public function selectViewAlcalde($status)
    {
        $dataGestion = $this->model->selectGestion($status);
        $dataAlcalde = $this->model->selectAlcalde($dataGestion['gestion_id'], $status);

        $dataEmails = $this->model->selectsEmails();
        $auxDataEmail = [];
        foreach ($dataEmails as $key => $value) {
            $auxDataEmail[$value['email_id']] = $value['email_nombre'];
        }

        $dataEmpresa = $this->model->selectEmpresa($status);

        $auxDataAlcalde = [
            'gestion_nombre' => $dataGestion['gestion_nombre'],
            'alcalde_nombres' => $dataAlcalde['alcalde_nombres'],
            'alcalde_apellidopaterno' => $dataAlcalde['alcalde_apellidopaterno'],
            'alcalde_apellidomaterno' => $dataAlcalde['alcalde_apellidomaterno'],
            'alcalde_photo' => $dataAlcalde['alcalde_photo'],
            'alcalde_resumen' => $dataAlcalde['alcalde_resumen'],
            'alcalde_saludo' => $dataAlcalde['alcalde_saludo'],
            'email_nombre' => $auxDataEmail[$dataEmpresa['email_id']],
            'empresa_nombre' => $dataEmpresa['empresa_nombre'],
        ];

        // json($auxDataAlcalde);


        return $auxDataAlcalde;
    }

    // Normatividad

    public function resoluciones_alcaldia()
    {
        $data['page_id'] = 9;
        $data['page_tag'] = "MDESV - Portal Web";
        $data['page_title'] = ":. Roles - Portal Web";
        $data['page_name'] = "Resoluciones de alcaldía";
        $data['page_css'] = "web/resoluciones_alcaldia";
        $data['page_function_js'] = "web/functions_res_alcaldia";
        $data['array_dataTable_css'] = ['jquery.dataTables.min', 'responsive.dataTables.min'];
        $data['array_dataTable_js'] = ['jquery.dataTables.min','dataTables.responsive.min'];


        $data['anios'] = $this->model->selectsAnios();
        $this->views->getView($this, "resoluciones_alcaldia", $data);
    }

    public function resoluciones_gerencia()
    {
        $data['page_id'] = 10;
        $data['page_tag'] = "MDESV - Portal Web";
        $data['page_title'] = ":. Roles - Portal Web";
        $data['page_name'] = "Resoluciones de Gerencia";
        $data['page_css'] = "web/resoluciones_gerencia";
        $data['page_function_js'] = "web/functions_res_gerencia";
        $data['array_dataTable_css'] = ['jquery.dataTables.min', 'responsive.dataTables.min'];
        $data['array_dataTable_js'] = ['jquery.dataTables.min','dataTables.responsive.min'];

        $data['anios'] = $this->model->selectsAnios();
        $this->views->getView($this, "resoluciones_gerencia", $data);
    }

    public function resoluciones_consejo()
    {
        $data['page_id'] = 11;
        $data['page_tag'] = "MDESV - Portal web";
        $data['page_title'] = ":. Roles - Portal web";
        $data['page_name'] = "Resoluciones de Consejo";
        $data['page_css'] = "web/resoluciones_consejo";
        $data['page_function_js'] = "web/functions_res_consejo";
        $data['array_dataTable_css'] = ['jquery.dataTables.min', 'responsive.dataTables.min'];
        $data['array_dataTable_js'] = ['jquery.dataTables.min','dataTables.responsive.min'];

        $data['anios'] = $this->model->selectsAnios();
        $this->views->getView($this, "resoluciones_consejo", $data);
    }

    public function acuerdo_consejo()
    {
        $data['page_id'] = 51;
        $data['page_tag'] = "MDESV - Sistema Caja";
        $data['page_title'] = ":. Roles - Sistema Caja";
        $data['page_name'] = "Lista de Roles";
        $data['page_css'] = "web/acuerdo_consejo";
        $data['page_function_js'] = "web/functions_acuerdo_consejo";
        $data['array_dataTable_css'] = ['jquery.dataTables.min', 'responsive.dataTables.min'];
        $data['array_dataTable_js'] = ['jquery.dataTables.min','dataTables.responsive.min'];
        $this->views->getView($this, "acuerdo_consejo", $data);
    }
  
    public function ordenanzas_municipales()
    {
        $data['page_id'] = 12;
        $data['page_tag'] = "MDESV - Portal Web";
        $data['page_title'] = ":. Roles - Portal Web";
        $data['page_name'] = "Ordenanzas Municipales";
        $data['page_css'] = "web/ordenanzas_municipales";
        $data['page_function_js'] = "web/functions_ordenanzas_municipales";
        $data['array_dataTable_css'] = ['jquery.dataTables.min', 'responsive.dataTables.min'];
        $data['array_dataTable_js'] = ['jquery.dataTables.min','dataTables.responsive.min'];

        $data['anios'] = $this->model->selectsAnios();
        $this->views->getView($this, "ordenanzas_municipales", $data);
    }

    public function decreto_alcaldia()
    {
        $data['page_id'] = 51;
        $data['page_tag'] = "MDESV - Sistema Caja";
        $data['page_title'] = ":. Roles - Sistema Caja";
        $data['page_name'] = "Lista de Roles";
        $data['page_css'] = "web/decreto_alcaldia";
        $data['page_function_js'] = "web/functions_decreto_alcaldia";
        $data['array_dataTable_css'] = ['jquery.dataTables.min', 'responsive.dataTables.min'];
        $data['array_dataTable_js'] = ['jquery.dataTables.min','dataTables.responsive.min'];
        $this->views->getView($this, "decreto_alcaldia", $data);
    }

    public function convenios()
    {
        $data['page_id'] = 51;
        $data['page_tag'] = "MDESV - Sistema Caja";
        $data['page_title'] = ":. Roles - Sistema Caja";
        $data['page_name'] = "Lista de Roles";
        $data['page_css'] = "web/convenios";
        $data['page_function_js'] = "web/functions_convenios";
        $data['array_dataTable_css'] = ['jquery.dataTables.min', 'responsive.dataTables.min'];
        $data['array_dataTable_js'] = ['jquery.dataTables.min','dataTables.responsive.min'];
        $this->views->getView($this, "convenios", $data);
    }

    public function organigrama()
    {
        $data['page_id'] = 51;
        $data['page_tag'] = "MDESV - Sistema Caja";
        $data['page_title'] = ":. Roles - Sistema Caja";
        $data['page_name'] = "Lista de Roles";
        $data['page_css'] = "web/organigrama";
        $data['page_function_js'] = "web/functions_organigrama";
        $data['array_dataTable_css'] = ['jquery.dataTables.min', 'responsive.dataTables.min'];
        $data['array_dataTable_js'] = ['jquery.dataTables.min','dataTables.responsive.min'];
        $this->views->getView($this, "organigrama", $data);
    }

    public function comisiones()
    {
        $data['page_id'] = 51;
        $data['page_tag'] = "MDESV - Sistema Caja";
        $data['page_title'] = ":. Roles - Sistema Caja";
        $data['page_name'] = "Lista de Roles";
        $data['page_css'] = "web/comisiones";
        $data['array_dataTable_css'] = ['jquery.dataTables.min', 'responsive.dataTables.min'];
        $data['array_dataTable_js'] = ['jquery.dataTables.min','dataTables.responsive.min'];
        $this->views->getView($this, "comisiones", $data);
    }

    // Cargar Select

    public function selectsReAlcaldia()
    {
        $_POST['anios_id'] = intval($_POST['anios_id']);
        $data_ralcaldia = $this->model->selectsReAlcaldia($_POST['anios_id'], 1);
        foreach ($data_ralcaldia as $key => $value) {
            $value['ralcaldia_fechapublicacion'] = new DateTime(str_replace(' ', 'T', $value['ralcaldia_fechapublicacion']) . 'America/Lima');
            $data_ralcaldia[$key]['ralcaldia_fechapublicacion'] = '<div class="text-center"><span class="fw-bold">' . $value['ralcaldia_fechapublicacion']->format('h:i A') . '</span> - ' . $value['ralcaldia_fechapublicacion']->format('d/m/Y') . '</div>';

            $data_ralcaldia[$key]['numero'] = $key + 1;
            $data_ralcaldia[$key]['options'] = '<a title="Ver resolución" target="_blank" href="'.media().'/doc/resoluciones_alcaldia/'.$value['ralcaldia_archivo'].'" style="color: red; font-size: 3rem; background-color: transparent;" class="border border-0 p-0"><i class="fa-solid fa-file-pdf fa-beat-fade"></i></a>';

            $data_ralcaldia[$key]['ralcaldia_descripcion'] = recortar_cadena($value['ralcaldia_descripcion'], 220);
        }

        json($data_ralcaldia);
    }

    public function selectsReGerencia()
    {
        $_POST['anios_id'] = intval($_POST['anios_id']);
        $data_rgerencia = $this->model->selectsReGerencia($_POST['anios_id'], 1);
        foreach ($data_rgerencia as $key => $value) {
            $value['rgerencia_fechapublicacion'] = new DateTime(str_replace(' ', 'T', $value['rgerencia_fechapublicacion']) . 'America/Lima');
            $data_rgerencia[$key]['rgerencia_fechapublicacion'] = '<div class="text-center"><span class="fw-bold">' . $value['rgerencia_fechapublicacion']->format('h:i A') . '</span> - ' . $value['rgerencia_fechapublicacion']->format('d/m/Y') . '</div>';

            $data_rgerencia[$key]['numero'] = $key + 1;
            $data_rgerencia[$key]['options'] = '<a title="Ver resolución" target="_blank" href="'.media().'/doc/resoluciones_gerencia/'.$value['rgerencia_archivo'].'" style="color: red; font-size: 3rem; background-color: transparent;" class="border border-0 p-0"><i class="fa-solid fa-file-pdf fa-beat-fade"></i></a>';

            $data_rgerencia[$key]['rgerencia_descripcion'] = recortar_cadena($value['rgerencia_descripcion'], 220);
        }

        json($data_rgerencia);
    }

    public function selectsReConsejo()
    {
        $_POST['anios_id'] = intval($_POST['anios_id']);
        $data_rconsejo = $this->model->selectsReConsejo($_POST['anios_id'], 1);
        foreach ($data_rconsejo as $key => $value) {
            $value['rconsejo_fechapublicacion'] = new DateTime(str_replace(' ', 'T', $value['rconsejo_fechapublicacion']) . 'America/Lima');
            $data_rconsejo[$key]['rconsejo_fechapublicacion'] = '<div class="text-center"><span class="fw-bold">' . $value['rconsejo_fechapublicacion']->format('h:i A') . '</span> - ' . $value['rconsejo_fechapublicacion']->format('d/m/Y') . '</div>';

            $data_rconsejo[$key]['numero'] = $key + 1;
            $data_rconsejo[$key]['options'] = '<a title="Ver resolución" target="_blank" href="'.media().'/doc/resoluciones_consejo/'.$value['rconsejo_archivo'].'" style="color: red; font-size: 3rem; background-color: transparent;" class="border border-0 p-0"><i class="fa-solid fa-file-pdf fa-beat-fade"></i></a>';

            $data_rconsejo[$key]['rconsejo_descripcion'] = recortar_cadena($value['rconsejo_descripcion'], 220);
        }

        json($data_rconsejo);
    }

    public function selectsOrdenanzas()
    {
        $_POST['anios_id'] = intval($_POST['anios_id']);
        $data_ordenanza = $this->model->selectsOrdenanzas($_POST['anios_id'], 1);
        foreach ($data_ordenanza as $key => $value) {
            $value['ordenanza_fechapublicacion'] = new DateTime(str_replace(' ', 'T', $value['ordenanza_fechapublicacion']) . 'America/Lima');
            $data_ordenanza[$key]['ordenanza_fechapublicacion'] = '<div class="text-center"><span class="fw-bold">' . $value['ordenanza_fechapublicacion']->format('h:i A') . '</span> - ' . $value['ordenanza_fechapublicacion']->format('d/m/Y') . '</div>';

            $data_ordenanza[$key]['numero'] = $key + 1;
            $data_ordenanza[$key]['options'] = '<a title="Ver Ordenanza Municipal" target="_blank" href="'.media().'/doc/ordenanza_municipal/'.$value['ordenanza_archivo'].'" style="color: red; font-size: 3rem; background-color: transparent;" class="border border-0 p-0"><i class="fa-solid fa-file-pdf fa-beat-fade"></i></a>';

            $data_ordenanza[$key]['ordenanza_descripcion'] = recortar_cadena($value['ordenanza_descripcion'], 220);
        }

        json($data_ordenanza);
    }
}
