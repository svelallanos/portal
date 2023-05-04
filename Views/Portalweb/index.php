<?php headerPortal($data); ?>
<main class="container-fluid content">
  <section class="container-fluid">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
          <img src="<?= media() ?>/portalweb/images/portal_principal.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="<?= media() ?>/portalweb/images/portal_principal.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">

        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


  </section>
  <section class="container-fluid">
    <div class="enlaces">
      <div class="item-enlace tributo-municipal">
        <div class="box-icon">
          <i class="fa-solid fa-money-bill-trend-up"></i>
        </div>
        <h4>Tributo Municipal</h4>
      </div>
      <div class="item-enlace mesade-partes">
        <div class="box-icon">
          <i class="fa-solid fa-desktop"></i>
        </div>
        <h4>Mesa de Partes Virtual</h4>
      </div>
      <div class="item-enlace convocatorias">
        <div class="box-icon">
          <i class="fa-solid fa-users-line"></i>
        </div>

        <h4>Convocatorias</h4>
      </div>
      <div class="item-enlace programas-sociales">
        <div class="box-icon">
          <i class="fa-solid fa-handshake"></i>
        </div>
        <h4>Programas Sociales</h4>
      </div>
      <div class="item-enlace buzon-sugerencias">
        <div class="box-icon">
          <i class="fa-solid fa-envelopes-bulk"></i>
        </div>
        <h4>Buzón de Sugerencias</h4>
      </div>
    </div>
  </section>
  <section class="container-fluid">
    <div class="d-flex flex-column">
      <h2>NUEVO</h2>
      <div class="swiffy-slider slider-nav-round slider-nav-animation slider-nav-animation-fadein slider-item-last-visible">
        <ul class="slider-container">
          <li class="">
            <div class="card rounded-0 h-100">
              <div class="row g-0 h-100">
                <div class="col-md-6 col-xl-5 d-flex align-items-center p-2 p-md-3 p-xl-5">
                  <div class="card-body p-1 p-md-3 p-xl-5">
                    <p class="lead">Why use this slider</p>
                    <h2 class="card-title" style="color:#DF1E1E;">Swiffy Slider Benefits</h2>
                    <p class="card-text mt-3">Super fast lightweight slider and carousel with amazing touch support and user experience.</p>
                    <p>Super simple setup using just markup and few powerful configuration options</p>
                    <p class="card-text"><small class="text-muted">Remember to check out on mobile</small></p>
                  </div>
                </div>
                <div class="col-md-6 col-xl-7">
                  <img src="https://source.unsplash.com/49b9l_29ceA/1600x900" class="card-img d-none d-md-block" loading="lazy" style="height: 100%; object-fit: cover;" alt="...">
                  <img src="https://source.unsplash.com/49b9l_29ceA/1600x900" class="card-img d-block d-md-none" loading="lazy" style="width: 100%; object-fit: cover;" alt="...">
                </div>
              </div>
            </div>
          </li>
          <li class="">
            <div class="card rounded-0 h-100">
              <div class="row g-0 h-100">
                <div class="col-md-6 col-xl-7">
                  <img src="../assets/img/photos/img2.webp" class="card-img d-none d-md-block" loading="lazy" style="height: 100%; object-fit: cover" alt="...">
                  <img src="../assets/img/photos/img2.webp" class="card-img d-block d-md-none" loading="lazy" style="width: 100%; object-fit: cover" alt="...">
                </div>
                <div class="col-md-6 col-xl-5 d-flex align-items-center p-2 p-md-3 p-xl-5">
                  <div class="card-body p-1 p-md-3 p-xl-5">
                    <p class="lead">Dreaming about cars</p>
                    <h2 class="card-title" style="color:#DF1E1E;">Vintage cars from another era</h2>
                    <p class="card-text mt-3">First, there’s the design of the car itself. Classic cars were created very much in an analogue world where designers used pencil and paper to create elegant shapes and flowing lines that would just not be possible
                      on the computer-based design software used by modern car designers.</p>
                    <p class="card-text"><small class="text-muted">Handcrafted like good code</small></p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="slide-visible">
            <div class="card rounded-0 h-100 text-white">
              <img src="../assets/img/photos/img3.webp" class="card-img h-100" style="max-height: 100%; max-width: 100%; object-fit: cover" alt="...">
              <div class="card-img-overlay d-flex align-items-start align-items-md-center justify-content-center flex-column">
                <h2 class="card-title h1 d-block d-md-inline-block">The Aston Martin DB5</h2>
                <p class="card-text lead col-md-8 col-lg-6">The Aston Martin DB5 is a British luxury grand tourer (GT) that was made by Aston Martin and designed by the Italian coachbuilder Carrozzeria Touring Superleggera. </p>
              </div>
            </div>
          </li>
        </ul>

        <button type="button" class="slider-nav" aria-label="Go left"></button>
        <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>

        <div class="slider-indicators">
          <button class="" aria-label="Go to slide"></button>
          <button aria-label="Go to slide"></button>
          <button aria-label="Go to slide" class="active"></button>
        </div>
      </div>
    </div>
  </section>
  <section class="container-fluid">
    <h2 class="text-center">
      <i class="fa-solid fa-grip-vertical fa-fade"></i>ÚLTIMAS NOTICIAS<i class="fa-solid fa-grip-vertical fa-fade"></i>
    </h2>
    <div class="box-noticias">
      <div class="box-item">
        <div class="box-images">
          <img src="<?= media() ?>/portalweb/images/noticias/noticia-1.jpg" alt="" />
        </div>
        <div class="box-publicacion">
          <p>
            <i class="fa-solid fa-user-pen fa-beat"></i><span class="fw-bold">Publicado: </span>MDESV
          </p>
          <p>
            <i class="fa-solid fa-calendar-days fa-beat"></i><span class="fw-bold">Fecha: </span> Hace 18 minutos - 2023
          </p>
        </div>
        <div class="box-contenido">
          <h3>Title de publicacion</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
            commodo ligula eget dolor. Aenean massa. Cum sociis natoque
            penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
            Nulla consequat massa quis enim. Donec pede justo, fringilla vel,
            aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
            imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede...
          </p>
          <a href="#">Leer más</a>
        </div>
      </div>
      <div class="box-item">
        <div class="box-images">
          <img src="<?= media() ?>/portalweb/images/noticias/noticia-2.jpg" alt="" />
        </div>
        <div class="box-publicacion">
          <p>
            <i class="fa-solid fa-user-pen fa-beat"></i><span class="fw-bold">Publicado: </span>MDESV
          </p>
          <p>
            <i class="fa-solid fa-calendar-days fa-beat"></i><span class="fw-bold">Fecha: </span> Hace 18 minutos - 2023
          </p>
        </div>
        <div class="box-contenido">
          <h3>Title de publicacion</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
            commodo ligula eget dolor. Aenean massa. Cum sociis natoque
            penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
            Nulla consequat massa quis enim. Donec pede justo, fringilla vel,
            aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
            imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede...
          </p>
          <a href="#">Leer más</a>
        </div>
      </div>
      <div class="box-item">
        <div class="box-images">
          <img src="<?= media() ?>/portalweb/images/noticias/noticia-3.jpg" alt="" />
        </div>
        <div class="box-publicacion">
          <p>
            <i class="fa-solid fa-user-pen fa-beat"></i><span class="fw-bold">Publicado: </span>MDESV
          </p>
          <p>
            <i class="fa-solid fa-calendar-days fa-beat"></i><span class="fw-bold">Fecha: </span> Hace 18 minutos - 2023
          </p>
        </div>
        <div class="box-contenido">
          <h3>Title de publicacion</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
            commodo ligula eget dolor. Aenean massa. Cum sociis natoque
            penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
            Nulla consequat massa quis enim. Donec pede justo, fringilla vel,
            aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
            imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede...
          </p>
          <a href="#">Leer más</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php footerPortal(); ?>