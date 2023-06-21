var dataOrdenanzas;



$(document).ready(function () {
    cargarOrdenanzas();
    deleteOrdenanza();
    publicarOrdenanzas();
    despublicarOrdenanzas();
    // openModal();
});
function saveOrdenanzas() {
    $('#form_rordenanzas').submit(function (e) {
        e.preventDefault();

        const form = document.getElementById('form_rordenanzas');
        const formData = new FormData(form);

        abrirLoadingModal();
        const request = axios.post(base_url + 'Ordenanzas/saveOrdenanzas', formData);

        request.then(res => {
           
            if (res.data.status) {
              dataAlcaldia.ajax.reload(()=>cerrarLoadingModal());

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


function cargarOrdenanzas() {
    dataOrdenanzas = $('#tb_ordenanza').DataTable({
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
            { data: "options" }
        ],
        resonsieve: "true",
        bDestroy: true,
        iDisplayLength: 12,
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
// function openModal() {
//     $(document).on('click', '.emodel_ordenanzas', function () {
//         let gestion_id = $(this).attr('data-gestion_id');
//         let anio = $(this).attr('data-anio_id');
//         let ordenanza_nombre = $(this).attr('data-ordenanza_nombre');
//         let ordenanza_descripcion = $(this).attr('data-ordenanza_descripcion');
//         let ordenanza_fechapublicacion = $(this).attr('data-ordenanza_fechapublicacion');
//         let ordenanza_archivo = $(this).attr('data-ordenanza_archivo');

//         $('#eordenanza_nombre').val(ordenanza_nombre);
//         $('#gestion_descripcion_editar').val(gestion_descripcion);
//         $('#gestion_inicio_editar').val(gestion_fecha_inicio);
//         $('#gestion_fin_editar').val(gestion_fecha_final);

//         $('#form_ordenanza').attr('data-gestion_id', gestion_id);

//         $('#modal_gestion_editar').modal('show');
//     });
// }
function deleteOrdenanza() {
    $(document).on('click', '.__delete_ordenanza', function () {
        let ordenanza_id = $(this).attr('data-ordenanza_id');
        let ordenanza_nombre = $(this).attr('data-ordenanza_nombre');

        Swal.fire({
            title: 'ELIMINAR ORDENANZA',
            text: `¿Esta seguro de eliminar la ${ordenanza_nombre}?`,
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
                        dataOrdenanzas.ajax.reload(() => cerrarLoadingModal());

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
        });
    });
}

function publicarOrdenanzas() {
    $(document).on('click', '.__publicar_ordenanza', function () {
        let ordenanza_id = $(this).attr('data-ordenanza_id');

        changeEstado(ordenanza_id, 1);
    });
}

function despublicarOrdenanzas() {
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
            dataOrdenanzas.ajax.reload(() => cerrarLoadingModal());
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