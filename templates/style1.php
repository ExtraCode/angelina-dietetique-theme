<?php
/**
 * Template Name: Style 1
 * Template Post Type: post, page
 *
 */

get_header();
?>

<img class="forme1 d-lg-none" src="<?= get_stylesheet_directory_uri() ?>/assets/images/style1/style1-forme1.png" alt="forme 1">
<img class="forme2" src="<?= get_stylesheet_directory_uri() ?>/assets/images/style1/style1-forme2.png" alt="forme 2">
<img class="forme3 d-none d-lg-block" src="<?= get_stylesheet_directory_uri() ?>/assets/images/style1/style1-forme3.png" alt="forme 3">
<img class="forme4 d-none d-lg-block" src="<?= get_stylesheet_directory_uri() ?>/assets/images/style1/style1-forme4.png" alt="forme 4">
<img class="forme5 d-none d-lg-block" src="<?= get_stylesheet_directory_uri() ?>/assets/images/style1/style1-forme5.png" alt="forme 5">
<img class="forme6 d-none d-lg-block" src="<?= get_stylesheet_directory_uri() ?>/assets/images/style1/style1-forme6.png" alt="forme 6">

<main class="main-content">

	<?php the_content() ?>

</main>

<?php get_footer(); ?>
