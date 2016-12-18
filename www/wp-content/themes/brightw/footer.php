<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brightw
 */

?>

<footer>
    <hr>
        <div class="copyrigt">
            &copy; Misha Drohomiretskiy 2016
        </div>
     <br>
</footer>

<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>


<?php wp_footer(); ?>

</body>
</html>
