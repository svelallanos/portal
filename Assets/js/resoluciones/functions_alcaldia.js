var dataAlcaldia;

$(document).ready(function () {
    cargarAlcaldia();
    publicarReAlcaldia();
    despublicarReAlcaldia();
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