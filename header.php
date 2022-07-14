<!DOCTYPE html>
<html <?php language_attributes( )?>>
<head>
    <meta charset="<?php bloginfo( 'chaset' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' )?> <?php bloginfo( 'description' ) ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(  )?>">
    <link>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Corben:wght@700&family=Epilogue:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<header class="header">
        <div class="tk-blob header-blob" style="--time: 15s;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 317.5 353.7">
                <path d="M291.8 55.3c30.4 39.9 30.7 102 17 160.4-13.8 58.3-41.6 112.9-84 130.9s-99.3-.6-137-30C50.2 287.1 32 246.9 17 200.5 2.1 154.1-9.6 101.4 11.5 63.6 32.6 25.8 86.6 2.8 143.8.2c57.2-2.6 117.6 15.2 148 55.1z"></path>
            </svg>
        </div>
        <div id="navbar" class="navbar">
            <h1 class="section-header "><a class="home" href="<?php echo home_url()?>"><?php bloginfo( 'name' )?></a></h1>
            <div class="menu">
                <p class="menu-option work" id="work" onclick="scrollWork()">Selected work</p>
                <p class="menu-option" id="contact" onclick="scrollContact()">Contact</p>
            </div>
        </div>
        <div id="content">
        <div id="about-section">
            <p class="about">Front-end developer creating <span class="enhanced-text">delightful</span> and intuitive web apps driven by purpose and <span class="enhanced-text">technology</span>.</p>
        </div>
        <script>
            function scrollContact() {
                var contact = document.getElementById("contact-section");
                contact.scrollIntoView();
            }
            function scrollWork() {
                var work = document.getElementById("work-section");
                work.scrollIntoView();
            }
        </script>
</header>