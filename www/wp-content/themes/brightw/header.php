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
<title>Моє портфоліо</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="/css/bootstrap.css">
<link rel="stylesheet" href="/css/style.css">

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
                    <a class="navbar-brand" href="#"><img src="/img/logo1.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active-link"><a href="#">Головна</a></li>
                        <li><a href="#">Портфоліо</a></li>
                        <li><a href="#">Блог</a></li>
                        <li><a href="#">Про мене</a></li>
                        <li><a href="#">Контакти</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right icons">
                        <li>
                            <a href="#"><img src="/img/google_plus.png" alt=""></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/drohomiretskiy"><img src="/img/facebook.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="/img/twitter.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="/img/rss.png" alt=""></a>
                        </li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <i class="glyphicon glyphicon-globe globe"></i>

            </div>


            <!-- /.container-fluid -->
        </nav>


    </header>