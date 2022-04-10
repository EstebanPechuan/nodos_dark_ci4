<section class="seccion-noticias">
    <h1>Noticias</h1>
    <p>Te dejamos las novedades del mundo IT en las que Nodos Hub ha estado presente</p>


    <div class="cards-noticias">
        <div class="card-noti">
            <div class="noti-img">
                <img src="
                    <?php if (!empty($images)) {
                        echo base_url($images[0]);                 
                     } else {
                        echo base_url('public/img/noti1.jpg');
                     } ?>" alt="">
            </div>

            <div class="noti-info">
                <h4>Nodos Educación</h4>
                <p>La plataforma desarrollada permite realizar funciones de educación, gestión académica, sistema de cobros, y lo más importante es que es una actividad oficial de las instituciones.</p>
                <a href="noticias/educacion">
                    Leer más
                    <span>&#10140;</span>
                </a>
            </div>
        </div>

        <div class="card-noti">
            <div class="noti-img">
                <img src="
                    <?php if (!empty($images)) {
                        echo base_url($images[1]);                 
                     } else {
                        echo base_url('public/img/noti2.jpg');
                     } ?>" alt="">
            </div>

            <div class="noti-info">
                <h4>Red Federal de Pymes Innovadoras</h4>
                <p>En el mes de marzo recibimos una noticia que nos hace sentir orgullosos del trabajo realizado por nuestro equipo en Nodos.</p>
                <a href="noticias/red_federal">
                    Leer más
                    <span>&#10140;</span>
                </a>
            </div>
        </div>

        <div class="card-noti">
            <div class="noti-img">
                <img src=" <?php echo base_url('public/img/noti3.jpg') ?> " alt="">
            </div>

            <div class="noti-info">
                <h4>Noticia 3</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Augue arcu sapien nisi ipsum elit arcu, amet donec ornare. Eu, aliquam ac condimentum imperdiet.</p>
                <a href="#c">
                    Leer más
                    <span>&#10140;</span>
                </a>
            </div>
        </div>
    </div>
</section>