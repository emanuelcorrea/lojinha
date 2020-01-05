<!doctype html>

<html lang="pt-BR">

<head>
    <!-- Title -->
    <title><?php echo $this->getTitle(); ?> - Lojinha</title>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS -->
    <!-- <link rel="stylesheet" href="<?php echo DIRCSS; ?>bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo DIRCSS; ?>main.css">
    <link rel="stylesheet" href="<?php echo DIRCSS; ?>owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo DIRCSS; ?>owl.theme.default.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cabin|Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,700&display=swap" rel="stylesheet">

    <?php $this->addHead(); ?>
</head>

<body>
    <?php $this->addHeader(); ?>
    <?php $this->addMain(); ?>
    <?php $this->addFooter(); ?>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="<?php echo DIRJVS; ?>jquery.js"></script>
    <script src="<?php echo DIRJVS; ?>jquery.nice-select.js"></script>
    <script src="<?php echo DIRJVS; ?>nice-number.js"></script>
    <script src="<?php echo DIRJVS; ?>carousel.js"></script>
    <script src="<?php echo DIRJVS; ?>script.js"></script>
    <script src="<?php echo DIRJVS; ?>owl.carousel.min.js"></script>

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

    <script>
        var img1 = document.getElementById('1');
        var img2 = document.getElementById('2');
        var img3 = document.getElementById('3');

        console.log(img3);
        var img = document.getElementById('img-principal');

        img1.onclick = function() {
            img.src = img1.src;
        }
        
        img2.onclick = function() {
            img.src = img2.src;
        } 

        img3.onclick = function() {
            img.src = img3.src;
        } 

        function changeImage() {
            document.getElementById("img-principal").src = this.src;
        }
        
    </script>
</body>

</html>