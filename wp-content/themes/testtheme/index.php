<?php
get_header();
?>

<h2>index.php</h2>

<!-- Show the contents -->

<?php

if (have_posts()) {
	while (have_posts()) {
		the_post();
	
		?>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<br><br>
		<?php
		the_post_thumbnail('medium','');
		the_excerpt();
	}
}else{
	_e('Sorry, no posts matched your criteria.');
}
?>

<div class="pagination"><?php the_posts_pagination(); ?></div>

<!-- Sidebat -->
<?php get_sidebar(); ?>


<?php
get_footer();
?>