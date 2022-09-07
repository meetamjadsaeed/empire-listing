<?php
/**
 * Template Name: Template Testing
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
include(dirname(__FILE__)."/reuse/pageHeader.php");

?>


<div id="content" class="section-padding">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
<aside>
<div class="sidebar-box">
<div class="user">
<figure>
<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/author/img1.jpg" alt=""></a>
</figure>
<div class="usercontent">
<h3>Hello William!</h3>
<h4>Administrator</h4>
</div>
</div>
<nav class="navdashboard">
<ul>
<li>
<a class="active" href="dashboard.html">
<i class="lni-dashboard"></i>
<span>Dashboard</span>
</a>
</li>
<li>
<a href="account-profile-setting.html">
<i class="lni-cog"></i>
<span>Profile Settings</span>
</a>
</li>
<li>
<a href="account-myads.html">
<i class="lni-layers"></i>
<span>My Ads</span>
</a>
</li>
<li>
<a href="offermessages.html">
<i class="lni-envelope"></i>
<span>Offers/Messages</span>
</a>
</li>
<li>
<a href="payments.html">
<i class="lni-wallet"></i>
<span>Payments</span>
</a>
</li>
<li>
<a href="account-favourite-ads.html">
<i class="lni-heart"></i>
<span>My Favourites</span>
</a>
</li>
<li>
<a href="privacy-setting.html">
<i class="lni-star"></i>
<span>Privacy Settings</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-enter"></i>
<span>Logout</span>
</a>
</li>
</ul>
</nav>
</div>
<div class="widget">
<h4 class="widget-title">Advertisement</h4>
<div class="add-box">
<img class="img-fluid" src="assets/img/img1.jpg" alt="">
</div>
</div>
</aside>
</div>
<div class="col-sm-12 col-md-8 col-lg-9">
<div class="page-content">
<div class="inner-box">
<div class="dashboard-box">
<h2 class="dashbord-title">Dashboard</h2>
</div>
<div class="dashboard-wrapper">
<div class="dashboard-sections">
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="dashboardbox">
<div class="icon"><i class="lni-write"></i></div>
<div class="contentbox">
<h2><a href="#">Total Ad Posted</a></h2>
<h3>480 Add Posted</h3>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="dashboardbox">
<div class="icon"><i class="lni-add-files"></i></div>
<div class="contentbox">
<h2><a href="#">Featured Ads</a></h2>
<h3>80 Add Posted</h3>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="dashboardbox">
<div class="icon"><i class="lni-support"></i></div>
<div class="contentbox">
<h2><a href="#">Offers / Messages</a></h2>
<h3>2040 Messages</h3>
</div>
</div>
</div>
</div>
</div>
<table class="table table-responsive dashboardtable tablemyads">
<thead>
<tr>
<th>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="checkedall">
<label class="custom-control-label" for="checkedall"></label>
</div>
</th>
<th>Photo</th>
<th>Title</th>
<th>Category</th>
<th>Ad Status</th>
<th>Price</th>
<th>Action</th>
</tr>
</thead>
<tbody>



<tr data-category="active">
<td>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="adone">
<label class="custom-control-label" for="adone"></label>
</div>
</td>
<td class="photo"><img class="img-fluid" src="assets/img/product/img1.jpg" alt=""></td>
<td data-title="Title">
<h3>HP Laptop 6560b core i3 3nd generation</h3>
<span>Ad ID: ng3D5hAMHPajQrM</span>
</td>
<td data-title="Category"><span class="adcategories">Laptops & PCs</span></td>
<td data-title="Ad Status"><span class="adstatus adstatusactive">active</span></td>
<td data-title="Price">
<h3>139$</h3>
</td>
<td data-title="Action">
<div class="btns-actions">
<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>







<?php

get_footer();
