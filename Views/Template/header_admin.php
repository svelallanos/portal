<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title><?= (isset($data['page_title']) ? $data['page_title'] : 'Sin nombre de página') ?></title>
  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="<?= media() ?>/images/Insignia-MDESV.png" />
  <link href="<?= media() ?>/images/Insignia-MDESV.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?= media() ?>/css/general/font_admin.css" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="<?= media() ?>/css/general/feather.css" rel="stylesheet" />
  <link href="<?= media() ?>/css/general/bootstrap.min.css" rel="stylesheet">
  <link href="<?= media() ?>/css/general/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= media() ?>/css/general/dataTables.bootstrap5.min.css" rel="stylesheet" />
  <link href="<?= media() ?>/css/general/boxicons.min.css" rel="stylesheet">
  <link href="<?= media() ?>/css/general/quill.snow.css" rel="stylesheet">
  <link href="<?= media() ?>/css/general/quill.bubble.css" rel="stylesheet">
  <link href="<?= media() ?>/css/general/remixicon.css" rel="stylesheet">
  <!-- <link href="<?= media() ?>/css/general/style.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="<?= media() ?>/css/general/style_admin.css" rel="stylesheet">
  <link href="<?= media() ?>/css/general/style_customized.css?version=<?= getVerion() ?>" rel="stylesheet" />

  <?php if (isset($data['page_css']) && !empty($data['page_css'])) { ?>
    <link href="<?= media() ?>/css/<?= $data['page_css'] ?>.css?version=<?= getVerion() ?>" rel="stylesheet" />
  <?php } ?>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?= base_url() ?>Inicio" class="logo d-flex align-items-center">
        <img src="<?= media() ?>/images/Insignia-MDESV.png" alt="">
        <span class="d-none fs-4 d-lg-block fw-bold">PORTAL WEB</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <label class="fw-bold fs-5" style="color: #00a03a;">Municipalidad Distrital Elías Soplín Vargas</label>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?= media() ?>/images/fotoperfil/sin_foto.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $_SESSION['portal']['usuarios_nombres'].' '.$_SESSION['portal']['usuarios_paterno'] ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= $_SESSION['portal']['usuarios_nombres'].' '.$_SESSION['portal']['usuarios_paterno'].' '.$_SESSION['portal']['usuarios_materno'] ?></h6>
              <span style="font-size: 12px;" class="badge bg-success"><i class="fa-solid fa-signal"></i> <?= $_SESSION['portal']['roles'][0] ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-person"></i>
                <span>Mi perfil</span>
              </a>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-question-circle"></i>
                <span>¿Necesitas ayuda?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= base_url() ?>logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Desconectar</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <?php require_once('./Views/Template/nav_admin.php'); ?>