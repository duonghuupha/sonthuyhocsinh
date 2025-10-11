<?php
if(!isset($_SESSION['data'])){
    header("Location: ".URL.'/index/logout');
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SONTHUY Education</title>
    <link href="<?php echo URL.'/styles/css/' ?>bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL.'/styles/css/' ?>all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL.'/styles/css/' ?>styles.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Header -->
    <header class="bg-success text-white shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container d-flex justify-content-between align-items-center">

                <!-- Logo + Tên -->
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="<?php echo URL.'/styles/images/' ?>logo_son_thuy.png" alt="Logo" class="me-2"
                        style="height:50px;">
                    <span class="fw-bold fs-5">SONTHUY Education</span>
                </a>

                <!-- Nút toggle hiển thị trên mobile -->
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu hiển thị trên desktop -->
                <div class="collapse navbar-collapse justify-content-end d-none d-lg-flex">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Đăng nhập</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Menu Offcanvas (Dialog hiển thị trên mobile) -->
        <div class="offcanvas offcanvas-end text-bg-success" tabindex="-1" id="offcanvasMenu"
            aria-labelledby="offcanvasMenuLabel" data-bs-scroll="true" data-bs-backdrop="true">
            <div class="offcanvas-header border-bottom border-light">
                <h5 class="offcanvas-title fw-bold" id="offcanvasMenuLabel">
                    <i class="fa-solid fa-graduation-cap me-2"></i> SONTHUY Education
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <ul class="navbar-nav text-start">
                    <li class="nav-item mb-3">
                        <a class="nav-link text-white fs-5" href="#">
                            <i class="fa-solid fa-house me-2"></i> Trang chủ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fs-5" href="#">
                            <i class="fa-solid fa-right-to-bracket me-2"></i> Đăng nhập
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>