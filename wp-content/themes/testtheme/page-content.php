<?php

	/**
	* Template Name: Content Page
	*/	

get_header();
?>

<h2>page.php</h2>

<!-- Show the featured image using ACF field -->

<?php

$featured_image_array = get_field('featured_image');
if ($featured_image_array) {
	// var_dump($featured_image_array);
	$featured_image = $featured_image_array['sizes']['medium_large'];
	$featured_image_alt = $featured_image_array['alt'];
}

?>

<img src="<?php echo $featured_image ?>" alt="<?php echo $featured_image_alt ?>">
<br>
<br>

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

<!-- download a file -->

<?php
$file = get_field('download_file');
if ($file) {
	?>
	<a href="<?php echo $file['url']; ?>"download><?php echo 'Download lorem.png'; ?></a>
	<br>
	<br>
	<?php
}

// embed a file

echo"<h3>Embed a video:</h3>";

$embeded = the_field('embed_video');

if ($embeded) {
	$embeded;
}

echo"<br><br>";

echo"<h3>Gallery:</h3>";

$gallery = get_field('gallery');

if ($gallery) {
	// var_dump($gallery);
	foreach ($gallery as $key => $image) {
		?>
		<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>">
		<?php
	}
}

echo"<br><br>";

get_footer();
?>