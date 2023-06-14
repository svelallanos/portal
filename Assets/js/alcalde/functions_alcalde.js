var dataAlcalde;

$(document).ready(function () {
    cargarAlcalde();
    selectPerfil();
    saveAlcalde();
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
            { data: "nombres" },
            { data: "alcalde_dni" },
            { data: "alcalde_ruc" },
            { data: "alcalde_email" },
            { data: "gestion" },
            { data: "estado" },
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
                class: "col-3",
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
                class: "col-2",
                targets: 4,
            },
            {
                class: "col-2 text-center",
                targets: 5,
            },
            {
                class: "col-1 text-center",
                targets: 6,
            },
        ],

    });
}

function selectPerfil() {
    $('.cargar_imagen').click(function () {
        $('#file_imagen_perfil').click();
    });
}

function saveAlcalde() {
    $('#form_alcalde').submit(function (e) {
        e.preventDefault();

        const form = document.getElementById('form_alcalde');
        const formData = new FormData(form);

        const request = axios.post(base_url + 'Alcalde/saveAlcalde', formData);
    });
}