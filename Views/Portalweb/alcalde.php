<?php headerPortal($data); ?>
<section class="container-section max-width bg-light">
    <div class="container__alcalde">
        <div class="__card__datos">
            <div class="__contenido">
                <div class="card__img">
                    <img class="w-100" src="<?= media() ?>/images/alcalde/<?= $data['alcalde']['alcalde_photo'] ?>" alt="">
                </div>
                <div class="__datos_personales">
                    <h1><?= $data['alcalde']['alcalde_nombres'].' '.$data['alcalde']['alcalde_apellidopaterno'].' '.$data['alcalde']['alcalde_apellidomaterno'] ?></h1>
                    <h3>Alcalde Distrital</h3>
                    <h4><?= $data['alcalde']['gestion_nombre'] ?></h4>
                    <span>
                        <a href="mailto:<?= $data['alcalde']['email_nombre'] ?>">
                            <i class="feather-mail"></i><?= $data['alcalde']['email_nombre'] ?>
                        </a>
                    </span>
                </div>
                <div class="__saludo_resumido">
                    <p><?= $data['alcalde']['alcalde_resumen'] ?></p>
                </div>
            </div>
        </div>
        <div class="__data__saludo">
            <div class="__title">
                <div class="__opciones">
                    <h1>SALUDO</h1>
                    <button data-bs-toggle="modal" data-bs-target="#view__vitae__alcalde"><i class="feather-file-text"></i>&nbsp;&nbsp;Hoja de Vida</button>
                </div>
                <span><?= $data['alcalde']['empresa_nombre'] ?></span>
            </div>
            <div class="__saludo">
                <p><?= $data['alcalde']['alcalde_saludo'] ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="view__vitae__alcalde" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--amarillo-4);">
                <h1 class="modal-title fs-1 fw-bold" id="exampleModalLabel">Hoja de vida - <span style="color: var(--azul-4);">ALCALDE</span></h1>
                <button type="button" class="btn-close bg-light border border-1 border-warning p-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0" style="height: 50rem;">
                <iframe style="border-radius: 0 0 0.5rem 0.5rem;" class="w-100 h-100" src="https://germarmu.files.wordpress.com/2014/09/resumen-cien-ac3b1os-de-soledad-mc3a1rquez.pdf" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>
<?php footerPortal(); ?>