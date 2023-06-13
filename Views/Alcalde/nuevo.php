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
                        <a class="btn btn-sm btn-indigo-soft text-indigo" href="<?= base_url() ?>Alcalde">
                            <i class="fa-solid fa-reply"></i>
                            &nbsp;Retornar
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
                    <div class="card-header" style="background-color: #00273c; color: #00b4fe;">Imagen de Perfil</div>
                    <div class="card-body text-center">
                        <img data-path="<?= media() ?>/images/fotoperfil/" class="__img_editarperfil img-account-profile rounded-circle mb-2" src="<?= media() ?>/images/fotoperfil/sin_foto.png" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-2">JPG o PNG de un tamaño máximo de 3 MB</div>
                        <form id="upload_perfil">
                            <div class="mb-3 d-none">
                                <input id="file_imagen_perfil" accept="image/jpeg, image/png" name="file_imagen_perfil" class="form-control" type="file">
                            </div>
                            <button class="btn btn-sm btn-purple-soft text-purple cargar_imagen" title="subir foto de perfil" type="button"><i class="feather-upload"></i> &nbsp Cargar imagen</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <!-- Account details card-->
                <div class="mensaje"></div>
                <div class="card mb-4">
                    <div class="card-header" style="background-color: #00273c; color: #00b4fe;">Datos del Alcalde</div>
                    <div class="card-body">
                        <form id="form_update_usuario" >
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6 mb-2">
                                    <label class="small mb-1">Usuario Login</label>
                                    <input required class="form-control" id="usuarios_login" type="text" name="usuarios_login" placeholder="Usuario de inicio de sesion">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="small mb-1">DNI</label>
                                    <input required class="form-control" id="usuarios_dni" name="usuarios_dni" type="text" placeholder="Ingrese número de dni del usuario">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="small mb-1">Nombre</label>
                                    <input required class="form-control" name="usuarios_nombres" id="usuarios_nombres" type="text" placeholder="Ingrese nombre de usuario">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6 mb-2">
                                    <label class="small mb-1">Apellido Paterno</label>
                                    <input required class="form-control" name="usuarios_paterno" id="usuarios_paterno" type="text" placeholder="Ingrese apellido paterno del usuario">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1">Apellido Materno</label>
                                    <input required class="form-control" name="usuarios_materno" id="usuarios_materno" type="text" placeholder="Ingrese el apellido materno del usuario">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1">Correo Electrónico</label>
                                <input required class="form-control" id="usuarios_email" name="usuarios_email" type="email" placeholder="name@example.com">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php footerAdmin($data) ?>