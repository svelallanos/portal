<!-- Modal -->
<div class="modal fade" id="modal_gestion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--bs-azul-1);">
                <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">GESTIÓN ALCALDÍA</h1>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-2" id="form_gestion">
                    <div class="col-md-8 mb-3">
                        <label for="gestion_nombre" class="form-label fw-bold">Nombres</label>
                        <input type="text" class="form-control" id="gestion_nombre" value="Gestión " name="gestion_nombre" disabled>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="gestion_descripcion" class="form-label fw-bold">Descripción</label>
                        <textarea class="form-control" id="gestion_descripcion" name="gestion_descripcion" required rows="3"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="gestion_inicio" class="form-label fw-bold">Fecha Inicio</label>
                        <input type="date" class="form-control" id="gestion_inicio" name="gestion_inicio" required>
                    </div>
                    <div class="col-md-6">
                        <label for="gestion_fin" class="form-label fw-bold">Fecha Fin</label>
                        <input type="date" class="form-control" id="gestion_fin" name="gestion_fin" required>
                    </div>
                    <div class="col-12 m-0 text-end">
                        <button class="btn btn-primary-soft text-primary" type="submit"><i class="feather-save"></i>&nbsp;Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_gestion_editar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">GESTIÓN ALCALDÍA</h1>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-2" id="form_gestion_editar" data-gestion_id="">
                    <div class="col-md-8 mb-3">
                        <label for="gestion_nombre_editar" class="form-label fw-bold">Nombres</label>
                        <input type="text" class="form-control" id="gestion_nombre_editar" value="Gestión " name="gestion_nombre_editar" disabled>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="gestion_descripcion_editar" class="form-label fw-bold">Descripción</label>
                        <textarea class="form-control" id="gestion_descripcion_editar" name="gestion_descripcion_editar" required rows="3"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="gestion_inicio_editar" class="form-label fw-bold">Fecha Inicio</label>
                        <input type="date" class="form-control" id="gestion_inicio_editar" name="gestion_inicio_editar" required>
                    </div>
                    <div class="col-md-6">
                        <label for="gestion_fin_editar" class="form-label fw-bold">Fecha Fin</label>
                        <input type="date" class="form-control" id="gestion_fin_editar" name="gestion_fin_editar" required>
                    </div>
                    <div class="col-12 m-0 text-end">
                        <button class="btn btn-primary-soft text-primary" type="submit"><i class="feather-rotate-cw"></i>&nbsp;Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>