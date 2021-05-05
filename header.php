<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php bloginfo('description') ?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fontawsome.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/all.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div id="js-fv" class="fv">
        <h1 class="fv__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Ryu's Portfolio" /></h1>
    </div>
    <header id="js-header" class="header">
        <nav class="nav">
            <?php if (is_front_page()) : ?>
                <ul class="nav__list">
                    <li class="nav__item" lang="en"><a href="#about">About</a></li>
                    <li class="nav__item" lang="en"><a href="#skill">Skill</a></li>
                    <li class="nav__item" lang="en"><a href="#work">Work</a></li>
                    <li class="nav__item" lang="en"><a href="#blog">Blog</a></li>
                </ul>
            <?php else : ?>
                <ul class="nav__list">
                    <li class="nav__item" lang="en">
                        <a href="index.html#about">About</a>
                    </li>
                    <li class="nav__item" lang="en">
                        <a href="index.html#skill">Skill</a>
                    </li>
                    <li class="nav__item" lang="en">
                        <a href="index.html#work">Work</a>
                    </li>
                    <li class="nav__item" lang="en">
                        <a href="index.html#blog">Blog</a>
                    </li>
                </ul>
            <?php endif; ?>
        </nav>
    </header>