<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brightw
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<title><?php bloginfo( 'name' ) ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body>

 <header>
        <nav class="navbar navbar-default menu " role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url() ?>"><img src="<?php bloginfo( 'stylesheet_directory' )?>/img/logo1.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<!--                       Меню-->
                       <?php wp_nav_menu(array('theme_location'=>'menu', 'menu_class'=>'nav navbar-nav', 'container'=>'false')); ?>
                  
                    <ul class="nav navbar-nav navbar-right icons">
                        <li>
                            <a href="#"><img src="<?php bloginfo( 'stylesheet_directory' )?>/img/google_plus.png" alt=""></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/drohomiretskiy"><img src="<?php bloginfo( 'stylesheet_directory' )?>/img/facebook.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php bloginfo( 'stylesheet_directory' )?>/img/twitter.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php bloginfo( 'stylesheet_directory' )?>/img/rss.png" alt=""></a>
                        </li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <i class="glyphicon glyphicon-globe globe"></i>

            </div>


            <!-- /.container-fluid -->
        </nav>


    </header>