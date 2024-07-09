<?php
include("../../INCLUDES/Conexion/conexion.php");
session_start();

//___________________________________________________________________________________________________________

if (empty($_SESSION['id_user'])) {

    header("Location: ../../VIEWS/Login/index.php");
}

//___________________________________________________________________________________________________________

$id_usuario = $_SESSION['id_user'];
$sql = $conexion->query("SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'");

while ($datos = $sql->fetch_array(MYSQLI_BOTH)) {
    // $datos = $sql->fetch_array();
?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Favicon icon-->
        <link rel="shortcut icon" type="image/png" href="../../ASSETS/Logos/logo_1.png" />


        <!-- --- SWEETALERT--- -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- ----------------- -->


        <!-- Core Css -->
        <link rel="stylesheet" href="../../CSS/style.css" />

        <!-- FONT AWESOME -->
        <script src="https://kit.fontawesome.com/79d3ca1a80.js" crossorigin="anonymous"></script>

        <title>INICIO | CSSC INVENTARIO</title>
    </head>

    <body>
        <!-- Toast -->
        <div class="toast toast-onload align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body hstack align-items-start gap-6">
                <i class="ti ti-alert-circle fs-6"></i>
                <div>
                    <h5 class="text-white fs-3 mb-1">Bienvenido al inventario</h5>
                </div>
                <button type="button" class="btn-close btn-close-white fs-2 m-0 ms-auto shadow-none" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
        <!-- Preloader -->
        <div class="preloader">
            <img src="../../ASSETS/Logos/logo_1.png" alt="loader" class="lds-ripple img-fluid" style="width: 5%;" />
        </div>
        <div id="main-wrapper">
            <!-- Sidebar Start -->
            <aside class="left-sidebar with-vertical">
                <!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="../../VIEWS/Dashboard/index.php" class="text-nowrap logo-img">
                        <br>
                        <center>
                            <img src="../../ASSETS/Logos/logo_2.png" class="dark-logo" alt="Logo-Dark" style="width: 100%;" />
                        </center>
                        <center>
                            <img src="../../ASSETS/Logos/logo_3.png" class="light-logo" alt="Logo-light" style="width: 100%;" />
                        </center>

                    </a>
                    <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
                        <i class="ti ti-x"></i>
                    </a>
                </div>

                <div class="scroll-sidebar" data-simplebar>
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav" class="mb-0">

                            <!-- ============================= -->
                            <!-- Home -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
                                <span class="hide-menu">INICIO</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link sidebar-link primary-hover-bg active" href="index.php" id="get-url" aria-expanded="false">
                                    <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                                        <i class="fa-solid fa-house"></i>
                                    </span>
                                    <span class="hide-menu ps-1">INICIO</span>
                                </a>
                            </li>

                            <!-- ============================= -->
                            <!-- Apps -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <span class="hide-menu">MÓDULOS</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow indigo-hover-bg" href="javascript:void(0)" aria-expanded="false">
                                    <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
                                        <i class="fa-solid fa-circle-user"></i>
                                    </span>
                                    <span class="hide-menu ps-1">USUARIO</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="../../VIEWS/Dashboard/usuarios/ADM._usuarios.php" class="sidebar-link">
                                            <span class="sidebar-icon"></span>
                                            <span class="hide-menu">ADM. | Usuarios</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow warning-hover-bg" href="javascript:void(0)" aria-expanded="false">
                                    <span class="aside-icon p-2 bg-warning-subtle rounded-1">
                                        <i class="fa-solid fa-box-archive"></i>
                                    </span>
                                    <span class="hide-menu ps-1">INVENTARIO</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="blog-posts.html" class="sidebar-link">
                                            <span class="sidebar-icon"></span>
                                            <span class="hide-menu">ADM. | Inventario</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="../../VIEWS/Dashboard/inventario/GEST._herramientas.php" class="sidebar-link">
                                            <span class="sidebar-icon"></span>
                                            <span class="hide-menu">GEST. | Herramientas</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="blog-detail.html" class="sidebar-link">
                                            <span class="sidebar-icon"></span>
                                            <span class="hide-menu">GEST. | Materiales</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow danger-hover-bg" href="javascript:void(0)" aria-expanded="false">
                                    <span class="aside-icon p-2 bg-danger-subtle rounded-1">
                                        <i class="fa-solid fa-receipt"></i>
                                    </span>
                                    <span class="hide-menu ps-1">PRÉSTAMO</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="page-user-profile.html" class="sidebar-link">
                                            <span class="sidebar-icon"></span>
                                            <span class="hide-menu">ADM. | Préstamos</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="" class="sidebar-link">
                                            <span class="sidebar-icon"></span>
                                            <span class="hide-menu">GEST. | Facturas</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="prestamo/GEST._prestamo.php" class="sidebar-link">
                                            <span class="sidebar-icon"></span>
                                            <span class="hide-menu">GEST. | Préstamos</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <?php if ($datos['rol'] == 1) { ?>
                                <!-- ============================= -->
                                <!-- PERMISOS -->
                                <!-- ============================= -->
                                <li class="nav-small-cap">
                                    <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
                                    <span class="hide-menu">PERMISOS</span>
                                </li>

                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow success-hover-bg" href="javascript:void(0)" aria-expanded="false">
                                        <span class="aside-icon p-2 bg-success-subtle rounded-1">
                                            <i class="fa-solid fa-list-check"></i>
                                        </span>
                                        <span class="hide-menu ps-1">ADMINISTRAR</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="eco-shop.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu">GEST. | Usuarios</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="eco-shop.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu">GEST. | Inventario</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="eco-shop.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu">GEST. | Préstamos</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            <?php } ?>




                            <!-- ============================= -->
                            <!-- OTHER -->
                            <!-- ============================= -->

                            <!-- <li class="nav-small-cap">
                                <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
                                <span class="hide-menu">Other</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow secondary-hover-bg" href="javascript:void(0)" aria-expanded="false">
                                    <span class="aside-icon p-2 bg-secondary-subtle rounded-1">
                                        <iconify-icon icon="solar:layers-minimalistic-line-duotone" class="fs-6"></iconify-icon>
                                    </span>
                                    <span class="hide-menu ps-1">Menu Level</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="javascript:void(0)" class="sidebar-link">
                                            <span class="sidebar-icon"></span>
                                            <span class="hide-menu">Level 1</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                            <span class="sidebar-icon"></span>
                                            <span class="hide-menu">Level 1.1</span>
                                        </a>
                                        <ul aria-expanded="false" class="collapse two-level">
                                            <li class="sidebar-item">
                                                <a href="javascript:void(0)" class="sidebar-link">
                                                    <span class="sidebar-icon"></span>
                                                    <span class="hide-menu">Level 2</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                                    <span class="sidebar-icon"></span>
                                                    <span class="hide-menu">Level 2.1</span>
                                                </a>
                                                <ul aria-expanded="false" class="collapse three-level">
                                                    <li class="sidebar-item">
                                                        <a href="javascript:void(0)" class="sidebar-link">
                                                            <span class="sidebar-icon"></span>
                                                            <span class="hide-menu">Level 3</span>
                                                        </a>
                                                    </li>
                                                    <li class="sidebar-item">
                                                        <a href="javascript:void(0)" class="sidebar-link">
                                                            <span class="sidebar-icon"></span>
                                                            <span class="hide-menu">Level 3.1</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link sidebar-link success-hover-bg opacity-50" href="javascript:void(0)" aria-expanded="false">
                                    <span class="aside-icon p-2 bg-success-subtle rounded-1">
                                        <iconify-icon icon="solar:forbidden-circle-line-duotone" class="fs-6"></iconify-icon>
                                    </span>
                                    <span class="hide-menu ps-1">Disabled</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link sidebar-link warning-hover-bg" href="javascript:void(0)" aria-expanded="false">
                                    <span class="aside-icon p-2 bg-warning-subtle rounded-1">
                                        <iconify-icon icon="solar:star-line-duotone" class="fs-6"></iconify-icon>
                                    </span>
                                    <div class="lh-base hide-menu">
                                        <span class="hide-menu ps-1 d-flex">SubCaption</span>
                                        <span class="hide-menu ps-1 d-flex fs-2">This is the sutitle</span>
                                    </div>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link sidebar-link danger-hover-bg justify-content-between" href="javascript:void(0)" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <span class="aside-icon p-2 bg-danger-subtle rounded-1">
                                            <iconify-icon icon="solar:shield-check-line-duotone" class="fs-6"></iconify-icon>
                                        </span>
                                        <span class="hide-menu ps-1">Chip</span>
                                    </div>
                                    <div class="hide-menu">
                                        <span class="badge rounded-circle bg-danger d-flex align-items-center justify-content-center round-20 p-0 me-7">9</span>
                                    </div>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link sidebar-link indigo-hover-bg justify-content-between" href="javascript:void(0)" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
                                            <iconify-icon icon="solar:smile-circle-line-duotone" class="fs-6"></iconify-icon>
                                        </span>
                                        <span class="hide-menu ps-1">Outlined</span>
                                    </div>
                                    <div class="hide-menu">
                                        <span class="hide-menu badge rounded-pill border border-indigo text-indigo fs-2 me-7">Outline</span>
                                    </div>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link sidebar-link info-hover-bg" href="javascript:void(0)" aria-expanded="false">
                                    <span class="aside-icon p-2 bg-info-subtle rounded-1">
                                        <iconify-icon icon="solar:star-line-duotone" class="fs-6"></iconify-icon>
                                    </span>
                                    <span class="hide-menu ps-1">External Link</span>
                                </a>
                            </li> -->


                        </ul>

                    </nav>
                    <!-- End Sidebar navigation -->
                </div>

                <div class="fixed-profile mx-2">
                    <div class="card bg-primary-subtle mb-0 shadow-none">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center justify-content-between gap-3">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-1.jpg" width="45" height="45" class="img-fluid rounded-circle" alt="spike-img" />
                                    <div>
                                        <style>
                                            .text-center {
                                                padding: 0 0 0 25px;
                                            }
                                        </style>
                                        <center>
                                            <h5 class="mb-1 text-center"><?php echo ($datos['usuario']); ?></h5>
                                        </center>
                                    </div>
                                </div>
                                <style>
                                    .mouse-pointer {
                                        cursor: pointer;
                                    }
                                </style>
                                <a id="logoutButton" class="position-relative mouse-pointer" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Cerrar Sesión">
                                    <iconify-icon icon="solar:logout-line-duotone" class="fs-8"></iconify-icon>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
            </aside>
            <!--  Sidebar End -->
            <div class="page-wrapper">


                <aside class="left-sidebar with-horizontal">
                    <!-- Sidebar scroll-->
                    <div>
                        <!-- Sidebar navigation-->
                        <nav id="sidebarnavh" class="sidebar-nav scroll-sidebar container-fluid">
                            <ul id="sidebarnav">
                                <!-- ============================= -->
                                <!-- Home -->
                                <!-- ============================= -->
                                <li class="nav-small-cap">
                                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                    <span class="hide-menu">Home</span>
                                </li>
                                <!-- =================== -->
                                <!-- Dashboard -->
                                <!-- =================== -->
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow primary-hover-bg" href="javascript:void(0)" aria-expanded="false">
                                        <iconify-icon icon="solar:atom-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                                        <span class="hide-menu ps-1">Dashboard</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/index.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Dashboard</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="index2.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Dashboard 2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- ============================= -->
                                <!-- Apps -->
                                <!-- ============================= -->
                                <li class="sidebar-item">
                                    <a class="sidebar-link two-column has-arrow indigo-hover-bg" href="javascript:void(0)" aria-expanded="false">
                                        <iconify-icon icon="solar:archive-broken" class="fs-6 aside-icon"></iconify-icon>
                                        <span class="hide-menu ps-1">Apps</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="app-calendar.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu">Calendar</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="app-kanban.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu">Kanban</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="app-chat.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu">Chat</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="app-email.html" aria-expanded="false">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu">Email</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="app-contact.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu">Contact Table</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="app-contact2.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu">Contact List</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="app-notes.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu">Notes</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="app-invoice.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu">Invoice</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="page-user-profile.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu">User Profile</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="blog-posts.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu">Posts</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="blog-detail.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu">Detail</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="eco-shop.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu">Shop</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="eco-shop-detail.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu">Shop Detail</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="eco-product-list.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu">List</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="eco-checkout.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu">Checkout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- ============================= -->
                                <!-- PAGES -->
                                <!-- ============================= -->
                                <li class="nav-small-cap">
                                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                    <span class="hide-menu">PAGES</span>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link two-column has-arrow primary-hover-bg" href="javascript:void(0)" aria-expanded="false">
                                        <iconify-icon icon="solar:file-text-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                                        <span class="hide-menu ps-1">Pages</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <!-- Teachers -->
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/all-teacher.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">All Teachers</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/teacher-details.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate"> Teachers Details</span>
                                            </a>
                                        </li>
                                        <!-- Exams -->
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/exam-schedule.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Exam Schedule</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/exam-result.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate"> Exam Result</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/exam-result-details.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate"> Exam Result Details</span>
                                            </a>
                                        </li>
                                        <!-- students -->
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/all-student.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">All Students</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/student-details.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate"> Students Details</span>
                                            </a>
                                        </li>
                                        <!-- classes -->
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/classes.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate"> Classes</span>
                                            </a>
                                        </li>
                                        <!-- attendance -->
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/attendance.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate"> Attendance</span>
                                            </a>
                                        </li>
                                        <!-- icons -->
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/icon-tabler.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate"> Tabler Icon</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="page-faq.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">FAQ</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="page-account-settings.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Account Setting</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="page-pricing.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Pricing</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="page-user-profile2.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Profile One</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="page-user-profile.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Profile Two</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/landingpage/index.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Landing Page</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- ============================= -->
                                <!-- UI -->
                                <!-- ============================= -->
                                <li class="nav-small-cap">
                                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                    <span class="hide-menu">UI</span>
                                </li>
                                <!-- =================== -->
                                <!-- UI Elements -->
                                <!-- =================== -->
                                <li class="sidebar-item mega-dropdown">
                                    <a class="sidebar-link has-arrow warning-hover-bg" href="javascript:void(0)" aria-expanded="false">
                                        <iconify-icon icon="solar:cpu-bolt-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                                        <span class="hide-menu ps-1">UI</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-accordian.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Accordian</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-badge.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Badge</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-buttons.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Buttons</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-dropdowns.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Dropdowns</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-modals.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Modals</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-tab.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Tab</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-tooltip-popover.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Tooltip & Popover</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-notification.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Alerts</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-progressbar.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Progressbar</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-pagination.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Pagination</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-typography.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Typography</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-bootstrap-ui.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Bootstrap UI</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-breadcrumb.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Breadcrumb</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-offcanvas.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Offcanvas</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-lists.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Lists</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-grid.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Grid</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-carousel.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Carousel</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-scrollspy.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Scrollspy</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-spinner.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Spinner</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/ui-link.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Link</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- ============================= -->
                                <!-- Forms -->
                                <!-- ============================= -->
                                <li class="nav-small-cap">
                                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                    <span class="hide-menu">Forms</span>
                                </li>
                                <!-- =================== -->
                                <!-- Forms -->
                                <!-- =================== -->
                                <li class="sidebar-item">
                                    <a class="sidebar-link two-column has-arrow success-hover-bg" href="javascript:void(0)" aria-expanded="false">
                                        <iconify-icon icon="solar:book-2-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                                        <span class="hide-menu ps-1">Forms</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <!-- form elements -->
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/form-inputs.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Forms Input</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/form-input-groups.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Input Groups</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/form-input-grid.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Input Grid</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/form-checkbox-radio.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Checkbox & Radios</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/form-bootstrap-switch.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Bootstrap Switch</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/form-select2.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Select2</span>
                                            </a>
                                        </li>

                                        <!-- form inputs -->
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/form-basic.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Basic Form</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/form-horizontal.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Form Horizontal</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/form-actions.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Form Actions</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/form-row-separator.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Row Separator</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/form-bordered.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Form Bordered</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/form-detail.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Form Detail</span>
                                            </a>
                                        </li>

                                        <!-- form wizard -->
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/form-wizard.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Form Wizard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/form-editor-quill.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Quill Editor</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- ============================= -->
                                <!-- Tables -->
                                <!-- ============================= -->
                                <li class="nav-small-cap">
                                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                    <span class="hide-menu">Tables</span>
                                </li>
                                <!-- =================== -->
                                <!-- Bootstrap Table -->
                                <!-- =================== -->
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow warning-hover-bg" href="javascript:void(0)" aria-expanded="false">
                                        <iconify-icon icon="solar:bedside-table-2-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                                        <span class="hide-menu ps-1">Tables</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/table-basic.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Basic Table</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/table-dark-basic.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Dark Basic Table</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/table-sizing.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Sizing Table</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/table-layout-coloured.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Coloured Table Layout</span>
                                            </a>
                                        </li>
                                        <!-- datatable -->
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/table-datatable-basic.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Basic Initialisation</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/table-datatable-api.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">API</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/table-datatable-advanced.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Advanced Initialisation</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- ============================= -->
                                <!-- Auth -->
                                <!-- ============================= -->
                                <li class="nav-small-cap">
                                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                    <span class="hide-menu">Auth</span>
                                </li>
                                <!-- =================== -->
                                <!-- Auth -->
                                <!-- =================== -->
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow info-hover-bg" href="javascript:void(0)" aria-expanded="false">
                                        <iconify-icon icon="solar:lock-keyhole-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                                        <span class="hide-menu ps-1">Auth</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/authentication-error.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Error</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="authentication-login.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Side Login</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="authentication-login2.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Boxed Login</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/authentication-register.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Side Register</span>
                                            </a>
                                        </li>
                                        <!-- datatable -->
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/authentication-register2.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Boxed Register</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/authentication-forgot-password.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Side Forgot Password</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/authentication-forgot-password2.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Boxed Forgot Password</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/authentication-two-steps.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Side Two Steps</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/authentication-two-steps2.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Boxed Two Steps</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/authentication-maintenance.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Maintenance</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- ============================= -->
                                <!-- Charts -->
                                <!-- ============================= -->
                                <li class="nav-small-cap">
                                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                    <span class="hide-menu">Charts</span>
                                </li>
                                <!-- =================== -->
                                <!-- Apex Chart -->
                                <!-- =================== -->
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow indigo-hover-bg" href="javascript:void(0)" aria-expanded="false">
                                        <iconify-icon icon="solar:archive-broken" class="fs-6 aside-icon"></iconify-icon>
                                        <span class="hide-menu ps-1">Icon</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/icon-tabler.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Tabler Icon</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/icon-solar.html" class="sidebar-link">
                                                <span class="sidebar-icon"></span>
                                                <span class="hide-menu text-truncate">Solar Icon</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- multi level -->
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow success-hover-bg" href="javascript:void(0)" aria-expanded="false">
                                        <iconify-icon icon="solar:layers-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                                        <span class="hide-menu ps-1">Multi DD</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/docs/index.html" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Documentation</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Page 1</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link has-arrow">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Page 2</span>
                                            </a>
                                            <ul aria-expanded="false" class="collapse second-level">
                                                <li class="sidebar-item">
                                                    <a href="javascript:void(0)" class="sidebar-link">
                                                        <i class="ti ti-circle"></i>
                                                        <span class="hide-menu">Page 2.1</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-item">
                                                    <a href="javascript:void(0)" class="sidebar-link">
                                                        <i class="ti ti-circle"></i>
                                                        <span class="hide-menu">Page 2.2</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-item">
                                                    <a href="javascript:void(0)" class="sidebar-link">
                                                        <i class="ti ti-circle"></i>
                                                        <span class="hide-menu">Page 2.3</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <i class="ti ti-circle"></i>
                                                <span class="hide-menu">Page 3</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                    </div>
                </aside>

                <div class="body-wrapper">
                    <div class="container-fluid">
                        <!--  Header Start -->
                        <header class="topbar sticky-top">
                            <div class="with-vertical"><!-- ---------------------------------- -->
                                <!-- Start Vertical Layout Header -->
                                <!-- ---------------------------------- -->
                                <nav class="navbar navbar-expand-lg p-0">

                                    <ul class="navbar-nav">
                                        <li class="nav-item nav-icon-hover-bg rounded-circle">
                                            <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                                                <i class="fa-solid fa-bars-staggered"></i>
                                            </a>
                                        </li>
                                    </ul>

                                    <a class="navbar-toggler p-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="p-2">
                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                        </span>
                                    </a>

                                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                                        <div class="d-flex align-items-center justify-content-between">

                                            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">

                                                <!-- ------------------------------- -->
                                                <!-- start language Dropdown -->
                                                <!-- ------------------------------- -->

                                                <li class="nav-item dropdown d-none d-lg-block">

                                                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop3">
                                                        <div class="modal-header border-bottom p-3">
                                                            <input type="search" class="form-control fs-3" placeholder="Try to searching ..." />

                                                        </div>
                                                        <div class="message-body p-3" data-simplebar="">
                                                            <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
                                                            <ul class="list mb-0 py-2">
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Modern</span>
                                                                        <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Dashboard</span>
                                                                        <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Contacts</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/contacts</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Posts</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Detail</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Shop</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Modern</span>
                                                                        <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Dashboard</span>
                                                                        <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Contacts</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/contacts</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Posts</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Detail</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Shop</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>

                                                <!-- ------------------------------- -->
                                                <!-- end language Dropdown -->
                                                <!-- ------------------------------- -->

                                                <li class="nav-item nav-icon-hover-bg rounded-circle">
                                                    <a class="nav-link moon dark-layout" href="javascript:void(0)">
                                                        <iconify-icon icon="solar:moon-line-duotone" class="moon fs-6"></iconify-icon>
                                                    </a>
                                                    <a class="nav-link sun light-layout" href="javascript:void(0)">
                                                        <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-6"></iconify-icon>
                                                    </a>
                                                </li>


                                                <!-- ------------------------------- -->
                                                <!-- start Messages cart Dropdown -->
                                                <!-- ------------------------------- -->
                                                <!-- <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                                                <a class="nav-link position-relative" href="javascript:void(0)" id="drop3" aria-expanded="false">
                                                    <iconify-icon icon="solar:chat-dots-line-duotone" class="fs-6"></iconify-icon>
                                                    <div class="pulse">
                                                        <span class="heartbit border-warning"></span>
                                                        <span class="point text-bg-warning"></span>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop3">
                                                    
                                                    <div class="d-flex align-items-center py-3 px-7">
                                                        <h3 class="mb-0 fs-5">Messages</h3>
                                                        <span class="badge bg-info ms-3">5 new</span>
                                                    </div>

                                                    <div class="message-body" data-simplebar>
                                                        <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
                                                            <span class="flex-shrink-0">
                                                                <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-2.jpg" alt="user" width="45" class="rounded-circle" />
                                                            </span>
                                                            <div class="w-100 ps-3">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0 fs-3 fw-normal">
                                                                        Roman Joined the Team!
                                                                    </h5>
                                                                    <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                                                </div>
                                                                <span class="fs-2 d-block mt-1 text-muted">Congratulate him</span>
                                                            </div>
                                                        </a>

                                                        <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
                                                            <span class="flex-shrink-0">
                                                                <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-3.jpg" alt="user" width="45" class="rounded-circle" />
                                                            </span>
                                                            <div class="w-100 ps-3">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0 fs-3 fw-normal">
                                                                        New message received
                                                                    </h5>
                                                                    <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                                                </div>
                                                                <span class="fs-2 d-block mt-1 text-muted">Salma sent you new
                                                                    message</span>
                                                            </div>
                                                        </a>

                                                        <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
                                                            <span class="flex-shrink-0">
                                                                <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-4.jpg" alt="user" width="45" class="rounded-circle" />
                                                            </span>
                                                            <div class="w-100 ps-3">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0 fs-3 fw-normal">
                                                                        New Payment received
                                                                    </h5>
                                                                    <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                                                </div>
                                                                <span class="fs-2 d-block mt-1 text-muted">Check your
                                                                    earnings</span>
                                                            </div>
                                                        </a>

                                                        <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
                                                            <span class="flex-shrink-0">
                                                                <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-5.jpg" alt="user" width="45" class="rounded-circle" />
                                                            </span>
                                                            <div class="w-100 ps-3">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0 fs-3 fw-normal">
                                                                        New message received
                                                                    </h5>
                                                                    <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                                                </div>
                                                                <span class="fs-2 d-block mt-1 text-muted">Salma sent you new
                                                                    message</span>
                                                            </div>
                                                        </a>

                                                        <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
                                                            <span class="flex-shrink-0">
                                                                <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-6.jpg" alt="user" width="45" class="rounded-circle" />
                                                            </span>
                                                            <div class="w-100 ps-3">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0 fs-3 fw-normal">
                                                                        Roman Joined the Team!
                                                                    </h5>
                                                                    <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                                                </div>
                                                                <span class="fs-2 d-block mt-1 text-muted">Congratulate him</span>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="py-6 px-7 mb-1">
                                                        <button class="btn btn-primary w-100">
                                                            See All Messages
                                                        </button>
                                                    </div>
                                                </div>
                                            </li> -->
                                                <!-- ------------------------------- -->
                                                <!-- end Messages cart Dropdown -->
                                                <!-- ------------------------------- -->

                                                <!-- ------------------------------- -->
                                                <!-- start shortcut Dropdown -->
                                                <!-- ------------------------------- -->
                                                <!-- <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                                                <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                                    <iconify-icon icon="solar:widget-add-line-duotone" class="fs-6"></iconify-icon>
                                                </a>
                                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up pb-0 overflow-hidden" aria-labelledby="drop2">
                                                    
                                                    <div class="d-flex align-items-center py-3 px-7 gap-6">
                                                        <h3 class="mb-0 fs-5">Shortcuts</h3>
                                                    </div>

                                                    <div class="row gx-0">
                                                        <div class="col-6">
                                                            <a href="app-invoice.html" class="dropdown-item px-7 border-top border-bottom border-end py-6 d-flex flex-column gap-2 justify-content-center text-center">
                                                                <div class="bg-secondary-subtle rounded-3 m-auto round d-flex align-items-center justify-content-center">
                                                                    <iconify-icon icon="solar:checklist-minimalistic-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                                                                </div>

                                                                <h6 class="mb-0 fs-4">Invoice</h6>
                                                                <span class="d-block text-body-color fs-3">Get latest invoice</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-6">
                                                            <a href="app-chat.html" class="dropdown-item px-7 border-top border-bottom py-6 d-flex flex-column gap-2 justify-content-center text-center">
                                                                <div class="bg-primary-subtle rounded-3 m-auto round d-flex align-items-center justify-content-center">
                                                                    <iconify-icon icon="solar:chat-square-call-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                                                                </div>
                                                                <h6 class="mb-0 fs-4">Chat</h6>
                                                                <span class="d-block text-body-color fs-3">New messages</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-6">
                                                            <a href="app-contact2.html" class="dropdown-item px-7 border-bottom border-end py-6 d-flex flex-column gap-2 justify-content-center text-center">
                                                                <div class="bg-info-subtle rounded-3 m-auto round d-flex align-items-center justify-content-center">
                                                                    <iconify-icon icon="solar:phone-calling-rounded-bold-duotone" class="fs-7 text-info"></iconify-icon>
                                                                </div>
                                                                <h6 class="mb-0 fs-4">Contact</h6>
                                                                <span class="d-block text-body-color fs-3">2 Unsaved Contacts</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-6">
                                                            <a href="app-email.html" class="dropdown-item px-7 border-bottom py-6 d-flex flex-column gap-2 justify-content-center text-center">
                                                                <div class="bg-danger-subtle rounded-3 m-auto round d-flex align-items-center justify-content-center">
                                                                    <iconify-icon icon="solar:mailbox-bold-duotone" class="fs-7 text-danger"></iconify-icon>
                                                                </div>
                                                                <h6 class="mb-0 fs-4">Email</h6>
                                                                <span class="d-block text-body-color fs-3">Get new emails</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-6">
                                                            <a href="page-user-profile.html" class="dropdown-item px-7 border-end py-6 d-flex flex-column gap-2 justify-content-center text-center">
                                                                <div class="bg-warning-subtle rounded-3 m-auto round d-flex align-items-center justify-content-center">
                                                                    <iconify-icon icon="solar:shield-user-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                                                                </div>
                                                                <h6 class="mb-0 fs-4">Profile</h6>
                                                                <span class="d-block text-body-color fs-3">More information</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-6">
                                                            <a href="app-calendar.html" class="dropdown-item px-7 py-6 d-flex flex-column gap-2 justify-content-center text-center">
                                                                <div class="bg-success-subtle rounded-3 m-auto round d-flex align-items-center justify-content-center">
                                                                    <iconify-icon icon="solar:calendar-mark-bold-duotone" class="fs-7 text-success"></iconify-icon>
                                                                </div>
                                                                <h6 class="mb-0 fs-4">Calendar</h6>
                                                                <span class="d-block text-body-color fs-3">Get dates</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li> -->
                                                <!-- ------------------------------- -->
                                                <!-- end shortcut Dropdown -->
                                                <!-- ------------------------------- -->

                                                <!-- ------------------------------- -->
                                                <!-- start profile Dropdown -->
                                                <!-- ------------------------------- -->
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link position-relative ms-6" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                                        <div class="d-flex align-items-center flex-shrink-0">
                                                            <div class="user-profile me-sm-3 me-2">
                                                                <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-1.jpg" width="40" class="rounded-circle" alt="spike-img">
                                                            </div>
                                                            <span class="d-sm-none d-block"><iconify-icon icon="solar:alt-arrow-down-line-duotone"></iconify-icon></span>

                                                            <div class="d-none d-sm-block">
                                                                <h6 class="fs-4 mb-1 profile-name">
                                                                    <?php echo ($datos['nombre'] . " " . $datos['apellido']); ?>
                                                                </h6>
                                                                <!-- <p class="fs-3 lh-base mb-0 profile-subtext">
                                                                    <?php if ($datos['rol'] == 1) {
                                                                        echo ('Super Administrador');
                                                                    } elseif ($datos['rol'] == 2) {
                                                                        echo ('Administrador');
                                                                    } ?>
                                                                </p> -->
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                                                        <div class="profile-dropdown position-relative" data-simplebar>
                                                            <div class="d-flex align-items-center justify-content-between pt-3 px-7">
                                                                <h3 class="mb-0 fs-5">PERFIL | Usuario</h3>
                                                            </div>

                                                            <div class="d-flex align-items-center mx-7 py-9 border-bottom">
                                                                <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-1.jpg" alt="user" width="90" class="rounded-circle" />
                                                                <div class="ms-4">

                                                                    <h4 class="mb-0 fs-5 fw-normal"><?php echo ($datos['nombre'] . "  " . $datos['apellido']); ?></h4>

                                                                    <span class="text-muted"><?php if ($datos['rol'] == 1) {
                                                                                                    echo ('Super Administrador');
                                                                                                } elseif ($datos['rol'] == 2) {
                                                                                                    echo ('Administrador');
                                                                                                } ?></span>
                                                                    <!-- <p class="text-muted mb-0 mt-1 d-flex align-items-center">
                                                                        <iconify-icon icon="solar:mailbox-line-duotone" class="fs-4 me-1"></iconify-icon>
                                                                        <?php echo ($datos['correo_electronico']); ?>
                                                                    </p> -->
                                                                </div>
                                                            </div>

                                                            <div class="message-body">
                                                                <a href="page-user-profile.html" class="dropdown-item px-7 d-flex align-items-center py-6">
                                                                    <span class="btn px-3 py-2 bg-info-subtle rounded-1 text-info shadow-none">
                                                                        <iconify-icon icon="solar:wallet-2-line-duotone" class="fs-7"></iconify-icon>
                                                                    </span>
                                                                    <div class="w-100 ps-3 ms-1">
                                                                        <h5 class="mb-0 mt-1 fs-4 fw-normal">
                                                                            My Profile
                                                                        </h5>
                                                                        <span class="fs-3 d-block mt-1 text-muted">Account Settings</span>
                                                                    </div>
                                                                </a>

                                                                <a href="app-email.html" class="dropdown-item px-7 d-flex align-items-center py-6">
                                                                    <span class="btn px-3 py-2 bg-success-subtle rounded-1 text-success shadow-none">
                                                                        <iconify-icon icon="solar:shield-minimalistic-line-duotone" class="fs-7"></iconify-icon>
                                                                    </span>
                                                                    <div class="w-100 ps-3 ms-1">
                                                                        <h5 class="mb-0 mt-1 fs-4 fw-normal">My Inbox</h5>
                                                                        <span class="fs-3 d-block mt-1 text-muted">Messages & Emails</span>
                                                                    </div>
                                                                </a>

                                                                <a href="app-notes.html" class="dropdown-item px-7 d-flex align-items-center py-6">
                                                                    <span class="btn px-3 py-2 bg-danger-subtle rounded-1 text-danger shadow-none">
                                                                        <iconify-icon icon="solar:card-2-line-duotone" class="fs-7"></iconify-icon>
                                                                    </span>
                                                                    <div class="w-100 ps-3 ms-1">
                                                                        <h5 class="mb-0 mt-1 fs-4 fw-normal">My Task</h5>
                                                                        <span class="fs-3 d-block mt-1 text-muted">To-do and Daily
                                                                            Tasks</span>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="py-6 px-7 mb-1">
                                                                <a id="nav-logoutButton" class="btn btn-primary w-100">CERRAR SESIÓN</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- ------------------------------- -->
                                                <!-- end profile Dropdown -->
                                                <!-- ------------------------------- -->
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!-- ---------------------------------- -->
                                <!-- End Vertical Layout Header -->
                                <!-- ---------------------------------- -->

                                <!-- ------------------------------- -->
                                <!-- apps Dropdown in Small screen -->
                                <!-- ------------------------------- -->
                                <!--  Mobilenavbar -->
                                <div class="offcanvas offcanvas-start dropdown-menu-nav-offcanvas" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
                                    <nav class="sidebar-nav scroll-sidebar">
                                        <div class="offcanvas-header justify-content-between">
                                            <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/logos/favicon.png" alt="spike-img" class="img-fluid" />
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body h-n80" data-simplebar>
                                            <ul id="sidebarnav">
                                                <li class="sidebar-item">
                                                    <a class="sidebar-link gap-2 has-arrow" href="javascript:void(0)" aria-expanded="false">
                                                        <iconify-icon icon="solar:list-bold-duotone" class="fs-7"></iconify-icon>
                                                        <span class="hide-menu">Apps</span>
                                                    </a>
                                                    <ul aria-expanded="false" class="collapse first-level my-3">
                                                        <li class="sidebar-item py-2">
                                                            <a href="javascript:void(0)" class="d-flex align-items-center">
                                                                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/svgs/icon-dd-chat.svg" alt="spike-img" class="img-fluid" width="24" height="24" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                                                                    <span class="fs-2 d-block fw-normal text-muted">New messages arrived</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="sidebar-item py-2">
                                                            <a href="javascript:void(0)" class="d-flex align-items-center">
                                                                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/svgs/icon-dd-invoice.svg" alt="spike-img" class="img-fluid" width="24" height="24" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                                                                    <span class="fs-2 d-block fw-normal text-muted">Get latest invoice</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="sidebar-item py-2">
                                                            <a href="javascript:void(0)" class="d-flex align-items-center">
                                                                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/svgs/icon-dd-mobile.svg" alt="spike-img" class="img-fluid" width="24" height="24" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                                                                    <span class="fs-2 d-block fw-normal text-muted">2 Unsaved Contacts</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="sidebar-item py-2">
                                                            <a href="javascript:void(0)" class="d-flex align-items-center">
                                                                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/svgs/icon-dd-message-box.svg" alt="spike-img" class="img-fluid" width="24" height="24" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-1 bg-hover-primary">Email App</h6>
                                                                    <span class="fs-2 d-block fw-normal text-muted">Get new emails</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="sidebar-item py-2">
                                                            <a href="javascript:void(0)" class="d-flex align-items-center">
                                                                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/svgs/icon-dd-cart.svg" alt="spike-img" class="img-fluid" width="24" height="24" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                                                                    <span class="fs-2 d-block fw-normal text-muted">learn more information</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="sidebar-item py-2">
                                                            <a href="javascript:void(0)" class="d-flex align-items-center">
                                                                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/svgs/icon-dd-date.svg" alt="spike-img" class="img-fluid" width="24" height="24" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                                                                    <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="sidebar-item py-2">
                                                            <a href="javascript:void(0)" class="d-flex align-items-center">
                                                                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/svgs/icon-dd-lifebuoy.svg" alt="spike-img" class="img-fluid" width="24" height="24" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                                                                    <span class="fs-2 d-block fw-normal text-muted">Add new contact</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="sidebar-item py-2">
                                                            <a href="javascript:void(0)" class="d-flex align-items-center">
                                                                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/svgs/icon-dd-application.svg" alt="spike-img" class="img-fluid" width="24" height="24" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                                                                    <span class="fs-2 d-block fw-normal text-muted">To-do and Daily tasks</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <ul class="px-8 mt-6 mb-4">
                                                            <li class="sidebar-item mb-3">
                                                                <h5 class="fs-5 fw-semibold">Quick Links</h5>
                                                            </li>
                                                            <li class="sidebar-item py-2">
                                                                <a class="fw-semibold text-dark" href="javascript:void(0)">Pricing Page</a>
                                                            </li>
                                                            <li class="sidebar-item py-2">
                                                                <a class="fw-semibold text-dark" href="javascript:void(0)">Authentication Design</a>
                                                            </li>
                                                            <li class="sidebar-item py-2">
                                                                <a class="fw-semibold text-dark" href="javascript:void(0)">Register Now</a>
                                                            </li>
                                                            <li class="sidebar-item py-2">
                                                                <a class="fw-semibold text-dark" href="javascript:void(0)">404 Error Page</a>
                                                            </li>
                                                            <li class="sidebar-item py-2">
                                                                <a class="fw-semibold text-dark" href="javascript:void(0)">Notes App</a>
                                                            </li>
                                                            <li class="sidebar-item py-2">
                                                                <a class="fw-semibold text-dark" href="javascript:void(0)">User Application</a>
                                                            </li>
                                                            <li class="sidebar-item py-2">
                                                                <a class="fw-semibold text-dark" href="javascript:void(0)">Account Settings</a>
                                                            </li>
                                                        </ul>
                                                    </ul>
                                                </li>
                                                <li class="sidebar-item">
                                                    <a class="sidebar-link gap-2" href="javascript:void(0)" aria-expanded="false">
                                                        <iconify-icon icon="solar:chat-round-unread-line-duotone" class="fs-6 text-dark"></iconify-icon>
                                                        <span class="hide-menu">Chat</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-item">
                                                    <a class="sidebar-link gap-2" href="javascript:void(0)" aria-expanded="false">
                                                        <iconify-icon icon="solar:calendar-add-line-duotone" class="fs-6 text-dark"></iconify-icon>
                                                        <span class="hide-menu">Calendar</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-item">
                                                    <a class="sidebar-link gap-2" href="javascript:void(0)" aria-expanded="false">
                                                        <iconify-icon icon="solar:mailbox-line-duotone" class="fs-6 text-dark"></iconify-icon>
                                                        <span class="hide-menu">Email</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="app-header with-horizontal">
                                <nav class="navbar navbar-expand-xl container-fluid p-0">
                                    <ul class="navbar-nav">
                                        <li class="nav-item d-none d-xl-block">
                                            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/index.html" class="text-nowrap nav-link">
                                                <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/logos/logo-light.svg" class="dark-logo" width="180" alt="spike-img" />
                                                <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/logos/logo-dark.svg" class="light-logo" width="180" alt="spike-img" />
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="navbar-toggler p-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="p-2">
                                            <i class="ti ti-dots fs-7"></i>
                                        </span>
                                    </a>
                                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="javascript:void(0)" class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                                                <div class="nav-icon-hover-bg rounded-circle ">
                                                    <i class="ti ti-align-justified fs-7"></i>
                                                </div>
                                            </a>
                                            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                                                <li class="nav-item dropdown nav-icon-hover-bg rounded-circle d-flex d-lg-none">
                                                    <a class="nav-link position-relative" href="javascript:void(0)" id="drop3" aria-expanded="false">
                                                        <iconify-icon icon="solar:magnifer-linear" class="fs-7 text-dark"></iconify-icon>
                                                    </a>
                                                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop3">
                                                        <!--  Search Bar -->

                                                        <div class="modal-header border-bottom p-3">
                                                            <input type="search" class="form-control fs-3" placeholder="Try to searching ..." />

                                                        </div>
                                                        <div class="message-body p-3" data-simplebar="">
                                                            <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
                                                            <ul class="list mb-0 py-2">
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Modern</span>
                                                                        <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Dashboard</span>
                                                                        <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Contacts</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/contacts</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Posts</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Detail</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Shop</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Modern</span>
                                                                        <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Dashboard</span>
                                                                        <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Contacts</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/contacts</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Posts</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Detail</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Shop</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- ------------------------------- -->
                                                <!-- start language Dropdown -->
                                                <!-- ------------------------------- -->
                                                <li class="nav-item dropdown d-none d-lg-block">
                                                    <a class="nav-link position-relative shadow-none" href="javascript:void(0)" id="drop3" aria-expanded="false">
                                                        <form class="nav-link position-relative shadow-none">
                                                            <input type="text" class="form-control rounded-3 py-2 ps-5 text-dark" placeholder="Try to searching ...">
                                                            <iconify-icon icon="solar:magnifer-linear" class="text-dark position-absolute top-50 start-0 translate-middle-y text-dark ms-3"></iconify-icon>
                                                        </form>
                                                    </a>
                                                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop3">
                                                        <!--  Search Bar -->

                                                        <div class="modal-header border-bottom p-3">
                                                            <input type="search" class="form-control fs-3" placeholder="Try to searching ..." />

                                                        </div>
                                                        <div class="message-body p-3" data-simplebar="">
                                                            <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
                                                            <ul class="list mb-0 py-2">
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Modern</span>
                                                                        <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Dashboard</span>
                                                                        <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Contacts</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/contacts</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Posts</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Detail</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Shop</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Modern</span>
                                                                        <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Dashboard</span>
                                                                        <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Contacts</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/contacts</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Posts</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Detail</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                                                                    </a>
                                                                </li>
                                                                <li class="p-1 mb-1 bg-hover-light-black rounded">
                                                                    <a href="javascript:void(0)">
                                                                        <span class="fs-3 text-dark d-block">Shop</span>
                                                                        <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- ------------------------------- -->
                                                <!-- end language Dropdown -->
                                                <!-- ------------------------------- -->

                                                <li class="nav-item nav-icon-hover-bg rounded-circle">
                                                    <a class="nav-link moon dark-layout" href="javascript:void(0)">
                                                        <iconify-icon icon="solar:moon-line-duotone" class="moon fs-6"></iconify-icon>
                                                    </a>
                                                    <a class="nav-link sun light-layout" href="javascript:void(0)">
                                                        <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-6"></iconify-icon>
                                                    </a>
                                                </li>

                                                <!-- ------------------------------- -->
                                                <!-- start Messages cart Dropdown -->
                                                <!-- ------------------------------- -->
                                                <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                                                    <a class="nav-link position-relative" href="javascript:void(0)" id="drop3" aria-expanded="false">
                                                        <iconify-icon icon="solar:chat-dots-line-duotone" class="fs-6"></iconify-icon>
                                                        <div class="pulse">
                                                            <span class="heartbit border-warning"></span>
                                                            <span class="point text-bg-warning"></span>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop3">
                                                        <!--  Messages -->
                                                        <div class="d-flex align-items-center py-3 px-7">
                                                            <h3 class="mb-0 fs-5">Messages</h3>
                                                            <span class="badge bg-info ms-3">5 new</span>
                                                        </div>

                                                        <div class="message-body" data-simplebar>
                                                            <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
                                                                <span class="flex-shrink-0">
                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-2.jpg" alt="user" width="45" class="rounded-circle" />
                                                                </span>
                                                                <div class="w-100 ps-3">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <h5 class="mb-0 fs-3 fw-normal">
                                                                            Roman Joined the Team!
                                                                        </h5>
                                                                        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                                                    </div>
                                                                    <span class="fs-2 d-block mt-1 text-muted">Congratulate him</span>
                                                                </div>
                                                            </a>

                                                            <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
                                                                <span class="flex-shrink-0">
                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-3.jpg" alt="user" width="45" class="rounded-circle" />
                                                                </span>
                                                                <div class="w-100 ps-3">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <h5 class="mb-0 fs-3 fw-normal">
                                                                            New message received
                                                                        </h5>
                                                                        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                                                    </div>
                                                                    <span class="fs-2 d-block mt-1 text-muted">Salma sent you new
                                                                        message</span>
                                                                </div>
                                                            </a>

                                                            <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
                                                                <span class="flex-shrink-0">
                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-4.jpg" alt="user" width="45" class="rounded-circle" />
                                                                </span>
                                                                <div class="w-100 ps-3">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <h5 class="mb-0 fs-3 fw-normal">
                                                                            New Payment received
                                                                        </h5>
                                                                        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                                                    </div>
                                                                    <span class="fs-2 d-block mt-1 text-muted">Check your
                                                                        earnings</span>
                                                                </div>
                                                            </a>

                                                            <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
                                                                <span class="flex-shrink-0">
                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-5.jpg" alt="user" width="45" class="rounded-circle" />
                                                                </span>
                                                                <div class="w-100 ps-3">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <h5 class="mb-0 fs-3 fw-normal">
                                                                            New message received
                                                                        </h5>
                                                                        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                                                    </div>
                                                                    <span class="fs-2 d-block mt-1 text-muted">Salma sent you new
                                                                        message</span>
                                                                </div>
                                                            </a>

                                                            <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
                                                                <span class="flex-shrink-0">
                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-6.jpg" alt="user" width="45" class="rounded-circle" />
                                                                </span>
                                                                <div class="w-100 ps-3">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <h5 class="mb-0 fs-3 fw-normal">
                                                                            Roman Joined the Team!
                                                                        </h5>
                                                                        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                                                    </div>
                                                                    <span class="fs-2 d-block mt-1 text-muted">Congratulate him</span>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="py-6 px-7 mb-1">
                                                            <button class="btn btn-primary w-100">
                                                                See All Messages
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- ------------------------------- -->
                                                <!-- end Messages cart Dropdown -->
                                                <!-- ------------------------------- -->

                                                <!-- ------------------------------- -->
                                                <!-- start shortcut Dropdown -->
                                                <!-- ------------------------------- -->
                                                <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                                                    <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                                        <iconify-icon icon="solar:widget-add-line-duotone" class="fs-6"></iconify-icon>
                                                    </a>
                                                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up pb-0 overflow-hidden" aria-labelledby="drop2">
                                                        <!--  Shortcuts -->
                                                        <div class="d-flex align-items-center py-3 px-7 gap-6">
                                                            <h3 class="mb-0 fs-5">Shortcuts</h3>
                                                        </div>

                                                        <div class="row gx-0">
                                                            <div class="col-6">
                                                                <a href="app-invoice.html" class="dropdown-item px-7 border-top border-bottom border-end py-6 d-flex flex-column gap-2 justify-content-center text-center">
                                                                    <div class="bg-secondary-subtle rounded-3 m-auto round d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:checklist-minimalistic-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                                                                    </div>

                                                                    <h6 class="mb-0 fs-4">Invoice</h6>
                                                                    <span class="d-block text-body-color fs-3">Get latest invoice</span>
                                                                </a>
                                                            </div>
                                                            <div class="col-6">
                                                                <a href="app-chat.html" class="dropdown-item px-7 border-top border-bottom py-6 d-flex flex-column gap-2 justify-content-center text-center">
                                                                    <div class="bg-primary-subtle rounded-3 m-auto round d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:chat-square-call-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                                                                    </div>
                                                                    <h6 class="mb-0 fs-4">Chat</h6>
                                                                    <span class="d-block text-body-color fs-3">New messages</span>
                                                                </a>
                                                            </div>
                                                            <div class="col-6">
                                                                <a href="app-contact2.html" class="dropdown-item px-7 border-bottom border-end py-6 d-flex flex-column gap-2 justify-content-center text-center">
                                                                    <div class="bg-info-subtle rounded-3 m-auto round d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:phone-calling-rounded-bold-duotone" class="fs-7 text-info"></iconify-icon>
                                                                    </div>
                                                                    <h6 class="mb-0 fs-4">Contact</h6>
                                                                    <span class="d-block text-body-color fs-3">2 Unsaved Contacts</span>
                                                                </a>
                                                            </div>
                                                            <div class="col-6">
                                                                <a href="app-email.html" class="dropdown-item px-7 border-bottom py-6 d-flex flex-column gap-2 justify-content-center text-center">
                                                                    <div class="bg-danger-subtle rounded-3 m-auto round d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:mailbox-bold-duotone" class="fs-7 text-danger"></iconify-icon>
                                                                    </div>
                                                                    <h6 class="mb-0 fs-4">Email</h6>
                                                                    <span class="d-block text-body-color fs-3">Get new emails</span>
                                                                </a>
                                                            </div>
                                                            <div class="col-6">
                                                                <a href="page-user-profile.html" class="dropdown-item px-7 border-end py-6 d-flex flex-column gap-2 justify-content-center text-center">
                                                                    <div class="bg-warning-subtle rounded-3 m-auto round d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:shield-user-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                                                                    </div>
                                                                    <h6 class="mb-0 fs-4">Profile</h6>
                                                                    <span class="d-block text-body-color fs-3">More information</span>
                                                                </a>
                                                            </div>
                                                            <div class="col-6">
                                                                <a href="app-calendar.html" class="dropdown-item px-7 py-6 d-flex flex-column gap-2 justify-content-center text-center">
                                                                    <div class="bg-success-subtle rounded-3 m-auto round d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="solar:calendar-mark-bold-duotone" class="fs-7 text-success"></iconify-icon>
                                                                    </div>
                                                                    <h6 class="mb-0 fs-4">Calendar</h6>
                                                                    <span class="d-block text-body-color fs-3">Get dates</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- ------------------------------- -->
                                                <!-- end shortcut Dropdown -->
                                                <!-- ------------------------------- -->

                                                <!-- ------------------------------- -->
                                                <!-- start profile Dropdown -->
                                                <!-- ------------------------------- -->
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link position-relative ms-6" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                                        <div class="d-flex align-items-center flex-shrink-0">
                                                            <div class="user-profile me-sm-3 me-2">
                                                                <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-1.jpg" width="40" class="rounded-circle" alt="spike-img">
                                                            </div>
                                                            <span class="d-sm-none d-block"><iconify-icon icon="solar:alt-arrow-down-line-duotone"></iconify-icon></span>

                                                            <div class="d-none d-sm-block">
                                                                <h6 class="fs-4 mb-1 profile-name">
                                                                    Mike Nielsen
                                                                </h6>
                                                                <p class="fs-3 lh-base mb-0 profile-subtext">
                                                                    Admin
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                                                        <div class="profile-dropdown position-relative" data-simplebar>
                                                            <div class="d-flex align-items-center justify-content-between pt-3 px-7">
                                                                <h3 class="mb-0 fs-5">User Profile</h3>

                                                            </div>

                                                            <div class="d-flex align-items-center mx-7 py-9 border-bottom">
                                                                <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-1.jpg" alt="user" width="90" class="rounded-circle" />
                                                                <div class="ms-4">
                                                                    <h4 class="mb-0 fs-5 fw-normal">Mike Nielsen</h4>
                                                                    <span class="text-muted">super admin</span>
                                                                    <p class="text-muted mb-0 mt-1 d-flex align-items-center">
                                                                        <iconify-icon icon="solar:mailbox-line-duotone" class="fs-4 me-1"></iconify-icon>
                                                                        info@spike.com
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <div class="message-body">
                                                                <a href="page-user-profile.html" class="dropdown-item px-7 d-flex align-items-center py-6">
                                                                    <span class="btn px-3 py-2 bg-info-subtle rounded-1 text-info shadow-none">
                                                                        <iconify-icon icon="solar:wallet-2-line-duotone" class="fs-7"></iconify-icon>
                                                                    </span>
                                                                    <div class="w-100 ps-3 ms-1">
                                                                        <h5 class="mb-0 mt-1 fs-4 fw-normal">
                                                                            My Profile
                                                                        </h5>
                                                                        <span class="fs-3 d-block mt-1 text-muted">Account Settings</span>
                                                                    </div>
                                                                </a>

                                                                <a href="app-email.html" class="dropdown-item px-7 d-flex align-items-center py-6">
                                                                    <span class="btn px-3 py-2 bg-success-subtle rounded-1 text-success shadow-none">
                                                                        <iconify-icon icon="solar:shield-minimalistic-line-duotone" class="fs-7"></iconify-icon>
                                                                    </span>
                                                                    <div class="w-100 ps-3 ms-1">
                                                                        <h5 class="mb-0 mt-1 fs-4 fw-normal">My Inbox</h5>
                                                                        <span class="fs-3 d-block mt-1 text-muted">Messages & Emails</span>
                                                                    </div>
                                                                </a>

                                                                <a href="app-notes.html" class="dropdown-item px-7 d-flex align-items-center py-6">
                                                                    <span class="btn px-3 py-2 bg-danger-subtle rounded-1 text-danger shadow-none">
                                                                        <iconify-icon icon="solar:card-2-line-duotone" class="fs-7"></iconify-icon>
                                                                    </span>
                                                                    <div class="w-100 ps-3 ms-1">
                                                                        <h5 class="mb-0 mt-1 fs-4 fw-normal">My Task</h5>
                                                                        <span class="fs-3 d-block mt-1 text-muted">To-do and Daily
                                                                            Tasks</span>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="py-6 px-7 mb-1">
                                                                <a href="authentication-login.html" class="btn btn-primary w-100">Log Out</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- ------------------------------- -->
                                                <!-- end profile Dropdown -->
                                                <!-- ------------------------------- -->
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </header>
                        <!--  Header End -->
                        <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="card-body position-relative">
                                        <div>
                                            <h4 class="card-title mb-1">¡Bienvenido <?php echo $datos['nombre'] . " " . $datos['apellido']; ?>!</h4>
                                            <p class="card-subtitle mb-3 pb-1">Check All The Statastics</p>
                                            <button class="btn btn-primary rounded-pill" type="button">
                                                Visit Now
                                            </button>
                                        </div>
                                        <div class="school-img d-none d-sm-block">
                                            <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/backgrounds/school.png" class="img-fluid" alt="spike-img" />
                                        </div>

                                        <div class="d-sm-none d-block text-center">
                                            <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/backgrounds/school.png" class="img-fluid" alt="spike-img" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card warning-card overflow-hidden text-bg-primary">
                                            <div class="card-body p-4">
                                                <div class="mb-7">
                                                    <i class="ti ti-brand-producthunt fs-8 fw-lighter"></i>
                                                </div>
                                                <h5 class="text-white fw-bold fs-14 text-nowrap">
                                                    2358 <span class="fs-2 fw-light">+23%</span>
                                                </h5>
                                                <p class="opacity-50 mb-0 ">Sales</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="card danger-card overflow-hidden text-bg-primary">
                                            <div class="card-body p-4">
                                                <div class="mb-7">
                                                    <i class="ti ti-report-money fs-8 fw-lighter"></i>
                                                </div>
                                                <h5 class="text-white fw-bold fs-14">
                                                    356 <span class="fs-2 fw-light">+8%</span>
                                                </h5>
                                                <p class="opacity-50 mb-0">Refunds</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="card info-card overflow-hidden text-bg-primary">
                                            <div class="card-body p-4">
                                                <div class="mb-7">
                                                    <i class="ti ti-currency-dollar fs-8 fw-lighter"></i>
                                                </div>
                                                <h5 class="text-white fw-bold fs-14 text-nowrap">
                                                    $235.8K <span class="fs-2 fw-light">-3%</span>
                                                </h5>
                                                <p class="opacity-50 mb-0">Earnings</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex mb-4 justify-content-between align-items-center">
                                            <h4 class="card-title mb-0">Profit & Expenses</h4>

                                            <div class="dropdown">
                                                <button id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" class="rounded-circle btn-transparent rounded-circle btn-sm px-1 btn shadow-none">
                                                    <i class="ti ti-dots-vertical fs-7 d-block"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-md-7 d-flex flex-column">
                                                <div id="profit" class="profit-chart mx-n6"></div>
                                            </div>

                                            <div class="col-md-5">
                                                <div>
                                                    <div class="d-flex mb-4 pb-3">
                                                        <div class="p-2 bg-primary-subtle text-primary rounded-circle me-3 round-40 hstack justify-content-center">
                                                            <iconify-icon icon="solar:document-text-linear" class="fs-6"></iconify-icon>
                                                        </div>

                                                        <div>
                                                            <h5 class="fs-5 mb-0">$63,489.50</h5>
                                                            <p class="fs-3 mb-0">Earning This Year</p>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex mb-4 pb-3">
                                                        <div class="p-2 bg-info-subtle text-info rounded-circle me-3 round-40 hstack justify-content-center">
                                                            <iconify-icon icon="solar:quit-full-screen-circle-linear" class="fs-6"></iconify-icon>
                                                        </div>

                                                        <div>
                                                            <h5 class="fs-5 mb-0">
                                                                $48,820.00
                                                                <span class="fs-2 fw-light text-success">+23%</span>
                                                            </h5>
                                                            <p class="fs-3 mb-0">Profit This Year</p>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex mb-4 pb-3">
                                                        <div class="p-2 bg-secondary-subtle rounded-circle me-3 round-40 hstack justify-content-center">
                                                            <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/svgs/globe-1584990.svg" width="24" height="24" alt="spike-img" />
                                                        </div>

                                                        <div>
                                                            <h5 class="fs-5 mb-0">$103,582.50</h5>
                                                            <p class="fs-3 mb-0">Overall Earnings</p>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <button class="btn btn-primary rounded-pill">
                                                            View Full Report
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex mb-4 justify-content-between align-items-center">
                                            <h4 class="card-title mb-0">Product Sales</h4>

                                            <div class="dropdown">
                                                <button id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" class="rounded-circle btn-transparent rounded-circle btn-sm px-1 btn shadow-none">
                                                    <i class="ti ti-dots-vertical fs-7 d-block"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="test"></div>

                                        <div class="d-flex align-items-center mt-3">
                                            <div class="rounded-3 bg-primary-subtle me-3 round-40 d-flex align-items-center justify-content-center">
                                                <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/svgs/icon-user.svg" alt="spike-img" class="img-fluid">
                                            </div>
                                            <div>
                                                <div class="d-flex align-items-center">
                                                    <h5 class="mb-0 fs-4">36,436</h5>
                                                    <span class="badge rounded-pill bg-success-subtle text-success border-success border ms-1">+12%</span>
                                                </div>
                                                <p class="mb-0">New Customer</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card info-card bg-primary-subtle overflow-hidden shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex mb-7">
                                            <div class="p-6 bg-info shadow-info rounded-3 me-3">
                                                <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/svgs/idea-1585024.svg" width="24" height="24" alt="spike-img" />
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h5 class="fs-4 mb-0 fw-bold">New Goals</h5>
                                            <p class="text-info fw-normal fs-3 mb-0">83%</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" style="width: 75%" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-4">
                                            <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-3.jpg" class="rounded-circle" alt="spike-img" width="60" height="60" />
                                            <p class="text-warning fw-bold fs-3 mb-0">
                                                #1 in DevOps
                                            </p>
                                        </div>

                                        <h4 class="card-title mb-1">Adam Johnson</h4>
                                        <p class="card-subtitle">Top Developer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="card-title mb-0">Traffic Distribution</h4>

                                            <div class="dropdown">
                                                <button id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" class="rounded-circle btn-transparent rounded-circle btn-sm px-1 btn shadow-none">
                                                    <i class="ti ti-dots-vertical fs-7 d-block"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-5">
                                            <div class="d-sm-flex d-block align-items-center justify-content-center">
                                                <div id="grade" class="mx-n6"></div>

                                                <div class="ms-xxl-4">
                                                    <div class="d-flex align-items-baseline mb-4">
                                                        <div>
                                                            <i class="ti ti-circle text-primary me-2 fs-5"></i>
                                                        </div>

                                                        <div>
                                                            <h5 class="mb-0">4,106 <span class="fs-2 fw-light text-success">+23%</span>
                                                            </h5>
                                                            <p class="fs-3 mb-0">Oragnic Traffic</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-baseline mb-4">
                                                        <div>
                                                            <i class="ti ti-circle text-danger me-2 fs-5"></i>
                                                        </div>

                                                        <div>
                                                            <h5 class="mb-0">3,500</h5>
                                                            <p class="fs-3 mb-0">Refferal Traffic</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-baseline">
                                                        <div>
                                                            <i class="ti ti-circle text-warning me-2 fs-5"></i>
                                                        </div>

                                                        <div>
                                                            <h5 class="mb-0">3,319</h5>
                                                            <p class="fs-3 mb-0">Direct Traffic</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card mb-0 bg-danger-subtle gift-card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/backgrounds/gifts.png" class="img-fluid" alt="spike-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="figma-card mb-0">
                                        <div class="card-body">
                                            <a href="javascript:void(0)" class="fs-4 link-dark fw-bold">
                                                Figma Tips and Tricks with Stephan
                                            </a>
                                            <p class="fs-3 mt-2 mb-6">
                                                Checkout latest events going to happen in USA.
                                            </p>

                                            <ul class="d-flex align-items-center mb-0">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-4.jpg" width="40" height="40" class="rounded-circle border border-2 border-white" alt="spike-img" />
                                                    </a>
                                                </li>
                                                <li class="ms-n2">
                                                    <a href="javascript:void(0)">
                                                        <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-5.jpg" width="40" height="40" class="rounded-circle border border-2 border-white" alt="spike-img" />
                                                    </a>
                                                </li>
                                                <li class="ms-n2">
                                                    <a href="javascript:void(0)">
                                                        <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-3.jpg" width="40" height="40" class="rounded-circle border border-2 border-white" alt="spike-img" />
                                                    </a>
                                                </li>
                                                <li class="ms-n2">
                                                    <a href="javascript:void(0)">
                                                        <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-2.jpg" width="40" height="40" class="rounded-circle border border-2 border-white" alt="spike-img" />
                                                    </a>
                                                </li>
                                                <li class="ms-n2 align-middle d-flex">
                                                    <a href="javascript:void(0)" class="px-2">
                                                        <p class="mb-0">+18</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card acedamic">
                                    <div class="card-body">
                                        <div class="d-flex mb-4 justify-content-between align-items-center">
                                            <h4 class="card-title mb-0">Upcoming Scheduls</h4>

                                            <div class="dropdown">
                                                <button id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" class="rounded-circle btn-transparent rounded-circle btn-sm px-1 btn shadow-none">
                                                    <i class="ti ti-dots-vertical fs-7 d-block"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs shadow justify-content-between" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link me-1 active w-100" data-bs-toggle="tab" href="index2.html#one" role="tab">
                                                    <span>1 to 3</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link me-1" data-bs-toggle="tab" href="index2.html#two" role="tab">
                                                    <span>4 to 7</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link me-1" data-bs-toggle="tab" href="index2.html#three" role="tab">
                                                    <span>8 to 10</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content mt-3">
                                            <div class="tab-pane active" id="one" role="tabpanel">
                                                <div class="tab-content" data-simplebar>
                                                    <div class="row mt-4 gx-0">
                                                        <div class="col-2">
                                                            <ul>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">8:00</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">8:30</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">9:00</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">9:30</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">10:00</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">10:30</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">11:00</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">11:30</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">12:00</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">12:30</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">13:00</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-0">13:30</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-10">
                                                            <div class="acedamic-box h-100">
                                                                <div class="pt-3 px-1">
                                                                    <div class="acedamic-card mt-4 card rounded-1 p-3 shadow-sm">
                                                                        <h6 class="fs-4">
                                                                            Marketing Meeting
                                                                        </h6>
                                                                        <div class="d-flex align-items-center mb-5">
                                                                            <i class="ti ti-clock-hour-4 fs-5 me-1"></i>
                                                                            <p class="mb-0 fs-3">08:30 - 10:00</p>
                                                                        </div>
                                                                        <ul class="d-flex align-items-center mb-0">
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-5.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-3.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-4.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-2.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li class="align-middle d-flex">
                                                                                <a href="javascript:void(0)" class="link-secondary px-2">
                                                                                    <p class="mb-0">+18</p>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="acedamic-card border-success card rounded-1 p-3 shadow-sm">
                                                                        <h6 class="fs-4">
                                                                            Applied mathematics
                                                                        </h6>
                                                                        <div class="d-flex align-items-center mb-5">
                                                                            <i class="ti ti-clock-hour-4 fs-5 me-1"></i>
                                                                            <p class="mb-0 fs-3">10:15 - 11:45</p>
                                                                        </div>
                                                                        <ul class="d-flex align-items-center mb-0">
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-5.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-3.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-4.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-2.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li class="align-middle d-flex">
                                                                                <a href="javascript:void(0)" class="link-secondary px-2">
                                                                                    <p class="mb-0">+18</p>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="acedamic-card border-danger card rounded-1 p-3 shadow-sm">
                                                                        <h6 class="fs-4">
                                                                            SEO Session with Team
                                                                        </h6>
                                                                        <div class="d-flex align-items-center mb-5">
                                                                            <i class="ti ti-clock-hour-4 fs-5 me-1"></i>
                                                                            <p class="mb-0 fs-3">12:00 - 13:25</p>
                                                                        </div>
                                                                        <ul class="d-flex align-items-center mb-0">
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-5.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-3.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-4.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-2.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li class="align-middle d-flex">
                                                                                <a href="javascript:void(0)" class="link-secondary px-2">
                                                                                    <p class="mb-0">+18</p>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="two" role="tabpanel">
                                                <div class="tab-content" data-simplebar>
                                                    <div class="row gx-0 mt-4">
                                                        <div class="col-2">
                                                            <ul>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">8:00</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">8:30</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">9:00</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">9:30</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">10:00</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">10:30</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">11:00</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">11:30</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">12:00</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">12:30</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">13:00</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-0">13:30</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-10">
                                                            <div class="acedamic-box h-100">
                                                                <div class="pt-3 px-1">
                                                                    <div class="acedamic-card mt-4 card rounded-1 p-3 shadow-sm">
                                                                        <h6 class="fs-4">
                                                                            Marketing Meeting
                                                                        </h6>
                                                                        <div class="d-flex align-items-center mb-5">
                                                                            <i class="ti ti-clock-hour-4 fs-5 me-1"></i>
                                                                            <p class="mb-0 fs-3">08:30 - 10:00</p>
                                                                        </div>
                                                                        <ul class="d-flex align-items-center mb-0">
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-5.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-3.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-4.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-2.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li class="align-middle d-flex">
                                                                                <a href="javascript:void(0)" class="link-secondary px-2">
                                                                                    <p class="mb-0">+18</p>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="acedamic-card border-primary card rounded-1 p-3 shadow-sm">
                                                                        <h6 class="fs-4">
                                                                            Applied mathematics
                                                                        </h6>
                                                                        <div class="d-flex align-items-center mb-5">
                                                                            <i class="ti ti-clock-hour-4 fs-5 me-1"></i>
                                                                            <p class="mb-0 fs-3">10:15 - 11:45</p>
                                                                        </div>
                                                                        <ul class="d-flex align-items-center mb-0">
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-5.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-3.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-4.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-2.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li class="align-middle d-flex">
                                                                                <a href="javascript:void(0)" class="link-secondary px-2">
                                                                                    <p class="mb-0">+18</p>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="acedamic-card border-success card rounded-1 p-3 shadow-sm">
                                                                        <h6 class="fs-4">
                                                                            SEO Session with Team
                                                                        </h6>
                                                                        <div class="d-flex align-items-center mb-5">
                                                                            <i class="ti ti-clock-hour-4 fs-5 me-1"></i>
                                                                            <p class="mb-0 fs-3">12:00 - 13:25</p>
                                                                        </div>
                                                                        <ul class="d-flex align-items-center mb-0">
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-5.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-3.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-4.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-2.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li class="align-middle d-flex">
                                                                                <a href="javascript:void(0)" class="link-secondary px-2">
                                                                                    <p class="mb-0">+18</p>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="three" role="tabpanel">
                                                <div class="tab-content" data-simplebar>
                                                    <div class="row gx-0 mt-4">
                                                        <div class="col-2">
                                                            <ul>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">8:00</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">8:30</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">9:00</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">9:30</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">10:00</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">10:30</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">11:00</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">11:30</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">12:00</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">12:30</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-4 pb-2">13:00</p>
                                                                </li>
                                                                <li>
                                                                    <p class="fs-3 mb-0">13:30</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-10">
                                                            <div class="acedamic-box h-100">
                                                                <div class="pt-3 px-1">
                                                                    <div class="acedamic-card mt-4 card rounded-1 p-3 shadow-sm">
                                                                        <h6 class="fs-4">
                                                                            Marketing Meeting
                                                                        </h6>
                                                                        <div class="d-flex align-items-center mb-5">
                                                                            <i class="ti ti-clock-hour-4 fs-5 me-1"></i>
                                                                            <p class="mb-0 fs-3">08:30 - 10:00</p>
                                                                        </div>
                                                                        <ul class="d-flex align-items-center mb-0">
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-5.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-3.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-4.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-2.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li class="align-middle d-flex">
                                                                                <a href="javascript:void(0)" class="link-secondary px-2">
                                                                                    <p class="mb-0">+18</p>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="acedamic-card border-secondary card rounded-1 p-3 shadow-sm">
                                                                        <h6 class="fs-4">
                                                                            Applied mathematics
                                                                        </h6>
                                                                        <div class="d-flex align-items-center mb-5">
                                                                            <i class="ti ti-clock-hour-4 fs-5 me-1"></i>
                                                                            <p class="mb-0 fs-3">10:15 - 11:45</p>
                                                                        </div>
                                                                        <ul class="d-flex align-items-center mb-0">
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-5.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-3.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-4.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-2.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li class="align-middle d-flex">
                                                                                <a href="javascript:void(0)" class="link-secondary px-2">
                                                                                    <p class="mb-0">+18</p>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="acedamic-card border-info card rounded-1 p-3 shadow-sm">
                                                                        <h6 class="fs-4">
                                                                            SEO Session with Team
                                                                        </h6>
                                                                        <div class="d-flex align-items-center mb-5">
                                                                            <i class="ti ti-clock-hour-4 fs-5 me-1"></i>
                                                                            <p class="mb-0 fs-3">12:00 - 13:25</p>
                                                                        </div>
                                                                        <ul class="d-flex align-items-center mb-0">
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-5.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-3.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-n1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-4.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="me-1">
                                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-2.jpg" width="32" height="32" alt="spike-img" class="rounded-circle" />
                                                                                </a>
                                                                            </li>
                                                                            <li class="align-middle d-flex">
                                                                                <a href="javascript:void(0)" class="link-secondary px-2">
                                                                                    <p class="mb-0">+18</p>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex mb-4 justify-content-between align-items-center">
                                            <h4 class="card-title mb-0">Top Employees</h4>

                                            <div class="dropdown">
                                                <button id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" class="rounded-circle btn-transparent rounded-circle btn-sm px-1 btn shadow-none">
                                                    <i class="ti ti-dots-vertical fs-7 d-block"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="table-responsive" data-simplebar>
                                            <table class="table table-borderless align-middle text-nowrap mb-1">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Profile</th>
                                                        <th scope="col">Hour Rate</th>
                                                        <th scope="col">Skills</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-3">
                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-2.jpg" width="50" class="rounded-circle" alt="spike-img" />
                                                                </div>

                                                                <div>
                                                                    <h6 class="mb-1 fw-bolder">Mark J. Freeman</h6>
                                                                    <p class="fs-3 mb-0">Developer</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="fs-3 fw-normal mb-0">$80/hour</p>
                                                        </td>
                                                        <td>
                                                            <p class="fs-3 mb-0">
                                                                HTML
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-success-subtle rounded-pill text-success border-success border fs-2">Available</span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-3">
                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-3.jpg" width="50" class="rounded-circle" alt="spike-img" />
                                                                </div>

                                                                <div>
                                                                    <h6 class="mb-1 fw-bolder">Nina R. Oldman</h6>
                                                                    <p class="fs-3 mb-0">Designer</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="fs-3 fw-normal mb-0">$70/hour</p>
                                                        </td>
                                                        <td>
                                                            <p class="fs-3 mb-0">
                                                                JavaScript
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-primary-subtle rounded-pill text-primary border-primary border fs-2">On
                                                                Holiday</span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-3">
                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-4.jpg" width="50" class="rounded-circle" alt="spike-img" />
                                                                </div>

                                                                <div>
                                                                    <h6 class="mb-1 fw-bolder">Arya H. Shah</h6>
                                                                    <p class="fs-3 mb-0">Developer</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="fs-3 fw-normal mb-0">$40/hour</p>
                                                        </td>
                                                        <td>
                                                            <p class="fs-3 mb-0">
                                                                React
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-danger-subtle rounded-pill text-danger border border-danger fs-2">Absent</span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-3">
                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-5.jpg" width="50" class="rounded-circle" alt="spike-img" />
                                                                </div>

                                                                <div>
                                                                    <h6 class="mb-1 fw-bolder">June R. Smith</h6>
                                                                    <p class="fs-3 mb-0">Designer</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="fs-3 fw-normal mb-0">$20/hour</p>
                                                        </td>
                                                        <td>
                                                            <p class="fs-3 mb-0">
                                                                Vuejs
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-warning-subtle rounded-pill text-warning border border-warning fs-2">On
                                                                Leave</span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-3">
                                                                    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-6.jpg" width="50" class="rounded-circle" alt="spike-img" />
                                                                </div>

                                                                <div>
                                                                    <h6 class="mb-1 fw-bolder">Mark J. Freeman</h6>
                                                                    <p class="fs-3 mb-0">Developer</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="fs-3 fw-normal mb-0">$65/hour</p>
                                                        </td>
                                                        <td>
                                                            <p class="fs-3 mb-0">
                                                                Angular
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-indigo-subtle rounded-pill text-indigo border border-indigo fs-2">Available</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function handleColorTheme(e) {
                        document.documentElement.setAttribute("data-color-theme", e);
                    }
                </script>
                <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="icon ti ti-settings fs-7"></i>
                </button>

                <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                        <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
                            Settings
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body h-n80" data-simplebar>
                        <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

                        <div class="d-flex flex-row gap-3 customizer-box" role="group">
                            <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary" for="light-layout">
                                <i class="icon ti ti-brightness-up fs-7 me-2"></i>Light
                            </label>

                            <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary" for="dark-layout">
                                <i class="icon ti ti-moon fs-7 me-2"></i>Dark
                            </label>
                        </div>

                        <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
                        <div class="d-flex flex-row gap-3 customizer-box" role="group">
                            <input type="radio" class="btn-check" name="direction-l" id="ltr-layout" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary" for="ltr-layout">
                                <i class="icon ti ti-text-direction-ltr fs-7 me-2"></i>LTR
                            </label>

                            <input type="radio" class="btn-check" name="direction-l" id="rtl-layout" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary" for="rtl-layout">
                                <i class="icon ti ti-text-direction-rtl fs-7 me-2"></i>RTL
                            </label>
                        </div>

                        <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

                        <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
                            <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BLUE_THEME">
                                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                                    <i class="ti ti-check text-white d-flex icon fs-5"></i>
                                </div>
                            </label>

                            <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME">
                                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                                    <i class="ti ti-check text-white d-flex icon fs-5"></i>
                                </div>
                            </label>

                            <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PURPLE_THEME">
                                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                                    <i class="ti ti-check text-white d-flex icon fs-5"></i>
                                </div>
                            </label>

                            <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME">
                                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                                    <i class="ti ti-check text-white d-flex icon fs-5"></i>
                                </div>
                            </label>

                            <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CYAN_THEME">
                                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                                    <i class="ti ti-check text-white d-flex icon fs-5"></i>
                                </div>
                            </label>

                            <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME">
                                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                                    <i class="ti ti-check text-white d-flex icon fs-5"></i>
                                </div>
                            </label>
                        </div>

                        <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
                        <div class="d-flex flex-row gap-3 customizer-box" role="group">
                            <div>
                                <input type="radio" class="btn-check" name="page-layout" id="vertical-layout" autocomplete="off" />
                                <label class="btn p-9 btn-outline-primary" for="vertical-layout">
                                    <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical
                                </label>
                            </div>
                            <div>
                                <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout" autocomplete="off" />
                                <label class="btn p-9 btn-outline-primary" for="horizontal-layout">
                                    <i class="icon ti ti-layout-navbar fs-7 me-2"></i>Horizontal
                                </label>
                            </div>
                        </div>

                        <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

                        <div class="d-flex flex-row gap-3 customizer-box" role="group">
                            <input type="radio" class="btn-check" name="layout" id="boxed-layout" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary" for="boxed-layout">
                                <i class="icon ti ti-layout-distribute-vertical fs-7 me-2"></i>Boxed
                            </label>

                            <input type="radio" class="btn-check" name="layout" id="full-layout" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary" for="full-layout">
                                <i class="icon ti ti-layout-distribute-horizontal fs-7 me-2"></i>Full
                            </label>
                        </div>

                        <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
                        <div class="d-flex flex-row gap-3 customizer-box" role="group">
                            <a href="javascript:void(0)" class="fullsidebar">
                                <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar" autocomplete="off" />
                                <label class="btn p-9 btn-outline-primary" for="full-sidebar">
                                    <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full
                                </label>
                            </a>
                            <div>
                                <input type="radio" class="btn-check " name="sidebar-type" id="mini-sidebar" autocomplete="off" />
                                <label class="btn p-9 btn-outline-primary" for="mini-sidebar">
                                    <i class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse
                                </label>
                            </div>
                        </div>

                        <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

                        <div class="d-flex flex-row gap-3 customizer-box" role="group">
                            <input type="radio" class="btn-check" name="card-layout" id="card-with-border" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary" for="card-with-border">
                                <i class="icon ti ti-border-outer fs-7 me-2"></i>Border
                            </label>

                            <input type="radio" class="btn-check" name="card-layout" id="card-without-border" autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary" for="card-without-border">
                                <i class="icon ti ti-border-none fs-7 me-2"></i>Shadow
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dark-transparent sidebartoggler"></div>
        </div>
    <?php } ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const logoutButton = document.getElementById('logoutButton');

            logoutButton.addEventListener('click', function(event) {
                event.preventDefault();

                Swal.fire({

                    icon: 'question',
                    title: '¿Estás seguro/a?',
                    text: 'Se cerrará la sesión.',
                    color: '#000',
                    confirmButtonColor: '#FFAA00',
                    confirmButtonText: 'CERRAR SESIÓN',
                    showCloseButton: true,
                    showCancelButton: true,
                    cancelButtonColor: '#000000',
                    cancelButtonText: 'CANCELAR'

                }).then((result) => {

                    if (result.isConfirmed) {
                        window.location.href = '../../INCLUDES/Login/logout.php';
                    }

                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const logoutButton = document.getElementById('nav-logoutButton');

            logoutButton.addEventListener('click', function(event) {
                event.preventDefault();

                Swal.fire({

                    icon: 'question',
                    title: '¿Estás seguro/a?',
                    text: 'Se cerrará la sesión.',
                    color: '#000',
                    confirmButtonColor: '#FFAA00',
                    confirmButtonText: 'CERRAR SESIÓN',
                    showCloseButton: true,
                    showCancelButton: true,
                    cancelButtonColor: '#000000',
                    cancelButtonText: 'CANCELAR'

                }).then((result) => {

                    if (result.isConfirmed) {
                        window.location.href = '../../INCLUDES/Login/logout.php';
                    }

                });
            });
        });
    </script>

    <!-- Import Js Files -->
    <script src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/js/theme/app.init.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/js/theme/theme.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/js/theme/app.min.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/js/theme/sidebarmenu.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/js/theme/feather.min.js"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/js/dashboards/dashboard2.js"></script>
    </body>

    </html>