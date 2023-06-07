<?php headerPortal($data); ?>
<section class="container-section max-width bg-light">
    <div class="container__alcalde">
        <div class="__card__datos">
            <div class="__contenido">
                <div class="card__img">
                    <img class="w-100" src="<?= media() ?>/portalweb/images/alcalde/alcalde.jpg" alt="">
                </div>
                <div class="__datos_personales">
                    <h1>Jose Dilmer Saldaña Jara</h1>
                    <h3>Alcalde Distrital</h3>
                    <h4>Gestión 2023 - 2026</h4>
                    <span>
                        <a href="mailto:">
                            <i class="feather-mail"></i>municipio@munieliassoplinvarga.gob.pe
                        </a>
                    </span>
                </div>
                <div class="__saludo_resumido">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae pariatur eaque nihil rerum praesentium porro obcaecati qui accusantium neque itaque adipisci iusto iure, quaerat tenetur error doloremque laborum sit! Illum.</p>
                </div>
            </div>
        </div>
        <div class="__data__saludo">
            <div class="__title">
                <div class="__opciones">
                    <h1>SALUDO</h1>
                    <button data-bs-toggle="modal" data-bs-target="#view__vitae__alcalde"><i class="feather-file-text"></i>&nbsp;&nbsp;Hoja de Vida</button>
                </div>
                <span>Municipalidad Distrital de Elías Soplín Vargas</span>
            </div>
            <div class="__saludo">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia ut consequatur soluta delectus quod adipisci eveniet nisi, veritatis sequi odio laboriosam repellat accusantium dignissimos voluptatibus amet repellendus explicabo in pariatur?Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt laboriosam omnis, at neque nam nostrum ab quae officiis nulla quasi ex nihil expedita, ea ratione! Nesciunt dolore rerum sequi a!Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi cum recusandae ea! Voluptas minus sequi incidunt magnam ad accusamus nihil dolorum quaerat consequatur ab obcaecati consequuntur, error odit perferendis tenetur.lorenm</p>
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