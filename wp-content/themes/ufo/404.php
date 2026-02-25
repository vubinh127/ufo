<?php
get_header();
?>
<div id="content">
    <section id="main-content" class="page-404 d-flex align-items-center">
        <div class="container text-center">

            <div class="error-wrapper">

                <h1 class="error-code">404</h1>

                <h2 class="error-title">
                    <?php _e('Oops! Trang không tồn tại', 'alpine'); ?>
                </h2>

                <p class="error-desc">
                    <?php _e('Có thể trang đã bị xoá hoặc đường dẫn không chính xác.', 'alpine'); ?>
                </p>

                <div class="error-actions mt-4">
                    <a href="<?php echo get_home_url(); ?>" class="btn bg-8433D3 me-3">
                        Về trang chủ
                    </a>
                </div>

                <div class="search-box mt-5">
                    <form class="row justify-content-center" action="<?php echo get_home_url(); ?>/" method="get">
                        <div class="col-lg-6 col-md-8 col-10">
                            <div class="input-group">
                                <input type="text"
                                       class="form-control form-control-lg"
                                       name="s"
                                       placeholder="Bạn muốn tìm gì?">
                                <button type="submit" class="btn btn-dark px-4">
                                    Tìm kiếm
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section>

</div>
<?php
get_footer();
?>