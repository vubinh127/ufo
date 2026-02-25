<?php

/**
 * Template Name: Contact
 */
get_header();

$banner = get_field('banner');
$form = get_field('form');
$contact = get_field('contact');

if (!empty($banner)) {
?>
    <section class="block-banner contact-page">
        <div class="container">
            <div class="banner">
                <div class="image">
                    <img src="<?php echo $banner['url'] ?>" alt="<?php echo get_the_title() ?>">
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<section class="block-contact">
    <div class="content">
        <?php
        if (!empty($contact)) { ?>
            <div class="w-100">
                <?php
                echo !empty($contact['title']) ? '<h1>' . $contact['title'] . '</h1>' : '';
                echo !empty($contact['description']) ? $contact['description'] : '';

                if (!empty($contact['list_contact'])) {
                    foreach ($contact['list_contact'] as $contactItem) { ?>
                        <div class="contact">
                            <div class="text">
                                <?php
                                echo !empty($contactItem['icon']) ? $contactItem['icon'] : '';
                                echo !empty($contactItem['title']) ? $contactItem['title'] : '';
                                ?>
                            </div>
                            <p>
                                <?php
                                echo !empty($contactItem['description']) ? $contactItem['description'] : '';
                                ?>
                            </p>
                        </div>
                <?php }
                }
                ?>
            </div>
        <?php }

        if (!empty($form)) { ?>
            <div class="form-contact w-100">
                <?php echo do_shortcode($form); ?>
                <form class="search-form">
                    <div class="block-input">
                        <label class="form-label">Họ và tên</label>
                        <input type="text" class="form-control custom-input" placeholder="Nguyễn Văn A">
                    </div>

                    <div class="row block-input">
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control custom-input" placeholder="example@gmail.com">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control custom-input" placeholder="012345678">
                        </div>
                    </div>

                    <div class="block-input">
                        <label class="form-label">Khu vực sinh sống</label>
                        <select class="form-select custom-select">
                            <option>Hà Nội</option>
                            <option>TP.HCM</option>
                            <option>Đà Nẵng</option>
                        </select>
                    </div>

                    <div class="block-input">
                        <label class="form-label">Khóa học quan tâm</label>
                        <select class="form-select custom-select">
                            <option>Tiếng Hàn Sơ cấp 1</option>
                            <option>Tiếng Hàn Sơ cấp 2</option>
                        </select>
                    </div>

                    <div class="block-input">
                        <label class="form-label">Hãy cho UFO biết bạn cần gì nhé</label>
                        <textarea class="form-control custom-textarea" rows="4" placeholder="Nhập..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-submit bg-8433D3 w-100">
                        Submit
                    </button>

                </form>
            </div>
        <?php } ?>
    </div>
</section>
<?php get_footer(); ?>