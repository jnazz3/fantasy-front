<!DOCTYPE html>
<html>
	<head>
		<?php wp_head(); ?>
	</head>
	<body>
		<header class="site-header">
    		<div class="container">
      			<h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>League Site</strong></a></h1>
      			<span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      			<i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      			<div class="site-header__menu group">
        			<nav class="main-navigation">
			          <ul>
			            <li><a href="<?php echo site_url('/about') ?>">About Us</a></li>
			            <li><a href="<?php echo site_url('/power-rankings') ?>">Power Rankings</a></li>
			            <li><a href="<?php echo site_url('/draft') ?>">Draft</a></li>
			            <li><a href="<?php echo site_url('/rosters') ?>">Rosters</a></li>
			            <li><a href="<?php echo site_url('/Hall-of-records') ?>">Hall of Records</a></li>
			            <li><a href="<?php echo site_url('/players') ?>">Players</a></li>
			          </ul>
			        </nav>
        			<div class="site-header__util">
          				<a href="" class="btn btn--small btn--orange float-left push-right">Team Login</a>
          				<a href="http://www58.myfantasyleague.com/2018/home/33969#0" target="_blank" class="btn btn--small  btn--blue float-left">MFL</a>
          				<span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        			</div>
      			</div>
    		</div>
  		</header>
		


