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
            <img src="<?= media() ?>/portalweb/images/muni_logob.png" alt="">
        </div>
        <nav class="navbar">
            <ul>
                <li><a class="active" href="<?= base_url() ?>">Inicio</a></li>
                <li><a href="<?= base_url() ?>">Segunda Jerusalén <i class="fa-solid fa-angle-up __drop"></i></a>
                    <ul>
                        <li><a href="<?= base_url() ?>">Tioyacu</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Municipalidad <i class="fa-solid fa-angle-up __drop"></i></a>
                    <ul>
                        <li><a href="<?= base_url() ?>portalweb/alcalde">Alcalde</a></li>
                        <li><a href="<?= base_url() ?>portalweb/consejo">Consejo Municipal</a></li>
                        <li><a href="<?= base_url() ?>portalweb/funcionarios">Funcionarios</a></li>
                        <li><a href="<?= base_url() ?>portalweb/comisiones">Comisiones</a></li>
                        <li><a href="<?= base_url() ?>portalweb/organigrama">Organigrama</a></li>
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
                                <li><a href="<?= base_url() ?>portalweb/resoluciones_gerencia">Gerencia</a></li>
                                <li><a href="<?= base_url() ?>portalweb/resoluciones_consejo">Consejo</a></li>

                            </ul>
                        </li>
                        <li><a href="<?= base_url() ?>portalweb/ordenanzas_municipales">Ordenanzas Municipales</a></li>
                        <li><a href="<?= base_url() ?>portalweb/acuerdo_consejo">Acuerdos de Consejo</a></li>
                        <li><a href="<?= base_url() ?>portalweb/decreto_alcaldia">Decreto de Alcaldía</a></li>
                        <li><a href="<?= base_url() ?>portalweb/convenios">Convenios</a></li>
                    </ul>
                </li>
                <li><a href="#">Transparencia <i class="fa-solid fa-angle-up __drop"></i></a>
                    <!-- <ul>
                        <li><a href="<?= base_url() ?>">Tioyacu</a></li>
                    </ul> -->
                </li>
            </ul>

            <div class="navb-icons">
                <div class="item-icon"><i class="feather-search"></i></div>
                <div class="item-icon"><a href="<?= base_url() ?>login"><i class="feather-log-in"></i></a></div>
                <div class="item-icon"><img src="<?= media() ?>/portalweb/images/transparencia_icon.png" alt=""></div>
                <div class="item-icon"><button type="button" class="button_sidebar" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"><i class="feather-align-justify"></i></button></div>
            </div>
        </nav>
    </div>
</header>
<header class="sidebar_portal">
    <nav class="navbar bg-light fixed-top p-0">
        <div class="container-fluid">
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <img src="<?= media() ?>/portalweb/images/muni_logob.png" alt="">
                    <button class="button_close" data-bs-dismiss="offcanvas"><i class="feather-x"></i></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>