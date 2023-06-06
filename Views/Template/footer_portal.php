</main>
<footer class="container-fluid">
    <div class="footer-content">
        <div class="item">
            <h4>ALCALDE</h4>
            <hr>
            <div class="data-alcalde">
                <img src="<?= media() ?>/portalweb/images/sin_foto.png" alt="">
                <h6>Jose Dilmer Saldaña Jara</h6>
                <label for="">Gestión 2023 - 2026</label>
            </div>
        </div>
        <div class="item">
            <h4>NOSOTROS</h4>
            <hr>
            <p class="m-0"><i class="fa-solid fa-caret-right"></i> Comprometidos con principios cristianos y la excelencia en la educación, trabajamos juntos para construir una comunidad justa, solidaria y comprometida con el bienestar de todos.</p>
            <div class="list-sociales">
                <div class="facebook">
                    <i class="fa-brands fa-facebook-f fa-beat"></i>
                </div>
                <div class="intagram">
                    <i class="fa-brands fa-instagram fa-beat"></i>
                </div>
                <div class="youtube">
                    <i class="fa-brands fa-youtube fa-beat"></i>
                </div>
            </div>
        </div>
        <div class="item">
            <h4>DATOS DE CONTACTO</h4>
            <hr>
            <p>
                <i class="fa-solid fa-caret-right"></i>
                <a href="mailto:mesadepartes@munieliassoplinvargas.gob.pe">mesadepartes@munieliassoplinvargas.gob.pe</a>
            </p>
            <p>
                <a href="tel:+51999999999"><i class="fa-solid fa-caret-right"></i> +51 999 999 999</a>
            </p>
            <p>
                <i class="fa-solid fa-caret-right"></i>
                Av. Galilea N° 452 Segunda Jerusalén
            </p>
            <p><i class="fa-solid fa-caret-right"></i> Lun - Vie 8:00 am a 12:30 pm - 2.00 pm a 5.30 pm</p>
        </div>
    </div>
</footer>
<footer class="container-copy">
    <div class="footer-copyrigth">
        © Copyright 2023 - Municipalidad Distrital De Elías Soplín Vargas - Todos los derechos reservados
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
<script src="<?= media() ?>/js/general/jquery-3.6.0.min.js?version=<?= getVersion()?>"></script>
<script src="<?= media() ?>/js/general/all.js?version=<?= getVersion()?>"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="<?= media() ?>/portalweb/js/main.js?version=<?= getVersion()?>"></script>

<?php if (isset($data['page_function_js']) && !empty($data['page_function_js'])) { ?>
  <script src="<?= media() ?>/portalweb/js/<?= $data['page_function_js'] ?>.js?version=<?= getVersion() ?>"></script>
<?php } ?>
</body>
</html>