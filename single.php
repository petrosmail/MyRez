<?php get_header(); ?>
 <?php the_post(); ?>
	<div class="main">
	
	<br>
	
		<span class="post_time">
		<?php the_time('F jS, Y'); ?>	
		</span>
		
	
		<div class="title">
		
		
		<h1>
		
	
		
		<?php the_title(); ?>
		
		</h1>
		
		
		<br>
		<br>
		
		</div>
		<div class="content">
		<?php the_content('Читать дальше →'); ?>		
	</div>	
		
		
		
		</div>
		
<?php get_footer(); ?>