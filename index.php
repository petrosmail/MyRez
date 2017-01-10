<div class="layout">
<?php get_header(); ?>



<?php

if ( have_posts() ){
	while ( have_posts() ){ the_post(); ?>
	<div class="main">
	
	<br>
	
		<span class="post_time">
		<?php the_time('F jS, Y'); ?>	
		</span>
		
	
		<div class="title">
		
		
<h1>
	<a href="">
	<?php the_title(); ?>			
	</a>
</h1>
		
		
		<br>
		<br>
		
		</div>
		<div class="content">
		
		<?php the_content('Читать дальше →'); ?>		
	
	</div>	
		
		
		
		</div>
		
		<br>


<?php
	}

}
?>

<?php wp_pagenavi();  ?><br>

<?php get_footer(); ?>


</div>