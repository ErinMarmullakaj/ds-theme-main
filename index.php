<?php get_header(); ?>

<h1>hello world </h1>
<?php
    if(have_posts());
        while(have_posts()):the_post();?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_time('Y/m/d') ?></p>
        <p><?php  the_content(); ?></p>
    <?php endwhile; ?>
    <?php endif;  ?>


<?php get_footer(); ?>
