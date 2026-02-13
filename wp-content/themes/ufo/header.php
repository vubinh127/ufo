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
<header>
    <div class="container">
        <nav class="main-menu navbar navbar-expand-xl navbar-light justify-content-between align-items-center">
            <div class="d-flex align-items-center justify-content-between w-100">
                <a class="navbar-brand" href="/">
                    <img src="/assets/images/logo.png" alt=""/>
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
                <ul id="menu-main-menu" class="navbar-nav menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Giới thiệu</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/" id="brandDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Khóa học
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="brandDropdown">
                            <li><a class="dropdown-item" href="/brand?section=1">목공의 마음</a></li>
                            <li><a class="dropdown-item" href="/brand?section=2">목공의 전문성</a></li>
                            <li><a class="dropdown-item" href="/brand?section=3">온열 목공간</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Sự kiện</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Tài liệu</a>
                    </li>
                </ul>
                <a class="btn contact bg-8433D3" href="">
                    Liên hệ
                </a>
            </div>
        </nav>
    </div>
</header>

<main>