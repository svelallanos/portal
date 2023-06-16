var dataEmpresa;

$(document).ready(function () {
    cargarEmpresa();
    selectPerfil();
    saveEmpresa();
    deleteEmpresa();
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

        abrirLoadingModal();
        const request = axios.post(base_url + 'Empresa/saveEmpresa', formData);

        request.then(res => {
            cerrarLoadingModal();
            if (res.data.status) {
                Toast.fire({
                    icon: res.data.value,
                    title: res.data.msg
                });

                setTimeout(function () {
                    location.reload();
                }, 3000);
            } else {
                Toast.fire({
                    icon: res.data.value,
                    title: res.data.msg
                })
            }
        });

        request.catch(error => {
            Toast.fire({
                icon: res.data.value,
                title: error
            })
        });
    });
}

function deleteEmpresa() {
    $(document).on('click', '.__delete_empresa', function () {
        let empresa_id = $(this).attr('data-empresa_id');
        let empresa_nombre = $(this).attr('data-empresa_nombre');

        const formData = new FormData();

        formData.append('empresa_id', empresa_id);

        Swal.fire({
            title: 'ELIMINAR EMPRESA',
            html: "¿Esta seguro de eliminar la empresa : <b>" + empresa_nombre+'</b>',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                abrirLoadingModal();
                const request = axios.post(base_url + 'Empresa/deleteEmpresa', formData);
                request.then(res => {
                    if (res.data.status) {
                        dataEmpresa.ajax.reload(() => cerrarLoadingModal());
                        Toast.fire({
                            icon: res.data.value,
                            title: res.data.msg
                        });

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
                        icon: res.data.value,
                        title: error
                    })
                });
            }
        })
    });
}