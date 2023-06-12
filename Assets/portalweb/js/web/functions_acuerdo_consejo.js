var dataAcuerdo_Consejo;

$(document).ready(function () {
    cargarTable();
    cambiarAnio();
});

function cargarTable() {
    dataAcuerdo_Consejo = $("#tb_acuerdo_consejo").DataTable({
        responsive: true,
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