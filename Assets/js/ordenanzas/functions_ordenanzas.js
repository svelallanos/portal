var dataOrdenanza;

$(document).ready(function () {
    cargarOrdenanza();
    openModal();
    publicarOrdenanza();
    despublicarOrdenanza();
    saveOrdenanza();
    updateOrdenanza();
    deleteOrdenanza();
});

function cargarOrdenanza() {
    dataOrdenanza = $('#tb_ordenanza').DataTable({
        aProcessing: true,
        aServerSide: true,
        language: languajeDefault,
        ajax: {
            url: base_url + "Ordenanzas/selectsOrdenanzas",
            dataSrc: "",
        },
        columns: [
            { data: "numero" },
            { data: "ordenanza_nombre" },
            { data: "ordenanza_descripcion" },
            { data: "anio" },
            { data: "ordenanza_fechapublicacion" },
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
    $(document).on('click', '.__edit_ordenanza', function () {
        let ordenanza_id = $(this).attr('data-ordenanza_id');

        // Consultamos el id de la resolucion seleccionada
        const formData = new FormData();
        formData.append('ordenanza_id', ordenanza_id);

        abrirLoadingModal();
        const request = axios.post(base_url + 'Ordenanzas/selectOrdenanza', formData);

        request.then(res => {
            cerrarLoadingModal();
            $('#eform_ordenanza').attr('data-ordenanza_id', res.data.ordenanza_id);

            $('#eanios_id').val(res.data.anios_id);
            $('#eordenanza_nombre').val(res.data.ordenanza_nombre);
            $('#eordenanza_descripcion').val(res.data.ordenanza_descripcion);
            $('#eordenanza_fechapublicacion').val(res.data.ordenanza_fechapublicacion);
            $('#eordenanza_archivo').val(null);
            
            $('#emodel_ordenanza').modal('show');
        });
    });

    $(document).on('click', '.__view_ordenanza', function () {
        let ordenanza_id = $(this).attr('data-ordenanza_id');

        // Consultamos el id de la resolucion seleccionada
        const formData = new FormData();
        formData.append('ordenanza_id', ordenanza_id);

        abrirLoadingModal();
        const request = axios.post(base_url + 'Ordenanzas/selectOrdenanza', formData);

        request.then(res => {
            cerrarLoadingModal();

            let pathRA = $('#view_ordenanza').attr('data-path');

            $('#vanios_id').val(res.data.anios_id);
            $('#vordenanza_nombre').val(res.data.ordenanza_nombre);
            $('#vordenanza_descripcion').val(res.data.ordenanza_descripcion);
            $('#vordenanza_fechapublicacion').val(res.data.ordenanza_fechapublicacion);

            $('#file_ordenanza').attr('href', pathRA + res.data.ordenanza_archivo);

            $('#vmodel_ordenanza').modal('show');
        });
    });
}

function publicarOrdenanza() {
    $(document).on('click', '.__publicar_ordenanza', function () {
        let ordenanza_id = $(this).attr('data-ordenanza_id');

        changeEstado(ordenanza_id, 1);
    });
}

function despublicarOrdenanza() {
    $(document).on('click', '.__despublicar_ordenanza', function () {
        let ordenanza_id = $(this).attr('data-ordenanza_id');

        changeEstado(ordenanza_id, 2);
    });
}

function changeEstado(id, status = 2) {

    const formData = new FormData();
    formData.append('ordenanza_id', id);
    formData.append('ordenanza_estado', status);

    abrirLoadingModal();

    const request = axios.post(base_url + 'Ordenanzas/changeEstado', formData);

    request.then(res => {
        if (res.data.status) {
            dataOrdenanza.ajax.reload(() => cerrarLoadingModal());

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

function saveOrdenanza() {
    $('#form_ordenanza').submit(function (e) {
        e.preventDefault();

        const form = document.getElementById('form_ordenanza');
        const formData = new FormData(form);

        abrirLoadingModal();
        const request = axios.post(base_url + 'Ordenanzas/saveOrdenanza', formData);

        request.then(res => {
            if (res.data.status) {
                dataOrdenanza.ajax.reload(() => cerrarLoadingModal());

                Toast.fire({
                    icon: res.data.value,
                    title: res.data.msg
                })
                $('#model_ordenanza').modal('hide');
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

function updateOrdenanza() {
    $('#eform_ordenanza').submit(function (e) {
        e.preventDefault();

        let eordenanza_id = $(this).attr('data-ordenanza_id');
        const form = document.getElementById('eform_ordenanza');
        const formData = new FormData(form);

        formData.append('eordenanza_id', eordenanza_id);

        abrirLoadingModal();
        const request = axios.post(base_url + 'Ordenanzas/updateOrdenanza', formData);

        request.then(res => {
            if (res.data.status) {
                dataOrdenanza.ajax.reload(() => cerrarLoadingModal());
                Toast.fire({
                    icon: res.data.value,
                    title: res.data.msg
                })
                $('#emodel_ordenanza').modal('hide');
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

function deleteOrdenanza() {
    $(document).on('click', '.__delete_ordenanza', function () {
        let ordenanza_id = $(this).attr('data-ordenanza_id');
        let ordenanza_nombre = $(this).attr('data-ordenanza_nombre');

        Swal.fire({
            title: 'ELIMINAR ORDENANZA MUNICIPAL',
            html: '¿Esta seguro de eliminar la ordenanza municipal: <b>' + ordenanza_nombre + '</b>.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {

                const formData = new FormData();
                formData.append('ordenanza_id', ordenanza_id);

                abrirLoadingModal();
                const request = axios.post(base_url + 'Ordenanzas/deleteOrdenanza', formData);

                request.then(res => {
                    if (res.data.status) {
                        dataOrdenanza.ajax.reload(() => cerrarLoadingModal());

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