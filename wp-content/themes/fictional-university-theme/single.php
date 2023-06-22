<?php get_header();

$names = array('Brad', 'John', 'Jane', 'Meowsalot');

while(have_posts()) {
    the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php
}

get_footer();
?>
