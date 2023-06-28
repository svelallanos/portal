<?php headerPortal($data); ?>
<section class="container-section max-width bg-light">
    <div class="__container__convenios">
        <div class="__card__introduccion">
            <div class="__item__description">
                <h1>Convenios</h1>
                <p>Los Convenios se aprueban y resuelven los asuntos de carácter administrativo de la Municipalidad.
                </p>
            </div>
            <div class="__item__img">
                <div class="__content__img">
                    <img src="<?= media() ?>/portalweb/images/img_resoluciones_alcaldia.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="__card__anios">
            <?php for ($i = 13; $i > -1; $i--) { ?>
                <div data-anio="20<?= $i + 10 ?>" class="__item__anio <?= ($i === 13) ? "active" : "" ?>">
                    <i class="feather-calendar"></i> <span>20<?= $i + 10 ?></span>
                </div>
            <?php } ?>
        </div>
        <div class="__card__convenios">
            <div class="__title">
                Convenios&nbsp;<span class="__anio_select">2023</span>
            </div>
            <table id="tb_convenios" class="table table-hover table-striped mb-0 bg-white w-100">
                <thead>
                    <tr>
                        <th class="col-1 text-center">N°</th>
                        <th class="col-2">Documento</th>
                        <th class="col-6">Descripción</th>
                        <th class="col-2">Fecha Publicación</th>
                        <th class="col-1">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php footerPortal($data); ?>