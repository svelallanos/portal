window.addEventListener("scroll", () => {
    var header = document.querySelector('header .container-navb');

    header.classList.toggle("active-scroll", window.scrollY > 0);
});

$(document).ready(() => {

    openModal();

    window.addEventListener('resize', checkWindowSize);
});

function openModal() {
    $(document).on('click', '.open-toggle', function () {
        $('#toggleMobile').modal('show');
    });
}

function checkWindowSize() {
    if (window.innerWidth > 1030) {
        $('#toggleMobile').modal('hide');
    }
}