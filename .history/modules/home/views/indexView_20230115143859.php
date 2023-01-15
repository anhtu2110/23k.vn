<?php
get_header();
?>
<div class="list-benefit d-block d-lg-none">
    <ul class="benefit d-flex justify-content-between">
        <li class="benefit-item">Lãi suất hấp dẫn</li>
        <li class="benefit-item">Thủ tục đơn giản </li>
        <li class="benefit-item">Giải ngân dễ dàng</li>
    </ul>
</div>
<section class="home-banner d-none d-md-block">
    <div id="banner" class="banner carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            if (!empty($list_slider_desktop)) {
                $i = 0;
                foreach ($list_slider_desktop as $key => $value) {
            ?>
                    <li data-target="#banner" data-slide-to="<?php echo $i ?>"></li>
            <?php
                }
            }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php
            if (!empty($list_slider_desktop)) {
                foreach ($list_slider_desktop as $key => $value) {
            ?>
                    <div class="carousel-item" data-interval="2500">
                        <a href="thong-tin-dang-ky.html#wp-info-reg">
                            <img class="desktop" src="<?php echo $value['path_client'] ?>" alt="">
                        </a>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <a href="#banner" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#banner" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>
<section class="home-banner-mobile d-block d-md-none">
    <div id="banner-mobile" class="banner-mobile carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            if (!empty($list_slider_mobile)) {
                $i = 0;
                foreach ($list_slider_mobile as $key => $value) {
            ?>
                    <li data-target="#banner-mobile" data-slide-to="<?php echo $i ?>"></li>
            <?php
                }
            }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php
            if (!empty($list_slider_mobile)) {
                foreach ($list_slider_mobile as $key => $value) {
            ?>
                    <div class="carousel-item" data-interval="2500">
                        <a href="thong-tin-dang-ky.html#wp-info-reg">
                            <img class="desktop" src="<?php echo $value['path_client'] ?>" alt="">
                        </a>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <a href="#banner-mobile" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#banner-mobile" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>
<!-- END HOME-BANNER  -->
<div class="home-form-wrapper">
    <div class="container">
        <!-- <div class="row"> -->
        <div class="form-subscribe-wrap d-flex w-100">
            <div class="row">
                <div class="form-intro col-md-7 order-1 order-md-0">
                    <h1 class="my-5 my-lg-0">Thông tin gói vay</h1>
                    <ul class="list-content-info">
                        <li class="item-option"><span class="icon"><i class="fa-regular fa-circle-check"></i></span>Chỉ cần Căn cước công dân hoặc Sổ hộ khẩu, duyệt vay nhanh chóng trong 15 phút</li>
                        <li class="item-option"><span class="icon"><i class="fa-regular fa-circle-check"></i></span>15 phút có tiền</li>
                        <li class="item-option"><span class="icon"><i class="fa-regular fa-circle-check"></i></span>Khoản vay tối đa 50 triệu, xét duyệt nhanh chóng</li>
                        <li class="item-option"><span class="icon"><i class="fa-regular fa-circle-check"></i></span>Lãi suất vay hợp lý</li>
                    </ul>
                    <div class="wrapper-button">
                        <a href="thong-tin-dang-ky.html">
                            <button class="btn-detail">Vay ngay</button>
                        </a>
                    </div>
                </div>
                <!-- END FORM-INTRO  -->
                <div class="wrapper-img-option col-md-5 order-0 order-md-1">
                    <img class="d-block" src="<?php echo $img_option_home ?>" alt="">
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
</div>
<div class="container">
    <div class="should-choose-home">
        <div class="wp-title">
            <h2 class="title-should-choose text-center text-uppercase">Bạn nên chọn 23K</h2>
            <h2 class="title-should-choose text-center text-uppercase">Giải pháp tài chính tin cậy</h2>
        </div>
        <div id="should-choose" class="container box">
            <!-- <div class="head-box">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">Bạn nên chọn 23k</p>
                </div>
            </div>
        </div> -->
            <ul class="list-reason">
                <div class="row text-center">
                    <div class="col-6 col-md-4 col-xl-2">
                        <li class="reason-item">
                            <a href="thong-tin-dang-ky.html"><img src="./public/images/should_choose/thu_tuc.png" alt=""></a>
                            <p>Thủ tục đơn giản chỉ cần CCCD & sổ hộ khẩu Hà Nội</p>
                        </li>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <li class="reason-item">
                            <a href="thong-tin-dang-ky.html"><img src="./public/images/should_choose/tham_dinh.png" alt=""></a>
                            <p>
                                Thẩm định nhanh chóng linh hoạt
                            </p>
                        </li>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <li class="reason-item">
                            <a href="thong-tin-dang-ky.html"><img src="./public/images/should_choose//lai_suat.png" alt=""></a>
                            <p>Lãi suất ưu đãi nhất Hà Nội</p>
                        </li>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <li class="reason-item">
                            <a href="thong-tin-dang-ky.html"><img src="./public/images/should_choose/tu_van.png" alt=""></a>
                            <p>Đăng ký tư vấn online dễ dàng</p>
                        </li>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <li class="reason-item">
                            <a href="thong-tin-dang-ky.html"><img src="./public/images/should_choose/bao_mat.png" alt=""></a>
                            <p>Bảo mật thông tin khách hàng</p>
                        </li>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <li class="reason-item">
                            <a href="thong-tin-dang-ky.html"><img src="./public/images/should_choose/niemtin.png" alt=""></a>
                            <p class="m-0 p-0">Trao giá trị
                            <p class="m-0 p-0">Nhận niềm tin</p>
                            </p>
                        </li>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</div>
<!-- END SHOULD-CHOOSE  -->
<div class="container">
    <video class="w-100 h-auto" controls autoplay>
        <source src="<?php echo $path_video ?>" type="">
    </video>
</div>
<!-- END VIDEO  -->
<div id="featured-news">
    <div class="container">
        <div class="content">
            <h2 class="section-title">Tin tức nổi bật</h2>
            <div class="row">
                <div class="content-left col-12 col-xl-7">
                    <a href="thong-tin-dang-ky.html" class="content-blog">
                        <div>
                            <img src="./public/images/home/featured-news/20220425114147208-lam-phat-la-gi-nguyen-nhan-dan-den-lam-phat-2.jpg" alt="">
                        </div>
                        <div class="info">
                            <h3>Lạm phát là gì? Các nguyên nhân dẫn đến lạm phát</h3>
                            <span class="date-created">01-01-2023</span>
                            <p>Lạm phát là gì? Nguyên nhân lạm phát là gì? Chúng ta hãy cùng tìm hiểu tất cả những vấn đề phải biết xoay quanh lạm phát nhé!</p>
                        </div>
                    </a>
                </div>
                <div class="content-right col-12 col-xl-5 d-lg-flex flex-lg-column flex-row justify-content-lg-between">
                    <a href="thong-tin-dang-ky.html" class="content-blog-extra d-flex mb-5">
                        <div class="row no-gutters">
                            <div class="info col-md-7 order-1 order-lg-0">
                                <h3>Bất động sản cao cấp vẫn hấp dẫn giới siêu giàu</h3>
                                <span class="date-created">24-12-2022</span>
                                <p>Giới siêu giàu sẽ tiếp tục đổ về dự án bất động sản cao cấp với những sản phẩm sang trọng</p>
                            </div>
                            <div class="block-image col-md-5 order-0 order-lg-1"> <img src="./public/images/home/featured-news/anh-3-sunneva-island-diem-den-9851-6946-1672908629.jpg"> </div>
                        </div>
                    </a>
                    <a href="thong-tin-dang-ky.html" class="content-blog-extra d-flex mb-5">
                        <div class="row no-gutters">
                            <div class="info col-md-7 order-1 order-lg-0">
                                <h3>VN-Index tăng gần 40 điểm phiên đầu năm</h3>
                                <span class="date-created">04-01-2023</span>
                                <p>Chứng khoán tăng mạnh trong phiên đầu tiên của năm mới khi lực mua chiếm ưu thế áp đảo</p>
                            </div>
                            <div class="block-image col-md-5 order-0 order-lg-1"> <img src="./public/images/home/featured-news/QUYN8123-1672736186-4266-1672736217.jpg"> </div>
                        </div>
                    </a>
                    <a href="thong-tin-dang-ky.html" class="content-blog-extra d-flex">
                        <div class="row no-gutters">
                            <div class="info col-md-7 order-1 order-lg-0">
                                <h3>Tỷ phú Mark Cuban vẫn thích Bitcoin hơn vàng</h3>
                                <span class="date-created">07-01-2023</span>
                                <p>Mark Cuban - người luôn ủng hộ tiền số, vẫn quyết tâm đầu tư vào Bitcoin</p>
                            </div>
                            <div class="block-image col-md-5 order-0 order-lg-1"> <img src="./public/images/home/featured-news/mark-cuban-gold-bitcoin-167281-6180-1283-1672817540.jpg"> </div>
                        </div>
                    </a>
                    <!-- <a href="" class="content-blog-extra d-flex">
                        <div class="info col-md-6">
                            <h3>Vay vốn ngân hàng nào lãi suất thấp nhất?</h3> <span>22-04-2022</span>
                            <p>Dịch vụ hỗ trợ vay vốn ngân hàng trở nên quen thuộc và thiết thực đối với mọi gia đình, doanh nghiệp Việt Nam.</p>
                        </div>
                        <div class="block-image col-md-6"> <img src="./public/images/home/featured-news/20220422110229944-vay-von-ngan-hang-nao-lai-suat-thap-nhat-1.jpg"> </div>
                    </a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END FEATURED-NEWS -->
<div class="container">
    <div id="advantages" class="container box advantages-home">
        <div class="head-box">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">Ưu điểm khi vay tại 23k</p>
                </div>
            </div>
        </div>
        <div class="list-advantage">
            <div class="row justify-content-center">
                <div class="col-md-6 col-12">
                    <p class="advantage">Lãi suất hấp dẫn</p>
                </div>
                <div class="col-md-6 col-12">
                    <p class="advantage">15 phút có tiền</p>
                </div>
                <div class="col-md-6 col-12">
                    <p class="advantage">Gói vay không giới hạn</p>
                </div>
                <div class="col-md-6 col-12">
                    <p class="advantage">Bảo mật thông tin</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="img-assistant">
    <img src="./public/images/assistant.png" alt="">
</div>
<!-- END ADVANTAGES  -->
<?php
get_footer();
?>