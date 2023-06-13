var dataEmpresa;

$(document).ready(function () {
    cargarEmpresa();
});

function cargarEmpresa() {
    dataEmpresa = $('#tb_empresa').DataTable({
        aProcessing: true,
        aServerSide: true,
        language: languajeDefault,
        ajax: {
            url: base_url + "Empresa/selectsEmpresa",
            dataSrc: "",
        },
        columns: [
            { data: "options" },
            { data: "empresa_nombre" },
            { data: "empresa_ruc" },
            { data: "email" },
            { data: "estado" }
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
                class: "col-5",
                targets: 1,
            },
            {
                class: "col-2 text-center",
                targets: 2,
            },
            {
                class: "col-3 text-center",
                targets: 3,
            },
            {
                class: "col-1 text-center",
                targets: 4,
            },
        ],
    });
}