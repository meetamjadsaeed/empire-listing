<?php
/*
 * Template Name: Book Single Template
 * Template Post Type:book
 */
  
 get_header();  ?>




<div class="page-header" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">Details</h2>
<ol class="breadcrumb">
<li><a href="#">Home /</a></li>
<li class="current">Details</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<div class="section-padding">
<div class="container">

<div class="product-info row">
<div class="col-lg-8 col-md-12 col-xs-12">
<div class="ads-details-wrapper">
<div id="owl-demo" class="owl-carousel owl-theme">
<div class="item">
<div class="product-img">
<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/productinfo/img1.jpg" alt="">
</div>
<span class="price">$1,550</span>
</div>
<div class="item">
<div class="product-img">
<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/productinfo/img3.jpg" alt="">
</div>
<span class="price">$1,550</span>
</div>
<div class="item">
<div class="product-img">
<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/productinfo/img2.jpg" alt="">
</div>
<span class="price">$1,550</span>
</div>
</div>
</div>
<div class="details-box">
<div class="ads-details-info">
<h2><?php the_title(); ?></h2>
<div class="details-meta">
<span><a href="#"><i class="lni-alarm-clock"></i> 7 Jan, 10:10 pm</a></span>
<span>
<?php if(   get_field('country') ): ?>    
<a href="#"><i class="lni-map-marker"></i><?php the_field('country'); ?></a>
<?php endif; ?>
</span>
<span><a href="#"><i class="lni-eye"></i> 299 View</a></span>
</div>
<p class="mb-4"><?php the_content(); ?></p>

</div>
<div class="tag-bottom">
<div class="float-left">
<ul class="advertisement">
<li>
<p><strong><i class="lni-folder"></i> Categories:</strong> <a href="#"><?php the_terms( $post->ID, 'book_cat', '', ' / ' ); ?></a></p>
</li>
<li>
<?php if(   get_field('Condition') ): ?>
<p><strong><i class="lni-archive"></i> Condition:</strong> <?php the_field('Condition'); ?></p>
<?php endif; ?>
</li>
<li>
<p><strong><i class="lni-package"></i> Brand:</strong> <a href="#"><?php the_terms( $post->ID, 'brand', '', ' / ' ); ?></a></p>
</li>
</ul>
</div>
<div class="float-right">
<div class="share">
<div class="social-link">
<a class="facebook" data-toggle="tooltip" data-placement="top" title="facebook" href="#"><i class="lni-facebook-filled"></i></a>
<a class="twitter" data-toggle="tooltip" data-placement="top" title="twitter" href="#"><i class="lni-twitter-filled"></i></a>
<a class="linkedin" data-toggle="tooltip" data-placement="top" title="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
<a class="google" data-toggle="tooltip" data-placement="top" title="google plus" href="#"><i class="lni-google-plus"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">

<aside class="details-sidebar">
<div class="widget">
<h4 class="widget-title">Ad Posted By</h4>
<div class="agent-inner">
<div class="agent-title">
<div class="agent-photo">
<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/productinfo/agent.jpg" alt=""></a>
</div>
<div class="agent-details">
<h3><a href="#"><?php the_author(); ?></a></h3>
<span><i class="lni-phone-handset"></i>(123) 123-456</span>
</div>
</div>
<input type="text" class="form-control" placeholder="Your Email">
<input type="text" class="form-control" placeholder="Your Phone">
<p>I'm interested in this property [ID 123456] and I'd like to know more details.</p>
<button class="btn btn-common fullwidth mt-4">Send Message</button>
</div>
</div>

<div class="widget">
<h4 class="widget-title">More Ads From Seller</h4>
<ul class="posts-list">
<li>
<div class="widget-thumb">
<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/details/img1.jpg" alt="" /></a>
</div>
<div class="widget-content">
<h4><a href="#">Little Harbor Yacht 38</a></h4>
 <div class="meta-tag">
<span>
<a href="#"><i class="lni-user"></i> Smith</a>
</span>
<span>
<a href="#"><i class="lni-map-marker"></i> New Your</a>
</span>
<span>
<a href="#"><i class="lni-tag"></i> Radio</a>
</span>
</div>
<h4 class="price">$480.00</h4>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="widget-thumb">
<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/details/img2.jpg" alt="" /></a>
</div>
<div class="widget-content">
<h4><a href="#">Little Harbor Yacht 38</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-user"></i> Smith</a>
</span>
<span>
<a href="#"><i class="lni-map-marker"></i> New Your</a>
</span>
<span>
<a href="#"><i class="lni-tag"></i> Radio</a>
</span>
</div>
<h4 class="price">$480.00</h4>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="widget-thumb">
<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/details/img3.jpg" alt="" /></a>
</div>
<div class="widget-content">
<h4><a href="#">Little Harbor Yacht 38</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-user"></i> Smith</a>
</span>
<span>
<a href="#"><i class="lni-map-marker"></i> New Your</a>
</span>
<span>
<a href="#"><i class="lni-tag"></i> Radio</a>
</span>
</div>
<h4 class="price">$480.00</h4>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="widget-thumb">
<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/details/img4.jpg" alt="" /></a>
</div>
<div class="widget-content">
<h4><a href="#">Little Harbor Yacht 38</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-user"></i> Smith</a>
</span>
<span>
<a href="#"><i class="lni-map-marker"></i> New Your</a>
</span>
<span>
<a href="#"><i class="lni-tag"></i> Radio</a>
</span>
</div>
<h4 class="price">$480.00</h4>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="widget-thumb">
<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/details/img5.jpg" alt="" /></a>
</div>
<div class="widget-content">
<h4><a href="#">Little Harbor Yacht 38</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-user"></i> Smith</a>
</span>
<span>
 <a href="#"><i class="lni-map-marker"></i> New Your</a>
</span>
<span>
<a href="#"><i class="lni-tag"></i> Radio</a>
</span>
</div>
<h4 class="price">$480.00</h4>
</div>
<div class="clearfix"></div>
</li>
</ul>
</div>
</aside>

</div>
</div>

</div>
</div>


<section class="subscribes section-padding">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="subscribes-inner">
<div class="icon">
<i class="lni-pointer"></i>
</div>
<div class="sub-text">
<h3>Subscribe to Newsletter</h3>
<p>and receive new ads in inbox</p>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<form>
<div class="subscribe">
<input class="form-control" name="EMAIL" placeholder="Enter your Email" required="" type="email">
<button class="btn btn-common" type="submit">Subscribe</button>
</div>
</form>
</div>
</div>
</div>
</section>




<?php
get_footer();