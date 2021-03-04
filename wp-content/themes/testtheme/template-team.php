<?php
/* Template Name: Team */

get_header();
?>

<h2>template-team.php</h2>

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

echo"<ul>";
if (have_rows('team')):
    while (have_rows('team')):the_row();

    $image = get_sub_field('profile_picture');
    $picture = $image['sizes']['thumbnail'];
    $link = get_sub_field('link');
    
    echo'<li>';
    echo'<h3>';the_sub_field('name');echo'</h3>';
    the_sub_field('biography');

    ?>
    
    <img src="<?php echo $picture; ?>" alt="picture of the team member">
    <a href=<?php echo $link['url']; ?>>View Profile</a>
    <?php

    echo'</li>';
endwhile;
endif;
echo"</ul>";

?>

<?php
get_footer();
?>