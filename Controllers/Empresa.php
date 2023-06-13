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
}
