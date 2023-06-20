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
        // $data['page_css'] = "web/index";
        $data['page_function_js'] = "resoluciones/functions_alcaldia";
        $this->views->getView($this, "alcaldia", $data);
    }
}