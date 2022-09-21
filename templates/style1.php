<?php
/**
 * Template Name: Style 1
 * Template Post Type: post, page
 *
 */

get_header();
?>

<img class="forme forme1" src="<?= get_stylesheet_directory_uri() ?>/assets/images/formes/forme_1.png" alt="forme 1">
<img class="forme forme2" src="<?= get_stylesheet_directory_uri() ?>/assets/images/formes/forme_2.png" alt="forme 2">
<img class="forme forme3" src="<?= get_stylesheet_directory_uri() ?>/assets/images/formes/forme_3.png" alt="forme 3">
<img class="forme forme4" src="<?= get_stylesheet_directory_uri() ?>/assets/images/formes/forme_4.png" alt="forme 4">

<main class="main-content">

	<?php the_content() ?>

</main>

<?php get_footer(); ?>
