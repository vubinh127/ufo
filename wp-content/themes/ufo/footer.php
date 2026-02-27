</main>
<?php wp_footer(); ?>
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-col footer-info">
                <div class="logo">
                    <img src="<?php echo !empty($logo) ? $logo['url'] : get_stylesheet_directory_uri().'/assets/images/logo.png' ?>" alt=""/>
                </div>
                <h3>CÔNG TY TNHH YBM VIỆT NAM</h3>
                <div class="address">
                    <p class="label">Địa chỉ:</p>
                    <p>Tầng 2, tòa HITC, 239 đường Xuân Thủy, phường Cầu Giấy, Hà Nội.</p>
                </div>
            </div>

            <div class="footer-col footer-links">
                <h4>Liên kết nhanh</h4>
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Sự kiện</a></li>
                    <li><a href="#">Khóa học</a></li>
                    <li><a href="#">Tài liệu</a></li>
                </ul>
            </div>

            <div class="footer-col footer-contact">
                <h4>Liên hệ UFO</h4>
                <div class="contact-info">
                    <p>Phone: 0962317891</p>
                    <p>Email: ufo.contact@ybm.co.kr</p>
                </div>
                <?php 
                $link_youtube  = get_field('link_youtube', 'option');
                $link_facebook  = get_field('link_facebook', 'option');
                $link_tiktok  = get_field('link_tiktok', 'option');
                ?>
                <div class="social-links">
                    <a href="<?php echo !empty($link_youtube) ? $link_youtube['url'] : '#' ?>" class="social-icon" aria-label="Youtube" target="<?php echo !empty($link_youtube) ? $link_youtube['target'] : '' ?>">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="<?php echo !empty($link_facebook) ? $link_facebook['url'] : '#' ?>" class="social-icon" aria-label="Facebook" target="<?php echo !empty($link_facebook) ? $link_facebook['target'] : '' ?>">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="<?php echo !empty($link_tiktok) ? $link_tiktok['url'] : '#' ?>" class="social-icon" aria-label="TikTok" target="<?php echo !empty($link_tiktok) ? $link_tiktok['target'] : '' ?>">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
                <?php 
                $button_lien_he = get_field('button_lien_he', 'option');
                if(!empty($button_lien_he)){ ?>
                    <a class="btn contact bg-8433D3" href="<?php echo $button_lien_he['url'] ?>">
                        Liên hệ
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</footer>
</body>
</html>