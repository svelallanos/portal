<?php headerAdmin($data) ?>
<main>
    <form id="form_alcalde">
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
                            <a class="btn btn-sm btn-indigo-soft text-indigo" href="<?= base_url() ?>Alcalde">
                                <i class="fa-solid fa-reply"></i>
                                &nbsp;Retornar
                            </a>
                            <button type="submit" class="btn btn-sm btn-light text-primary">
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
                        <div class="card-header" style="background-color: #00273c; color: #00b4fe;">Imagen de Perfil</div>
                        <div class="card-body text-center">
                            <img data-path="<?= media() ?>/images/alcalde/" class="__img_editarperfil img-account-profile rounded-circle mb-2" src="<?= media() ?>/images/alcalde/sin_foto.png" alt="">
                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-2">JPG o PNG de un tamaño máximo de 3 MB</div>
                            <div class="mb-3 d-none">
                                <input id="file_imagen_perfil" accept="image/jpeg, image/png" name="file_imagen_perfil" class="form-control" type="file">
                            </div>
                            <button class="btn btn-sm btn-purple-soft text-purple cargar_imagen" title="subir foto de perfil" type="button"><i class="feather-upload"></i> &nbsp Cargar imagen</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="mensaje"></div>
                    <div class="card mb-4">
                        <div class="card-header" style="background-color: #00273c; color: #00b4fe;">Datos del Alcalde</div>
                        <div class="card-body">
                            <div class="row gx-3">
                                <div class="col-md-4 mb-2">
                                    <label class="small mb-1">Nombre</label>
                                    <input required class="form-control" name="alcalde_nombres" id="alcalde_nombres" type="text" placeholder="Ingrese nombre">
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label class="small mb-1">Apellido Paterno</label>
                                    <input required class="form-control" name="alcalde_paterno" id="alcalde_paterno" type="text" placeholder="Ingrese apellido paterno">
                                </div>

                                <div class="col-md-4">
                                    <label class="small mb-1">Apellido Materno</label>
                                    <input required class="form-control" name="alcalde_materno" id="alcalde_materno" type="text" placeholder="Ingrese apellido materno">
                                </div>

                                <div class="col-md-3 mb-2">
                                    <label class="small mb-1">DNI</label>
                                    <input required class="form-control" id="alcalde_dni" name="alcalde_dni" min="0" type="number" placeholder="Ingrese número de dni">
                                </div>

                                <div class="col-md-3 mb-2">
                                    <label class="small mb-1">RUC</label>
                                    <input required class="form-control" id="alcalde_ruc" name="alcalde_ruc" min="0" type="number" placeholder="Ingrese número ruc">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="small mb-1">Correo Electrónico</label>
                                    <input required class="form-control" id="alcalde_email" name="alcalde_email" type="email" placeholder="name@example.com">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label class="small mb-1">Celular</label>
                                    <input required class="form-control" id="alcalde_celular" name="alcalde_celular" min="900000000" type="number" placeholder="Ingrese número de celular">
                                </div>
                                <div class="col-md-5 mb-2">
                                    <label class="small mb-1">Gestión</label>
                                    <select required class="form-select" id="gestion_id" name="gestion_id">
                                        <option selected value="">Seleccione</option>
                                        <?php foreach ($data['gestion'] as $key => $value) { ?>
                                            <option value="<?= $value['gestion_id'] ?>"><?= $value['gestion_nombre'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="col-md-12 mb-0">
                                    <label for="gestion_descripcion" class="small mb-1">Saludo</label>
                                    <textarea required class="form-control" id="alcalde_saludo" name="alcalde_saludo" rows="3" placeholder="Saludo del alcalde"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</main>
<?php footerAdmin($data) ?>