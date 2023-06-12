var dataGestion;

$(document).ready(function () {
    cargarGestion();
});

function cargarGestion() {
    dataGestion = $('#tb_gestion').dataTable({
        aProcessing: true,
        aServerSide: true,
        language: languajeDefault,
        ajax: {
            url: base_url +"Gestion/selectsGestion",
            dataSrc: "",
        },
        columns: [
            { data: "options" },
            { data: "gestion_nombre" },
            { data: "gestion_fecha_inicio" },
            { data: "gestion_fecha_final" },
            { data: "gestion_estado" }
        ],
        resonsieve: "true",
        bDestroy: true,
        iDisplayLength: 10,
        Order: [[0, "desc"]],
        columnDefs: [
            {
                class: "col-2 text-center",
                targets: 0,
            },
            {
                class: "col-5",
                targets: 1,
            },
            {
                class: "col-2 text-center",
                targets: 2,
            },
            {
                class: "col-2 text-center",
                targets: 3,
            },
            {
                class: "col-1 text-center",
                targets: 4,
            },
        ],
    });
}