<?php headerPortal($data); ?>
<section class="container-section max-width bg-light">
    <div class="__container__ordenanzas__municipales">
        <div class="__card__introduccion">
            <div class="__item__description">
                <h1>Ordenazas Municipales</h1>
                <p>Las Ordenanzas Municipales aprueban su organización interna, la regulación, administración y supervisión de los servicios público y las materias en las que la municipalidad tiene competencia normativa.
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
        <div class="__card__ordenanzas__municipales">
            <div class="__title">
                Ordenazas Municipales&nbsp;<span class="__anio_select">2023</span>
            </div>
            <table id="tb_ordenanzas" class="table table-hover table-striped mb-0 bg-white w-100">
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