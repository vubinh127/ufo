<?php
/**
 * Template Name: Home
 */
get_header();
?>
    <section class="block-banner">
        <div class="container">
            <div class="swiper banner-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="block-information">
        <div class="content">
            <div class="text d-lg-none text-center wow animate__animated animate__fadeInRight">
                <h1>Trung Tâm Đào Tạo<br> Ngoại Ngữ UFO</h1>
            </div>
            <div class="image wow animate__animated animate__fadeInLeft">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/thumbnail_ufo.png" alt="">
            </div>
            <div class="text animate__animated animate__fadeInRight wow">
                <h1 class="d-none d-lg-block">Trung Tâm Đào Tạo<br> Ngoại Ngữ UFO</h1>
                <p>Một sản phẩm thuộc tập đoàn giáo dục YBM</p>
                <p>Các chứng chỉ ngoại ngữ như IELTS, TOPIK đang dần trở nên có sức ảnh hưởng với học sinh - sinh viên
                    Việt Nam, chúng tôi xuất hiện là trung tâm đào tạo ngoại ngữ chuyên nghiệp, nổi bật trong lĩnh vực
                    IELTS và TOPIK với mô hình học tập và ôn luyện khác biệt từ chuyên gia học thuật đầu ngành tại Hàn
                    Quốc, học viên tại Trung tâm Ngoại ngữ UFO được thúc đẩy chinh phục mục tiêu hiệu quả - nhanh
                    chóng.</p>
                <a class="btn bg-8433D3" href="">
                    Tìm hiểu thêm
                </a>
            </div>
        </div>
    </section>

    <section class="block-courses bg-gradient-1 bg-gradient-2">
        <div class="container">
            <h2 class="wow animate__animated animate__fadeIn">Khóa học của chúng tôi</h2>

            <div class="list-courses wow animate__animated animate__fadeInUp">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-korea-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-korea" type="button" role="tab" aria-controls="pills-korea"
                                aria-selected="true">Khóa tiếng Hàn
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-english-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-english" type="button" role="tab" aria-controls="pills-english"
                                aria-selected="false">Khóa tiếng Anh
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-korea" role="tabpanel"
                         aria-labelledby="pills-korea-tab">
                        <div class="box-courses">
                            <div class="single-course">
                                <div class="image">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/course_1.png" alt="">
                                </div>
                                <div class="info">
                                    <p class="title">Sơ cấp 1</p>
                                    <p>Làm quen và thành thạo bảng chữ cái tiếng Hàn (Hangeul).</p>
                                    <a href="" class="btn">
                                        Xem thêm
                                    </a>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="image">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/course_2.png" alt="">
                                </div>
                                <div class="info">
                                    <p class="title">Sơ cấp 2</p>
                                    <p>Mở rộng vốn từ vựng và cấu trúc ngữ pháp sơ cấp nâng cao.</p>
                                    <a href="" class="btn">
                                        Xem thêm
                                    </a>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="image">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/course_3.png" alt="">
                                </div>
                                <div class="info">
                                    <p class="title">Trung cấp 1</p>
                                    <p>Mở rộng vốn từ và cấu trúc câu trung cấp.</p>
                                    <a href="" class="btn">
                                        Xem thêm
                                    </a>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="image">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/course_4.png" alt="">
                                </div>
                                <div class="info">
                                    <p class="title">Trung cấp 2</p>
                                    <p>Mở rộng kỹ năng giao tiếp ở cấp độ học thuật và
                                        xã hội chuyên sâu.</p>
                                    <a href="" class="btn">
                                        Xem thêm
                                    </a>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="image">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/course_5.png" alt="">
                                </div>
                                <div class="info">
                                    <p class="title">Cao cấp </p>
                                    <p>Phát triển năng lực sử dụng tiếng Hàn ở mức cao,
                                        phục vụ học thuật.
                                    </p>
                                    <a href="" class="btn">
                                        Xem thêm
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-english" role="tabpanel" aria-labelledby="pills-english-tab">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="block-teachers">
        <div class="container">
            <h2 class="wow animate__animated animate__fadeIn">Đội ngũ giáo viên của chúng tôi</h2>
            <div class="list-teacher wow animate__animated animate__slideInUp">
                <div class="single-teacher">
                    <div class="image">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/teacher.png" alt="">
                    </div>
                    <div class="info">
                        <div class="profile">
                            <p class="title">Sơ cấp 1</p>
                            <ul class="skill-list">
                                <li>Tốt nghiệp Giỏi Sư phạm Tiếng Anh – Đại học Ngoại ngữ</li>
                                <li>8.0 IELTS</li>
                                <li>6 NĂM KINH NGHIỆM giảng dạy tiếng Anh, IELTS</li>
                                <li>Chứng chỉ giảng dạy CELTA do Cambridge cấp</li>
                            </ul>
                        </div>
                        <a href="" class="btn">
                            Xem thêm
                        </a>
                    </div>
                </div>

                <div class="single-teacher">
                    <div class="image">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/teacher_2.png" alt="">
                    </div>
                    <div class="info">
                        <div class="profile">
                            <p class="title">Sơ cấp 1</p>
                            <ul class="skill-list">
                                <li>Tốt nghiệp Giỏi Sư phạm Tiếng Anh – Đại học Ngoại ngữ</li>
                                <li>8.0 IELTS</li>
                                <li>6 NĂM KINH NGHIỆM giảng dạy tiếng Anh, IELTS</li>
                                <li>Chứng chỉ giảng dạy CELTA do Cambridge cấp</li>
                            </ul>
                        </div>
                        <a href="" class="btn">
                            Xem thêm
                        </a>
                    </div>
                </div>

                <div class="single-teacher">
                    <div class="image">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/teacher_3.png" alt="">
                    </div>
                    <div class="info">
                        <div class="profile">
                            <p class="title">Sơ cấp 1</p>
                            <ul class="skill-list">
                                <li>Tốt nghiệp Giỏi Sư phạm Tiếng Anh – Đại học Ngoại ngữ</li>
                                <li>8.0 IELTS</li>
                                <li>6 NĂM KINH NGHIỆM giảng dạy tiếng Anh, IELTS</li>
                                <li>Chứng chỉ giảng dạy CELTA do Cambridge cấp</li>
                            </ul>
                        </div>
                        <a href="" class="btn">
                            Xem thêm
                        </a>
                    </div>
                </div>

                <div class="single-teacher">
                    <div class="image">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/teacher_4.png" alt="">
                    </div>
                    <div class="info">
                        <div class="profile">
                            <p class="title">Sơ cấp 1</p>
                            <ul class="skill-list">
                                <li>Tốt nghiệp Giỏi Sư phạm Tiếng Anh – Đại học Ngoại ngữ</li>
                                <li>8.0 IELTS</li>
                                <li>6 NĂM KINH NGHIỆM giảng dạy tiếng Anh, IELTS</li>
                                <li>Chứng chỉ giảng dạy CELTA do Cambridge cấp</li>
                            </ul>
                        </div>
                        <a href="" class="btn">
                            Xem thêm
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="block-achievements">
        <div class="container">
            <h2 class="wow animate__animated animate__fadeIn">Bảng thành tích của học viên UFO</h2>
            <div class="list-achievements wow animate__animated animate__bounceInUp">
                <div class="achievement-item">
                    <div class="image">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/82e88dfd77e504ba4cf373ec12fbac2200945572.jpg" alt="">
                        <div class="score">
                            <span>8.0</span>
                            IELTS
                        </div>
                    </div>
                    <div class="name">
                        Nguyễn Đoàn Anh Khoa
                    </div>
                </div>
                <div class="achievement-item">
                    <div class="image">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/82e88dfd77e504ba4cf373ec12fbac2200945572.jpg" alt="">
                        <div class="score">
                            <span>8.0</span>
                            IELTS
                        </div>
                    </div>
                    <div class="name">
                        Nguyễn Đoàn Anh Khoa
                    </div>
                </div>
                <div class="achievement-item">
                    <div class="image">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/82e88dfd77e504ba4cf373ec12fbac2200945572.jpg" alt="">
                        <div class="score">
                            <span>8.0</span>
                            IELTS
                        </div>
                    </div>
                    <div class="name">
                        Nguyễn Đoàn Anh Khoa
                    </div>
                </div>
                <div class="achievement-item">
                    <div class="image">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/82e88dfd77e504ba4cf373ec12fbac2200945572.jpg" alt="">
                        <div class="score">
                            <span>8.0</span>
                            IELTS
                        </div>
                    </div>
                    <div class="name">
                        Nguyễn Đoàn Anh Khoa
                    </div>
                </div>
                <div class="achievement-item">
                    <div class="image">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/82e88dfd77e504ba4cf373ec12fbac2200945572.jpg" alt="">
                        <div class="score">
                            <span>8.0</span>
                            IELTS
                        </div>
                    </div>
                    <div class="name">
                        Nguyễn Đoàn Anh Khoa
                    </div>
                </div>
                <div class="achievement-item">
                    <div class="image">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/82e88dfd77e504ba4cf373ec12fbac2200945572.jpg" alt="">
                        <div class="score">
                            <span>8.0</span>
                            IELTS
                        </div>
                    </div>
                    <div class="name">
                        Nguyễn Đoàn Anh Khoa
                    </div>
                </div>
                <div class="achievement-item">
                    <div class="image">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/82e88dfd77e504ba4cf373ec12fbac2200945572.jpg" alt="">
                        <div class="score">
                            <span>8.0</span>
                            IELTS
                        </div>
                    </div>
                    <div class="name">
                        Nguyễn Đoàn Anh Khoa
                    </div>
                </div>
                <div class="achievement-item">
                    <div class="image">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/82e88dfd77e504ba4cf373ec12fbac2200945572.jpg" alt="">
                        <div class="score">
                            <span>8.0</span>
                            IELTS
                        </div>
                    </div>
                    <div class="name">
                        Nguyễn Đoàn Anh Khoa
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="block-partner">
        <h2>Đối tác của UFO</h2>
        <div class="list-partners">
            <div class="container">
                <div class="swiper partner-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/partner_1.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/partner_2.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/partner_3.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/partner_4.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/partner_5.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/partner_6.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/partner_7.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="block-news">
        <div class="container">
            <h2 class="wow animate__animated animate__fadeIn">Tin tức mới nhất</h2>

            <div class="news-grid">
                <!-- Featured News (Left) -->
                <div class="news-featured wow animate__animated animate__fadeInLeft">
                    <a href="#" class="news-item news-large">
                        <div class="news-image">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image_new.png" alt="Tin tức nổi bật">
                        </div>
                        <div class="news-content">
                            <h3>101+ từ vựng tiếng Anh về Tết Nguyên Dán phố biến nhất</h3>
                            <div class="news-date">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                     fill="none">
                                    <path d="M13.333 0C14.8058 0 16 1.19424 16 2.66699V13.333C16 14.8058 14.8058 16 13.333 16H2.66699C1.19424 16 0 14.8058 0 13.333V2.66699C0 1.19424 1.19424 0 2.66699 0H13.333ZM1.77734 3.55566V13.333C1.77734 13.8239 2.17608 14.2227 2.66699 14.2227H13.333C13.8239 14.2227 14.2227 13.8239 14.2227 13.333V3.55566H1.77734ZM11.5557 5.33301C12.0466 5.33304 12.4443 5.73175 12.4443 6.22266C12.4441 6.71337 12.0464 7.1113 11.5557 7.11133H4.44434C3.95364 7.11124 3.5559 6.71334 3.55566 6.22266C3.55566 5.73178 3.95349 5.33309 4.44434 5.33301H11.5557Z"
                                          fill="#8B8B8B"/>
                                </svg>
                                <span>2/5/2026</span>
                            </div>
                        </div>
                    </a>

                    <!-- Small News Items -->
                    <div class="news-small-grid">
                        <a href="#" class="news-item news-small">
                            <div class="news-image">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image_new_2.png" alt="Tin tức">
                            </div>
                            <div class="news-content">
                                <h4>101+ từ vựng tiếng Anh về....</h4>
                                <p class="d-lg-none">Chỉ còn một khoảng thời gian ngắn nữa là chúng ta sẽ bước sang năm
                                    mới 2026...</p>
                                <div class="news-date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                         fill="none">
                                        <path d="M13.333 0C14.8058 0 16 1.19424 16 2.66699V13.333C16 14.8058 14.8058 16 13.333 16H2.66699C1.19424 16 0 14.8058 0 13.333V2.66699C0 1.19424 1.19424 0 2.66699 0H13.333ZM1.77734 3.55566V13.333C1.77734 13.8239 2.17608 14.2227 2.66699 14.2227H13.333C13.8239 14.2227 14.2227 13.8239 14.2227 13.333V3.55566H1.77734ZM11.5557 5.33301C12.0466 5.33304 12.4443 5.73175 12.4443 6.22266C12.4441 6.71337 12.0464 7.1113 11.5557 7.11133H4.44434C3.95364 7.11124 3.5559 6.71334 3.55566 6.22266C3.55566 5.73178 3.95349 5.33309 4.44434 5.33301H11.5557Z"
                                              fill="#8B8B8B"/>
                                    </svg>
                                    <span>2/5/2026</span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="news-item news-small">
                            <div class="news-image">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image_new_2.png" alt="Tin tức">
                            </div>
                            <div class="news-content">
                                <h4>101+ từ vựng tiếng Anh về....</h4>
                                <p class="d-lg-none">Chỉ còn một khoảng thời gian ngắn nữa là chúng ta sẽ bước sang năm
                                    mới 2026...</p>
                                <div class="news-date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                         fill="none">
                                        <path d="M13.333 0C14.8058 0 16 1.19424 16 2.66699V13.333C16 14.8058 14.8058 16 13.333 16H2.66699C1.19424 16 0 14.8058 0 13.333V2.66699C0 1.19424 1.19424 0 2.66699 0H13.333ZM1.77734 3.55566V13.333C1.77734 13.8239 2.17608 14.2227 2.66699 14.2227H13.333C13.8239 14.2227 14.2227 13.8239 14.2227 13.333V3.55566H1.77734ZM11.5557 5.33301C12.0466 5.33304 12.4443 5.73175 12.4443 6.22266C12.4441 6.71337 12.0464 7.1113 11.5557 7.11133H4.44434C3.95364 7.11124 3.5559 6.71334 3.55566 6.22266C3.55566 5.73178 3.95349 5.33309 4.44434 5.33301H11.5557Z"
                                              fill="#8B8B8B"/>
                                    </svg>
                                    <span>2/5/2026</span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="news-item news-small">
                            <div class="news-image">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image_new.png" alt="Tin tức">
                            </div>
                            <div class="news-content">
                                <h4>101+ từ vựng tiếng Anh về....</h4>
                                <p class="d-lg-none">Chỉ còn một khoảng thời gian ngắn nữa là chúng ta sẽ bước sang năm
                                    mới 2026...</p>
                                <div class="news-date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                         fill="none">
                                        <path d="M13.333 0C14.8058 0 16 1.19424 16 2.66699V13.333C16 14.8058 14.8058 16 13.333 16H2.66699C1.19424 16 0 14.8058 0 13.333V2.66699C0 1.19424 1.19424 0 2.66699 0H13.333ZM1.77734 3.55566V13.333C1.77734 13.8239 2.17608 14.2227 2.66699 14.2227H13.333C13.8239 14.2227 14.2227 13.8239 14.2227 13.333V3.55566H1.77734ZM11.5557 5.33301C12.0466 5.33304 12.4443 5.73175 12.4443 6.22266C12.4441 6.71337 12.0464 7.1113 11.5557 7.11133H4.44434C3.95364 7.11124 3.5559 6.71334 3.55566 6.22266C3.55566 5.73178 3.95349 5.33309 4.44434 5.33301H11.5557Z"
                                              fill="#8B8B8B"/>
                                    </svg>
                                    <span>2/5/2026</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- News List (Right) -->
                <div class="news-list wow animate__animated animate__fadeInRight">
                    <a href="#" class="news-item news-horizontal">
                        <div class="news-image">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image_new.png" alt="Tin tức">
                        </div>
                        <div class="news-content">
                            <h4>101+ từ vựng tiếng Anh về Tết Nguyên Dán phố biến nhất</h4>
                            <p>Chỉ còn một khoảng thời gian ngắn nữa là chúng ta sẽ bước sang năm mới 2026...</p>
                            <div class="news-date">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                     fill="none">
                                    <path d="M13.333 0C14.8058 0 16 1.19424 16 2.66699V13.333C16 14.8058 14.8058 16 13.333 16H2.66699C1.19424 16 0 14.8058 0 13.333V2.66699C0 1.19424 1.19424 0 2.66699 0H13.333ZM1.77734 3.55566V13.333C1.77734 13.8239 2.17608 14.2227 2.66699 14.2227H13.333C13.8239 14.2227 14.2227 13.8239 14.2227 13.333V3.55566H1.77734ZM11.5557 5.33301C12.0466 5.33304 12.4443 5.73175 12.4443 6.22266C12.4441 6.71337 12.0464 7.1113 11.5557 7.11133H4.44434C3.95364 7.11124 3.5559 6.71334 3.55566 6.22266C3.55566 5.73178 3.95349 5.33309 4.44434 5.33301H11.5557Z"
                                          fill="#8B8B8B"/>
                                </svg>
                                <span>2/5/2026</span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="news-item news-horizontal">
                        <div class="news-image">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image_new.png" alt="Tin tức">
                        </div>
                        <div class="news-content">
                            <h4>101+ từ vựng tiếng Anh về Tết Nguyên Dán phố biến nhất</h4>
                            <p>Chỉ còn một khoảng thời gian ngắn nữa là chúng ta sẽ bước sang năm mới 2026...</p>
                            <div class="news-date">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                     fill="none">
                                    <path d="M13.333 0C14.8058 0 16 1.19424 16 2.66699V13.333C16 14.8058 14.8058 16 13.333 16H2.66699C1.19424 16 0 14.8058 0 13.333V2.66699C0 1.19424 1.19424 0 2.66699 0H13.333ZM1.77734 3.55566V13.333C1.77734 13.8239 2.17608 14.2227 2.66699 14.2227H13.333C13.8239 14.2227 14.2227 13.8239 14.2227 13.333V3.55566H1.77734ZM11.5557 5.33301C12.0466 5.33304 12.4443 5.73175 12.4443 6.22266C12.4441 6.71337 12.0464 7.1113 11.5557 7.11133H4.44434C3.95364 7.11124 3.5559 6.71334 3.55566 6.22266C3.55566 5.73178 3.95349 5.33309 4.44434 5.33301H11.5557Z"
                                          fill="#8B8B8B"/>
                                </svg>
                                <span>2/5/2026</span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="news-item news-horizontal">
                        <div class="news-image">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image_new.png" alt="Tin tức">
                        </div>
                        <div class="news-content">
                            <h4>101+ từ vựng tiếng Anh về Tết Nguyên Dán phố biến nhất</h4>
                            <p>Chỉ còn một khoảng thời gian ngắn nữa là chúng ta sẽ bước sang năm mới 2026...</p>
                            <div class="news-date">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                     fill="none">
                                    <path d="M13.333 0C14.8058 0 16 1.19424 16 2.66699V13.333C16 14.8058 14.8058 16 13.333 16H2.66699C1.19424 16 0 14.8058 0 13.333V2.66699C0 1.19424 1.19424 0 2.66699 0H13.333ZM1.77734 3.55566V13.333C1.77734 13.8239 2.17608 14.2227 2.66699 14.2227H13.333C13.8239 14.2227 14.2227 13.8239 14.2227 13.333V3.55566H1.77734ZM11.5557 5.33301C12.0466 5.33304 12.4443 5.73175 12.4443 6.22266C12.4441 6.71337 12.0464 7.1113 11.5557 7.11133H4.44434C3.95364 7.11124 3.5559 6.71334 3.55566 6.22266C3.55566 5.73178 3.95349 5.33309 4.44434 5.33301H11.5557Z"
                                          fill="#8B8B8B"/>
                                </svg>
                                <span>2/5/2026</span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="news-item news-horizontal">
                        <div class="news-image">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image_new.png" alt="Tin tức">
                        </div>
                        <div class="news-content">
                            <h4>101+ từ vựng tiếng Anh về Tết Nguyên Dán phố biến nhất</h4>
                            <p>Chỉ còn một khoảng thời gian ngắn nữa là chúng ta sẽ bước sang năm mới 2026...</p>
                            <div class="news-date">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                     fill="none">
                                    <path d="M13.333 0C14.8058 0 16 1.19424 16 2.66699V13.333C16 14.8058 14.8058 16 13.333 16H2.66699C1.19424 16 0 14.8058 0 13.333V2.66699C0 1.19424 1.19424 0 2.66699 0H13.333ZM1.77734 3.55566V13.333C1.77734 13.8239 2.17608 14.2227 2.66699 14.2227H13.333C13.8239 14.2227 14.2227 13.8239 14.2227 13.333V3.55566H1.77734ZM11.5557 5.33301C12.0466 5.33304 12.4443 5.73175 12.4443 6.22266C12.4441 6.71337 12.0464 7.1113 11.5557 7.11133H4.44434C3.95364 7.11124 3.5559 6.71334 3.55566 6.22266C3.55566 5.73178 3.95349 5.33309 4.44434 5.33301H11.5557Z"
                                          fill="#8B8B8B"/>
                                </svg>
                                <span>2/5/2026</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();