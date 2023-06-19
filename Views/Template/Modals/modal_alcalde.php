<!-- Modal -->
<div class="modal fade" id="emodal_alcalde" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--bs-azul-1);">
                <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">ALCALDE</h1>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-2" id="eform_alcalde">
                    <div class="col-lg-4 text-center ">
                        <img data-path="<?= media() ?>/images/alcalde/" class="img-account-profile rounded-circle mb-2" id="__img_perfilalcalde" src="<?= media() ?>/images/alcalde/sin_foto.png" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-2">JPG o PNG de un tamaño máximo de 3 MB</div>
                        <div class="mb-3 d-none">
                            <input id="file_imagen_perfil" accept="image/jpeg, image/png" name="file_imagen_perfil" class="form-control" type="file">
                        </div>
                        <button class="btn btn-sm btn-purple-soft text-purple cargar_imagen" title="subir foto de perfil" type="button"><i class="feather-upload flex"></i> &nbsp Cargar imagen</button>
                    </div>
                    <div class="col-lg-8">
                        <div class="row gx-3">
                            <div class="col-md-4 mb-2">
                                <label class="small mb-1">Nombre</label>
                                <input required class="form-control" name="alcalde_nombres_editar" id="alcalde_nombres_editar" type="text" placeholder="Ingrese nombre">
                            </div>
                            <div class="col-md-4 mb-2">
                                <label class="small mb-1">Apellido Paterno</label>
                                <input required class="form-control" name="alcalde_paterno_editar" id="alcalde_paterno_editar" type="text" placeholder="Ingrese apellido paterno">
                            </div>

                            <div class="col-md-4">
                                <label class="small mb-1">Apellido Materno</label>
                                <input required class="form-control" name="alcalde_materno_editar" id="alcalde_materno_editar" type="text" placeholder="Ingrese apellido materno">
                            </div>

                            <div class="col-md-3 mb-2">
                                <label class="small mb-1">DNI</label>
                                <input required class="form-control" id="alcalde_dni_editar" name="alcalde_dni_editar" min="0" type="number" placeholder="Ingrese número de dni">
                            </div>

                            <div class="col-md-3 mb-2">
                                <label class="small mb-1">RUC</label>
                                <input required class="form-control" id="alcalde_ruc_editar" name="alcalde_ruc_editar" min="0" type="number" placeholder="Ingrese número ruc">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="small mb-1">Correo Electrónico</label>
                                <input required class="form-control" id="alcalde_email_editar" name="alcalde_email_editar" type="email" placeholder="name@example.com">
                            </div>
                            <div class="col-md-3 mb-2">
                                <label class="small mb-1">Celular</label>
                                <input required class="form-control" id="alcalde_celular_editar" name="alcalde_celular_editar" min="900000000" type="number" placeholder="Ingrese número de celular">
                            </div>
                            <div class="col-md-5 mb-2">
                                <label class="small mb-1">Gestión</label>
                                <select required class="form-select" id="gestion_id_editar" name="gestion_id_editar">
                                    <option selected value="">Seleccione</option>
                                    <?php foreach ($data['gestion'] as $key => $value) { ?>
                                        <option value="<?= $value['gestion_id'] ?>"><?= $value['gestion_nombre'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-12 mb-0">
                                <label class="small mb-1">Resumen Corto</label>
                                <textarea required class="form-control" id="alcalde_resumen_editar" name="alcalde_resumen_editar" rows="3" placeholder="Saludo del alcalde"></textarea>
                            </div>

                            <div class="col-md-12 mb-0">
                                <label class="small mb-1">Saludo</label>
                                <textarea required class="form-control" id="alcalde_saludo_editar" name="alcalde_saludo_editar" rows="3" placeholder="Saludo del alcalde"></textarea>
                            </div>
                            <div class="col-12 m-0 text-end">
                        <button class="btn btn-primary-soft text-primary" type="submit"><i class="feather-rotate-cw"></i>&nbsp;Actualizar</button>
                    </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="viewmodal_alcalde" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--bs-azul-1);">
                <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">ALCALDE</h1>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-2" id="eform_alcalde">
                    <div class="col-lg-4 text-center ">
                        <img data-path="<?= media() ?>/images/alcalde/" class="img-account-profile rounded-circle mb-2" id="__img_perfilalcalde" src="<?= media() ?>/images/alcalde/sin_foto.png" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-2">JPG o PNG de un tamaño máximo de 3 MB</div>
                        <div class="mb-3 d-none">
                            <input id="file_imagen_perfil" accept="image/jpeg, image/png" name="file_imagen_perfil" class="form-control" type="file">
                        </div>
                        <button class="btn btn-sm btn-purple-soft text-purple cargar_imagen" title="subir foto de perfil" type="button"><i class="feather-upload flex"></i> &nbsp Cargar imagen</button>
                    </div>
                    <div class="col-lg-8">
                        <div class="row gx-3">
                            <div class="col-md-4 mb-2">
                                <label class="small mb-1">Nombre</label>
                                <input required class="form-control" name="alcalde_nombres_vista" id="alcalde_nombres_vista" type="text" placeholder="Ingrese nombre">
                            </div>
                            <div class="col-md-4 mb-2">
                                <label class="small mb-1">Apellido Paterno</label>
                                <input required class="form-control" name="alcalde_paterno_vista" id="alcalde_paterno_vista" type="text" placeholder="Ingrese apellido paterno">
                            </div>

                            <div class="col-md-4">
                                <label class="small mb-1">Apellido Materno</label>
                                <input required class="form-control" name="alcalde_materno_vista" id="alcalde_materno_vista" type="text" placeholder="Ingrese apellido materno">
                            </div>

                            <div class="col-md-3 mb-2">
                                <label class="small mb-1">DNI</label>
                                <input required class="form-control" id="alcalde_dni_vista" name="alcalde_dni_vista" min="0" type="number" placeholder="Ingrese número de dni">
                            </div>

                            <div class="col-md-3 mb-2">
                                <label class="small mb-1">RUC</label>
                                <input required class="form-control" id="alcalde_ruc_vista" name="alcalde_ruc_vista" min="0" type="number" placeholder="Ingrese número ruc">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="small mb-1">Correo Electrónico</label>
                                <input required class="form-control" id="alcalde_email_vista" name="alcalde_email_vista" type="email" placeholder="name@example.com">
                            </div>
                            <div class="col-md-3 mb-2">
                                <label class="small mb-1">Celular</label>
                                <input required class="form-control" id="alcalde_celular_vista" name="alcalde_celular_vista" min="900000000" type="number" placeholder="Ingrese número de celular">
                            </div>
                            <div class="col-md-5 mb-2">
                                <label class="small mb-1">Gestión</label>
                                <select required class="form-select" id="gestion_id_vista" name="gestion_id_vista">
                                    <option selected value="">Seleccione</option>
                                    <?php foreach ($data['gestion'] as $key => $value) { ?>
                                        <option value="<?= $value['gestion_id'] ?>"><?= $value['gestion_nombre'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-12 mb-0">
                                <label class="small mb-1">Resumen Corto</label>
                                <textarea required class="form-control" id="alcalde_resumen_vista" name="alcalde_resumen_vista" rows="3" placeholder="Saludo del alcalde"></textarea>
                            </div>

                            <div class="col-md-12 mb-0">
                                <label class="small mb-1">Saludo</label>
                                <textarea required class="form-control" id="alcalde_saludo_vista" name="alcalde_saludo_vista" rows="3" placeholder="Saludo del alcalde"></textarea>
                            </div>
                            <div class="col-12 m-0 text-end">
                        <button class="btn btn-primary-soft text-primary" type="submit"><i class="feather-rotate-cw"></i>&nbsp;Actualizar</button>
                    </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


