<header class="header <?php if($clase_header === 'header-scroll') { echo 'header-scroll'; } else { echo ' ';} ?> ">
    <div class="logo">
        <a href="home">
            <img src=" <?php echo base_url('public/img/logo2.png') ?> " alt="">
        </a>
    </div>
    
    <nav class="menu">
        <ul>
            <li><a href="<?= base_url('home') ?>">Home</a></li>
            <li><a href="<?= base_url('servicios') ?>">Servicios</a></li>
            <li><a href="<?= base_url('exitos') ?>">Casos de éxitos</a></li>
            <li><a href="<?= base_url('nuestro_equipo') ?>">Nuestro Equipo</a></li>
            <li><a href="<?= base_url('noticias') ?>">Noticias</a></li>
            <li><a href="<?= base_url('home#contacto') ?>">Contacto</a></li>
        </ul>
    </nav>

    <div class="iconos">
        <img src=" <?php echo base_url('public/img/menu.png') ?> " class="icon-active" alt="">
        <img src=" <?php echo base_url('public/img/close.png') ?> " alt="">
    </div>
</header>