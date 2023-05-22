<header class="cabecera-contactos">
    <div class="container-content">
        <div class="item-contactos">
            <div class="telefono">
                <a href="tel:+51999999999">
                    <i class="fa-solid fa-phone fa-shake"></i>
                    999 999 999
                </a>
            </div>
            <div class="email">
                <a href="mailto:mesadepartes@munieliassoplinvargas.gob.pe">
                    <i class="fa-solid fa-envelope fa-beat"></i>
                    mesadepartes@munieliassoplinvargas.gob.pe
                </a>
            </div>
        </div>
        <div class="item-redessociales">
            <div class="mensaje">
                <a target="_blank" href="https://www.gob.pe/institucion/munipativilca/noticias/691740-nombre-del-ano-2023-ano-de-la-unidad-la-paz-y-el-desarrollo">
                    <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
                    Año de la Unidad, la Paz y el Desarrollo
                </a>
            </div>
            <div class="facebook">
                <a href="">
                    <i class="fa-brands fa-facebook-f fa-beat-fade"></i>
                </a>
            </div>
            <div class="instagram">
                <a href="">
                    <i class="fa-brands fa-instagram fa-beat-fade"></i>
                </a>
            </div>
            <div class="youtube">
                <a href="">
                    <i class="fa-brands fa-youtube fa-beat-fade"></i>
                </a>
            </div>
            <div class="login">
                <a target="_blank" href="<?= base_url() ?>login">
                    <i class="fa-solid fa-right-to-bracket fa-beat"></i>
                </a>
            </div>
        </div>
    </div>
</header>
<header class="cabecera-navb">
    <div class="container-navb">
        <div class="navb-logo">
            <img src="<?= media() ?>/portalweb/images/logo_mdesv.png" alt="">
        </div>
        <div class="navb-items">
            <div class="item active">
                <a href="<?= base_url() ?>">Inicio</a>
            </div>
            <div class="item">
                <a href="#">Nosotros</a>
            </div>
            <div class="item dropdown-center">
                <a href="#" class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Mi Municipalidad</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url() ?>Portalweb/historia">Historia</a></li>
                    <li><a class="dropdown-item" href="<?= base_url() ?>Portalweb/funcionarios">Funcionarios</a></li>
                    <li><a class="dropdown-item" href="<?= base_url() ?>Portalweb/alcalde">Alcalde</a></li>
                    <li><a class="dropdown-item" href="#">Action three</a></li>
                </ul>
            </div>
            <div class="item">
                <a href="<?= base_url() ?>Portalweb/normatividad">Normatividad</a>
            </div>
            <div class="item">
                <a href="#">Servicio</a>
            </div>
            <div class="item">
                <a href="#">Contacto</a>
            </div>
            <div class="item portal-transparencia-icon d-none">
                <a title="Portal de transparencia" target="_blank" href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=10358&id_tema=5&ver=#.ZErsfnZBzIU"><img src="<?= media() ?>/portalweb/images/transparencia_icon.png" alt=""></a>
            </div>
            <div class="item portal-transparencia">
                <a target="_blank" href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=10358&id_tema=5&ver=#.ZErsfnZBzIU"><img src="<?= media() ?>/portalweb/images/transparencia.png" alt=""></a>
            </div>
            <div class="item toggle-mobile d-none">
                <a class="open-toggle" type="button"><i class="fa-solid fa-bars"></i></a>
            </div>
            <!-- Modal toggle mobile -->
            <div class="modal fade" id="toggleMobile" tabindex="-1" aria-labelledby="toggleMobileLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <img src="<?= media() ?>/portalweb/images/logo_mdesv.png" alt="">
                            <button type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-line link-toggle">
                                <a href="#"><i class="fa-solid fa-house"></i> Inicio</a>
                            </div>
                            <div class="modal-line link-toggle">
                                <a href="#"><i class="fa-regular fa-building"></i> Nosotros</a>
                            </div>
                            <div class="modal-line link-toggle">
                                <a href="#"><i class="fa-solid fa-building-columns"></i> Mi Municipalidad</a>
                            </div>
                            <div class="modal-line link-toggle">
                                <a href="#"><i class="fa-solid fa-file-invoice"></i> Normatividad</a>
                            </div>
                            <div class="modal-line link-toggle">
                                <a href="#"><i class="fa-solid fa-sitemap"></i> Servicios</a>
                            </div>
                            <div class="modal-line link-toggle">
                                <a href="#"><i class="fa-solid fa-address-card"></i> Contacto</a>
                            </div>
                            <div class="text-center toggle-portal-icon link-toggle">
                                <a target="_blank" href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=10358&id_tema=5&ver=#.ZErsfnZBzIU"><img src="<?= media() ?>/portalweb/images/transparencia.png" alt=""></a>
                            </div>
                        </div>
                        <div class="modal-footer d-none">
                            <div class="facebook">
                                <a href="">
                                    <i class="fa-brands fa-facebook-f fa-beat-fade"></i>
                                </a>
                            </div>
                            <div class="instagram">
                                <a href="">
                                    <i class="fa-brands fa-instagram fa-beat-fade"></i>
                                </a>
                            </div>
                            <div class="youtube">
                                <a href="">
                                    <i class="fa-brands fa-youtube fa-beat-fade"></i>
                                </a>
                            </div>
                            <div class="login">
                                <a target="_blank" href="<?= base_url() ?>login">
                                    <i class="fa-solid fa-right-to-bracket fa-beat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin de codigo -->
        </div>
    </div>
</header>