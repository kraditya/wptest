<?php

/* 
Template Name: News
Template Post Type: news
*/



get_header();
?>

<h2>single-news.php</h2>



<!-- Show the contents -->

<?php 
    while (have_posts()) {
        the_post();
        
        ?><h3><?php the_title(); ?></h3><?php

        ?>

        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">

        <?php 
        
        the_content(); 
        
        $locations = get_field('locations');

        echo'<h4>Location info </h4>'.$locations[0]->post_title;
        echo $locations[0]->post_content;

        // var_dump($locations);

        echo "<br/>";

        echo 'Posted by ';
        the_author();       
        
        comment_form();
    }
?>

<?php

echo'</br></br>';

/* ------------------------------- Options ------------------------------ */
$color = get_field('choose_your_color');
echo"<b>Color: </b>".$color['value'];
echo"<br>";
echo"<br>";

/* ------------------------------- check boxes ------------------------------ */
$subject = get_field('choose_your_subject');
echo"<b>Subject: </b>".implode(', ', $subject);
echo"<br>";
echo"<br>";

/* ------------------------------- radio button ------------------------------ */
$do_you_agree = get_field('do_you_agree');
echo"<b>Do you agree: </b>".$do_you_agree;
echo"<br>";
echo"<br>";

?>

<?php
get_footer();
?>