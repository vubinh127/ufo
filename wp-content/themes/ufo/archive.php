<?php
get_header();
?>
<section class="block-banner news-page">
    <div class="container">
        <div class="banner">
            <div class="image">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner.png" alt="">
            </div>
            <div class="text d-none d-lg-block">
                <h1>
                    <?php
                    if (is_category()) {
                        single_cat_title();
                    } elseif (is_tag()) {
                        single_tag_title();
                    } elseif (is_post_type_archive()) {
                        post_type_archive_title();
                    } else {
                        echo 'Bài viết blog';
                    }
                    ?>
                </h1>
                <p>Tìm các bài viết và sự kiện mới nhất của chúng tôi</p>
                <div>
                    <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3">
                        <div class="search-pill">
                            <span class="search-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M12.5 11H11.71L11.43 10.73C12.444 9.55407 13.0012 8.05271 13 6.5C13 5.21442 12.6188 3.95772 11.9046 2.8888C11.1903 1.81988 10.1752 0.986756 8.98744 0.494786C7.79973 0.00281635 6.49279 -0.125905 5.23192 0.124899C3.97104 0.375703 2.81285 0.994767 1.90381 1.90381C0.994767 2.81285 0.375703 3.97104 0.124899 5.23192C-0.125905 6.49279 0.00281635 7.79973 0.494786 8.98744C0.986756 10.1752 1.81988 11.1903 2.8888 11.9046C3.95772 12.6188 5.21442 13 6.5 13C8.11 13 9.59 12.41 10.73 11.43L11 11.71V12.5L16 17.49L17.49 16L12.5 11ZM6.5 11C4.01 11 2 8.99 2 6.5C2 4.01 4.01 2 6.5 2C8.99 2 11 4.01 11 6.5C11 8.99 8.99 11 6.5 11Z" fill="#E6E6E6" />
                                </svg>
                            </span>

                            <input type="text" placeholder="Nhập..." />
                        </div>
                        <button type="submit" class="btn contact bg-8433D3" href="">
                            Tìm kiếm
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="block-events bg-gradient-1 bg-gradient-2">
    <div class="content">
        <div>
            <h2>Bài viết gần đây</h2>
            <div class="events-grid">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                ?>
                        <a href="<?php echo get_the_permalink() ?>" class="event-item">
                            <div class="image">
                                <?php
                                if (has_post_thumbnail()) {
                                    $thumbnail = get_the_post_thumbnail_url();
                                } else {
                                    $thumbnail = get_stylesheet_directory_uri() . '/assets/images/image_new.png';
                                }
                                ?>
                                <img src="<?php echo $thumbnail ?>" alt="<?php echo get_the_title(); ?>">
                            </div>
                            <div class="events-content">
                                <h4><?php echo get_the_title(); ?></h4>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                <div class="event-date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M13.333 0C14.8058 0 16 1.19424 16 2.66699V13.333C16 14.8058 14.8058 16 13.333 16H2.66699C1.19424 16 0 14.8058 0 13.333V2.66699C0 1.19424 1.19424 0 2.66699 0H13.333ZM1.77734 3.55566V13.333C1.77734 13.8239 2.17608 14.2227 2.66699 14.2227H13.333C13.8239 14.2227 14.2227 13.8239 14.2227 13.333V3.55566H1.77734ZM11.5557 5.33301C12.0466 5.33304 12.4443 5.73175 12.4443 6.22266C12.4441 6.71337 12.0464 7.1113 11.5557 7.11133H4.44434C3.95364 7.11124 3.5559 6.71334 3.55566 6.22266C3.55566 5.73178 3.95349 5.33309 4.44434 5.33301H11.5557Z" fill="#8B8B8B" />
                                    </svg>
                                    <span><?php echo get_the_date('d/m/Y'); ?></span>
                                </div>
                            </div>
                        </a>
                <?php
                    }
                }
                ?>
            </div>
            <?php
            global $wp_query;

            $current = max(1, get_query_var('paged'));
            $total   = $wp_query->max_num_pages;

            if ($total > 1) {
            ?>
                <nav class="custom-pagination" aria-label="Page navigation">
                    <ul class="pagination">

                        <!-- Previous -->
                        <?php if ($current > 1) { ?>
                            <li class="page-item">
                                <a class="page-link" href="<?php echo get_pagenum_link($current - 1); ?>" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none">
                                            <g transform="translate(10 0) scale(-1 1)">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0.292987 13.7279C-0.097532 14.1184 -0.0975301 14.7516 0.292992 15.1421L0.528682 15.3778C0.919208 15.7683 1.55237 15.7683 1.9429 15.3778L8.77825 8.54241C9.16877 8.15188 9.16877 7.51872 8.77824 7.12819L1.94279 0.292797C1.55226 -0.0977259 0.919095 -0.0977237 0.528572 0.292802L0.292879 0.528497C-0.0976439 0.919022 -0.0976411 1.55219 0.292883 1.94271L5.47839 7.1282C5.86891 7.51872 5.86892 8.15188 5.4784 8.5424L0.292987 13.7279Z"
                                                    fill="#232227" />
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                        <?php }; ?>

                        <!-- Numbers -->
                        <?php for ($i = 1; $i <= $total; $i++) { ?>
                            <li class="page-item <?php echo ($i == $current) ? 'active' : ''; ?>">
                                <a class="page-link" href="<?php echo get_pagenum_link($i); ?>">
                                    <?php echo $i; ?>
                                </a>
                            </li>
                        <?php }; ?>

                        <!-- Next -->
                        <?php if ($current < $total) { ?>
                            <li class="page-item">
                                <a class="page-link" href="<?php echo get_pagenum_link($current + 1); ?>" aria-label="Next">
                                    <span aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.292987 13.7279C-0.097532 14.1184 -0.0975301 14.7516 0.292992 15.1421L0.528682 15.3778C0.919208 15.7683 1.55237 15.7683 1.9429 15.3778L8.77825 8.54241C9.16877 8.15188 9.16877 7.51872 8.77824 7.12819L1.94279 0.292797C1.55226 -0.0977259 0.919095 -0.0977237 0.528572 0.292802L0.292879 0.528497C-0.0976439 0.919022 -0.0976411 1.55219 0.292883 1.94271L5.47839 7.1282C5.86891 7.51872 5.86892 8.15188 5.4784 8.5424L0.292987 13.7279Z"
                                                fill="#232227" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                        <?php }; ?>

                    </ul>
                </nav>
            <?php } ?>

        </div>
    </div>
</section>
<?php
get_footer();
?>