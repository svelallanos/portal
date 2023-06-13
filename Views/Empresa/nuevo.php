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
                        <a class="btn btn-sm btn-indigo-soft text-indigo" href="<?= base_url() ?>Empresa">
                            <i class="fa-solid fa-reply me-1"></i>
                            Retornar
                        </a>
                        <button type="button" class="btn btn-sm btn-light text-primary">
                            <i class="me-1" data-feather="plus"></i>
                            Guardar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-xl px-4 mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="mensaje_file">
                </div>
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header" style="background-color: #00273c; color: #00b4fe;">Logo de la Empresa</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img data-path="<?= media() ?>/images/fotoperfil/" class="__img_editarperfil img-account-profile rounded-circle mb-2" src="<?= media() ?>/images/empresa/sin_logo.png" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-2">JPG o PNG de un tamaño máximo de 3 MB</div>
                        <!-- Profile picture upload button-->
                        <div class="mb-3 d-none">
                            <input id="empresa_logo" accept="image/jpeg, image/png" name="empresa_logo" class="form-control" type="file">
                        </div>
                        <button class="btn btn-sm btn-pink-soft text-pink cargar_imagen" title="subir foto de perfil" type="button"><i class="feather-upload"></i> &nbsp Cargar imagen</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <!-- Account details card-->
                <div class="mensaje"></div>
                <div class="card mb-4">
                    <div class="card-header" style="background-color: #00273c; color: #00b4fe;">Datos de la Empresa</div>
                    <div class="card-body">
                        <form id="form_empresa_nuevo">
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-12 mb-2">
                                    <label class="small fw-bold mb-1">Nombre</label>
                                    <input required class="form-control" id="empresa_nombre" type="text" name="empresa_nombre" placeholder="Nombre de la Entidad">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label class="small fw-bold mb-1">Descripción</label>
                                    <textarea required class="form-control" id="empresa_descripcion" name="empresa_descripcion" rows="3" placeholder="La empresa se carc..."></textarea>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label class="small fw-bold mb-1">RUC</label>
                                    <input required class="form-control" id="empresa_ruc" name="empresa_ruc" min="0" type="number" placeholder="Ruc de la empresa">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="small fw-bold mb-1">Email</label>
                                    <select required class="form-select" id="empresa_email" name="empresa_email">
                                        <option class="p-4" selected>Selecione</option>
                                        <option value="1">One</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label class="small fw-bold mb-1">Misión</label>
                                    <textarea required class="form-control" id="empresa_mision" name="empresa_mision" rows="3" placeholder="Misión de la entidad ..."></textarea>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label class="small fw-bold mb-1">Visión</label>
                                    <textarea required class="form-control" id="empresa_vision" name="empresa_vision" rows="3" placeholder="Visión de la entidad..."></textarea>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label class="small fw-bold mb-1">Historia</label>
                                    <textarea required class="form-control" id="empresa_historia" name="empresa_historia" rows="3" placeholder="Historia de la entidad..."></textarea>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label class="small fw-bold mb-1">Población</label>
                                    <textarea required class="form-control" id="empresa_poblacion" name="empresa_poblacion" rows="3" placeholder="Población de la entidad..."></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php footerAdmin($data) ?>