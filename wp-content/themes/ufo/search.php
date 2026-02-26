<?php
get_header();

global $wp_query;
$current = max(1, get_query_var('paged') ? get_query_var('paged') : get_query_var('page'));
$total   = $wp_query->max_num_pages;
?>

<section class="block-banner news-page">
    <div class="container">
        <div class="banner">
            <div class="image">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/banner.png'); ?>" alt="">
            </div>
            <div class="text d-lg-block">
                <h1>
                    Kết quả tìm kiếm từ khóa:
                    "<?php echo esc_html(get_search_query()); ?>"
                </h1>

                <div>
                    <form action="<?php echo esc_url(home_url('/')); ?>"
                        method="get"
                        class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3">

                        <div class="search-pill">
                            <span class="search-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M12.5 11H11.71L11.43 10.73C12.444 9.55407 13.0012 8.05271 13 6.5C13 5.21442 12.6188 3.95772 11.9046 2.8888C11.1903 1.81988 10.1752 0.986756 8.98744 0.494786C7.79973 0.00281635 6.49279 -0.125905 5.23192 0.124899C3.97104 0.375703 2.81285 0.994767 1.90381 1.90381C0.994767 2.81285 0.375703 3.97104 0.124899 5.23192C-0.125905 6.49279 0.00281635 7.79973 0.494786 8.98744C0.986756 10.1752 1.81988 11.1903 2.8888 11.9046C3.95772 12.6188 5.21442 13 6.5 13C8.11 13 9.59 12.41 10.73 11.43L11 11.71V12.5L16 17.49L17.49 16L12.5 11ZM6.5 11C4.01 11 2 8.99 2 6.5C2 4.01 4.01 2 6.5 2C8.99 2 11 4.01 11 6.5C11 8.99 8.99 11 6.5 11Z" fill="#E6E6E6" />
                                </svg>
                            </span>

                            <input
                                type="text"
                                name="s"
                                value="<?php echo esc_attr(get_search_query()); ?>"
                                placeholder="Nhập...">
                        </div>

                        <button type="submit" class="btn contact bg-8433D3">
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

            <?php if (have_posts()) : ?>

                <h2>
                    <?php echo esc_html($wp_query->found_posts); ?>
                    kết quả được tìm thấy
                </h2>

                <div class="events-grid">
                    <?php while (have_posts()) : the_post();

                        $thumbnail = has_post_thumbnail()
                            ? get_the_post_thumbnail_url(get_the_ID(), 'medium')
                            : get_stylesheet_directory_uri() . '/assets/images/image_new.png';
                    ?>

                        <a href="<?php echo esc_url(get_permalink()); ?>" class="event-item">
                            <div class="image">
                                <img
                                    src="<?php echo esc_url($thumbnail); ?>"
                                    alt="<?php echo esc_attr(get_the_title()); ?>">
                            </div>

                            <div class="events-content">
                                <h4><?php echo esc_html(get_the_title()); ?></h4>

                                <p>
                                    <?php echo esc_html(wp_trim_words(get_the_excerpt(), 20)); ?>
                                </p>

                                <div class="event-date">
                                    <span>
                                        <?php echo esc_html(get_the_date('d/m/Y')); ?>
                                    </span>
                                </div>
                            </div>
                        </a>

                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <?php if ($total > 1) : ?>
                    <nav class="custom-pagination" aria-label="Page navigation">
                        <ul class="pagination">

                            <!-- Previous -->
                            <?php if ($current > 1) : ?>
                                <li class="page-item">
                                    <a class="page-link"
                                        href="<?php echo esc_url(get_pagenum_link($current - 1)); ?>"
                                        aria-label="Previous">
                                        ‹
                                    </a>
                                </li>
                            <?php endif; ?>

                            <!-- Numbers -->
                            <?php for ($i = 1; $i <= $total; $i++) : ?>
                                <li class="page-item <?php echo ($i == $current) ? 'active' : ''; ?>">
                                    <a class="page-link"
                                        href="<?php echo esc_url(get_pagenum_link($i)); ?>">
                                        <?php echo esc_html($i); ?>
                                    </a>
                                </li>
                            <?php endfor; ?>

                            <!-- Next -->
                            <?php if ($current < $total) : ?>
                                <li class="page-item">
                                    <a class="page-link"
                                        href="<?php echo esc_url(get_pagenum_link($current + 1)); ?>"
                                        aria-label="Next">
                                        ›
                                    </a>
                                </li>
                            <?php endif; ?>

                        </ul>
                    </nav>
                <?php endif; ?>

            <?php else : ?>

                <h2>Không tìm thấy kết quả nào.</h2>

            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>