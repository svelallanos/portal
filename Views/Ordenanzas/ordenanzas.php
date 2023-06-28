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
                        <button type="button" class="btn btn-sm btn-light text-primary" data-bs-toggle="modal" data-bs-target="#model_ordenanza">
                            <i class="me-1" data-feather="plus"></i>
                            Nueva Ordenanza
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid px-4">
        <div class="row">
            <div class="card p-3">
                <div class="table-responsive">
                    <table id="tb_ordenanza" class="table-bordered dataTable table-striped table-hover table-sm w-100">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>NOMBRES</th>
                                <th>DESCRIPCIÓN</th>
                                <th>AÑO</th>
                                <th>FECHA PUBLICACIÓN</th>
                                <th>ESTADO</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<?php footerAdmin($data);
getModal('modal_ordenanza', $data); ?>