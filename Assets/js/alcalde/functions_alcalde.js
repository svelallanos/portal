var dataAlcalde;

$(document).ready(function () {
    cargarAlcalde();
    openModal();
    selectPerfil();
    saveAlcalde();
    deleteAlcalde();
    openModalAlcalde()
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

function openModal(){
    $(document).on('click','.__edit_alcalde',function(){
        let alcalde_id = $(this).attr('data-alcalde_id');
        let alcalde_nombres = $(this).attr('data-alcalde_nombres');
        let alcalde_apellidopaterno = $(this).attr('data-alcalde_apellidopaterno');
        let alcalde_apellidomaterno = $(this).attr('data-alcalde_apellidomaterno');
        let alcalde_dni = $(this).attr('data-alcalde_dni');
        let alcalde_ruc = $(this).attr('data-alcalde_ruc');
        let alcalde_email = $(this).attr('data-alcalde_email');
        let alcalde_celular = $(this).attr('data-alcalde_celular');
        let gestion_id = $(this).attr('data-gestion_id');
        let alcalde_resumen = $(this).attr('data-alcalde_resumen');
        let alcalde_saludo = $(this).attr('data-alcalde_saludo');

        $('#alcalde_id_editar').val(alcalde_id);
        $('#alcalde_nombres_editar').val(alcalde_nombres);
        $('#alcalde_paterno_editar').val(alcalde_apellidopaterno);
        $('#alcalde_materno_editar').val(alcalde_apellidomaterno);
        $('#alcalde_dni_editar').val(alcalde_dni);
        $('#alcalde_ruc_editar').val(alcalde_ruc);
        $('#alcalde_email_editar').val(alcalde_email);
        $('#alcalde_celular_editar').val(alcalde_celular);
        $('#gestion_id_editar').val(gestion_id);
        $('#alcalde_resumen_editar').val(alcalde_resumen);
        $('#alcalde_saludo_editar').val(alcalde_saludo);


        $('#form_alcalde_editar').attr('data-alcalde_id', alcalde_id);

        $('#emodal_alcalde').modal('show');
    });

    $(document).on('click','.__view_alcalde',function(){
        let alcalde_id = $(this).attr('data-alcalde_id');
        let alcalde_nombres = $(this).attr('data-alcalde_nombres');
        let alcalde_apellidopaterno = $(this).attr('data-alcalde_apellidopaterno');
        let alcalde_apellidomaterno = $(this).attr('data-alcalde_apellidomaterno');
        let alcalde_dni = $(this).attr('data-alcalde_dni');
        let alcalde_ruc = $(this).attr('data-alcalde_ruc');
        let alcalde_email = $(this).attr('data-alcalde_email');
        let alcalde_celular = $(this).attr('data-alcalde_celular');
        let gestion_id = $(this).attr('data-gestion_id');
        let alcalde_resumen = $(this).attr('data-alcalde_resumen');
        let alcalde_saludo = $(this).attr('data-alcalde_saludo');

        $('#form_alcalde_vista').attr('data-alcalde_id', alcalde_id);

        $('#alcalde_id_vista').val(alcalde_id);
        $('#alcalde_nombres_vista').val(alcalde_nombres);
        $('#alcalde_paterno_vista').val(alcalde_apellidopaterno);
        $('#alcalde_materno_vista').val(alcalde_apellidomaterno);
        $('#alcalde_dni_vista').val(alcalde_dni);
        $('#alcalde_ruc_vista').val(alcalde_ruc);
        $('#alcalde_email_vista').val(alcalde_email);
        $('#alcalde_celular_vista').val(alcalde_celular);
        $('#gestion_id_vista').val(gestion_id);
        $('#alcalde_resumen_vista').val(alcalde_resumen);
        $('#alcalde_saludo_vista').val(alcalde_saludo);

        $('#viewmodal_alcalde').modal('show');
    })
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
        let alcalde_dni = $(this).attr('data-alcalde_id');
        let  = $(this).attr('data-');

        Swal.fire({
            title: 'ELIMINAR ALCALDE',
            html: '¿Esta seguro de eliminar al alcalde: <b>' + alcalde_nombres + '</b>',
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

function updateAlcalde() {
    $('#form_alcalde_editar').submit(function (e) {
        e.preventDefault();

        let alcalde_id = $(this).attr('data-alcalde_id');

        const form = document.getElementById('form_alcalde_editar');
        const formData = new FormData(form);

        formData.append('alcalde_id', alcalde_id);

        const request = axios.post(base_url + 'Acalde/updateAlcalde', formData);

        request.then(res => {
            if (res.data.status) {
                dataAlcalde.ajax.reload(() => cerrarLoadingModal());
                $('#modal_alcalde_editar').modal('hide');
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

