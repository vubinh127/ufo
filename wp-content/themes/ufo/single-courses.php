<?php
get_header();
$general_infor = get_field('general_infor');
$learning_path = get_field('learning_path');
$course_info = get_field('course_info');

$title = get_the_title();
if (has_post_thumbnail()) { ?>
    <section class="block-banner detail-course-page">
        <div class="container">
            <div class="banner">
                <div class="image">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $title ?>">
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<section class="block-detail-course">
    <div class="container d-flex flex-column flex-lg-row align-items-start justify-content-between">
        <div class="w-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo get_home_url() ?>">Trang Chủ</a></li>
                    <?php
                    $terms = get_the_terms(get_the_ID(), 'course_category');

                    if (!empty($terms) && !is_wp_error($terms)) :
                        $term = $terms[0];
                    ?>
                        <li class="breadcrumb-item">
                            <a href="<?php echo get_term_link($term); ?>">
                                <?php echo esc_html($term->name); ?>
                            </a>
                        </li>
                    <?php endif; ?>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $title ?></li>
                </ol>
            </nav>
            <div class="title">
                <?php
                if (!empty($terms) && !is_wp_error($terms)) :
                ?>
                    <div class="lang kr <?php echo esc_attr($term->slug); ?>">
                        <?php echo $term->name; ?>
                    </div>
                <?php endif; ?>
                <?php echo $title ?>
            </div>
            <div class="detail-content">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-general-info-tab" data-bs-toggle="pill" data-bs-target="#pills-general-info" type="button" role="tab" aria-controls="pills-general-info" aria-selected="true">Thông tin chung</button>
                    </li>
                    <?php
                    if (array_filter($learning_path)) { ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-route-tab" data-bs-toggle="pill" data-bs-target="#pills-route" type="button" role="tab" aria-controls="pills-route" aria-selected="false">Lộ trình học</button>
                        </li>
                    <?php }
                    ?>


                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-general-info" role="tabpanel" aria-labelledby="pills-general-info-tab">
                        <div class="object">
                            <?php
                            if ($general_infor['description']) { ?>
                                <div class="text">
                                    <strong>Về khoá học</strong>
                                    <?php echo $general_infor['description'] ?>
                                </div>
                            <?php }

                            $list_target_audience = $general_infor['list_target_audience'];

                            if (!empty($list_target_audience)) { ?>
                                <div class="text user">
                                    <strong>Đối tượng</strong>
                                    <ul>
                                        <?php
                                        foreach ($list_target_audience as $target) {
                                            echo '<li>' . $target['target_audience'] . '</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            <?php }

                            $group_about_courses = $general_infor['group_about_courses'];

                            if (array_filter($group_about_courses)) { ?>
                                <div class="text about-course">
                                    <strong>Mô tả khoá học</strong>
                                    <?php
                                    echo !empty($group_about_courses['text_note_about_courses']) ? $group_about_courses['text_note_about_courses'] : '';

                                    if (!empty($group_about_courses['list_about_courses'])) {
                                        echo '<ul>';
                                        foreach ($group_about_courses['list_about_courses'] as $about) {
                                            echo '<li>' . $about['about_courses'] . '</li>';
                                        }
                                        echo '</ul>';
                                    }
                                    ?>
                                </div>
                            <?php }

                            $list_output = $general_infor['list_output'];

                            if (!empty($list_output)) { ?>
                                <div class="text output">
                                    <strong>Đầu ra</strong>
                                    <ul>
                                        <?php
                                        foreach ($list_output as $output) {
                                            echo '<li>' . $output['output'] . '</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            <?php }

                            $group_sale_fee = $general_infor['group_sale_fee'];

                            if (array_filter($group_sale_fee)) { ?>
                                <div class="text sale">
                                    <strong>Chính sách ưu đãi học phí</strong>
                                    <?php
                                    if (!empty($group_sale_fee['list_sale_fee'])) {
                                        echo '<ul>';
                                        foreach ($group_sale_fee['list_sale_fee'] as $sale) {
                                            echo '<li>' . $sale['sale_fee'] . '</li>';
                                        }
                                        echo '</ul>';
                                    }

                                    if (!empty($group_sale_fee['text_note_sale'])) {
                                        echo '<span>' . $group_sale_fee['text_note_sale'] . '</span>';
                                    }
                                    ?>
                                </div>
                            <?php }
                            ?>

                        </div>
                    </div>
                    <?php
                    if (array_filter($learning_path)) {  ?>
                        <div class="tab-pane fade" id="pills-route" role="tabpanel" aria-labelledby="pills-route-tab">
                            <div class="route-list">
                                <?php
                                foreach ($learning_path['list_learning'] as $key => $learning) {
                                    echo '<p><span>Buổi ' . ($key + 1) . ': </span>' . $learning['learning'] . '</p>';
                                }
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php
        if (array_filter($course_info)) { ?>
            <div class="sign-up-block">
                <div class="card-inner">
                    <h3 class="course-title"><?php echo $title ?></h3>

                    <?php
                    if (!empty($course_info['list_infor'])) { ?>
                        <div class="course-info-box">
                            <?php
                            foreach ($course_info['list_infor'] as $infor) {
                                echo '<div class="info-item">';
                                echo $infor['infor'];
                                echo '</div>';
                            }
                            ?>
                        </div>
                    <?php }

                    if (!empty($course_info['course_note'])) {
                        echo '<p class="course-note">' . $course_info['course_note'] . '</p>';
                    }
                    ?>

                    <a href="#" class="btn btn-register bg-8433D3">Đăng ký ngay</a>
                </div>
            </div>
        <?php }
        ?>


    </div>
</section>
<?php
$current_id = get_the_ID();

$terms = wp_get_post_terms($current_id, 'course_category', ['fields' => 'ids']);

$args = [
    'post_type' => 'courses',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'post__not_in' => [get_the_ID()],
    'tax_query'      => [
        [
            'taxonomy' => 'course_category',
            'field'    => 'term_id',
            'terms'    => $terms,
        ]
    ]
];

$queryRelatedCourses = new WP_Query($args);

if ($queryRelatedCourses->have_posts()) { ?>
    <section class="courses-section detail-course-page">
        <h2>Khám phá thêm các khóa học khác</h2>
        <div class="container">
            <div class="grid-courses">
                <?php
                while ($queryRelatedCourses->have_posts()) {
                    $queryRelatedCourses->the_post();
                    $titleCourse = get_the_title();
                    $thumbnailCourse = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_stylesheet_directory_uri() . '/assets/images/course_1.png';
                    $information_display = get_field('information_display', get_the_ID());
                    $terms = get_the_terms(get_the_ID(), 'course_category');
                ?>
                    <a href="<?php echo esc_url(get_permalink()); ?>">
                        <div class="course-item">
                            <div class="image">
                                <img src="<?php echo esc_url($thumbnailCourse); ?>" alt="<?php echo $titleCourse; ?>">
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
                                        <p><?php echo $titleCourse; ?></p>
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
                <?php }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
<?php }
?>

<?php get_footer(); ?>