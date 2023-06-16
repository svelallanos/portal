var dataEmpresa;

$(document).ready(function () {
    cargarEmpresa();
    selectPerfil();
    saveEmpresa();
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

function selectPerfil() {
    $('.cargar_imagen').click(function () {
        $('#empresa_logo').click();

        let pathImage = $('#__logo_empresa').attr('data-path');
        const imagenPrevisualizacion = document.getElementById("__logo_empresa");
        imagenPrevisualizacion.src = pathImage + 'sin_logo.png';
    });

    $('#empresa_logo').change(function () {
        const seleccionArchivos = document.getElementById("empresa_logo");
        const imagenPrevisualizacion = document.getElementById("__logo_empresa");

        const archivos = seleccionArchivos.files;

        if (!archivos || !archivos.length) {
            imagenPrevisualizacion.src = "";
            return;
        }
        const primerArchivo = archivos[0];
        const objectURL = URL.createObjectURL(primerArchivo);
        imagenPrevisualizacion.src = objectURL;
    });
}

function saveEmpresa() {
    $('#form_empresa').submit(function (e) {
        e.preventDefault();

        const form = document.getElementById('form_empresa');
        const formData = new FormData(form);

        const request = axios.post(base_url + 'Empresa/saveEmpresa', formData);
    });
}