<?php
/**
 * Template Name: Template Edit Book
 * 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Empire_Listing
 */

get_header();

?>


    
    <?php 

     echo do_shortcode('[themedomain_frontend_editpost]'); 

get_footer(); ?>
