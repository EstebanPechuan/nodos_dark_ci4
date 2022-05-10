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
                <img src="
                    <?php if (!empty($images)) {
                        echo base_url($images[2]);                 
                     } else {
                        echo base_url('public/img/noti2.jpg');
                     } ?>" alt="">
            </div>

            <div class="noti-info">
                <h4>Concurso de OSSE “Así cuidamos el agua potable”</h4>
                <p>Nuestro equipo trabajo para digitalizar los certificados emitidos para los participantes del certamen escolar “Así cuidamos el agua” ya que en el mismo participaron escuelas de toda la provincia.</p>
                <a href="noticias/osse">
                    Leer más
                    <span>&#10140;</span>
                </a>
            </div>
        </div>
    </div>
</section>