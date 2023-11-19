<?php
if (isset($_SESSION["user"]) && count($_SESSION["user"]) > 0) {
    extract($_SESSION["user"]);
    $html_account = '
            <li><a href="register">Xin chào, <span class="text-danger">' . $username . '</span></a></li>
            <li><a href="index.php?page=profile&act=info">Thông Tin Cá Nhân</a></li>
            <li><a href="index.php?page=order">Đơn Hàng</a></li>
            <li><a href="index.php?page=changePassword">Đổi Mật Khẩu</a></li>
            <li><a class="btn btn-danger p-2 text-white" href="index.php?page=logout">Đăng Xuất</a></li>
        ';
} else {
    $html_account = '
            <li><a href="index.php?page=register">Đăng Ký</a></li>
            <li><a href="index.php?page=login">Đăng Nhập</a></li>
        ';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>PLANTS</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navback-bg">
        <div class="container-fluid">
            <a class="navbar-brand text-white me-3 fw-bold fs-2" href="index.php?page=home">PLANTS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item site me-2">
                        <a class="nav-link text-white fs-6" aria-current="page" href="index.php?page=home">TRANG CHỦ</a>
                    </li> -->

                    <li class="nav-item site me-2">
                        <a class="nav-link text-white fs-6" href="index.php?page=about">GIỚI THIỆU</a>
                    </li>

                    <li class="nav-item dropdown site me-2">
                        <a class="nav-link dropdown-toggle text-white fs-6" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            CÁC GIỐNG CÂY
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">CÂY CẢNH</a></li>
                            <li><a class="dropdown-item" href="#">HOA</a></li>
                            <li><a class="dropdown-item" href="#">CÂY ĂN QUẢ</a></li>
                        </ul>
                    </li>

                    <li class="nav-item site me-2">
                        <a class="nav-link text-white fs-6" href="#">KINH NGHIỆM - KỸ THUẬT</a>
                    </li>

                    <li class="nav-item site me-2">
                        <a class="nav-link text-white fs-6" href="#">TIN TỨC</a>
                    </li>

                    <li class="nav-item site me-2">
                        <a class="nav-link text-white fs-6" href="index.php?page=contact">LIÊN HỆ</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Bạn đang tìm điều gì?"
                        aria-label="Search">
                    <button class="btn wid custom-btn me-2" type="submit">
                        <i class="bi bi-search"></i>
                    </button>


                    <a class="btn wid custom-btn me-2" class="login" href="index.php?page=login">
                        <i class="bi bi-person-circle"></i>
                    </a>

                    <a class="btn wid custom-btn me-2" class="login" href="index.php?page=cart">
                        <i class="bi bi-basket2"></i>
                    </a>

                </form>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="pic/back.jpg" class="d-block w-100" alt="#">
                <div class="carousel-caption d-none d-md-block">
                    <div class="text-dark bg-light" style="border-radius: 20px;">
                        <h5>MANUAL</h5>
                        <p>PLANTS sẽ hướng dẫn bạn về cách nuôi trồng và chăm sóc cây một cách tận tình.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="pic/back5.jpg" class="d-block w-100" alt="#">
                <div class="carousel-caption d-none d-md-block">
                    <div class="text-dark bg-light" style="border-radius: 20px;">
                        <h5>IOT-FARM</h5>
                        <p>PLANTS sử dụng những rô-bốt, máy bay không người lái, ... vào trồng trọt.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="pic/back3.jpg" class="d-block w-100" alt="#">
                <div class="carousel-caption d-none d-md-block">
                    <div class="text-dark bg-light" style="border-radius: 20px;">
                        <h5>AUTOMATION</h5>
                        <p>PLANTS đã ứng dụng công nghệ số 4.0 trên điện thoại thông minh.</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>