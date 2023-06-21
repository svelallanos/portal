<!-- Modal -->
<div class="modal fade" id="model_ralcaldia" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="model_ralcaldiaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--bs-azul-1);">
                <h1 class="modal-title fs-5 text-cyan" id="model_ralcaldiaLabel">AGREGAR NUEVA RESOLUCIÓN DE ALCALDÍA</h1>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form_ralcaldia" class="row g-2">
                    <div class="col-md-9 mb-2">
                        <label class="small fw-bold mb-1">Nombre:</label>
                        <input required type="text" class="form-control" id="ralcaldia_nombre" name="ralcaldia_nombre" placeholder="Nombre de la resolución de alcaldía">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label class="small fw-bold mb-1">Año:</label>
                        <select required class="form-select" id="anios_id" name="anios_id">
                            <option value="">Seleccione</option>
                            <?php foreach ($data['anios'] as $key => $value) { ?>
                                <option <?= (!isset($data['anios'][$key +1])) ? 'selected' : '' ?> value="<?= $value['anios_id'] ?>"><?= $value['anios_nombre'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-12 mb-2">
                        <textarea required class="form-control" id="ralcaldia_descripcion" name="ralcaldia_descripcion" rows="3" placeholder="Descripción de la resolución de alcaldía"></textarea>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label class="small fw-bold mb-1">Fecha publicación:</label>
                        <input required type="datetime-local" class="form-control" id="ralcaldia_fechapublicacion" name="ralcaldia_fechapublicacion">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label class="small fw-bold mb-1">Adjuntar Resolución:</label>
                        <input required type="file" accept="application/pdf" class="form-control" id="ralcaldia_archivo" name="ralcaldia_archivo">
                    </div>
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary-soft text-primary border"><i class="feather-plus-circle"></i>&nbsp;Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>