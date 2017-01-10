<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>

	<!-- Latest compiled and minified CSS -->
	
	
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
	
	<link rel="image_src" href="https://habrahabr.ru/i/habralogo.jpg" />	
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>	
	<?php wp_head(); ?>
</head>
<body <?php body_class($class); ?>>

	<?php wp_nav_menu('menu=header&depth=1&menu_class=menu_foo&menu_id=menu_foo');?>
	<?php get_search_form(); ?>
		<div class="TMpanel">
	<div class="container">
		<div class="bmenu" >
	<ul>
	  <li><a href="https://tmfeed.ru?utm_source=tm_habrahabr&utm_medium=tm_top_panel&utm_campaign=tm_promo">TM Feed</a></li>
	  <li><span class="curren"><a href="/">Хабрахабр</a></span></li>
	  <li><a href="https://geektimes.ru?utm_source=tm_habrahabr&utm_medium=tm_top_panel&utm_campaign=tm_promo">Geektimes</a></li>
	  <li><a href="https://toster.ru?utm_source=tm_habrahabr&utm_medium=tm_top_panel&utm_campaign=tm_promo">Тостер</a></li>
	  <li><a href="https://moikrug.ru?utm_source=tm_habrahabr&utm_medium=tm_top_panel&utm_campaign=tm_promo">Мой круг</a></li>
	  <li><a href="https://freelansim.ru?utm_source=tm_habrahabr&utm_medium=tm_top_panel&utm_campaign=tm_promo">Фрилансим</a></li>
	  </ul>
    </div>
	
      <div class="bmenu_inner" >
	  <ul>
        <li><span class="bmenu__label">Спецпроекты:</span></li>
       
		<li><a href="http://bit.ly/2hzb6dI" target="_blank" style="color: #0076C7">Microsoft: Hybrid launch</a></li>
		<li><a href="http://bit.ly/2hPS8Pr" target="_blank" style="color: #1a9f29">Дизайн-кухня СберТеха</a></li>
		<li><a href="http://bit.ly/2gEbpDq" target="_blank" style="color: #31B007">СберТех: вакансии</a></li>
	</ul>
      </div>
	  </div>
	  </div>
	  
	  
	  
	  <div class="navbar">
        <div class="main-navbar">
  <div class="main-navbar">
    <a href="/" class="logo">
      <svg class="icon-svg" width="181" height="32" viewBox="0 0 181 32" aria-hidden="true" aria-labelledby="title" version="1.1" role="img"><title>Хабрахабр</title><path d="M24.736 1.044h-8.582L12.53 6.168 8.91 1.044H.325l7.898 11.194L0 23.888h8.583l3.948-5.58 3.95 5.58h8.583l-8.256-11.65zM34.033 7.082c-3.133 0-6.036.88-8.256 2.61l2.87 3.428c1.502-.98 3.754-1.535 5.255-1.535 1.372 0 2.577.36 2.577 2.09v.49c-6.56 0-11.096 1.142-11.096 5.58 0 3.133 2.252 4.633 5.71 4.633 1.665 0 3.885-.913 5.386-2.61v2.12h6.07V12.696c0-4.765-4.73-5.613-8.516-5.613zm2.448 11.455c-.912 1.21-1.89 1.73-2.773 1.73-1.24 0-1.6-.654-1.6-1.274 0-1.533 1.96-2.087 4.373-2.087v1.63zM53.937 8.746c-1.47 0-3.818.62-4.863 1.894.294-2.448 2.023-3.655 5.32-4.308 1.534-.294 5.155-.98 7.18-1.402L60.463 0c-2.546.62-4.864 1.143-7.508 1.633-6.657 1.24-8.125 5.156-8.125 12.14 0 6.658 2.743 10.608 8.813 10.608 5.188 0 8.615-3.426 8.615-8.517 0-3.983-2.87-7.116-8.32-7.116zm-.39 10.28c-1.437 0-2.644-1.24-2.644-2.675s1.207-2.675 2.643-2.675c1.436 0 2.643 1.24 2.643 2.676s-1.208 2.677-2.644 2.677zM74.82 7.082c-1.664 0-3.46 1.044-4.21 2.61v-2.12h-6.07v22.974h6.07v-8.778c.752 1.567 2.546 2.61 4.21 2.61 4.765 0 7.343-3.883 7.343-8.648 0-4.764-2.577-8.647-7.343-8.647zm-1.957 11.552c-.88 0-1.697-.423-2.252-1.108v-3.622c.555-.653 1.373-1.076 2.253-1.076 1.567 0 2.905 1.273 2.905 2.905 0 1.564-1.338 2.902-2.905 2.902zM92.767 7.082c-3.133 0-6.038.88-8.256 2.61l2.872 3.428c1.5-.98 3.753-1.535 5.254-1.535 1.372 0 2.58.36 2.58 2.09v.49c-6.56 0-11.098 1.142-11.098 5.58 0 3.133 2.252 4.633 5.71 4.633 1.665 0 3.885-.913 5.387-2.61v2.12h6.068V12.696c0-4.765-4.732-5.613-8.516-5.613zm2.448 11.455c-.915 1.21-1.894 1.73-2.775 1.73-1.24 0-1.6-.654-1.6-1.274 0-1.533 1.96-2.087 4.375-2.087v1.63zM122.723 7.57h-7.703l-2.055 4.276-2.057-4.275h-7.7l5.58 7.997-5.874 8.32h7.702l2.35-4.306 2.35 4.308h7.702l-6.528-8.32zM132.967 7.082c-3.133 0-6.038.88-8.257 2.61l2.873 3.428c1.503-.98 3.753-1.535 5.255-1.535 1.37 0 2.58.36 2.58 2.09v.49c-6.56 0-11.098 1.142-11.098 5.58 0 3.133 2.252 4.633 5.71 4.633 1.665 0 3.885-.913 5.386-2.61v2.12h6.068V12.696c0-4.765-4.732-5.613-8.516-5.613zm2.448 11.455c-.913 1.21-1.894 1.73-2.775 1.73-1.24 0-1.6-.654-1.6-1.274 0-1.533 1.96-2.087 4.375-2.087v1.63zM152.87 8.746c-1.468 0-3.817.62-4.862 1.894.294-2.448 2.023-3.655 5.32-4.308 1.536-.294 5.157-.98 7.18-1.402L159.397 0c-2.546.62-4.864 1.143-7.506 1.633-6.657 1.24-8.125 5.156-8.125 12.14 0 6.658 2.742 10.608 8.81 10.608 5.19 0 8.617-3.426 8.617-8.517 0-3.983-2.873-7.116-8.323-7.116zm-.39 10.28c-1.437 0-2.643-1.24-2.643-2.675s1.206-2.675 2.643-2.675c1.436 0 2.643 1.24 2.643 2.676 0 1.437-1.207 2.677-2.643 2.677zM173.754 7.082c-1.664 0-3.46 1.044-4.21 2.61v-2.12h-6.07v22.974h6.07v-8.778c.75 1.567 2.546 2.61 4.21 2.61 4.764 0 7.343-3.883 7.343-8.648 0-4.764-2.58-8.647-7.343-8.647zm-1.958 11.552c-.88 0-1.697-.423-2.252-1.108v-3.622c.554-.653 1.37-1.076 2.252-1.076 1.565 0 2.905 1.273 2.905 2.905 0 1.564-1.34 2.902-2.904 2.902z"/></svg>
    </a>
</div>
</div>
</div>



