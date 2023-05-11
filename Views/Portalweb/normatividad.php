<?php headerPortal($data); ?>
<section class="container-section">
    <div class="__card__normatividad">
        <div class="__card__slider">
            <img src="<?= media() ?>/portalweb/images/bg-hero.jpg" alt="">
        </div>
        <div class="__card__title">
            <div class="__contenido__title">
                <h3>Resolución de alcaldía</h3>
            </div>
        </div>
        <div class="__card__grid">
            <div class="__card__informacion">
                <div class="__card__filtro">
                    <div class="__card__select">
                        <select class="">
                            <option selected>Seleccione ...</option>
                            <option value="1">Fecha</option>
                            <option value="2">Títuto</option>
                            <option value="3">Descripcion</option>
                        </select>

                    </div>
                    <div class="__card__filtrador">
                        <input type="text" name="text" class="input" placeholder="Type here...">
                    </div>
                    <div class="__card__buscar">
                        <button class="">Buscar</button>
                    </div>
                </div>
                <div class="__card__table">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="__card__enlaces bg-success">
                holas
            </div>
        </div>
    </div>

</section>
<?php footerPortal(); ?>