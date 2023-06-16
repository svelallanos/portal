var dataAlcalde;

$(document).ready(function () {
    cargarAlcalde();
    selectPerfil();
    saveAlcalde();
    deleteAlcalde()
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

        let pathImage = $('#__img_perfilalcalde').attr('data-path');
        const imagenPrevisualizacion = document.getElementById("__img_perfilalcalde");
        imagenPrevisualizacion.src = pathImage + 'sin_foto.png';
    });

    $('#file_imagen_perfil').change(function () {
        const seleccionArchivos = document.getElementById("file_imagen_perfil");
        const imagenPrevisualizacion = document.getElementById("__img_perfilalcalde");

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

function saveAlcalde() {
    $('#form_alcalde').submit(function (e) {
        e.preventDefault();

        const form = document.getElementById('form_alcalde');
        const formData = new FormData(form);

        abrirLoadingModal();
        const request = axios.post(base_url + 'Alcalde/saveAlcalde', formData);

        request.then(res => {
            cerrarLoadingModal();
            if (res.data.status) {
                Swal.fire("CORRECTO", res.data.msg, res.data.value);

                setTimeout(function () {
                    location.reload();
                }, 2000);
            } else {
                Swal.fire("ALERTA", res.data.msg, res.data.value);
            }
        });

        request.catch(error => {
            Swal.fire("ALERTA", error, 'error');
        });
    });
}

function deleteAlcalde() {
    $(document).on('click', '.__delete_alcalde', function () {
        let alcalde_id = $(this).attr('data-alcalde_id');
        let alcalde_nombres = $(this).attr('data-alcalde_nombres');

        Swal.fire({
            title: 'ELIMINAR ALCALDE',
            text: `¿Esta seguro de eliminar al alcalde ${alcalde_nombres}?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {

                const formData = new FormData();
                formData.append('alcalde_id', alcalde_id);

                abrirLoadingModal();
                const request = axios.post(base_url + 'Alcalde/deleteAlcalde', formData);

                request.then(res => {
                    if (res.data.status) {
                        dataAlcalde.ajax.reload(() => cerrarLoadingModal());

                        Toast.fire({
                            icon: res.data.value,
                            title: res.data.msg
                        })
                    } else {
                        cerrarLoadingModal();
                        Toast.fire({
                            icon: res.data.value,
                            title: res.data.msg
                        })
                    }
                });
            }
        })

    })
}
