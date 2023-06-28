var dataConsejo;

$(document).ready(function () {
    cargarConsejo();
    openModal();
    publicarReConsejo();
    despublicarReConsejo();
    saveReConsejo();
    updateReConsejo();
    deleteReConsejo();
});

function cargarConsejo() {
    dataConsejo = $('#tb_consejo').DataTable({
        aProcessing: true,
        aServerSide: true,
        language: languajeDefault,
        ajax: {
            url: base_url + "Resoluciones/selectsReConsejo",
            dataSrc: "",
        },
        columns: [
            { data: "numero" },
            { data: "rconsejo_nombre" },
            { data: "rconsejo_descripcion" },
            { data: "anio" },
            { data: "rconsejo_fechapublicacion" },
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
    $(document).on('click', '.__edit_rconsejo', function () {
        let rconsejo_id = $(this).attr('data-rconsejo_id');

        // Consultamos el id de la resolucion seleccionada
        const formData = new FormData();
        formData.append('rconsejo_id', rconsejo_id);

        abrirLoadingModal();
        const request = axios.post(base_url + 'Resoluciones/selectReConsejo', formData);

        request.then(res => {
            cerrarLoadingModal();
            $('#eform_rconsejo').attr('data-rconsejo_id', res.data.rconsejo_id);

            $('#eanios_id').val(res.data.anios_id);
            $('#erconsejo_nombre').val(res.data.rconsejo_nombre);
            $('#erconsejo_descripcion').val(res.data.rconsejo_descripcion);
            $('#erconsejo_fechapublicacion').val(res.data.rconsejo_fechapublicacion);

            $('#emodel_rconsejo').modal('show');
        });
    });

    $(document).on('click', '.__view_rconsejo', function () {
        let rconsejo_id = $(this).attr('data-rconsejo_id');

        // Consultamos el id de la resolucion seleccionada
        const formData = new FormData();
        formData.append('rconsejo_id', rconsejo_id);

        abrirLoadingModal();
        const request = axios.post(base_url + 'Resoluciones/selectReConsejo', formData);

        request.then(res => {
            cerrarLoadingModal();

            let pathRA = $('#view_rconsejo').attr('data-path');

            $('#vanios_id').val(res.data.anios_id);
            $('#vrconsejo_nombre').val(res.data.rconsejo_nombre);
            $('#vrconsejo_descripcion').val(res.data.rconsejo_descripcion);
            $('#vrconsejo_fechapublicacion').val(res.data.rconsejo_fechapublicacion);
            $('#file_rconsejo').attr('href', pathRA + res.data.rconsejo_archivo);

            $('#vmodel_rconsejo').modal('show');
        });
    });
}

function publicarReConsejo() {
    $(document).on('click', '.__publicar_rconsejo', function () {
        let rconsejo_id = $(this).attr('data-rconsejo_id');

        changeEstado(rconsejo_id, 1);
    });
}

function despublicarReConsejo() {
    $(document).on('click', '.__despublicar_rconsejo', function () {
        let rconsejo_id = $(this).attr('data-rconsejo_id');

        changeEstado(rconsejo_id, 2);
    });
}

function changeEstado(id, status = 2) {

    const formData = new FormData();
    formData.append('rconsejo_id', id);
    formData.append('rconsejo_estado', status);

    abrirLoadingModal();

    const request = axios.post(base_url + 'Resoluciones/changeEstadoConsejo', formData);

    request.then(res => {
        if (res.data.status) {
            dataConsejo.ajax.reload(() => cerrarLoadingModal());

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

function saveReConsejo() {
    $('#form_rconsejo').submit(function (e) {
        e.preventDefault();

        const form = document.getElementById('form_rconsejo');
        const formData = new FormData(form);

        abrirLoadingModal();
        const request = axios.post(base_url + 'Resoluciones/saveReConsejo', formData);

        request.then(res => {
            if (res.data.status) {
                dataConsejo.ajax.reload(() => cerrarLoadingModal());

                Toast.fire({
                    icon: res.data.value,
                    title: res.data.msg
                })

                $('#model_rconsejo').modal('hide');
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

function updateReConsejo() {
    $('#eform_rconsejo').submit(function (e) {
        e.preventDefault();

        let erconsejo_id = $(this).attr('data-rconsejo_id');
        const form = document.getElementById('eform_rconsejo');
        const formData = new FormData(form);

        formData.append('erconsejo_id', erconsejo_id);

        const request = axios.post(base_url + 'Resoluciones/updateReConsejo', formData);

        request.then(res => {
            if (res.data.status) {
                dataConsejo.ajax.reload(() => cerrarLoadingModal());

                Toast.fire({
                    icon: res.data.value,
                    title: res.data.msg
                })
                $('#emodel_rconsejo').modal('hide');
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

function deleteReConsejo() {
    $(document).on('click', '.__delete_rconsejo', function () {
        let rconsejo_id = $(this).attr('data-rconsejo_id');
        let rconsejo_nombre = $(this).attr('data-rconsejo_nombre');

        Swal.fire({
            title: 'ELIMINAR RESOLUCIÓN DE CONSEJO',
            html: '¿Esta seguro de eliminar la resolución: <b>' + rconsejo_nombre + '</b> de consejo.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {

                const formData = new FormData();
                formData.append('rconsejo_id', rconsejo_id);

                abrirLoadingModal();
                const request = axios.post(base_url + 'Resoluciones/deleteReConsejo', formData);

                request.then(res => {
                    if (res.data.status) {
                        dataConsejo.ajax.reload(() => cerrarLoadingModal());

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