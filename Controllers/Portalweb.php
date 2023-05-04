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
        $data['page_css'] = "roles/roles";
        $data['page_function_js'] = "roles/functions_roles";
        $this->views->getView($this, "index", $data);
    }

    public function historia() {
        $data['page_id'] = 51;
        $data['page_tag'] = "MDESV - Sistema Caja";
        $data['page_title'] = ":. Roles - Sistema Caja";
        $data['page_name'] = "Lista de Roles";
        $data['page_css'] = "roles/roles";
        $data['page_function_js'] = "roles/functions_roles";
        $this->views->getView($this, "historia", $data);
    }
}
