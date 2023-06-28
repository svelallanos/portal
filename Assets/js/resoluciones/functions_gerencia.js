var dataGerencia;

$(document).ready(function () {
    cargarGerencia();
    openModal();
    publicarReGerencia();
    despublicarReGerencia();
    saveReGerencia();
    updateReGerencia();
    deleteReGerencia();
});

function cargarGerencia() {
    dataGerencia = $('#tb_gerencia').DataTable({
        aProcessing: true,
        aServerSide: true,
        language: languajeDefault,
        ajax: {
            url: base_url + "Resoluciones/selectsReGerencia",
            dataSrc: "",
        },
        columns: [
            { data: "numero" },
            { data: "rgerencia_nombre" },
            { data: "rgerencia_descripcion" },
            { data: "anio" },
            { data: "rgerencia_fechapublicacion" },
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
                class: "col-3",
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

function openModal() {
    $(document).on('click', '.__edit_rgerencia', function () {
        let rgerencia_id = $(this).attr('data-rgerencia_id');

        // Consultamos el id de la resolucion seleccionada
        const formData = new FormData();
        formData.append('rgerencia_id', rgerencia_id);

        abrirLoadingModal();
        const request = axios.post(base_url + 'Resoluciones/selectReGerencia', formData);

        request.then(res => {
            cerrarLoadingModal();
            $('#eform_rgerencia').attr('data-rgerencia_id', res.data.rgerencia_id);

            $('#eanios_id').val(res.data.anios_id);
            $('#ergerencia_nombre').val(res.data.rgerencia_nombre);
            $('#ergerencia_descripcion').val(res.data.rgerencia_descripcion);
            $('#ergerencia_fechapublicacion').val(res.data.rgerencia_fechapublicacion);
            $('#ergerencia_archivo').val(null);

            $('#emodel_rgerencia').modal('show');
        });
    });

    $(document).on('click', '.__view_rgerencia', function () {
        let rgerencia_id = $(this).attr('data-rgerencia_id');

        // Consultamos el id de la resolucion seleccionada
        const formData = new FormData();
        formData.append('rgerencia_id', rgerencia_id);

        abrirLoadingModal();
        const request = axios.post(base_url + 'Resoluciones/selectReGerencia', formData);

        request.then(res => {
            cerrarLoadingModal();

            let pathRA = $('#view_rgerencia').attr('data-path');

            $('#vanios_id').val(res.data.anios_id);
            $('#vrgerencia_nombre').val(res.data.rgerencia_nombre);
            $('#vrgerencia_descripcion').val(res.data.rgerencia_descripcion);
            $('#vrgerencia_fechapublicacion').val(res.data.rgerencia_fechapublicacion);
            $('#file_rgerencia').attr('href', pathRA + res.data.rgerencia_archivo);

            $('#vmodel_rgerencia').modal('show');
        });
    });
}

function publicarReGerencia() {
    $(document).on('click', '.__publicar_rgerencia', function () {
        let rgerencia_id = $(this).attr('data-rgerencia_id');

        changeEstado(rgerencia_id, 1);
    });
}

function despublicarReGerencia() {
    $(document).on('click', '.__despublicar_rgerencia', function () {
        let rgerencia_id = $(this).attr('data-rgerencia_id');

        changeEstado(rgerencia_id, 2);
    });
}

function changeEstado(id, status = 2) {

    const formData = new FormData();
    formData.append('rgerencia_id', id);
    formData.append('rgerencia_estado', status);

    abrirLoadingModal();

    const request = axios.post(base_url + 'Resoluciones/changeEstadoGerencia', formData);

    request.then(res => {
        if (res.data.status) {
            dataGerencia.ajax.reload(() => cerrarLoadingModal());

            Toast.fire({
                icon: res.data.value,
                title: res.data.msg
            })
        } else {
            cerrarLoadingModal();
        }
    });

    request.catch(error => {
        Toast.fire({
            icon: 'error',
            title: error
        })
    });
}

function saveReGerencia() {
    $('#form_rgerencia').submit(function (e) {
        e.preventDefault();

        const form = document.getElementById('form_rgerencia');
        const formData = new FormData(form);

        abrirLoadingModal();
        const request = axios.post(base_url + 'Resoluciones/saveReGerencia', formData);

        request.then(res => {
            if (res.data.status) {
                dataGerencia.ajax.reload(() => cerrarLoadingModal());

                Toast.fire({
                    icon: res.data.value,
                    title: res.data.msg
                })

                $('#model_rgerencia').modal('hide');
            } else {
                cerrarLoadingModal();
                Toast.fire({
                    icon: res.data.value,
                    title: res.data.msg
                })
            }
        });

        request.catch(error => {
            Toast.fire({
                icon: 'error',
                title: error
            })
        });
    });
}

function updateReGerencia() {
    $('#eform_rgerencia').submit(function (e) {
        e.preventDefault();

        let ergerencia_id = $(this).attr('data-rgerencia_id');
        const form = document.getElementById('eform_rgerencia');
        const formData = new FormData(form);

        formData.append('ergerencia_id', ergerencia_id);

        abrirLoadingModal();
        const request = axios.post(base_url + 'Resoluciones/updateReGerencia', formData);

        request.then(res => {
            if (res.data.status) {
                dataGerencia.ajax.reload(() => cerrarLoadingModal());

                Toast.fire({
                    icon: res.data.value,
                    title: res.data.msg
                })
                $('#emodel_rgerencia').modal('hide');
            } else {
                cerrarLoadingModal();
                Toast.fire({
                    icon: res.data.value,
                    title: res.data.msg
                })
            }
        });

        request.catch(error => {
            Toast.fire({
                icon: 'error',
                title: error
            })
        });
    });
}

function deleteReGerencia() {
    $(document).on('click', '.__delete_rgerencia', function () {
        let rgerencia_id = $(this).attr('data-rgerencia_id');
        let rgerencia_nombre = $(this).attr('data-rgerencia_nombre');

        Swal.fire({
            title: 'ELIMINAR RESOLUCIÓN DE GERENCIA',
            html: '¿Esta seguro de eliminar la resolución: <b>' + rgerencia_nombre + '</b> de gerencia.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {

                const formData = new FormData();
                formData.append('rgerencia_id', rgerencia_id);

                abrirLoadingModal();
                const request = axios.post(base_url + 'Resoluciones/deleteReGerencia', formData);

                request.then(res => {
                    if (res.data.status) {
                        dataGerencia.ajax.reload(() => cerrarLoadingModal());

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

                request.catch(error => {
                    Toast.fire({
                        icon: 'error',
                        title: error
                    })
                });
            }
        })
    });
}