<?php

include("../../INCLUDES/Conexion/conexion.php");
session_start();

// --------------------------------------------

if (isset($_SESSION['id_user']) && $_SESSION['id_rol'] == 1) { //SUPER ADMINISTRADOR
    header("Location: ../../VIEWS/Dashboard/index.php");
} elseif (isset($_SESSION['id_user']) && $_SESSION['id_rol'] == 2) {
    header("Location: ../../VIEWS/Dashboard/index.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- --- SWEETALERT--- -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- ----------------- -->

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="../../ASSETS/Logos/logo_1.png" />

    <!-- Core Css -->
    <link rel="stylesheet" href="../../CSS/style.css" />

    <title>INICIAR SESIÓN | CSSC INVENTARIO</title>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="../../ASSETS/Logos/logo_1.png" alt="loader" class="lds-ripple img-fluid" style="width: 5%;" />
    </div>


    <!-- SWEETALERT -->
    <?php
    if (isset($_SESSION['alerta'])) { ?>
        <script>
            Swal.fire({
                icon: '<?php echo $_SESSION['alerta']['icon']; ?>',
                title: '<?php echo $_SESSION['alerta']['title']; ?>',
                text: '<?php echo $_SESSION['alerta']['text']; ?>',
                showConfirmButton: false,
                timer: 5000
            })
        </script>
    <?php
        unset($_SESSION['alerta']);
    }
    ?>


    <div id="main-wrapper" class="p-0 bg-white auth-customizer-none">
        <div class="auth-login position-relative overflow-hidden d-flex align-items-center justify-content-center px-7 px-xxl-0 rounded-3 h-n20">
            <div class="auth-login-shape position-relative w-100">
                <div class="auth-login-wrapper card mb-0 container position-relative z-1 h-100 mh-n100" data-simplebar>
                    <div class="card-body">
                        <style>
                            .logo-center {
                                padding: 0 0 0 200px;
                            }

                            @media only screen and (max-width: 1400px) {
                                .logo-responsive {
                                    padding: 0 0 0 160px;
                                }
                            }

                            @media only screen and (max-width: 1300px) {
                                .logo-responsive {
                                    padding: 0 0 0 120px;
                                }
                            }

                            @media only screen and (max-width: 991px) {
                                .logo-responsive {
                                    padding: 0 0 0 0;
                                    text-align: center;
                                }
                            }
                        </style>
                        <div class="logo-responsive logo-center">
                            <img src="../../ASSETS/Logos/logo_2.png" class="light-logo" alt="Logo-Dark" style="width: 200px;" />
                            <img src="../../ASSETS/Logos/logo_2.png" class="dark-logo" alt="Logo-light" style="width: 200px;" />
                        </div>

                        <div class="row align-items-center justify-content-around pt-6 pb-5">
                            <div class="col-lg-6 col-xl-5 d-none d-lg-block">
                                <div class="text-center text-lg-start">
                                    <img src="../../ASSETS/SVG/undraw_real_time_analytics_re_yliv.svg" alt="spike-img" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-5">
                                <center>
                                    <h2 class="mb-6 fs-8 fw-bolder">Bienvenido | CSSC Inventario</h2>
                                </center>
                                <center>
                                    <p class="text-dark fs-4 mb-7"><u>PANEL ADMINISTRADOR</u></p>
                                </center>

                                <form method="POST" action="../../INCLUDES/Login/login.php">
                                    <div class="mb-7">
                                        <label for="exampleInputEmail1" class="form-label fw-bold">USUARIO</label>
                                        <input name="user" type="text" class="form-control py-6" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-9">
                                        <label for="exampleInputPassword1" class="form-label fw-bold">CONTRASEÑA</label>
                                        <input name="password" type="password" class="form-control py-6" id="exampleInputPassword1">
                                    </div>
                                    <div class="d-md-flex align-items-center justify-content-between mb-7 pb-1">
                                        <!-- <div class="form-check mb-3 mb-md-0">
                                            <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label text-dark fs-3" for="flexCheckChecked">
                                                Remeber this Device
                                            </label>
                                        </div> -->
                                    </div>

                                    <style>
                                        .forgot-password {
                                            color: #000;
                                        }

                                        .forgot-password:hover {
                                            color: #FFAA00;
                                            transition: 0.25s;
                                        }
                                    </style>

                                    <center>
                                        <a class="fw-medium fs-3 fw-bold forgot-password" href="">¿Olvidaste tu contraseña?</a>
                                    </center>
                                    <br>

                                    <button type="submit" name="login" class="btn btn-primary w-100 mb-7 rounded-pill">INGRESAR</button>

                                </form>
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
        </div>
        <div class="dark-transparent sidebartoggler"></div>
    </div>
    <!-- Import Js Files -->
    <script src="../../JS/Login/bootstrap.bundle.min.js"></script>
    <script src="../../JS/Login/simplebar.min.js"></script>
    <script src="../../JS/Login/app.init.js"></script>
    <script src="../../JS/Login/theme.js"></script>
    <script src="../../JS/Login/app.min.js"></script>
    <script src="../../JS/Login/feather.min.js"></script>

    <!-- solar icons -->
    <script src="../../JS/Login/iconify-icon.min.js"></script>
</body>

</html>