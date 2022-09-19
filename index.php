<?php get_header() ?>

<section class="container">

    <?php if(have_posts()) { ?>

        <div class="row mt-5">
        <?php while(have_posts()){ ?>

            <div class="col-4">
                <?php the_post(); ?>

                <div class="card" style="width: 18rem;">
                    <img src="<?php the_post_thumbnail_url('card-header'); ?>" class="card-img-top" style="height: auto">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>

                        <!-- Le type de diététique -->
                        <?php the_terms(get_the_ID(), 'diet_type'); ?>

                        <!-- Si l'article est sponsorisé -->
                        <?php if(get_post_meta(get_the_ID(), SponsoMetaBox::META_KEY, true) === "1"){ ?>
                            <p><small>Article favori</small></p>
                        <?php } ?>

                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire l'article</a>
                    </div>
                </div>
            </div>

        <?php } ?>
        </div>

        <?php dietetique_pagination(); ?>

    <?php }else{ ?>
        <h1>Pas d'articles</h1>
    <?php } ?>

</section>

<?php get_footer() ?>