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
        $data['page_function_js'] = "resoluciones/functions_ordenanzas";
        $this->views->getView($this, "ordenanzas", $data);
    }
}
