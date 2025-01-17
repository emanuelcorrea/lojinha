<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <!-- Title -->
        <title><?php echo self::getTitle(); ?> - Lojinha</title>

        <!-- Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo DIR_CSS; ?>main.css">
        <link rel="stylesheet" href="<?php echo DIR_CSS; ?>owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo DIR_CSS; ?>owl.theme.default.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Cabin|Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,700&display=swap" rel="stylesheet">

        <?php self::addHead(); ?>
    </head>

    <body>
        <?php self::addHeader(); ?>
        <?php self::addMain(); ?>
        <?php self::addFooter(); ?>

        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="<?php echo DIR_JVS; ?>jquery.js"></script>
        <script src="<?php echo DIR_JVS; ?>jquery.nice-select.js"></script>
        <script src="<?php echo DIR_JVS; ?>nice-number.js"></script>
        <script src="<?php echo DIR_JVS; ?>script.js"></script>
        <script src="<?php echo DIR_JVS; ?>owl.carousel.min.js"></script>

        <script>
            $('.section .owl-carousel').owlCarousel({
                loop: true,
                nav: true,
                mouseDrag: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });

            var prev = document.querySelectorAll('.section .owl-prev span');

            [].forEach.call(prev, function(prev) {
                prev.innerHTML = '<i class="fas fa-arrow-left"></i>';
            });

            var next = document.querySelectorAll('.section .owl-next span');

            [].forEach.call(next, function(next) {
                next.innerHTML = '<i class="fas fa-arrow-right"></i>';
            });
        </script>

        <script>
            $('.owl-carousel').owlCarousel({
                margin:10,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            })
        </script>
    </body>

</html>