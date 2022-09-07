<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Empire_Listing
 */

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Books Port</title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="header-wrap">

<nav class="navbar navbar-expand-lg bg-light fixed-top scrolling-navbar" style="padding-top: 30px;">
<div class="container">

<div class="navbar-header">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
</button>
<a href="index-2.html" class="navbar-brand"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""></a>
</div>
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto w-100 justify-content-center">
<li class="nav-item  active">
<a class="nav-link" href="http://localhost/empirelisting/"  aria-haspopup="true" aria-expanded="false">
Home</a></li>
<li class="nav-item">
<a class="nav-link" href="http://localhost/empirelisting/all-listings/"  aria-haspopup="true" aria-expanded="false">
All Listings</a></li>
<li class="nav-item">
<a class="nav-link" href="http://localhost/empirelisting/about-us/"  aria-haspopup="true" aria-expanded="false">
About Us</a></li>
<li class="nav-item">
<a class="nav-link" href="http://localhost/empirelisting/faq/"  aria-haspopup="true" aria-expanded="false">
FAQ</a></li>
<li class="nav-item">
<a class="nav-link" href="http://localhost/empirelisting/blog/"  aria-haspopup="true" aria-expanded="false">
Blog</a></li>
<li class="nav-item">
<a class="nav-link" href="http://localhost/empirelisting/contact-us/"  aria-haspopup="true" aria-expanded="false">
Contact Us</a></li>
</ul>
<div class="post-btn">
<a class="btn btn-common" href="http://localhost/empirelisting/post-book/"><i class="lni-pencil-alt"></i> Post an book</a>
</div>
</div>
</div>

<ul class="mobile-menu">
<li>
<a class="active" href="#">
Home
</a>
<ul class="dropdown">
<li><a class="active" href="index-2.html">Home 1</a></li>
<li><a href="index-3.html">Home 2</a></li>
</ul>
</li>
<li>
<a href="category.html">Categories</a>
</li>
<li>
<a href="#">
Listings
</a>
<ul class="dropdown">
<li><a href="adlistinggrid.html">Ad Grid</a></li>
<li><a href="adlistinglist.html">Ad Listing</a></li>
<li><a href="ads-details.html">Listing Detail</a></li>
</ul>
</li>
<li>
<a href="#">Pages</a>
<ul class="dropdown">
<li><a href="about.html">About Us</a></li>
<li><a href="services.html">Services</a></li>
<li><a href="ads-details.html">Ads Details</a></li>
<li><a href="post-ads.html">Ads Post</a></li>
<li><a href="pricing.html">Packages</a></li>
<li><a href="testimonial.html">Testimonial</a></li>
<li><a href="faq.html">FAQ</a></li>
<li><a href="404.html">404</a></li>
</ul>
</li>
<li>
<a href="#">Blog</a>
<ul class="dropdown">
<li><a href="blog.html">Blog - Right Sidebar</a></li>
<li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
<li><a href="blog-grid-full-width.html"> Blog full width </a></li>
<li><a href="single-post.html">Blog Details</a></li>
</ul>
</li>
<li>
<a href="contact.html">Contact Us</a>
</li>
</ul>

</nav>

