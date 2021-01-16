<?php
get_header();
?>

<h2>front-page</h2>

<?php 

while (have_posts()) {
    the_post();
    
    ?><h2><?php the_title(); ?></h2>

    <?php 
    
    the_content(); 
}

?>

<h3>
    <?php 
        $title =  the_field('other_information_title'); 
        if ($title) {
            the_field('other_information_title');
        }
    ?>
</h3>
    <?php 
        $other_information_description =  the_field('other_information_description'); 
        if ($other_information_description) {
            the_field('other_information_description');
        }

        $wysiwyg_editor_description =  the_field('wysiwyg_editor_description'); 
        if ($wysiwyg_editor_description) {
            the_field('wysiwyg_editor_description');
        }
    ?>

<!---------- All blogs ---------->
<h3>Latest 3 Posts</h3>

<?php
// The Query
$query_posts = new WP_Query(array('post_type' => 'post'));

if ($query_posts->have_posts())
{
    while ($query_posts->have_posts())
    {
        $query_posts->the_post();
        ?>

        <a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a><br>
        <?php
        echo the_excerpt();
    }
} else
{
    echo 'There is no post';
}
?>

<?php wp_reset_postdata(); ?>

<!---------- All news ---------->
<h2>Latest News</h2>

<?php
// The Query
$query_news = new WP_Query(array('post_type' => 'news'));

if ($query_news->have_posts())
{
    while ($query_news->have_posts())
    {
        $query_news->the_post();
        ?>

        <a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a><br>
        <?php
        echo the_excerpt();
    }
} else
{
    echo 'There is no news';
}

wp_reset_postdata();
?>

<?php
get_footer();
?>
