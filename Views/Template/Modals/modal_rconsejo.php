<!-- Modal -->
<div class="modal fade" id="model_rconsejo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="model_rconsejoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--bs-azul-1);">
                <h1 class="modal-title fs-5 text-cyan" id="model_rconsejoLabel">AGREGAR NUEVA RESOLUCIÓN DE CONSEJO</h1>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form_rconsejo" class="row g-2">
                    <div class="col-md-9 mb-2">
                        <label class="small fw-bold mb-1">Nombre:</label>
                        <input required type="text" class="form-control" id="rconsejo_nombre" name="rconsejo_nombre" placeholder="Nombre de la resolución de consejo">
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
                        <textarea required class="form-control" id="rconsejo_descripcion" name="rconsejo_descripcion" rows="3" placeholder="Descripción de la resolución de consejo"></textarea>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label class="small fw-bold mb-1">Fecha publicación:</label>
                        <input required type="datetime-local" class="form-control" id="rconsejo_fechapublicacion" name="rconsejo_fechapublicacion">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label class="small fw-bold mb-1">Adjuntar Resolución:</label>
                        <input required type="file" accept="application/pdf" class="form-control" id="rconsejo_archivo" name="rconsejo_archivo">
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
<div class="modal fade" id="emodel_rconsejo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="model_rconsejoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--bs-azul-1);">
                <h1 class="modal-title fs-5 text-warning" id="model_rconsejoLabel">EDITAR RESOLUCIÓN DE CONSEJO</h1>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="eform_rconsejo" data-rconsejo_id="" class="row g-2">
                    <div class="col-md-9 mb-2">
                        <label class="small fw-bold mb-1">Nombre:</label>
                        <input required type="text" class="form-control" id="erconsejo_nombre" name="erconsejo_nombre" placeholder="Nombre de la resolución de consejo">
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
                        <textarea required class="form-control" id="erconsejo_descripcion" name="erconsejo_descripcion" rows="3" placeholder="Descripción de la resolución de consejo"></textarea>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label class="small fw-bold mb-1">Fecha publicación:</label>
                        <input required type="datetime-local" class="form-control" id="erconsejo_fechapublicacion" name="erconsejo_fechapublicacion">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label class="small fw-bold mb-1">Adjuntar Resolución:</label>
                        <input type="file" accept="application/pdf" class="form-control" id="erconsejo_archivo" name="erconsejo_archivo">
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
<div class="modal fade" id="vmodel_rconsejo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="model_rconsejoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--bs-azul-1);">
                <h1 class="modal-title fs-5 text-info" id="model_rconsejoLabel">RESOLUCIÓN DE CONSEJO</h1>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="view_rconsejo" data-path="<?= media() ?>/doc/resoluciones_consejo/" class="row g-2">
                    <div class="col-md-9 mb-2">
                        <label class="small fw-bold mb-1">Nombre:</label>
                        <input disabled type="text" class="form-control bg-white" id="vrconsejo_nombre" name="vrconsejo_nombre" placeholder="Nombre de la resolución de alcaldía">
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
                        <textarea disabled class="form-control bg-white" id="vrconsejo_descripcion" name="vrconsejo_descripcion" rows="3" placeholder="Descripción de la resolución de alcaldía"></textarea>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label class="small fw-bold mb-1">Fecha publicación:</label>
                        <input disabled type="datetime-local" class="form-control bg-white" id="vrconsejo_fechapublicacion" name="vrconsejo_fechapublicacion">
                    </div>
                    <div class="col-md-12 mb-2 d-flex flex-column align-items-start">
                        <label class="small fw-bold mb-1">Documento de Alcaldía:</label>
                        <a id="file_rconsejo" href="#" target="_blank"><img style="width: 80px;" src="<?= media() ?>/images/pdf.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>