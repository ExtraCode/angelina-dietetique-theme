<?php get_header() ?>

<div class="container mt-5">

    <h1><?php the_title(); ?></h1>
    <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" style="height: 200px">

    <p><?php the_content(); ?></p>

</div>

<?php get_footer() ?>
