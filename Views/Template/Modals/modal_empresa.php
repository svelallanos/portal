<!-- Modal -->
<div class="modal fade" id="emodal_empresa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">EDITAR EMPRESA</h1>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-2" id="eform_empresa">
                    <div class="col-md-4 d-flex flex-column align-items-center">
                        <img style="border: 2px solid red;" id="elogo_empresa" data-path="<?= media() ?>/images/empresa/" class="img-account-profile rounded-circle mb-2 w-75 h-auto" src="<?= media() ?>/images/empresa/sin_logo.png" alt="">
                        <div class="small font-italic text-muted mb-2">JPG o PNG de un tamaño máximo de 3 MB</div>
                        <div class="mb-3 d-none">
                            <input id="eempresa_logo" accept="image/jpeg, image/png" name="eempresa_logo" class="form-control" type="file">
                        </div>
                        <button class="btn btn-sm btn-pink-soft text-pink ecargar_imagen" title="subir foto de perfil" type="button"><i class="feather-upload"></i> &nbsp Cargar imagen</button>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="small fw-bold mb-1">Nombre</label>
                                <input required type="text" class="form-control" id="eempresa_nombre" name="eempresa_nombre" placeholder="Nombre de la entidad">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="small fw-bold mb-1">Descripción</label>
                                <textarea required class="form-control" id="eempresa_descripcion" name="eempresa_descripcion" rows="3" placeholder="Descripción de la entidad"></textarea>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="small fw-bold mb-1">Ruc</label>
                                <input required type="text" class="form-control" id="eempresa_ruc" name="eempresa_ruc" placeholder="Ruc de la entidad">
                            </div>
                            <div class="col-md-8 mb-3">
                                <label class="small fw-bold mb-1">Email</label>
                                <select required class="form-select" id="eempresa_email" name="eempresa_email">
                                    <option value="" selected>Selecione</option>
                                    <?php foreach ($data['email'] as $key => $value) { ?>
                                        <option value="<?= $value['email_id'] ?>"><?= $value['email_nombre'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="small fw-bold mb-1">Misión</label>
                                <textarea class="form-control" id="eempresa_mision" name="eempresa_mision" required rows="3" placeholder="Misión de la entidad..."></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="small fw-bold mb-1">Visión</label>
                                <textarea class="form-control" id="eempresa_vision" name="eempresa_vision" required rows="3" placeholder="Visión de la entidad..."></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="small fw-bold mb-1">Historia</label>
                                <textarea class="form-control" id="eempresa_historia" name="eempresa_historia" required rows="3" placeholder="Historia de la entidad ..."></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="small fw-bold mb-1">Población</label>
                                <textarea class="form-control" id="eempresa_poblacion" name="eempresa_poblacion" required rows="3" placeholder="Longitud poblacional"></textarea>
                            </div>
                            <div class="col-12 m-0 text-end">
                                <button class="btn btn-primary-soft text-primary" type="submit"><i class="feather-save"></i>&nbsp;Actualizar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="vmodal_empresa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-indigo">
                <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">DATOS DE EMPRESA</h1>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-2">
                    <div class="col-md-4 d-flex flex-column align-items-center">
                        <img style="border: 2px solid red;" id="vlogo_empresa" data-path="<?= media() ?>/images/empresa/" class="img-account-profile rounded-circle mb-2 w-75 h-auto" src="<?= media() ?>/images/empresa/sin_logo.png" alt="">
                        <div class="small font-italic text-muted mb-2">Logo de la Empresa</div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="small fw-bold mb-1">Nombre</label>
                                <input disabled type="text" class="form-control bg-white" id="vempresa_nombre" name="vempresa_nombre" placeholder="Nombre de la entidad">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="small fw-bold mb-1">Descripción</label>
                                <textarea disabled class="form-control bg-white" id="vempresa_descripcion" name="vempresa_descripcion" rows="3" placeholder="Descripción de la entidad"></textarea>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="small fw-bold mb-1">Ruc</label>
                                <input disabled type="text" class="form-control bg-white" id="vempresa_ruc" name="vempresa_ruc" placeholder="Ruc de la entidad">
                            </div>
                            <div class="col-md-8 mb-3">
                                <label class="small fw-bold mb-1">Email</label>
                                <select disabled class="form-select bg-white" id="vempresa_email" name="vempresa_email">
                                    <option value="" selected>Selecione</option>
                                    <?php foreach ($data['email'] as $key => $value) { ?>
                                        <option value="<?= $value['email_id'] ?>"><?= $value['email_nombre'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="small fw-bold mb-1">Misión</label>
                                <textarea class="form-control bg-white" id="vempresa_mision" name="vempresa_mision" disabled rows="3" placeholder="Misión de la entidad..."></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="small fw-bold mb-1">Visión</label>
                                <textarea class="form-control bg-white" id="vempresa_vision" name="vempresa_vision" disabled rows="3" placeholder="Visión de la entidad..."></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="small fw-bold mb-1">Historia</label>
                                <textarea class="form-control bg-white" id="vempresa_historia" name="vempresa_historia" disabled rows="3" placeholder="Historia de la entidad ..."></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="small fw-bold mb-1">Población</label>
                                <textarea class="form-control bg-white" id="vempresa_poblacion" name="vempresa_poblacion" disabled rows="3" placeholder="Longitud poblacional"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>