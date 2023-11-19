<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>PLANTS</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light navback-bg">
        <div class="container-fluid">
          <a class="navbar-brand text-white me-3 fw-bold fs-2" href="#">PLANTS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item site me-2">
                <a class="nav-link text-white fs-6" aria-current="page" href="#">TRANG CHỦ</a>
              </li>

              <li class="nav-item site me-2">
                <a class="nav-link text-white fs-6" href="#">GIỚI THIỆU</a>
              </li>

              <li class="nav-item dropdown site me-2">
                <a class="nav-link dropdown-toggle text-white fs-6" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                <a class="nav-link text-white fs-6" href="#">LIÊN HỆ</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Bạn đang tìm điều gì?" aria-label="Search">
              <button class="btn wid custom-btn me-2" type="submit">
                <i class="bi bi-search"></i>
              </button>
              <button class="btn wid custom-btn" type="submit">
                <i class="bi bi-basket2"></i>
              </button>
            </form>
          </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">LIÊN HỆ VỚI CHÚNG TÔI</h2>
        <div class="h-line bg-dark"></div>
      </div>
    
      <div class="contact">
          <div class="row">
              <div class="col-lg-6 col-md-2 mb-3 px-4">
                  <div class="bg-white rounded shadow p-4">
                      <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5252438256207!2d106.63307177460322!3d10.771025059294253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f469393e3f1%3A0xa1101ae1ceb4f228!2sYOUTH%20FARM%20COFFEE!5e0!3m2!1svi!2s!4v1698485210411!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <h5>ADDRESS</h5>
                      <a href="https://maps.app.goo.gl/FL3TXqq1FdJc1sDz6" target="_blank" class="d-inline-block text-decoration-none text-dark">
                          <i class="bi bi-geo-alt-fill me-2"></i> Youth Farm
                      </a>
                      
                      <h5>CALL US</h5>
                      <a href="tel: 0123456789" class="d-inline-block mb-2 text-decoration-none text-dark">
                          <i class="bi bi-telephone-fill me-2"></i>0123456789
                      </a>
    
                      <br>
    
                      <a href="tel: 0123456789" class="d-inline-block mb-2 text-decoration-none text-dark">
                          <i class="bi bi-telephone-fill me-2"></i>0123456789
                      </a>
    
                      <h5>EMAIL</h5>
                      <a href="mailto: ask.tien16467@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                          <i class="bi bi-envelope-fill me-2"></i>ask.tien16467@gmail.com
                      </a>
    
                      <h2>FOLLOW US</h2>
                      <a href="#" class="p-2 rounded mb-3 text-decoration-none acol">
                          <i class="bi bi-facebook me-1"></i>
                      </a>
    
                      <a href="#" class="p-2 rounded mb-4 text-decoration-none acol">
                          <span>
                          <i class="bi bi-instagram me-1"></i>
                          </span>
                      </a>
    
                      <a href="#" class="p-2 rounded mb-4 text-decoration-none acol">
                          <span>
                          <i class="bi bi-twitter me-1"></i>
                          </span>
                      </a>
                  </div>
              </div>
    
              <div class="col-lg-6 col-md-6 px-4">
                  <div class="bg-white rounded shadow p-4">
                      <form method="POST">
                      <h5>Send a messager</h5>    
    
                      <div class="mb-3">
                          <label class="form-label">Name</label>
                          <input type="text" name="name" required class="form-control">
                      </div>
    
                      <div class="mb-3">
                          <label class="form-label">Email</label>
                          <input type="email" name="email" required class="form-control">
                      </div>
    
                      <div class="mb-3">
                          <label class="form-label">Subject</label>
                          <input type="text" name="subject" required class="form-control">
                      </div>
    
                      <div class="mb-3">
                          <label class="form-label">Message</label>
                          <textarea class="form-control" name="message" required rows="3" style="resize: none;"></textarea>
                      </div>
    
                      <button type="submit" name="send" class="btn custom-btn mt-3">SEND</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>

    <div class="container-fluid navback-bg mt-5">
        <div class="row">
            <div class="col-lg-4 p-4">
                <h3 class="h-font fw-bold fs-3 mb-2 text-white">PLANTS</h3>
                <p class="text-white">
                    Luôn nỗ lực hoàn thiện và phát triển sự chuyên môn hoá bằng 
                    những cải tiến không ngừng nhằm giữ vững vị trí hàng đầu trong 
                    các lĩnh vực hoạt động. Đảm bảo một môi trường làm việc chuyên 
                    nghiệp, năng động, công bằng và tạo cơ hội phát triển sự nghiệp 
                    lâu dài cho tất cả nhân viên. Cam kết hợp tác lâu dài với đối tác 
                    và khách hàng bằng chất lượng sản phẩm & dịch vụ hoàn hảo trên cơ 
                    sở các bên cùng có lợi.</p>
            </div>

            <div class="col-lg-4 p-4">
                <h5 class="mb-3 text-white fw-bold fs-3">LINKS</h5>
                <a href="" class="d-inline-block mb-2 text-white text-decoration-none">TRANG CHỦ</a> <br>
                <a href="" class="d-inline-block mb-2 text-white text-decoration-none">GIỚI THIỆU</a> <br>
                <a href="" class="d-inline-block mb-2 text-white text-decoration-none">CÁC GIỐNG CÂY</a> <br>
                <a href="" class="d-inline-block mb-2 text-white text-decoration-none">KINH NGHIỆM - KỸ THUẬT</a> <br>
                <a href="" class="d-inline-block mb-2 text-white text-decoration-none">TIN TỨC</a> <br>
                <a href="" class="d-inline-block mb-2 text-white text-decoration-none">LIÊN HỆ</a> 
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Bạn đang tìm điều gì?" aria-label="Search">
                    <button class="btn custom-btn" type="submit">TÌM KIẾM</button>
                </form>
            </div>

            <div class="col-lg-4 p-4">
                <h5 class="mb-3 text-white fw-bold fs-3">FOLLOW US</h5>
                <a href="" class="d-inline-block mb-2 text-white text-decoration-none">
                    <i class="bi bi-facebook me-1"></i>FACEBOOK
                </a> <br>
                <a href="" class="d-inline-block mb-2 text-white text-decoration-none">
                    <i class="bi bi-instagram me-1"></i>INSTAGRAM
                </a> <br>
                <a href="" class="d-inline-block mb-2 text-white text-decoration-none">
                    <i class="bi bi-twitter me-1"></i>TWITTER
                </a> <br>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>