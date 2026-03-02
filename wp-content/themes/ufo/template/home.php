<?php

/**
 * Template Name: Home
 */
get_header();

$block_banner = get_field('block_banner');

if (!empty($block_banner) && is_array($block_banner) && !empty($block_banner['list_banner'])) {
?>
    <section class="block-banner">
        <div class="container">
            <div class="swiper banner-swiper">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($block_banner['list_banner'] as $banner) {
                        echo '<div class="swiper-slide">
                        <div class="image">
                            <img src="' . $banner['banner']['url'] . '" alt="' . $banner['banner']['title'] . '">
                        </div>
                    </div>';
                    }
                    ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
<?php }

$block_information = get_field('block_information');
if (!empty($block_information) && is_array($block_information)) { ?>
    <section class="block-information">
        <div class="content">
            <div class="text d-lg-none text-center wow animate__animated animate__fadeInRight">
                <?php echo !empty($block_information['title']) ? '<h1>' . $block_information['title'] . '</h1>' : '' ?>
            </div>
            <div class="image wow animate__animated animate__fadeInLeft">
                <iframe src="https://drive.google.com/file/d/1fFT4T4EGx0Qp6k9yXq8CZgc70dH_1gbT/preview" allowfullscreen frameborder="0"></iframe>
                <div style="position:absolute; top:0; right:0; width:60px; height:60px;"></div>
            </div>
            <div class="text animate__animated animate__fadeInRight wow">
                <?php
                echo !empty($block_information['title']) ? '<h1 class="d-none d-lg-block">' . $block_information['title'] . '</h1>' : '';

                if (!empty($block_information['description'])) {
                    echo $block_information['description'];
                }

                if (!empty($block_information['link_load_more'])) {
                    echo ' <a class="btn bg-8433D3" href="' . $block_information['link_load_more']['url'] . '">
                            Tìm hiểu thêm
                        </a>';
                }
                ?>
            </div>
        </div>
    </section>
<?php }

$block_courses = get_field('block_courses');

