<!-- Modal -->
<div class="modal fade" id="model_rgerencia" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="model_rgerenciaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--bs-azul-1);">
                <h1 class="modal-title fs-5 text-cyan" id="model_rgerenciaLabel">AGREGAR NUEVA RESOLUCIÓN DE GERENCIA</h1>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form_rgerencia" class="row g-2">
                    <div class="col-md-9 mb-2">
                        <label class="small fw-bold mb-1">Nombre:</label>
                        <input required type="text" class="form-control" id="rgerencia_nombre" name="rgerencia_nombre" placeholder="Nombre de la resolución de gerencia">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label class="small fw-bold mb-1">Año:</label>
                        <select required class="form-select" id="anios_id" name="anios_id">
                            <option value="">Seleccione</option>
                            <?php foreach ($data['anios'] as $key => $value) { ?>
                                <option <?= (!isset($data['anios'][$key + 1])) ? 'selected' : '' ?> value="<?= $value['anios_id'] ?>"><?= $value['anios_nombre'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label class="small fw-bold mb-1">Descripción:</label>
                        <textarea required class="form-control" id="rgerencia_descripcion" name="rgerencia_descripcion" rows="3" placeholder="Descripción de la resolución de gerencia"></textarea>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label class="small fw-bold mb-1">Fecha publicación:</label>
                        <input required type="datetime-local" class="form-control" id="rgerencia_fechapublicacion" name="rgerencia_fechapublicacion">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label class="small fw-bold mb-1">Adjuntar Resolución:</label>
                        <input required type="file" accept="application/pdf" class="form-control" id="rgerencia_archivo" name="rgerencia_archivo">
                    </div>
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary-soft text-primary border"><i class="feather-plus-circle"></i>&nbsp;Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="emodel_rgerencia" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="model_rgerenciaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--bs-azul-1);">
                <h1 class="modal-title fs-5 text-warning" id="model_rgerenciaLabel">EDITAR RESOLUCIÓN DE GERENCIA</h1>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="eform_rgerencia" data-rgerencia_id="" class="row g-2">
                    <div class="col-md-9 mb-2">
                        <label class="small fw-bold mb-1">Nombre:</label>
                        <input required type="text" class="form-control" id="ergerencia_nombre" name="ergerencia_nombre" placeholder="Nombre de la resolución de gerencia">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label class="small fw-bold mb-1">Año:</label>
                        <select required class="form-select" id="eanios_id" name="eanios_id">
                            <option value="">Seleccione</option>
                            <?php foreach ($data['anios'] as $key => $value) { ?>
                                <option value="<?= $value['anios_id'] ?>"><?= $value['anios_nombre'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label class="small fw-bold mb-1">Descripción:</label>
                        <textarea required class="form-control" id="ergerencia_descripcion" name="ergerencia_descripcion" rows="3" placeholder="Descripción de la resolución de gerencia"></textarea>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label class="small fw-bold mb-1">Fecha publicación:</label>
                        <input required type="datetime-local" class="form-control" id="ergerencia_fechapublicacion" name="ergerencia_fechapublicacion">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label class="small fw-bold mb-1">Adjuntar Resolución:</label>
                        <input type="file" accept="application/pdf" class="form-control" id="ergerencia_archivo" name="ergerencia_archivo">
                    </div>
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary-soft text-primary border"><i class="fa-solid fa-angles-up"></i>&nbsp;Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="vmodel_rgerencia" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="model_rgerenciaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--bs-azul-1);">
                <h1 class="modal-title fs-5 text-info" id="model_rgerenciaLabel">RESOLUCIÓN DE GERENCIA</h1>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="view_rgerencia" data-path="<?= media() ?>/doc/resoluciones_gerencia/" class="row g-2">
                    <div class="col-md-9 mb-2">
                        <label class="small fw-bold mb-1">Nombre:</label>
                        <input disabled type="text" class="form-control bg-white" id="vrgerencia_nombre" name="vrgerencia_nombre" placeholder="Nombre de la resolución de alcaldía">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label class="small fw-bold mb-1">Año:</label>
                        <select disabled class="form-select bg-white" id="vanios_id" name="vanios_id">
                            <option value="">Seleccione</option>
                            <?php foreach ($data['anios'] as $key => $value) { ?>
                                <option value="<?= $value['anios_id'] ?>"><?= $value['anios_nombre'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label class="small fw-bold mb-1">Descripción:</label>
                        <textarea disabled class="form-control bg-white" id="vrgerencia_descripcion" name="vrgerencia_descripcion" rows="3" placeholder="Descripción de la resolución de alcaldía"></textarea>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label class="small fw-bold mb-1">Fecha publicación:</label>
                        <input disabled type="datetime-local" class="form-control bg-white" id="vrgerencia_fechapublicacion" name="vrgerencia_fechapublicacion">
                    </div>
                    <div class="col-md-12 mb-2 d-flex flex-column align-items-start">
                        <label class="small fw-bold mb-1">Documento de Alcaldía:</label>
                        <a id="file_rgerencia" href="#" target="_blank"><img style="width: 80px;" src="<?= media() ?>/images/pdf.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>