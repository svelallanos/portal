<!-- Modal -->
<div class="modal fade" id="model_ordenanza" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="model_ordenanzaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--bs-azul-1);">
                <h1 class="modal-title fs-5 text-cyan" id="model_ordenanzaLabel">AGREGAR NUEVA ORDENANZA MUNICIPAL</h1>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form_ordenanza" class="row g-2">
                    <div class="col-md-9 mb-2">
                        <label class="small fw-bold mb-1">Nombre:</label>
                        <input required type="text" class="form-control" id="ordenanza_nombre" name="ordenanza_nombre" placeholder="Nombre de la ordenanza municipal">
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
                        <textarea required class="form-control" id="ordenanza_descripcion" name="ordenanza_descripcion" rows="3" placeholder="Descripción de la ordenanza municipal"></textarea>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label class="small fw-bold mb-1">Fecha publicación:</label>
                        <input required type="datetime-local" class="form-control" id="ordenanza_fechapublicacion" name="ordenanza_fechapublicacion">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label class="small fw-bold mb-1">Adjuntar Resolución:</label>
                        <input required type="file" accept="application/pdf" class="form-control" id="ordenanza_archivo" name="ordenanza_archivo">
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
<div class="modal fade" id="emodel_ordenanza" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="model_ordenanzaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--bs-azul-1);">
                <h1 class="modal-title fs-5 text-warning" id="model_ordenanzaLabel">EDITAR ORDENANZA MUNICIPAL</h1>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="eform_ordenanza" data-ordenanza_id="" class="row g-2">
                    <div class="col-md-9 mb-2">
                        <label class="small fw-bold mb-1">Nombre:</label>
                        <input required type="text" class="form-control" id="eordenanza_nombre" name="eordenanza_nombre" placeholder="Nombre de la ordenanza municipal">
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
                        <textarea required class="form-control" id="eordenanza_descripcion" name="eordenanza_descripcion" rows="3" placeholder="Descripción de la ordenanza municipal"></textarea>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label class="small fw-bold mb-1">Fecha publicación:</label>
                        <input required type="datetime-local" class="form-control" id="eordenanza_fechapublicacion" name="eordenanza_fechapublicacion">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label class="small fw-bold mb-1">Adjuntar Ordenanza:</label>
                        <input type="file" accept="application/pdf" class="form-control" id="eordenanza_archivo" name="eordenanza_archivo">
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
<div class="modal fade" id="vmodel_ordenanza" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="model_ordenanzaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--bs-azul-1);">
                <h1 class="modal-title fs-5 text-info" id="model_ordenanzaLabel">ORDENANZA MUNICIPAL</h1>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="view_ordenanza" data-path="<?= media() ?>/doc/ordenanza_municipal/" class="row g-2">
                    <div class="col-md-9 mb-2">
                        <label class="small fw-bold mb-1">Nombre:</label>
                        <input disabled type="text" class="form-control bg-white" id="vordenanza_nombre" name="vordenanza_nombre" placeholder="Nombre de la ordenanza municipal">
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
                        <textarea disabled class="form-control bg-white" id="vordenanza_descripcion" name="vordenanza_descripcion" rows="3" placeholder="Descripción de la ordenanza municipal"></textarea>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label class="small fw-bold mb-1">Fecha publicación:</label>
                        <input disabled type="datetime-local" class="form-control bg-white" id="vordenanza_fechapublicacion" name="vordenanza_fechapublicacion">
                    </div>
                    <div class="col-md-12 mb-2 d-flex flex-column align-items-start">
                        <label class="small fw-bold mb-1">Documento de Alcaldía:</label>
                        <a id="file_ordenanza" href="#" target="_blank"><img style="width: 80px;" src="<?= media() ?>/images/pdf.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>