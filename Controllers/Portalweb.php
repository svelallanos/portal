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
                'name' => 'Samuel vela llanos',
                'cargo' => 'Jefe de la Oficina de Informatica y Estadistica',
                'img' => 'bg-hero',
                'link_facebook' => 'https://www.facebook.com/',
                'link_ig' => '',
                'link_youtube' => 'https://www.youtube.com/watch?v=PWmJhh_qTSY'
            ),
            1 => array(
                'name' => 'Omer fermandez Chilcon',
                'cargo' => 'Asistente de la Oficina de Informatica y Estadistica',
                'img' => 'bg-hero',
                'link_facebook' => 'https://www.facebook.com/',
                'link_ig' => 'https://www.instagram.com/',
                'link_youtube' => ''
            ),
            2 => array(
                'name' => 'Omer fermandez Chilcon',
                'cargo' => 'Asistente de la Oficina de Informatica y Estadistica',
                'img' => 'bg-hero',
                'link_facebook' => 'https://www.facebook.com/',
                'link_ig' => '',
                'link_youtube' => ''
            ),
            3 => array(
                'name' => 'Omer fermandez Chilcon',
                'cargo' => 'Asistente de la Oficina de Informatica y Estadistica',
                'img' => 'bg-hero',
                'link_facebook' => 'https://www.facebook.com/',
                'link_ig' => '',
                'link_youtube' => ''
            ),
            4 => array(
                'name' => 'Omer fermandez Chilcon',
                'cargo' => 'Asistente de la Oficina de Informatica y Estadistica',
                'img' => 'bg-hero',
                'link_facebook' => 'https://www.facebook.com/',
                'link_ig' => 'https://www.instagram.com/',
                'link_youtube' => ''
            )
        ];
        // json($funciarios);





        $this->views->getView($this, "funcionarios", $data);
    }

    public function alcalde() {
        $data['page_id'] = 51;
        $data['page_tag'] = "MDESV - Sistema Caja";
        $data['page_title'] = ":. Roles - Sistema Caja";
        $data['page_name'] = "Lista de Roles";
        $data['page_css'] = "web/alcalde";
        // $data['page_function_js'] = "web/functions_funcionarios";
        $this->views->getView($this, "alcalde", $data);
    }
}
