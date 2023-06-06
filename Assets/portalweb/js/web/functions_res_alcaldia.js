var dataResAlcaldia;

$(document).ready(function () {
    cargarTable();
    cambiarAnio();
});

function cargarTable() {
    dataResAlcaldia = $("#tb_res_alcaldia").DataTable({
        language: languajeDefault
    });
}

function cambiarAnio() {
    $('.__item__anio').click(function() {
        let anio = $(this).attr('data-anio');
        
        $('.__item__anio').removeClass('active');
        $(this).addClass('active');

        $('.__anio_select').html(anio);
    });
}