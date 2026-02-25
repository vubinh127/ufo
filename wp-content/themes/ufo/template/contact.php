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
            </div>
        <?php } ?>
    </div>
</section>
<?php get_footer(); ?>