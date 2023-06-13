var dataAlcalde;

$(document).ready(function () {
    cargarAlcalde();

});

function cargarAlcalde() {
    dataAlcalde = $('#tb_alcalde').DataTable({

        aProcessing: true,
        aServerSide: true,
        language: languajeDefault,
        ajax: {
            url: base_url + "Alcalde/selectsAlcalde",
            dataSrc: "",
        },
        columns: [
            { data: "options" },
            { data: "alcalde_nombres" },
            { data: "alcalde_dni" },
            { data: "alcalde_ruc" },
            { data: "alcalde_email" },
            { data: "gestion_id" },
            { data: "alcalde_estado" },
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
                class: "col-4",
                targets: 1,
            },
            {
                class: "col-1 text-center",
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
                class: "col-1 text-center",
                targets: 6,
            },
        ],

    });
}