<?php headerPortal($data); ?>
<section class="container-section">
    <div class="__container__funcionarios">
        <div class="__card__title">
            title
        </div>
        <div class="__card__funcionarios">
            <?php foreach ($data['funcionarios'] as $key => $value) { ?>
                <div class="__card">
                    <div class="__card__user">
                        <div class="__card__img" style="background-image: url(<?= media() ?>/portalweb/images/<?= $value['img'] ?>.jpg);"> </div>
                        <ul class="__social__media">
                            <li>
                                <a href="<?= $value['link_facebook'] ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="<?= (!empty($value['link_ig']) ? $value['link_ig'] : '#') ?>" <?= (!empty($value['link_ig']) ? 'target="_blank"' : '') ?>><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="<?= $value['link_youtube'] ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                        </ul>
                        <div class="__card__info">
                            <p class="__card__title" title="<?= $value['name'] ?>"><?= $value['name'] ?></p>
                            <p class="__card__subtitle" title="<?= $value['cargo'] ?>"><?= $value['cargo'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php footerPortal(); ?>