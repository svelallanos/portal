<?php headerPortal($data); ?>
<section class="container-section max-width bg-light">
    <div class="__container__funcionarios">
        <div class="__card__title">
            <div class="__item__description">
                <h1>Conoce a nuestro equipo de trabajo</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum temporibus dolorem eos, tempora fugiat nesciunt quod cupiditate recusandae eveniet, labore debitis repellat. Quidem dolore velit deserunt amet temporibus libero nostrum.
                </p>
                <div class="__view__detalle">
                    <a class="btn-bg-primary" href="#">Ver más</a>
                    <a href="#"><i class="feather-play-circle"></i></a>
                </div>
            </div>
            <div class="__item__img">
                <div class="__content__img">
                    <img src="<?= media() ?>/portalweb/images/funcionarios/funcionarios_6.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="__card__funcionarios">
            <div class="__card__filtro">
                <div class="__input__search">
                    <input type="text" placeholder="Buscar por nombres / cargos">
                </div>
                <div class="__button__search">
                    <button class="btn-bg-danger"><i class="feather-search"></i> Buscar</button>
                </div>
            </div>
            <div class="__card__contenido">
                <div class="__card__user">
                    <div class="__background__img">
                        <img src="<?= media() ?>/images/libros/libro_profile_20221114_095501.jpg" alt="">
                    </div>
                    <div class="__descripcion">
                        <h1>Samuel vela Llanos</h1>
                        <span>Informatica y Esta.</span>
                    </div>
                    <div class="__social d-none">
                        <div class="__icon">
                            <i class="feather-facebook"></i>
                        </div>
                        <div class="__icon">
                            <i class="feather-instagram"></i>
                        </div>
                        <div class="__icon">
                            <i class="feather-linkedin"></i>
                        </div>
                        <div class="__icon">
                            <i class="feather-twitter"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php footerPortal(); ?>