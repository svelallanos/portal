<?php headerPortal($data); ?>
<section class="container-section max-width bg-light">
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
            <?php for ($i = 13; $i > -1; $i--) { ?>
                <div class="__item__anio <?= ($i === 13) ? "active" : "" ?>">
                    <i class="feather-calendar"></i> <span>20<?= $i + 10 ?></span>
                </div>
            <?php } ?>
        </div>
        <div class="__card__res__alcaldia">
            <div class="__title">
                Resoluciones de Alcaldía&nbsp;<span class="__anio_select">2023</span>
            </div>
            <table id="tb_res_alcaldia" class="table tb_style">
                <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Row 1 Data 1</td>
                        <td>Row 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>Row 2 Data 1</td>
                        <td>Row 2 Data 2</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php footerPortal($data); ?>