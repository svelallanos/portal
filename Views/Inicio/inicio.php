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
                    <!-- <div class="col-12 col-xl-auto mb-3">
                        <a class="btn btn-sm btn-danger-soft text-danger" href="#">
                            <i class="feather-file-text me-1"></i>
                            Reporte
                        </a>
                        <a class="btn btn-sm btn-light text-primary" href="<?= base_url() ?>Roles/Nuevo">
                            <i class="me-1" data-feather="plus"></i>
                            Nuevo Rol
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </header>
    <div class="container-xl px-4 mt-5">
        ...contenido
    </div>
</main>

<?php footerAdmin($data) ?>