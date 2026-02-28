<?php
get_header()
?>
<section class="block-banner courses-page">
    <div class="container">
        <div class="banner">
            <div class="image">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="search-form-section courses-page">
    <div class="container">
        <div class="search-form-wrapper">
            <?php
            $current_category = '';

            if (get_query_var('course_category')) {
                $current_category = get_query_var('course_category');
            } elseif (!empty($_GET['course_category'])) {
                $current_category = sanitize_text_field($_GET['course_category']);
            }

            $terms = get_terms([
                'taxonomy'   => 'course_category',
                'hide_empty' => false,
            ]);
            ?>
            <form class="search-form d-flex flex-column flex-lg-row align-items-lg-end gap-4" method="GET">
                <input type="hidden" name="paged" value="1">

                <div class="w-100">
                    <label class="form-label">Tiếng</label>
                    <div class="select-wrapper">
                        <select class="form-select custom-select" name="course_category">
                            <?php foreach ($terms as $term) : ?>
                                <option value="<?php echo esc_attr($term->slug); ?>"
                                    <?php selected($current_category, $term->slug); ?>>
                                    <?php echo esc_html($term->name); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-search bg-8433D3">Tìm kiếm</button>
            </form>
        </div>
    </div>
</section>

<section class="courses-section bg-gradient-1 bg-gradient-2">
    <div class="container">
        <?php
        if (have_posts()) {
        ?>
            <div class="grid-courses">
                <?php
                while (have_posts()) {
                    the_post();
                    $information_display = get_field('information_display', get_the_ID());
                    $thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_stylesheet_directory_uri() . '/assets/images/course_1.png';
                    $terms = get_the_terms(get_the_ID(), 'course_category');
                ?>
                    <a href="<?php echo esc_url(get_permalink()) ?>">
                        <div class="course-item">
                            <div class="image">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/course_1.png" alt="<?php echo esc_attr(get_the_title()); ?>">
                                <?php
                                if ($information_display['number_student']) {
                                    echo '<div class="overlay">
                                            <div class="student-count">' . $information_display['number_student'] . '</div>
                                        </div>';
                                }
                                ?>
                            </div>
                            <div class="info">
                                <div class="detail">
                                    <?php
                                    if (!empty($terms) && !is_wp_error($terms)) {
                                        echo '<div class="title">';
                                        foreach ($terms as $term) {
                                            echo '<div class="lang eng ' . $term->slug . '">' . $term->name . '</div>';
                                        }
                                        echo '</div>';
                                    }
                                    ?>
                                    <div class="skill">
                                        <p><?php echo esc_html(get_the_title()); ?></p>
                                        <?php
                                        if (!empty($information_display['list_skill'])) {
                                            echo '<ul>';
                                            foreach ($information_display['list_skill'] as $skill) {
                                                echo '<li>' . $skill['skill'] . '</li>';
                                            }
                                            echo '</ul>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>

            <?php
            global $wp_query;
            $current = max(1, get_query_var('paged'));
            $total   = $wp_query->max_num_pages;

            if ($total > 1) {
            ?>
                <nav class="custom-pagination" aria-label="Page navigation">
                    <ul class="pagination">

                        <?php if ($current > 1) { ?>
                            <li class="page-item">
                                <a class="page-link"
                                    href="<?php echo esc_url(add_query_arg($_GET, get_pagenum_link($current - 1))); ?>">
                                    ‹
                                </a>
                            </li>
                        <?php }; ?>

                        <?php for ($i = 1; $i <= $total; $i++) { ?>
                            <li class="page-item <?php echo ($i == $current) ? 'active' : ''; ?>">
                                <a class="page-link"
                                    href="<?php echo esc_url(add_query_arg($_GET, get_pagenum_link($i))); ?>">
                                    <?php echo esc_html($i); ?>
                                </a>
                            </li>
                        <?php }; ?>

                        <?php if ($current < $total) { ?>
                            <li class="page-item">
                                <a class="page-link"
                                    href="<?php echo esc_url(add_query_arg($_GET, get_pagenum_link($current + 1))); ?>">
                                    ›
                                </a>
                            </li>
                        <?php }; ?>

                    </ul>
                </nav>
        <?php };
        } else {
            echo '<p>Không có tài liệu nào.</p>';
        } ?>
    </div>
</section>
<?php get_footer() ?>