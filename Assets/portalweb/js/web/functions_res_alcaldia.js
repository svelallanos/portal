var dataResAlcaldia;

$(document).ready(function () {
    cargarTable();
});

function cargarTable() {
    dataResAlcaldia = $("#tb_res_alcaldia").DataTable({
        language: languajeDefault
    });
}