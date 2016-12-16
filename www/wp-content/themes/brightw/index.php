<?php /** * The main template file. * * This is the most generic template file in a WordPress theme * and one of the two required files for a theme (the other being style.css). * It is used to display a page when nothing more specific matches a query. * E.g., it puts together the home page when no home.php file exists. * * @link https://codex.wordpress.org/Template_Hierarchy * * @package brightw */ get_header(); ?>

<div class="content">
    <div class="container-fluid">
        <div class="slogan">
            <h1>Welcome! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio iste laboriosam ab dignissimos distinctio aliquid.</h1>
        </div>
        <hr>
        <div class="row content-row clearfix">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="card-row">
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 ">
                    <div class="card">
                        <h4><?php the_title() ?></h4>
                        <p>
                            <?php the_time( 'j M Y в H:i'); ?> </p>
                        <a href="#">
                            <span class="img">
                                <?php 
                                if (has_post_thumbnail()){
                                    the_post_thumbnail();
                                }   
                                else {
                            ?>
                                <img src="<?php bloginfo('template_url')?>/img/photo/noPicture.png" alt="">
                            <?php
                                }
                            ?>
                        </span></a>
                        <!--                        <?php the_content() ?>-->
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <h2>Даних немає!!!</h2>
            <?php endif; ?>
        </div>
    </div>
    <div class="nav-pager">
        <ul class="pagination">
            <li><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </div>
</div>
<?php get_footer(); ?>










<!--

Слайдер/////
<div id="carousel" class="carousel slide">
           <ol class="carousel-indicators">
               <li class="active" data-target="#carousel" data-slide-to="0"></li>
               <li data-target="#carousel" data-slide-to="1"></li>
               <li data-target="#carousel" data-slide-to="2"></li>
           </ol>
           <div class="carousel-inner">
               <div class="item active">
                   <img src="<?php bloginfo( 'stylesheet_directory' )?>/img/slider/slide1.jpg" alt="">
                   <div class="carousel-caption">
                       <h3><?php the_title()?></h3>
                       <p>Весілля Андрія та Оксани</p>
                   </div>
               </div>
               <div class="item">
                   <img src="<?php bloginfo( 'stylesheet_directory' )?>/img/slider/slide2.jpg" alt="">
                   <div class="carousel-caption">
                       <h3>Слайд №2</h3>
                       <p>Весілля Івана і Наталки</p>
                   </div>
               </div>
               <div class="item">
                   <img src="<?php bloginfo( 'stylesheet_directory' )?>/img/slider/slide1.jpg" alt="">
                   <div class="carousel-caption">
                       <h3>Слайд №3</h3>
                       <p>Весілля Андрія та Оксани</p>
                   </div>
               </div>
           </div>
           <a href="#carousel" class="left carousel-control" data-slide="prev">
               <span class="glyphicon glyphicon-shevron-left"></span>
           </a>
           <a href="#carousel"  class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-shevron-right"></span>
           </a>
           
       </div>
-->