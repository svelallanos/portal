<?php headerPortal($data); ?>
<section class="container-section max-width bg-light">
    <div class="__container__comisiones">
        <div class="__card__introduccion">
            <div class="__item__description">

                <h1>COMISIONES <span class="__anio">2023</span></h1>

                <p>Las comisiones se aprueban y resuelven los asuntos de carácter
                    administrativo de la Municipalidad.
                </p>
                <div class="__view__detalle">
                    <a target="_blank" class="btn-bg-danger" href="https://www.gob.pe/10739-el-concejo-municipal-las-comisiones-de-regidores">Ver más</a>
                    <a type="button" data-bs-toggle="modal" data-bs-target="#modal_view_equipo"><i class="feather-play-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="__card__comisiones">
            <div class="__comisiones__pdf">
                <iframe src="<?= media() ?>/doc/comisiones/comisiones_doc_20230621_151523.pdf" frameborder="0"></iframe>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_view_equipo" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe src="https://www.youtube.com/embed/qxAfNVfOGOs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                        encrypted-media; gyroscope; picture-in-picture;
                         web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php footerPortal($data); ?>