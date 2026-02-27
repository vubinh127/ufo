<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php 
    $logo = get_field('logo', 'option');
    ?>
<header>
    <div class="container">
        <nav class="main-menu navbar navbar-expand-xl navbar-light justify-content-between align-items-center">
            <div class="d-flex align-items-center justify-content-between w-100">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img src="<?php echo !empty($logo) ? $logo['url'] : get_stylesheet_directory_uri().'/assets/images/logo.png' ?>" alt=""/>
                </a>
                <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" viewBox="0 0 22 16" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H22V2H0V0ZM0 7H22V9H0V7ZM22 14H0V16H22V14Z"
                              fill="#F4F4F4"/>
                    </svg>
                </button>
            </div>

            <div class="collapse navbar-collapse menu-custom justify-content-end flex-shrink-0" id="navbarNav">
                
                <?php ufo_menu('main-menu') ?>

                <?php
                $button_lien_he = get_field('button_lien_he', 'option');
                if(!empty($button_lien_he)){ ?>
                    <a class="btn contact bg-8433D3" href="<?php echo $button_lien_he['url'] ?>">
                        Liên hệ
                    </a>
                <?php } ?>
            </div>
        </nav>
    </div>
</header>

<main>