if (!empty($block_courses) && is_array($block_courses)) { ?>
    <section class="block-courses bg-gradient-1 bg-gradient-2">
        <div class="container">
            <?php
            echo !empty($block_courses['title']) ? '<h2 class="wow animate__animated animate__fadeIn">' . $block_courses['title'] . '</h2>' : '';

            if (!empty($block_courses['list_courses'])) { ?>
                <div class="list-courses wow animate__animated animate__fadeInUp">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <?php
                        foreach ($block_courses['list_courses'] as $key => $course) { ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link <?php echo $key === 0 ? 'active' : '' ?>" id="pills-korea-tab-<?php echo $key ?>" data-bs-toggle="pill"
                                    data-bs-target="#pills-korea-<?php echo $key ?>" type="button" role="tab" aria-controls="pills-korea-<?php echo $key ?>"
                                    aria-selected="true"><?php echo $course['tab_name'] ?>
                                </button>
                            </li>
                        <?php }
                        ?>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <?php
                        foreach ($block_courses['list_courses'] as $key => $course) { ?>
                            <div class="tab-pane fade show <?php echo $key === 0 ? 'active' : '' ?>" id="pills-korea-<?php echo $key ?>" role="tabpanel"
                                aria-labelledby="pills-korea-tab-<?php echo $key ?>">
                                <?php
                                if (!empty($course['courses'])) { ?>
                                    <div class="box-courses">
                                        <?php
                                        foreach ($course['courses'] as $courseSingle) {
                                            $course_id = $courseSingle->ID;
                                            $thumbnail = get_the_post_thumbnail_url($course_id);
                                            $permalink = get_permalink($course_id);
                                            $general_infor = get_field('general_infor', $course_id);
                                            $description = $general_infor['description'];

                                        ?>
                                            <div class="single-course">
                                                <div class="image">
                                                    <img src="<?php echo $thumbnail ?: get_stylesheet_directory_uri() . '/assets/images/course_1.png'; ?>" alt="<?php echo esc_attr(get_the_title($course_id)); ?>">
                                                </div>
                                                <div class="info">
                                                    <p class="title"><?php echo esc_html(get_the_title($course_id)); ?></p>
                                                    <p>
                                                        <?php
                                                        if ($description) {
                                                            echo wp_trim_words(wp_strip_all_tags($description), 40);
                                                        } else {
                                                            echo wp_trim_words(get_the_excerpt($course_id), 40);
                                                        }
                                                        ?>
                                                    </p>
                                                    <a href="<?php echo esc_url($permalink); ?>" class="btn">
                                                        Xem thêm
                                                    </a>
                                                </div>
                                            </div>
                                        <?php }
                                        ?>
                                    </div>
                                <?php }
                                ?>

                            </div>
                        <?php }
                        ?>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </section>
<?php }

$block_teachers = get_field('block_teachers');

if (!empty($block_teachers) && is_array($block_teachers)) { ?>
    <section class="block-teachers">
        <div class="container">
            <?php
            echo !empty($block_teachers['title']) ? '<h2 class="wow animate__animated animate__fadeIn">' . $block_teachers['title'] . '</h2>' : '';

            if (!empty($block_teachers['teacher'])) { ?>
                <div class="list-teacher wow animate__animated animate__slideInUp">
                    <?php
                    foreach ($block_teachers['teacher'] as $teacher) {
                        $teacher_id = $teacher->ID;
                        $thumbnail = get_the_post_thumbnail_url($teacher_id);
                        $permalink = get_permalink($teacher_id);
                        $list_skill = get_field('list_skill', $teacher_id);
                    ?>
                        <div class="single-teacher">
                            <div class="image">
                                <img src="<?php echo $thumbnail ?: get_stylesheet_directory_uri() . '/assets/images/teacher.png'; ?>" alt="<?php echo esc_attr(get_the_title($teacher_id)); ?>">
                            </div>
                            <div class="info">
                                <div class="profile">
                                    <p class="title"><?php echo esc_html(get_the_title($teacher_id)); ?></p>
                                    <?php
                                    if (!empty($list_skill)) { ?>
                                        <ul class="skill-list">
                                            <?php
                                            foreach ($list_skill as $skill) {
                                                echo '<li>' . $skill['skill'] . '</li>';
                                            }
                                            ?>
                                        </ul>
                                    <?php }
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            <?php }
            ?>

        </div>
    </section>
<?php }

$block_achievements = get_field('block_achievements');

if (!empty($block_partner) && is_array($block_partner)) { ?>
    <section class="block-achievements">
        <div class="container">
            <?php
            echo !empty($block_achievements['title']) ? '<h2 class="wow animate__animated animate__fadeIn">' . $block_achievements['title'] . '</h2>' : '';

            if (!empty($block_achievements['list_achievements'])) { ?>
                <div class="list-achievements wow animate__animated animate__bounceInUp">
                    <?php
                    foreach ($block_achievements['list_achievements'] as $achievement) { ?>
                        <div class="achievement-item">
                            <div class="image">
                                <img src="<?php echo !empty($achievement['image']['url']) ? $achievement['image']['url'] : '' ?>" alt="<?php echo !empty($achievement['name']) ? $achievement['name'] : '' ?>">
                                <div class="score">
                                    <span><?php echo !empty($achievement['score']) ? $achievement['score'] : '' ?></span>
                                    <?php echo !empty($achievement['sub_title_score']) ? $achievement['sub_title_score'] : '' ?>
                                </div>
                            </div>
                            <div class="name">
                                <?php echo !empty($achievement['name']) ? $achievement['name'] : '' ?>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            <?php }
            ?>
        </div>
    </section>
<?php }

$block_partner = get_field('block_partner');

if (!empty($block_partner) && is_array($block_partner)) { ?>
    <section class="block-partner">
        <?php
        echo !empty($block_partner['title']) ? '<h2>' . $block_partner['title'] . '</h2>' : '';

        if (!empty($block_partner['list_partner'])) { ?>
            <div class="list-partners">
                <div class="container">
                    <div class="swiper partner-slide">
                        <div class="swiper-wrapper">
                            <?php
                            foreach ($block_partner['list_partner'] as $partner) {
                                echo '<div class="swiper-slide">
                                <div class="image">
                                    <img src="' . $partner['image']['url'] . '" alt="' . $partner['image']['title'] . '">
                                </div>
                            </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
        ?>
    </section>
<?php }

$block_posts = get_field('block_posts');

if (!empty($block_posts) && is_array($block_posts)) { ?>
    <section class="block-news">
        <div class="container">
            <?php
            echo !empty($block_posts['title']) ? '<h2 class="wow animate__animated animate__fadeIn">' . $block_posts['title'] . '</h2>' : '';

            if (!empty($block_posts['list_posts'])) {
                $posts = $block_posts['list_posts'];
            ?>
                <div class="news-grid">
                    <!-- Featured News (Left) -->
                    <div class="news-featured wow animate__animated animate__fadeInLeft">
                        <?php
                        if (!empty($posts[0])) {
                            $post_id = $posts[0]->ID;
                        ?>
                            <a href="<?php echo get_permalink($post_id); ?>" class="news-item news-large">
                                <div class="news-image">
                                    <img src="<?php echo get_the_post_thumbnail_url($post_id) ?: get_stylesheet_directory_uri() . '/assets/images/image_new.png'; ?>" alt="<?php echo esc_attr(get_the_title($post_id)); ?>">
                                </div>
                                <div class="news-content">
                                    <h3><?php echo esc_html(get_the_title($post_id)); ?></h3>
                                    <div class="news-date">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none">
                                            <path d="M13.333 0C14.8058 0 16 1.19424 16 2.66699V13.333C16 14.8058 14.8058 16 13.333 16H2.66699C1.19424 16 0 14.8058 0 13.333V2.66699C0 1.19424 1.19424 0 2.66699 0H13.333ZM1.77734 3.55566V13.333C1.77734 13.8239 2.17608 14.2227 2.66699 14.2227H13.333C13.8239 14.2227 14.2227 13.8239 14.2227 13.333V3.55566H1.77734ZM11.5557 5.33301C12.0466 5.33304 12.4443 5.73175 12.4443 6.22266C12.4441 6.71337 12.0464 7.1113 11.5557 7.11133H4.44434C3.95364 7.11124 3.5559 6.71334 3.55566 6.22266C3.55566 5.73178 3.95349 5.33309 4.44434 5.33301H11.5557Z"
                                                fill="#8B8B8B" />
                                        </svg>
                                        <span><?php echo get_the_date('d/m/Y', $post_id); ?></span>
                                    </div>
                                </div>
                            </a>
                        <?php }
                        ?>
                        <!-- Small News Items -->
                        <div class="news-small-grid">
                            <?php
                            for ($i = 1; $i <= 3; $i++) {
                                if (!empty($posts[$i])) {
                                    $post_id = $posts[$i]->ID;
                            ?>
                                    <a href="<?php echo get_permalink($post_id); ?>" class="news-item news-small">
                                        <div class="news-image">
                                            <img src="<?php echo get_the_post_thumbnail_url($post_id) ?: get_stylesheet_directory_uri() . '/assets/images/image_new_2.png'; ?>" alt="<?php echo esc_attr(get_the_title($post_id)); ?>">
                                        </div>
                                        <div class="news-content">
                                            <h4><?php echo esc_html(get_the_title($post_id)); ?></h4>
                                            <p class="d-lg-none"><?php echo wp_trim_words(get_the_excerpt($post_id), 40); ?></p>
                                            <div class="news-date">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none">
                                                    <path d="M13.333 0C14.8058 0 16 1.19424 16 2.66699V13.333C16 14.8058 14.8058 16 13.333 16H2.66699C1.19424 16 0 14.8058 0 13.333V2.66699C0 1.19424 1.19424 0 2.66699 0H13.333ZM1.77734 3.55566V13.333C1.77734 13.8239 2.17608 14.2227 2.66699 14.2227H13.333C13.8239 14.2227 14.2227 13.8239 14.2227 13.333V3.55566H1.77734ZM11.5557 5.33301C12.0466 5.33304 12.4443 5.73175 12.4443 6.22266C12.4441 6.71337 12.0464 7.1113 11.5557 7.11133H4.44434C3.95364 7.11124 3.5559 6.71334 3.55566 6.22266C3.55566 5.73178 3.95349 5.33309 4.44434 5.33301H11.5557Z"
                                                        fill="#8B8B8B" />
                                                </svg>
                                                <span><?php echo get_the_date('d/m/Y', $post_id); ?></span>
                                            </div>
                                        </div>
                                    </a>
                                <?php }
                                ?>
                            <?php }
                            ?>
                        </div>
                    </div>

                    <!-- News List (Right) -->
                    <div class="news-list wow animate__animated animate__fadeInRight">
                        <?php
                        for ($i = 4; $i < count($posts); $i++) {
                            $post_id = $posts[$i]->ID;
                        ?>
                            <a href="<?php echo get_permalink($post_id); ?>" class="news-item news-horizontal">
                                <div class="news-image">
                                    <img src="<?php echo get_the_post_thumbnail_url($post_id) ?: get_stylesheet_directory_uri() . '/assets/images/image_new.png'; ?>" alt="<?php echo esc_attr(get_the_title($post_id)); ?>">
                                </div>
                                <div class="news-content">
                                    <h4><?php echo esc_html(get_the_title($post_id)); ?></h4>
                                    <p><?php echo wp_trim_words(get_the_excerpt($post_id), 25); ?></p>
                                    <div class="news-date">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none">
                                            <path d="M13.333 0C14.8058 0 16 1.19424 16 2.66699V13.333C16 14.8058 14.8058 16 13.333 16H2.66699C1.19424 16 0 14.8058 0 13.333V2.66699C0 1.19424 1.19424 0 2.66699 0H13.333ZM1.77734 3.55566V13.333C1.77734 13.8239 2.17608 14.2227 2.66699 14.2227H13.333C13.8239 14.2227 14.2227 13.8239 14.2227 13.333V3.55566H1.77734ZM11.5557 5.33301C12.0466 5.33304 12.4443 5.73175 12.4443 6.22266C12.4441 6.71337 12.0464 7.1113 11.5557 7.11133H4.44434C3.95364 7.11124 3.5559 6.71334 3.55566 6.22266C3.55566 5.73178 3.95349 5.33309 4.44434 5.33301H11.5557Z"
                                                fill="#8B8B8B" />
                                        </svg>
                                        <span><?php echo get_the_date('d/m/Y', $post_id); ?></span>
                                    </div>
                                </div>
                            </a>
                        <?php }
                        ?>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </section>
<?php }
?>

<?php
get_footer();
