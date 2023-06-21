var dataAlcaldia;

$(document).ready(function () {
    cargarAlcaldia();
    openModal();
    publicarReAlcaldia();
    despublicarReAlcaldia();
    saveReAlcaldia();
    updateReAlcaldia();
    deleteReAlcaldia();
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

function openModal() {
    $(document).on('click', '.__edit_ralcaldia', function () {
        let ralcaldia_id = $(this).attr('data-ralcaldia_id');

        // Consultamos el id de la resolucion seleccionada
        const formData = new FormData();
        formData.append('ralcaldia_id', ralcaldia_id);

        abrirLoadingModal();
        const request = axios.post(base_url + 'Resoluciones/selectReAlcaldia', formData);

        request.then(res => {
            cerrarLoadingModal();
            $('#eform_ralcaldia').attr('data-ralcaldia_id', res.data.ralcaldia_id);

            $('#eanios_id').val(res.data.anios_id);
            $('#eralcaldia_nombre').val(res.data.ralcaldia_nombre);
            $('#eralcaldia_descripcion').val(res.data.ralcaldia_descripcion);
            $('#eralcaldia_fechapublicacion').val(res.data.ralcaldia_fechapublicacion);

            $('#emodel_ralcaldia').modal('show');
        });
    });

    $(document).on('click', '.__view_ralcaldia', function () {
        let ralcaldia_id = $(this).attr('data-ralcaldia_id');

        // Consultamos el id de la resolucion seleccionada
        const formData = new FormData();
        formData.append('ralcaldia_id', ralcaldia_id);

        abrirLoadingModal();
        const request = axios.post(base_url + 'Resoluciones/selectReAlcaldia', formData);

        request.then(res => {
            cerrarLoadingModal();

            let pathRA = $('#view_ralcaldia').attr('data-path');

            $('#vanios_id').val(res.data.anios_id);
            $('#vralcaldia_nombre').val(res.data.ralcaldia_nombre);
            $('#vralcaldia_descripcion').val(res.data.ralcaldia_descripcion);
            $('#vralcaldia_fechapublicacion').val(res.data.ralcaldia_fechapublicacion);

            $('#file_ralcaldia').attr('href', pathRA + res.data.ralcaldia_archivo);

            $('#vmodel_ralcaldia').modal('show');
        });
    });
}

function publicarReAlcaldia() {
    $(document).on('click', '.__publicar_ralcaldia', function () {
        let ralcaldia_id = $(this).attr('data-ralcaldia_id');

        changeEstado(ralcaldia_id, 1);
    });
}

function despublicarReAlcaldia() {
    $(document).on('click', '.__despublicar_ralcaldia', function () {
        let ralcaldia_id = $(this).attr('data-ralcaldia_id');

        changeEstado(ralcaldia_id, 2);
    });
}

function changeEstado(id, status = 2) {

    const formData = new FormData();
    formData.append('ralcaldia_id', id);
    formData.append('ralcaldia_estado', status);

    abrirLoadingModal();

    const request = axios.post(base_url + 'Resoluciones/changeEstado', formData);

    request.then(res => {
        if (res.data.status) {
            dataAlcaldia.ajax.reload(() => cerrarLoadingModal());

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

function saveReAlcaldia() {
    $('#form_ralcaldia').submit(function (e) {
        e.preventDefault();

        const form = document.getElementById('form_ralcaldia');
        const formData = new FormData(form);

        abrirLoadingModal();
        const request = axios.post(base_url + 'Resoluciones/saveReAlcaldia', formData);

        request.then(res => {
            if (res.data.status) {
                dataAlcaldia.ajax.reload(() => cerrarLoadingModal());

                Toast.fire({
                    icon: res.data.value,
                    title: res.data.msg
                })
                $('#model_ralcaldia').modal('hide');
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

function updateReAlcaldia() {
    $('#eform_ralcaldia').submit(function (e) {
        e.preventDefault();

        let eralcaldia_id = $(this).attr('data-ralcaldia_id');
        const form = document.getElementById('eform_ralcaldia');
        const formData = new FormData(form);

        formData.append('eralcaldia_id', eralcaldia_id);

        const request = axios.post(base_url + 'Resoluciones/updateReAlcaldia', formData);

        request.then(res => {
            if (res.data.status) {
                dataAlcaldia.ajax.reload(() => cerrarLoadingModal());

                Toast.fire({
                    icon: res.data.value,
                    title: res.data.msg
                })
                $('#emodel_ralcaldia').modal('hide');
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

function deleteReAlcaldia() {
    $(document).on('click', '.__delete_ralcaldia', function () {
        let ralcaldia_id = $(this).attr('data-ralcaldia_id');
        let ralcaldia_nombre = $(this).attr('data-ralcaldia_nombre');

        Swal.fire({
            title: 'ELIMINAR RESOLUCIÓN DE ALCALDÍA',
            html: '¿Esta seguro de eliminar la resolución: <b>' + ralcaldia_nombre + '</b> de alcaldía.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {

                const formData = new FormData();
                formData.append('ralcaldia_id', ralcaldia_id);

                abrirLoadingModal();
                const request = axios.post(base_url + 'Resoluciones/deleteReAlcaldia', formData);

                request.then(res => {
                    if (res.data.status) {
                        dataAlcaldia.ajax.reload(() => cerrarLoadingModal());

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