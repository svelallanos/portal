<?php headerPortal($data); ?>
<section class="container-section max-width bg-light">
    <div class="__container__organigrama">
        <div class="__card__introduccion">
            <div class="__item__description">
                <h1>ORGANIGRAMA</h1>
                <p>Los organigramas se aprueban y resuelven los asuntos de carácter
                    administrativo de la Municipalidad.
                </p>
                <div class="__view__detalle">
                    <a target="_blank" class="btn-bg-danger"
                     href="https://www.gob.mx/cms/uploads/attachment/file/344484/Referencias_Habilidades_Gerenciales.pdf">Ver más</a>
                    <a type="button"  data-bs-toggle="modal" data-bs-target="#modal_view_equipo"><i class="feather-play-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="__card__organigrama">
            <div class="__organigrama__img"> 
                <img src="<?= media() ?>/portalweb/images/img_resoluciones_alcaldia.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_view_equipo" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h1 class="modal-title" id="staticBackdropLabel">EQUIPO DE TRABAJO</h1>
                    <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
                <div class="modal-body">
                    <iframe src="https://www.youtube.com/embed/cJUXxjOeoCk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php footerPortal($data); ?>