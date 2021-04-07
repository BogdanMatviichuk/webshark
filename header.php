<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/fonts/stylesheet.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/media.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css">
    <title>Ditt digitala marknads - ­förings­team</title>
</head>
<body class="blue-theme">
<nav class="navbar sticky-top navbar-expand-lg" id="mynav">
    <div class="container">
        <div class="nav__wrapper">
            <a href="#" class="logo">
                <span>Web.</span><span>shark</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="burger-menu collapse navbar-collapse" id="navbarSupportedContent">

                <?php wp_nav_menu( [
                    'theme_location'  => 'top',
                    'container'       => false,
                    'menu_class'      => 'menu-list navbar-nav',
                    'menu_id'         => 'nav-collapse',

                ] ); ?>
                <a href="#" class="btn btn-primary">Nyhestbrev</a>
            </div>
        </div>
    </div>
</nav>