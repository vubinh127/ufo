<?php

/**
 * Template Name: Contact
 */
get_header();
?>
<section class="block-banner contact-page">
    <div class="container">
        <div class="banner">
            <div class="image">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="block-contact">
    <div class="content">
        <div class="w-100">
            <h1>Liên lạc với đội ngũ tư vấn
                của chúng tôi</h1>

            <p>Bạn cần hỗ trợ? Gửi yêu cầu ngay – đội ngũ UFO sẽ liên hệ với bạn trong thời gian ngắn nhất!</p>
            <div class="contact">
                <div class="text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="23" viewBox="0 0 18 23" fill="none">
                        <path d="M7.115 20.811C7.721 21.311 8.353 21.768 9 22.214C9.6484 21.7739 10.2773 21.3058 10.885 20.811C11.898 19.9792 12.8513 19.0773 13.738 18.112C15.782 15.877 18 12.637 18 9C18 7.8181 17.7672 6.64778 17.3149 5.55585C16.8626 4.46392 16.1997 3.47177 15.364 2.63604C14.5282 1.80031 13.5361 1.13738 12.4442 0.685084C11.3522 0.232792 10.1819 0 9 0C7.8181 0 6.64778 0.232792 5.55585 0.685084C4.46392 1.13738 3.47177 1.80031 2.63604 2.63604C1.80031 3.47177 1.13738 4.46392 0.685084 5.55585C0.232792 6.64778 -1.76116e-08 7.8181 0 9C0 12.637 2.218 15.876 4.262 18.112C5.14862 19.0777 6.10196 19.9789 7.115 20.811ZM9 12.25C8.13805 12.25 7.3114 11.9076 6.7019 11.2981C6.09241 10.6886 5.75 9.86195 5.75 9C5.75 8.13805 6.09241 7.3114 6.7019 6.7019C7.3114 6.09241 8.13805 5.75 9 5.75C9.86195 5.75 10.6886 6.09241 11.2981 6.7019C11.9076 7.3114 12.25 8.13805 12.25 9C12.25 9.86195 11.9076 10.6886 11.2981 11.2981C10.6886 11.9076 9.86195 12.25 9 12.25Z" fill="#8753FF" />
                    </svg>
                    Địa chỉ:
                </div>
                <p>Tầng 2, tòa HITC, 239 đường Xuân Thủy, phường Cầu Giấy, Hà Nội.</p>
            </div>
            <div class="contact">
                <div class="text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3 16C2.20435 16 1.44129 15.6839 0.87868 15.1213C0.316071 14.5587 0 13.7956 0 13V3C0 2.20435 0.316071 1.44129 0.87868 0.87868C1.44129 0.316071 2.20435 0 3 0H17C17.7956 0 18.5587 0.316071 19.1213 0.87868C19.6839 1.44129 20 2.20435 20 3V13C20 13.7956 19.6839 14.5587 19.1213 15.1213C18.5587 15.6839 17.7956 16 17 16H3ZM5.625 4.22C5.52313 4.13302 5.40483 4.06739 5.27711 4.027C5.1494 3.98662 5.01487 3.97231 4.88151 3.98491C4.74816 3.99752 4.61869 4.03679 4.50081 4.1004C4.38292 4.164 4.27901 4.25064 4.19525 4.35517C4.11149 4.4597 4.04959 4.58 4.01321 4.70891C3.97684 4.83783 3.96673 4.97274 3.9835 5.10564C4.00026 5.23853 4.04356 5.36671 4.11081 5.48255C4.17806 5.59839 4.2679 5.69954 4.375 5.78L8.125 8.781C8.65709 9.20701 9.31838 9.43913 10 9.43913C10.6816 9.43913 11.3429 9.20701 11.875 8.781L15.625 5.781C15.7276 5.69892 15.813 5.59745 15.8763 5.48237C15.9396 5.3673 15.9797 5.24087 15.9942 5.11031C16.0087 4.97975 15.9973 4.84762 15.9607 4.72145C15.9241 4.59529 15.8631 4.47756 15.781 4.375C15.6989 4.27244 15.5974 4.18705 15.4824 4.1237C15.3673 4.06035 15.2409 4.02029 15.1103 4.00581C14.9798 3.99132 14.8476 4.00269 14.7215 4.03927C14.5953 4.07585 14.4776 4.13692 14.375 4.219L10.625 7.219C10.4476 7.361 10.2272 7.43838 10 7.43838C9.77279 7.43838 9.55236 7.361 9.375 7.219L5.625 4.22Z" fill="#8753FF" />
                    </svg>
                    Email:
                </div>
                <p>ufo.contact@ybm.co.kr</p>
            </div>
        </div>
        <div class="form-contact w-100">
            <form class="search-form">
                <div class="block-input">
                    <label class="form-label">Họ và tên</label>
                    <input type="text" class="form-control custom-input" placeholder="Nguyễn Văn A">
                </div>

                <div class="row block-input">
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control custom-input" placeholder="example@gmail.com">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control custom-input" placeholder="012345678">
                    </div>
                </div>

                <div class="block-input">
                    <label class="form-label">Khu vực sinh sống</label>
                    <select class="form-select custom-select">
                        <option>Hà Nội</option>
                        <option>TP.HCM</option>
                        <option>Đà Nẵng</option>
                    </select>
                </div>

                <div class="block-input">
                    <label class="form-label">Khóa học quan tâm</label>
                    <select class="form-select custom-select">
                        <option>Tiếng Hàn Sơ cấp 1</option>
                        <option>Tiếng Hàn Sơ cấp 2</option>
                    </select>
                </div>

                <div class="block-input">
                    <label class="form-label">Hãy cho UFO biết bạn cần gì nhé</label>
                    <textarea class="form-control custom-textarea" rows="4" placeholder="Nhập..."></textarea>
                </div>

                <button type="submit" class="btn btn-submit bg-8433D3 w-100">
                    Submit
                </button>

            </form>
        </div>
    </div>
</section>
<?php get_footer(); ?>