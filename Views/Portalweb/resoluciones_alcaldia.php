<?php headerPortal($data); ?>
<section class="container-section max-width">
    <div class="__container__res__alcaldia">
        <div class="__card__introduccion">
            <div class="__item__description">
                <h1>Resoluciones de Alcaldía</h1>
                <p>Las Resoluciones de Alcaldía aprueban y resuelven los asuntos de carácter administrativo de la Municipalidad.
                </p>
            </div>
            <div class="__item__img">
                <div class="__content__img">
                    <img src="<?= media() ?>/portalweb/images/img_resoluciones_alcaldia.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="__card__anios">
            <?php for ($i = 13; $i > 0; $i--) { ?>
                <div class="__item__anio <?= ($i === 13) ? "active": "" ?>">
                    <i class="feather-calendar"></i> <span>20<?= $i + 10 ?></span>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php footerPortal(); ?>