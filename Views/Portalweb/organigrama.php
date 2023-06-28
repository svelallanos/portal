<?php headerPortal($data); ?>
<section class="container-section max-width bg-light">
    <div class="__container__organigrama">
        <div class="__card__introduccion">
            <div class="__item__description">
                <h1>ORGANIGRAMA</h1>
                <p>Estructura orgánica de la Municipalidad Distrital De Elías Soplín Vargas.
                </p>
                <div class="__view__detalle">
                    <a target="_blank" class="btn-bg-danger"
                     href="https://soyineeb.com/wp-content/uploads/2020/04/Qu%C3%A9-es-un-Organigrama.pdf">Ver más</a>
                    <a type="button"  data-bs-toggle="modal" data-bs-target="#modal_view_equipo"><i class="feather-play-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="__card__organigrama">
            <div class="__organigrama__img"> 
                <img src="<?= media() ?>/portalweb/images/organigrama/organigrama_muni.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_view_equipo" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe src="https://www.youtube.com/embed/cJUXxjOeoCk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php footerPortal($data); ?>