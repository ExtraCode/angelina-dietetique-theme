<?php

class SponsoMetaBox {

    const META_KEY = 'dietetique_favoris';

    public static function register () {
        add_action('add_meta_boxes', [self::class, 'add']);
        add_action('save_post', [self::class, 'save']);
    }

    public static function add () {
        add_meta_box(self::META_KEY, 'Favoris', function($post){

            $value = get_post_meta($post->ID, self::META_KEY, true); ?>
            <input type="checkbox" value="1" name="<?= self::META_KEY ?>" id="<?= self::META_KEY ?>" <?= checked($value, "1") ?> >
            <label for="<?= self::META_KEY ?>">Cet article est sponsorisé ?</label> <?php

        }, 'post', 'side');
    }

    public static function save ($post) {
        if(current_user_can("edit_post", $post)) {

            if (array_key_exists(self::META_KEY, $_POST)) {
                update_post_meta($post, self::META_KEY, 1);
            } else {
                delete_post_meta($post, self::META_KEY);
            }

        }
    }

}