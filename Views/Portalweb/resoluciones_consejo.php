<?php headerPortal($data); ?>
<section class="container-section max-width bg-light">
    <div class="__container__res__consejo">
        <div class="__card__introduccion">
            <div class="__item__description">
                <h1>Resoluciones de Consejo</h1>
                <p>Las Resoluciones de Concejo, resuelven asuntos administrativos concernientes a su organización interna.
                </p>
            </div>
            <div class="__item__img">
                <div class="__content__img">
                    <img src="<?= media() ?>/portalweb/images/img_resoluciones_alcaldia.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="__card__anios">
            <?php
            $anio_actual = true;
            foreach ($data['anios'] as $key => $value) {
            ?>
                <div data-anios_id="<?= $value['anios_id'] ?>" data-anio="<?= $value['anios_nombre'] ?>" class="__item__anio <?= ($anio_actual) ? "active" :  "" ?>">
                    <i class="feather-calendar"></i><span><?= $value['anios_nombre'] ?></span>
                </div>
            <?php
                $anio_actual = false;
            } ?>
        </div>
        <div class="__card__res__consejo">
            <div class="__title">
                Resoluciones de Consejo&nbsp;<span class="__anio_select">2023</span>
            </div>
            <table id="tb_res_consejo" class="table table-hover table-striped mb-0 bg-white w-100">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>DOCUMENTO</th>
                        <th>DESCRIPCIÓN</th>
                        <th>FECHA PUBLICACIÓN</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php footerPortal($data); ?>