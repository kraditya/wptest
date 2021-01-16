<?php
get_header();
?>

<h2>page.php</h2>

<!-- Show the contents -->

<?php

while (have_posts()) {
	the_post();

	?>
	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	<?php

	the_excerpt();
}

?>

<?php
get_footer();
?>