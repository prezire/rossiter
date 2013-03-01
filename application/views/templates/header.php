<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />

    <title>Digital Lifeline</title>
    
    <link rel="stylesheet" href="<?php echo base_url('public/foundation/stylesheets/foundation.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('public/foundation/stylesheets/app.css'); ?>" />

    <script src="<?php echo base_url('public/foundation/javascripts/modernizr.foundation.js'); ?>"></script>
    <script src="<?php echo base_url('public/foundation/javascripts/jquery.js'); ?>"></script>
    
    <style>
      .nav-bar
      {
        margin: 0;
      }
      .container
      {
        padding: 20px;
        width: 930px;
        margin-left: auto;
        margin-right: auto;
      }
    </style>
  </head>
  <body>
    <ul class="nav-bar">
      <li class="has-flyout">
        <a href="<?php echo site_url('home'); ?>">Digital Lifeline</a>
        <a href="#" class="flyout-toggle"><span> </span></a>
        <ul class="flyout">
          <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
          <li><a href="<?php echo site_url('home/about_us'); ?>">About Us</a></li>
          <li><a href="<?php echo site_url('home/contact_us'); ?>">Contact Us</a></li>
          <li><a href="<?php echo site_url('home/faqs'); ?>">FAQs</a></li>
          <li><a href="<?php echo site_url('home/api'); ?>">API</a></li>
        </ul>
      </li>
      <li class="has-flyout">
        <a href="<?php echo site_url('api'); ?>">Resource</a>
        <a href="#" class="flyout-toggle"><span> </span></a>
        <ul class="flyout">
          <li><a href="<?php echo site_url('company'); ?>">Companies</a></li>
          <li><a href="<?php echo site_url('ngo'); ?>">NGOs</a></li>
          <li><a href="<?php echo site_url('event'); ?>">Events</a></li>
          <li><a href="<?php echo site_url('user'); ?>">Users</a></li>
          <li><a href="<?php echo site_url('beneficiary'); ?>">Beneficiaries</a></li>
          <li><a href="<?php echo site_url('benefactor'); ?>">Benefactors</a></li>
          <li><a href="<?php echo site_url('gift_aid'); ?>">Gift Aid</a></li>
        </ul>
      </li>
      <li><a href="<?php echo site_url('home/search'); ?>">Search</a></li>
      <li><a href="<?php echo site_url('home/log/in'); ?>">Sign In</a></li>
    </ul>
    <div class="container">