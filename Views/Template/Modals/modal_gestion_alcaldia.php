<!-- Modal -->
<div class="modal fade" id="modal_gestion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--bs-azul-1);">
                <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">GESTIÓN ALCALDÍA</h1>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-2">
                    <div class="col-md-8 mb-3">
                        <label for="gestion_nombre" class="form-label fw-bold">Nombres</label>
                        <input type="text" class="form-control" id="gestion_nombre" value="" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="gestion_descripcion" class="form-label fw-bold">Descripción</label>
                        <textarea class="form-control" id="gestion_descripcion" required rows="3"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="gestion_inicio" class="form-label fw-bold">Fecha Inicio</label>
                        <input type="date" class="form-control" id="gestion_inicio" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="gestion_fin" class="form-label fw-bold">Fecha Fin</label>
                        <input type="date" class="form-control" id="gestion_fin" value="" required>
                    </div>
                    <div class="col-12 m-0 text-end">
                        <button class="btn btn-primary-soft text-primary" type="submit"><i class="feather-save"></i>&nbsp;Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>