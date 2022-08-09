<?php
/**
 * Mon modèle par défaut 31w
 *
 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mon_31w
 */
get_header(); ?>
<h1> Mon modèle Wordpress pour Tp1</h1>
<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
   
<?php $lien = "<a href= '" . get_permalink() . "' class ='button'>". substr(get_the_title(), 0, 8) ."</a>"; 
echo $lien;
?>

<p><?= wp_trim_words(get_the_content(), 20, $lien) ?></p>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
