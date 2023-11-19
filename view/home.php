<br>

<h2 class="text-center custom-h">SẢN PHẨM CỦA CHÚNG TÔI</h2>

<br>

<div class="container">
    <div class="row row-cols-1 row-cols-lg-4 g-5 g-lg-3 text-center">
        <?php 
        foreach ($product as $key => $product) { ?>
        <div class="col">
            <div class="p-3 border bg-light">
                <img src="pic/<?php echo $product['image']?>" alt="" class="pic-ds">
                <p class="fw-bold fs-5 mt-3"><?php echo $product['name']?></p>
                <div class="d-flex justify-content-evenly mb-2 ft-size">
                    <a href="" class="nav-link view-bg">CHI TIẾT VỀ CÂY</a>
                    <a href="index.php?page=cart" class="nav-link pick-bg">ĐẶT HÀNG</a>
                </div>
            </div>
        </div>
        <?php  }  ?>


    </div>
</div>

<h2 class="text-center custom-h">ĐÔI CHÚT VỀ CHÚNG TÔI</h2>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-derk">
                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-journal-check"></i>
                    <h5 class="m-0 ms-3">MANUAL</h5>
                </div>
                <p>
                    Ngoài nhu cầu trồng rau sạch cho gia đình thì việc tự tay gieo trồng và chứng kiến 1 hạt giống hoa
                    nảy mầm
                    rồi ra hoa cũng là 1 trong những thú vị của cuộc sống. Chúng tôi sẻ chia sẻ cho bạn những kinh
                    nghiệm các
                    bước cơ bản về việc trồng cây.
                </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-derk">
                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-robot"></i>
                    <h5 class="m-0 ms-3">IOT-FARM</h5>
                </div>
                <p>
                    IoT trong nông nghiệp sử dụng rô-bốt, máy bay không người lái, cảm biến từ xa và hình ảnh máy tính
                    kết hợp
                    với các công cụ phân tích và học máy liên tục phát triển để theo dõi cây trồng, khảo sát và lập bản
                    đồ đồng
                    ruộng, đồng thời cung cấp dữ liệu cho nông dân để lập kế hoạch quản lý trang trại hợp lý nhằm tiết
                    kiệm cả
                    thời gian và tiền bạc.
                </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-derk">
                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-fast-forward-circle"></i>
                    <h5 class="m-0 ms-3">AUTOMATION</h5>
                </div>
                <p>
                    Để tạo thuận lợi cho việc xác định địa điểm trồng, theo dõi việc quản lý và chăm sóc cây xanh trong
                    Chương trình trồng 1 tỷ cây xanh do Chính phủ phát động, Bộ Tài nguyên và Môi trường đã triển khai
                    xây dựng cơ sở dữ liệu bản đồ cây Việt Nam (Tree Map) thông qua ứng dụng công nghệ số 4.0 trên điện
                    thoại thông minh.
                </p>
            </div>
        </div>
    </div>
</div>