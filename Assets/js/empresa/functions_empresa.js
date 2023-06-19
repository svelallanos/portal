var dataEmpresa;

$(document).ready(function () {
    cargarEmpresa();
    selectPerfil();
    saveEmpresa();
    deleteEmpresa();
    openModal();
    updateEmpresa();
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

function openModal() {
    $(document).on('click', '.__edit_empresa', function () {
        let empresa_id = $(this).attr('data-empresa_id');
        let empresa_nombre = $(this).attr('data-empresa_nombre');
        let empresa_descripcion = $(this).attr('data-empresa_descripcion');
        let empresa_ruc = $(this).attr('data-empresa_ruc');
        let email_id = $(this).attr('data-email_id');
        let empresa_logo = $(this).attr('data-empresa_logo');
        let empresa_mision = $(this).attr('data-empresa_mision');
        let empresa_vision = $(this).attr('data-empresa_vision');
        let empresa_historia = $(this).attr('data-empresa_historia');
        let empresa_poblacion = $(this).attr('data-empresa_poblacion');
        let dataPath = $('#vlogo_empresa').attr('data-path');


        $('#elogo_empresa').attr('src', dataPath + empresa_logo);

        $('#eempresa_nombre').val(empresa_nombre);
        $('#eempresa_descripcion').val(empresa_descripcion);
        $('#eempresa_ruc').val(empresa_ruc);
        $('#eempresa_email').val(email_id);
        $('#eempresa_mision').val(empresa_mision);
        $('#eempresa_vision').val(empresa_vision);
        $('#eempresa_historia').val(empresa_historia);
        $('#eempresa_poblacion').val(empresa_poblacion);
        $('#eform_empresa').attr('data-empresa_id', empresa_id);

        $('#emodal_empresa').modal('show');
    });

    $(document).on('click', '.__view_empresa', function () {
        let empresa_nombre = $(this).attr('data-empresa_nombre');
        let empresa_descripcion = $(this).attr('data-empresa_descripcion');
        let empresa_ruc = $(this).attr('data-empresa_ruc');
        let email_id = $(this).attr('data-email_id');
        let dataPath = $('#vlogo_empresa').attr('data-path');
        let empresa_logo = $(this).attr('data-empresa_logo');
        let empresa_mision = $(this).attr('data-empresa_mision');
        let empresa_vision = $(this).attr('data-empresa_vision');
        let empresa_historia = $(this).attr('data-empresa_historia');
        let empresa_poblacion = $(this).attr('data-empresa_poblacion');

        $('#vempresa_nombre').val(empresa_nombre);
        $('#vempresa_descripcion').val(empresa_descripcion);
        $('#vempresa_ruc').val(empresa_ruc);
        $('#vempresa_email').val(email_id);
        $('#vlogo_empresa').attr('src', dataPath + empresa_logo);
        $('#vempresa_mision').val(empresa_mision);
        $('#vempresa_vision').val(empresa_vision);
        $('#vempresa_historia').val(empresa_historia);
        $('#vempresa_poblacion').val(empresa_poblacion);

        $('#vmodal_empresa').modal('show');
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

    $('.ecargar_imagen').click(function () {
        $('#eempresa_logo').click();

        let pathImage = $('#elogo_empresa').attr('data-path');
        const imagenPrevisualizacion = document.getElementById("elogo_empresa");
        imagenPrevisualizacion.src = pathImage + 'sin_logo.png';
    });

    $('#eempresa_logo').change(function () {
        const seleccionArchivos = document.getElementById("eempresa_logo");
        const imagenPrevisualizacion = document.getElementById("elogo_empresa");

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

function updateEmpresa() {
    $('#eform_empresa').submit(function (e) {
        e.preventDefault();

        let empresa_id = $(this).attr('data-empresa_id');
        const form = document.getElementById('eform_empresa');
        const formData = new FormData(form);

        formData.append('eempresa_id', empresa_id);

        abrirLoadingModal();
        
        const request = axios.post(base_url + 'Empresa/updateEmpresa', formData);

        request.then(res => {
            if (res.data.status) {
                dataEmpresa.ajax.reload(() => cerrarLoadingModal());
                Toast.fire({
                    icon: res.data.value,
                    title: res.data.msg
                });

                $('#emodal_empresa').modal('hide');
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
            html: "¿Esta seguro de eliminar la empresa : <b>" + empresa_nombre + '</b>',
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