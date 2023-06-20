var dataAlcaldia;

$(document).ready(function () {
    cargarAlcaldia();
});

function cargarAlcaldia() {
    dataAlcaldia = $('#tb_alcaldia').DataTable({
        aProcessing: true,
        aServerSide: true,
        language: languajeDefault,
        ajax: {
            url: base_url + "Resoluciones/selectsReAlcaldia",
            dataSrc: "",
        },
        columns: [
            { data: "numero" },
            { data: "ralcaldia_nombre" },
            { data: "ralcaldia_descripcion" },
            { data: "anio" },
            { data: "ralcaldia_fechapublicacion" },
            { data: "estado" },
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
                class: "col-3 text-center",
                targets: 2,
            },
            {
                class: "col-1 text-center",
                targets: 3,
            },
            {
                class: "col-2 text-center",
                targets: 4,
            },
            {
                class: "col-1 text-center",
                targets: 5,
            },
            {
                class: "col-2 text-center",
                targets: 6,
            },
        ],
    });
}