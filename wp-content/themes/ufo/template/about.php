<?php

/**
 * Template Name: About
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
?>
<section class="block-information introduce-page bg-gradient-1 bg-gradient-2">
    <?php
    $block_information_1 = get_field('block_information_1');

    if (!empty($block_information_1) && is_array($block_information_1)) {
    ?>
        <div class="content">
            <div class="text d-lg-none text-center wow animate__animated animate__fadeInLeft">
                <?php echo !empty($block_information_1['title']) ? '<h1>' . $block_information_1['title'] . '</h1>' : '' ?>
            </div>
            <div class="image wow animate__animated animate__fadeInLeft">
                <iframe src="https://drive.google.com/file/d/1fFT4T4EGx0Qp6k9yXq8CZgc70dH_1gbT/preview" allowfullscreen frameborder="0"></iframe>
                <div style="position:absolute; top:0; right:0; width:60px; height:60px;"></div>
            </div>
            <div class="text wow animate__animated animate__fadeInRight">
                <?php
                echo !empty($block_information_1['title']) ? '<h1 class="d-none d-lg-block">' . $block_information_1['title'] . '</h1>' : '';

                if (!empty($block_information_1['description'])) {
                    echo $block_information_1['description'];
                }

                if (!empty($block_information_1['list_data'])) { ?>
                    <div class="list-number">
                        <?php
                        foreach ($block_information_1['list_data'] as $data) {
                            echo '<div class="number-item">
                                    <span>' . $data['number'] . '</span>
                                    <p>' . $data['text'] . '</p>
                                </div>';
                        }
                        ?>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    <?php
    }

    $block_information = get_field('block_information');

    if (!empty($block_information) && is_array($block_information)) { ?>
        <div class="content">
            <div class="text d-lg-none text-center wow animate__animated animate__fadeInLeft">
                <?php echo !empty($block_information['title']) ? '<h1>' . $block_information['title'] . '</h1>' : '' ?>
            </div>
            <div class="text order-2 order-lg-1 wow animate__animated animate__fadeInLeft">
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
            <div class="image order-1 order-lg-2 wow animate__animated animate__fadeInRight" style="background: none;">
                <iframe src="https://drive.google.com/file/d/1fFT4T4EGx0Qp6k9yXq8CZgc70dH_1gbT/preview" allowfullscreen frameborder="0"></iframe>
                <div style="position:absolute; top:0; right:0; width:60px; height:60px;"></div>
            </div>
        </div>
    <?php }
    ?>


    <?php
    $block_introduce = get_field('block_introduce');
    if (!empty($block_introduce) && is_array($block_introduce) && !empty($block_introduce['list_introduce'])) { ?>
        <div class="core-value">
            <?php
            foreach ($block_introduce['list_introduce'] as $introduce) { ?>
                <div class="value-item wow animate__animated animate__fadeInLeft">
                    <div class="image">
                        <img src="<?php echo !empty($introduce['icon']['url']) ? $introduce['icon']['url'] : get_stylesheet_directory_uri() . '/assets/images/value.png' ?>" alt="<?php echo !empty($introduce['title']) ? $introduce['title'] : '' ?>">
                    </div>
                    <p class="title"><?php echo !empty($introduce['title']) ? $introduce['title'] : '' ?></p>
                    <div class="text">
                        <?php echo !empty($introduce['description']) ? $introduce['description'] : '' ?>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    <?php }
    ?>

</section>
<?php

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

get_footer(); ?>