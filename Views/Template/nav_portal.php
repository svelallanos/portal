<header class="cabecera-contactos">
    <div class="container-content">
        <div class="item-contactos">
            <div class="email">
                <a href="mailto:mesadepartes@munieliassoplinvargas.gob.pe">
                    <i class="feather-mail"></i>
                    <span>mesadepartes@munieliassoplinvargas.gob.pe</span>
                </a>
            </div>
            <div class="telefono">
                <a href="tel:+51999999999">
                    <i class="feather-phone"></i>
                    <span>+51 999 999 999</span>
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
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
            </div>
            <div class="instagram">
                <a href="">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
            <div class="youtube">
                <a href="">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</header>
<header class="cabecera-navb">
    <div class="container-navb">
        <div class="navb-logo">
            <img src="<?= media() ?>/portalweb/images/logo.webp" alt="">
        </div>
        <nav class="navbar">
            <ul>
                <li><a class="active" href="#">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li>
                    <a href="#">Municipalidad <i class="fa-solid fa-angle-up __drop"></i></a>
                    <ul>
                        <li><a href="<?= base_url() ?>portalweb/alcalde">Alcalde</a></li>
                        <li><a href="#">Regidores</a></li>
                        <li><a href="<?= base_url() ?>portalweb/funcionarios">Funcionarios</a></li>
                        <li><a href="#">Comisiones</a></li>
                        <li><a href="#">Organigrama</a></li>
                        <!-- <li><a href="#">Servicios <i class="fa-solid fa-angle-up __drop"></i></a>
                            <ul>
                                <li><a href="#">Maquinarias</a></li>
                                <li><a href="#">Internet</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </li>
                <li><a href="#">Normatividad <i class="fa-solid fa-angle-up __drop"></i></a>
                    <ul>
                        <li><a href="#">Resoluciones <i class="fa-solid fa-angle-up __drop"></i></a>
                            <ul>
                                <li><a href="<?= base_url() ?>portalweb/resoluciones_alcaldia">Alcaldía</a></li>
                                <li><a href="<?= base_url() ?>portalweb/resoluciones_alcaldia">Gerencia</a></li>
                                <li><a href="<?= base_url() ?>portalweb/resoluciones_alcaldia">Consejo</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= base_url() ?>portalweb/resoluciones_alcaldia">Ordenanzas Municipales</a></li>
                        <li><a href="<?= base_url() ?>portalweb/resoluciones_alcaldia">Acuerdos de Consejo</a></li>
                        <li><a href="<?= base_url() ?>portalweb/resoluciones_alcaldia">Decreto de Alcaldía</a></li>
                        <li><a href="<?= base_url() ?>portalweb/resoluciones_alcaldia">Convenios</a></li>
                    </ul>
                </li>
                <li><a href="#">Motores</a></li>
            </ul>

            <div class="navb-icons">
                <div class="item-icon"><i class="feather-search"></i></div>
                <div class="item-icon"><a href="<?= base_url() ?>login"><i class="feather-log-in"></i></a></div>
                <div class="item-icon"><img src="<?= media() ?>/portalweb/images/transparencia_icon.png" alt=""></div>
            </div>
        </nav>
    </div>
</header>