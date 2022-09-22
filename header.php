<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- All pages-->
    <?php wp_head() ?>

</head>

<body>

    <!-- logo et menu-->
    <div class="logo-nav-container pt-4">
        <img class="logo" src="<?= get_stylesheet_directory_uri() ?>/assets/images/logo-angelina-dieteticienne-500x500.png" alt="logo angelina dieteticienne">

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg mt-4">
            <div class="container-fluid justify-content-center">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-lg-center" id="navbarNav">
				    <?php wp_nav_menu([
					    'theme_location' => "header",
					    "container" => false,
					    "menu_class" => "navbar-nav",
					    'after' => '<span class="menu-li-sep">|</span>'
				    ]); ?>
                </div>
            </div>
        </nav>

    </div>

    <!-- menu -->
<!--    <div class="menu-container">-->
<!--        <img class="menu-container__logo" src="--><?//= get_stylesheet_directory_uri() ?><!--/assets/images/logo-angelina-dieteticienne-500x500.png" alt="logo menu angelina dieteticienne">-->
<!--	    --><?php //wp_nav_menu([
//                'theme_location' => "header",
//                "container" => false,
//                "menu_class" => "menu-container__nav"
//        ]); ?>
<!--    </div>-->

