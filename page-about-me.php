<?php
    // template name: about page
?>


<?php get_header(); ?>



<h1>hello world </h1>
<?php
    if(have_posts()):
        while(have_posts()):the_post();?>
        <h2><?php the_title(); ?> </h2>
        <p><?php  the_content(); ?> </p>
    <?php endwhile; ?>
    <?php endif;  ?>


<?php get_footer(); ?>
