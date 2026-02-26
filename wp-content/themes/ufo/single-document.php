<?php get_header(); ?>
<section class="block-banner detail-course-page">
    <div class="container">
        <div class="banner">
            <div class="image">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="block-detail-course detail-document-section">
    <div class="container d-flex flex-column flex-lg-row align-items-start justify-content-between">
        <div class="w-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tài liệu</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo esc_html(get_the_title()); ?></li>
                </ol>
            </nav>
            <div class="title"><?php echo esc_html(get_the_title()); ?></div>
            <div class="detail-content">
                <div class="tab-pane fade show active" id="pills-general-info" role="tabpanel" aria-labelledby="pills-general-info-tab">
                    <div class="object">
                        <div class="text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sign-up-block">
            <div class="form-contact">
                <?php
                $form_register_post = get_field('form_register_post', 'option');
                if ($form_register_post) {
                    echo do_shortcode($form_register_post);
                }
                ?>
            </div>
        </div>

    </div>
</section>

<?php
$related = new WP_Query([
    'post_type'      => get_post_type(),
    'posts_per_page' => 3,
    'post__not_in'   => [get_the_ID()],
    'orderby'        => 'date',
    'order'          => 'DESC'
]);

if ($related->have_posts()) { ?>
    <section class="courses-section detail-course-page">
        <h2>Khám phá thêm các khóa học khác</h2>
        <div class="container">
            <div class="grid-courses">
                <?php
                while ($related->have_posts()) {
                    $related->the_post();
                    $thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_stylesheet_directory_uri() . '/assets/images/course_1.png';
                ?>
                    <a href="<?php echo esc_url(get_permalink()); ?>">
                        <div class="course-item">
                            <div class="image">
                                <img src="<?php echo $thumbnail; ?>" alt="<?php echo esc_html(get_the_title()); ?>">
                            </div>
                            <div class="info">
                                <div class="detail">
                                    <div class="title">
                                        <?php
                                        $terms = get_the_terms(get_the_ID(), 'document_category');

                                        if ($terms && !is_wp_error($terms)) {
                                            $term = $terms[0];
                                        ?>
                                            <div class="lang kr">
                                                <?php echo esc_html($term->name); ?>
                                            </div>
                                        <?php }; ?>

                                    </div>
                                    <div class="skill">
                                        <p><?php echo esc_html(get_the_title()); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
<?php } ?>

<?php get_footer(); ?>