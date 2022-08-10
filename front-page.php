<?php
get_header(); ?>
<section class="site__main">
    <h1> Mon modèle Wordpress pour Exercice#4</h1>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <h2><a href="<?= get_permalink() ?>"><?php the_field('titre'); ?></a></h2>
            <?php
            if (get_field('image')) : ?>
                <img src="<?php the_field('image'); ?>" />
            <?php endif; ?>

            <h3><?php the_field('sous_titre'); ?></h3>
            <p><?php the_field('resume'); ?></p>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<?php get_footer(); ?>