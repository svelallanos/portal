<?php headerAdmin($data) ?>
<main>
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title fw-700 text-primary">
                            <div class="page-header-icon"><i data-feather="users"></i></div>
                            <?= !empty($data['page_name']) ? $data['page_name'] : 'Sin Nombre' ?>
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                        <a class="btn btn-sm btn-danger-soft text-danger" href="#">
                            <i class="feather-file-text me-1"></i>
                            Reporte
                        </a>
                        <a href="<?= base_url() ?>Alcalde/nuevo" class="btn btn-sm btn-light text-primary">
                            <i class="me-1" data-feather="plus"></i>
                            Nuevo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-xxl px-4 mt-5">
            <div class="card p-3">
                <div class="tabla-responsive">
                    <table id="tb_alcalde" class="table-bordered dataTable table-striped table-hover table-sm w-100">
                        <thead>
                            <tr>
                                <th>ACCIONES</th>
                                <th>NOMBRES</th>
                                <th>DNI</th>
                                <th>RUC</th>
                                <th>EMAIL</th>
                                <th>GESTION</th>
                                <th>ESTADO</th>
                            </tr>
                        </thead>
                    </table>
                </div>
               
            </div>
        </div>
    
</main>

<?php footerAdmin($data);
getModal('modal_alcalde',$data);
?>