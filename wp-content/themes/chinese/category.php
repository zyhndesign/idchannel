<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="renderer" content="webkit">
        <title><?php wp_title("|",true,"right"); ?></title>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/frontend/app/favicon.png"
              mce_href="<?php echo get_template_directory_uri(); ?>/images/frontend/app/favicon.png" type="image/x-png">
        <link href="<?php echo get_template_directory_uri(); ?>/css/frontend/src/main.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/frontend/lib/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/frontend/src/config.js"></script>

    </head>
<body>
    <h1 class="logo">
        <a href="<?php echo home_url(); ?>"><?php echo get_bloginfo("name"); ?></a>
    </h1>
    <div class="menuContainer">
        <ul class="menu">
            <li class="menu-item">
                <a href="#" id="topVideoLinkTitle">推荐视频</a>
                <ul class="sub-menu hidden" id="topVideoLinks">
                    <li class="menu-item"><a href="#">视频1</a></li>
                    <li class="menu-item"><a href="#">视频1</a></li>
                    <li class="menu-item"><a href="#">视频1</a></li>
                    <li class="menu-item"><a href="#">视频1</a></li>
                    <li class="menu-item"><a href="#">视频1</a></li>
                </ul>
            </li>
        </ul>
        <?php wp_nav_menu(); ?>
    </div>

    <form role="search" method="get" class="search" action="<?php echo home_url(); ?>">
        <input type="text" name="s" class="searchInput" placeholder="搜索...">
    </form>

    <div class="description categoryDescription">
        <h2 class="title"><?php single_cat_title(); ?></h2>
        <p class="excerpt">
            <?php $category = get_queried_object();
            echo $category->description; ?>
        </p>
    </div>
    <div class="main">
        <div class="categoryContainer">
            <h2 class="singleTitle"><?php single_cat_title(); ?></h2>

            <?php previous_posts_link(); ?>

            <ul class="videoList">
                <li class="videoItem">
                    <a href="#">
                        <img class="videoPoster" src="<?php echo get_template_directory_uri(); ?>/images/frontend/data/1.jpg">
                        <h3 class="title">dddddddddd</h3>
                    </a>
                </li>
                <li class="videoItem">
                    <a href="#">
                        <img class="videoPoster" src="<?php echo get_template_directory_uri(); ?>/images/frontend/data/1.jpg">
                        <h3 class="title">dddddddddd</h3>
                    </a>
                </li>
                <li class="videoItem">
                    <a href="#">
                        <img class="videoPoster" src="<?php echo get_template_directory_uri(); ?>/images/frontend/data/1.jpg">
                        <h3 class="title">dddddddddd</h3>
                    </a>
                </li>
                <li class="videoItem">
                    <a href="#">
                        <img class="videoPoster" src="<?php echo get_template_directory_uri(); ?>/images/frontend/data/1.jpg">
                        <h3 class="title">dddddddddd</h3>
                    </a>
                </li>
                <li class="videoItem">
                    <a href="#">
                        <img class="videoPoster" src="<?php echo get_template_directory_uri(); ?>/images/frontend/data/1.jpg">
                        <h3 class="title">dddddddddd</h3>
                    </a>
                </li>
                <?php while ( have_posts() ) : the_post();?>

                <?php endwhile; // end of the loop. ?>
            </ul>

            <?php next_posts_link(); ?>

        </div>
    </div>

<?php get_footer(); ?>