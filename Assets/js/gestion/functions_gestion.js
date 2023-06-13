var dataGestion;
var anioInicio = 0;
var anioFinal = 0;

$(document).ready(function () {
    cargarGestion();
    actionChange();
    saveGestion();
    deleteGestion();
    updateGestion();
    openModal();
});

function cargarGestion() {
    dataGestion = $('#tb_gestion').DataTable({
        aProcessing: true,
        aServerSide: true,
        language: languajeDefault,
        ajax: {
            url: base_url + "Gestion/selectsGestion",
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

// Acciones change
function actionChange() {
    $('#gestion_inicio').change(function () {
        anioInicio = $(this).val().split('-')[0];

        $('#gestion_nombre').val('Gestión ' + anioInicio + ' - ' + anioFinal);
    });

    $('#gestion_fin').change(function () {
        anioFinal = $(this).val().split('-')[0];

        $('#gestion_nombre').val('Gestión ' + anioInicio + ' - ' + anioFinal);
    });
}

// Acciones openModal
function openModal() {
    $(document).on('click', '.__editar_gestion', function () {
        let gestion_id = $(this).attr('data-gestion_id');
        let gestion_nombre = $(this).attr('data-gestion_nombre');
        let gestion_descripcion = $(this).attr('data-gestion_descripcion');
        let gestion_fecha_inicio = $(this).attr('data-gestion_fecha_inicio');
        let gestion_fecha_final = $(this).attr('data-gestion_fecha_final');

        $('#gestion_nombre_editar').val(gestion_nombre);
        $('#gestion_descripcion_editar').val(gestion_descripcion);
        $('#gestion_inicio_editar').val(gestion_fecha_inicio);
        $('#gestion_fin_editar').val(gestion_fecha_final);

        $('#form_gestion_editar').attr('data-gestion_id', gestion_id);

        $('#modal_gestion_editar').modal('show');
    });
}

function saveGestion() {
    $('#form_gestion').submit(function (e) {
        e.preventDefault();

        const form = document.getElementById('form_gestion');
        const formData = new FormData(form);

        abrirLoadingModal();

        const request = axios.post(base_url + 'Gestion/saveGestion', formData);

        request.then(res => {

            if (res.data.status) {

                dataGestion.ajax.reload(() => cerrarLoadingModal());
                $('#modal_gestion').modal('hide');
                Swal.fire("CORRECTO", res.data.msg, res.data.value);
            } else {
                cerrarLoadingModal();
                Swal.fire("ALERTA", res.data.msg, res.data.value);
            }
        });
    });
}

function deleteGestion() {
    $(document).on('click', '.__delete_gestion', function () {
        let gestion_id = $(this).attr('data-gestion_id');
        let gestion_nombre = $(this).attr('data-gestion_nombre');

        Swal.fire({
            title: 'ELIMINAR GESTIÓN',
            text: `¿Esta seguro de eliminar la ${gestion_nombre}?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {

                const formData = new FormData();
                formData.append('gestion_id', gestion_id);

                abrirLoadingModal();
                const request = axios.post(base_url + 'Gestion/deleteGestion', formData);

                request.then(res => {
                    if (res.data.status) {
                        dataGestion.ajax.reload(() => cerrarLoadingModal());

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
    });
}

function updateGestion() {
    $('#form_gestion_editar').submit(function (e) {
        e.preventDefault();

        let gestion_id = $(this).attr('data-gestion_id');

        const form = document.getElementById('form_gestion_editar');
        const formData = new FormData(form);

        formData.append('gestion_id', gestion_id);

        const request = axios.post(base_url + 'Gestion/updateGestion', formData);

        request.then(res => {
            if (res.data.status) {
                dataGestion.ajax.reload(() => cerrarLoadingModal());
                $('#modal_gestion_editar').modal('hide');
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
    });
}