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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PLANTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11.0.3/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>PLANTS</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navback-bg">
        <div class="container-fluid">
            <a class="navbar-brand text-white me-3 fw-bold fs-2" href="index.php">PLANTS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item site me-2">
                        <a class="nav-link text-white fs-6" aria-current="page" href="index.php">TRANG CHỦ</a>
                    </li>

                    <li class="nav-item site me-2">
                        <a class="nav-link text-white fs-6" href="about/php">GIỚI THIỆU</a>
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
                        <a class="nav-link text-white fs-6" href="contact.php">LIÊN HỆ</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Bạn đang tìm điều gì?"
                        aria-label="Search">
                    <a href="index.php?page=cart" class="btn wid custom-btn me-2">
                        <i class="bi bi-search"></i>
                    </a>
                    <button class="btn wid custom-btn me-2" type="submit">
                        <i class="bi bi-basket2"></i>
                    </button>
                    <a href="index.php?page=register" class="btn wid custom-btn">
                        <i class="bi bi-person-circle"></i>
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