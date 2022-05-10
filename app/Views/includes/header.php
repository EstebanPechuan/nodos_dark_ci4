<header class="header <?php if($clase_header === 'header-scroll') { echo 'header-scroll'; } else { echo ' ';} ?> ">
    <div class="logo">
        <a href=" <?php echo base_url('/') ?> " class="a-logo">
            <img src=" <?php echo base_url('public/img/logo2.png') ?> " alt="">
        </a>
    </div>
    
    <nav class="menu">
        <ul>
            <li><a id="menu-home" href="<?= base_url('/') ?>">Home</a></li>
            <li><a id="menu-services" href="<?= base_url('servicios') ?>">Servicios</a></li>
            <li><a id="menu-exitos" href="<?= base_url('exitos') ?>">Trabajos Realizados</a></li>
            <li><a id="menu-equipo" href="<?= base_url('nuestro_equipo') ?>">Nuestro Equipo</a></li>
            <li><a id="menu-noticias" href="<?= base_url('noticias') ?>">Noticias</a></li>
            <li><a id="menu-contacto" href="<?= base_url('home#contacto') ?>">Contacto</a></li>
        </ul>
        
        <div class="idiomas">
            <button onclick="$.MultiLanguage(' <?php echo base_url('public/js/language.json') ?> ', 'es')" class="btn btn-danger">
                <img src="<?php echo base_url('public/img/ar.svg') ?>" alt="">
            </button>
            <button onclick="$.MultiLanguage(' <?php echo base_url('public/js/language.json') ?> ', 'en')" class="btn btn-primary">
                <img src="<?php echo base_url('public/img/us.svg') ?>" alt="">
            </button>
            <button onclick="$.MultiLanguage(' <?php echo base_url('public/js/language.json') ?> ', 'br')" class="btn btn-info">
                <img src="<?php echo base_url('public/img/br.svg') ?>" alt="">
            </button>
        </div>
    </nav>


    <div class="iconos">
        <img src=" <?php echo base_url('public/img/menu.png') ?> " class="icon-active" alt="">
        <img src=" <?php echo base_url('public/img/close.png') ?> " alt="">
    </div>
</header>