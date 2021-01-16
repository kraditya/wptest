<?php 

/* Template Name: News */


get_header();
?>

<h2>Single.php</h2>

<?php 
	
	$args = array(
		'post_type'=>'news'
	);

	$newsposts = new WP_Query($args);

    while ($newsposts->have_posts()) {
        $newsposts->the_post();
        
        ?><h3><?php the_title(); ?></h3><?php

        ?>

        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">

        <?php 
        
        the_content();        

        echo "<br/>";

        echo 'Posted by ';
        the_author();       
        
        comment_form();
    }
?>

<?php
get_footer();
?>




?>