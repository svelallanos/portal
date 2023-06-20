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

    public function selectsReAlcaldia()
    {
        parent::verificarLogin(true);
        parent::verificarPermiso(9, true);

        // Consultamos los años
        $dataAnios = $this->model->selectsAnios();
        $auxDataAnios = [];

        foreach ($dataAnios as $key => $value) {
            $auxDataAnios[$value['anios_id']] = $value['anios_nombre'];
        }

        $dataAlcaldia = $this->model->selectsReAlcaldia();

        foreach ($dataAlcaldia as $key => $value) {
            $value['ralcaldia_fechapublicacion'] = new DateTime(str_replace(' ', 'T', $value['ralcaldia_fechapublicacion']) . 'America/Lima');
            $dataAlcaldia[$key]['ralcaldia_fechapublicacion'] = '<div class="text-center"><span class="fw-bold">' . $value['ralcaldia_fechapublicacion']->format('h:i A') . '</span> - ' . $value['ralcaldia_fechapublicacion']->format('d/m/Y') . '</div>';

            $dataAlcaldia[$key]['numero'] = $key + 1;

            $dataAlcaldia[$key]['anio'] = $auxDataAnios[$value['anios_id']];

            if ($value['ralcaldia_estado'] == 1) {
                $dataAlcaldia[$key]['estado'] = '<span class="badge bg-success-soft text-success border fw-bold">Publicado</span>';

                $dataAlcaldia[$key]['options'] = '<button class="btn btn-sm btn-icon btn-indigo __despublicar_ralcaldia" title="Despublicar"><i class="feather-slash"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-primary __view_ralcaldia" title="Ver resolución de alcaldía"><i class="feather-eye"></i></button>';
            } else {
                $dataAlcaldia[$key]['estado'] = '<span class="badge bg-indigo-soft text-indigo border">Sin publicar</span>';

                $dataAlcaldia[$key]['options'] = '<button class="btn btn-sm btn-icon btn-danger __delete_ralcaldia"><i class="feather-trash-2"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-warning __edit_ralcaldia"><i class="feather-edit-3"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-teal __publicar_ralcaldia"><i class="feather-airplay"></i></button>&nbsp;<button class="btn btn-sm btn-icon btn-primary __view_ralcaldia" title="Ver resolución de alcaldía"><i class="feather-eye"></i></button>';
            }
        }

        json($dataAlcaldia);
    }
}
