var dataResGerencia;

$(document).ready(function () {
    cargarTable();
    cambiarAnio();
});

function cargarTable() {
    let anios_id = $('.__item__anio.active').attr('data-anios_id');
    dataResGerencia = $("#tb_res_gerencia").DataTable({
        aProcessing: true,
        aServerSide: true,
        language: languajeDefault,
        ajax: {
            url: base_url + "Portalweb/selectsReGerencia",
            dataSrc: "",
            data: {
                anios_id : anios_id
            },
            type: 'post'
        },
        columns: [
            { data: "numero" },
            { data: "rgerencia_nombre" },
            { data: "rgerencia_descripcion" },
            { data: "rgerencia_fechapublicacion" },
            { data: "options" },
        ],
        resonsieve: "true",
        bDestroy: true,
        iDisplayLength: 10,
        Order: [[0, "desc"]],
        columnDefs: [
            {
                class: "col-1 text-center",
                targets: 0,
            },
            {
                class: "col-2",
                targets: 1,
            },
            {
                class: "col-6",
                targets: 2,
            },
            {
                class: "col-2 text-center",
                targets: 3,
            },
            {
                class: "col-1 text-center",
                targets: 4,
            }
        ],
    });
}

function cambiarAnio() {
    $('.__item__anio').click(function() {
        let anio = $(this).attr('data-anio');
        
        $('.__item__anio').removeClass('active');
        $(this).addClass('active');

        $('.__anio_select').html(anio);

        cargarTable();
    });
}