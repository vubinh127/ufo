<?php
get_header();
?>
<section class="block-detail-event">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post();
                $title = get_the_title();
        ?>
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo get_home_url() ?>">Trang chủ</a></li>
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                ?>
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo get_category_link($categories[0]->term_id); ?>">
                                            <?php echo esc_html($categories[0]->name); ?>
                                        </a>
                                    </li>
                                <?php } ?>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $title ?></li>
                            </ol>
                        </nav>
                        <div class="title">
                            <?php echo $title ?>
                        </div>
                        <div class="event-date">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M13.333 0C14.8058 0 16 1.19424 16 2.66699V13.333C16 14.8058 14.8058 16 13.333 16H2.66699C1.19424 16 0 14.8058 0 13.333V2.66699C0 1.19424 1.19424 0 2.66699 0H13.333ZM1.77734 3.55566V13.333C1.77734 13.8239 2.17608 14.2227 2.66699 14.2227H13.333C13.8239 14.2227 14.2227 13.8239 14.2227 13.333V3.55566H1.77734ZM11.5557 5.33301C12.0466 5.33304 12.4443 5.73175 12.4443 6.22266C12.4441 6.71337 12.0464 7.1113 11.5557 7.11133H4.44434C3.95364 7.11124 3.5559 6.71334 3.55566 6.22266C3.55566 5.73178 3.95349 5.33309 4.44434 5.33301H11.5557Z" fill="#8B8B8B" />
                            </svg>
                            <span><?php echo get_the_time('H:i'); ?></span>
                            <span><?php echo get_the_date('d/m/Y'); ?></span>
                        </div>

                        <div class="image">
                            <?php if (has_post_thumbnail()) { ?>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $title ?>">
                            <?php } ?>
                        </div>
                        <div class="detail-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="sign-up-block">
                        <div class="form-contact">
                            <?php
                            $form_register_post = get_field('form_register_post', 'option');
                            echo do_shortcode($form_register_post);
                            ?>
                        </div>
                    </div>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
</section>
<?php
get_footer();
?>