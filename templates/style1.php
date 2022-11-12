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

<a href="https://www.doctolib.fr/dieteticien/perigueux/angelina-teixeira?utm_campaign=website-button&amp;utm_source=angelina-teixeira-website-button&amp;utm_medium=referral&amp;utm_content=option-5&amp;utm_term=angelina-teixeira" style="display:block;text-align:center;background-color:#0596DE;color:#ffffff;font-size:14px;overflow:hidden;width:257px;height:40px;border-bottom-right-radius:none;border-bottom-left-radius:none;position:fixed;bottom:0;right:5px;z-index:1000;border-top-left-radius:4px;border-top-right-radius:4px;line-height:40px" target="_blank"><span style="font-size:13px">Prendre rendez-vous en ligne</span><img style="height:15px;margin-bottom:3px;vertical-align:middle;width:auto" src="https://pro.doctolib.fr/external_button/doctolib-white-transparent.png" alt="Doctolib"/></a>

<?php get_footer(); ?>
