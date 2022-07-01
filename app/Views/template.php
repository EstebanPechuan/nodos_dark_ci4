<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nodos HUB - <?php echo ucfirst($contenido) ?> </title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href=" <?php echo base_url('public/img/fav.png') ?>" type="image/x-icon">
    
    <!-- BoxIcons -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet' type="text/html">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e3a36ea18d.js" crossorigin="anonymous" defer></script>
    
    <!-- Google Fonts - Sen -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">

    
    <!-- Estilos Nodos -->
    <link rel="stylesheet" href=" <?php echo base_url('public/css/nodos-styles.css') ?> ">
    <link rel="stylesheet" href=" <?php echo base_url('public/css/media.css') ?> ">

    <!-- WOW Styles -->
    <link rel="stylesheet" href=" <?php echo base_url('public/css/animate.css') ?> ">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0TP1EF9K4M"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0TP1EF9K4M');
    </script>
    <script>function loadScript(a){var b=document.getElementsByTagName("head")[0],c=document.createElement("script");c.type="text/javascript",c.src="https://tracker.metricool.com/resources/be.js",c.onreadystatechange=a,c.onload=a,b.appendChild(c)}loadScript(function(){beTracker.t({hash:"96568b213233e442578822eab1249b1e"})});</script>
</head>
<body>

    <div class="loading">
        <img src=" <?php echo base_url('public/img/logo2.png') ?> " alt="">
        
        <div class="lds-ellipsis">
            <div></div><div></div><div></div>
        </div>
    </div>
    
    <?php
        echo view('includes/header.php');
        echo view($contenido);
        echo view('includes/footer.php');
    ?>

    <script defer>
        // Scroll Down
        window.addEventListener('scroll', () => {
            const navMenu = document.querySelector('.header')
            navMenu.classList.toggle('header-scroll', window.scrollY > 0)
        })
        
        const menu = document.querySelector('.menu')
        const botonMenu = document.querySelector('.iconos')
        const iconosMenu = document.querySelectorAll('.iconos img')

        botonMenu.addEventListener('click', () => {
            iconosMenu[0].classList.toggle('icon-active')
            iconosMenu[1].classList.toggle('icon-active')

            menu.classList.toggle('menu-active')
        })
        
    </script>

    <!-- Animaciones de entrada -->
    <script src=" <?php echo base_url('public/js/wow.min.js') ?> "></script>
    <script>
        new WOW().init();
        
        wow2 = new WOW({
            boxClass:     'wow-home', // default
            animateClass: 'animated', // default
            offset:       0,          // default
            mobile:       true,       // default
            live:         true        // default
        })
        wow2.init();

        wow3 = new WOW({
            boxClass:     'wow-home-200', // default
            animateClass: 'animated', // default
            offset:       200,          // default
            mobile:       true,       // default
            live:         true        // default
        })
        wow3.init();
    </script>

    
    <!-- BoxIcons -->
    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js" defer></script>

    <!-- Main.js -->
    <script src=" <?php echo base_url('public/js/main.js') ?> "></script>
    
    <!-- Loading -->
    <script>
        const loading = document.querySelector('.loading')

        window.onload = function() {
            loading.classList.add('loading-none')
        }
    </script>
</body>
</html>