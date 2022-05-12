<section class="plantilla-noticias">
    <div class="plantilla-left">
        <div class="plant-noticia">
            <div class="plant-noti-img">
                    <img src="
                    <?php if (!empty($images)) {
                        echo base_url($images[0]['url']);                 
                     } else {
                        echo base_url('public/img/noti1.jpg');
                     } ?> " alt="">
                <div class="plant-noti-titulo">
                    <h1 id="red-title">Somos parte de la Red Federal de Pymes Innovadoras</h1>
                    <!-- <p>Fecha / Hora</p> -->
                </div>
            </div>

            <div class="info-noticia">
                <p id="red-l-1">En el mes de marzo recibimos una noticia que nos hace sentir orgullosos del trabajo realizado por nuestro equipo en Nodos. Fuimos seleccionados para formar parte de la Red Federal de Pymes Innovadoras, la misma es un espacio de diálogo y articulación de empresas innovadoras.</p>

                <p id="red-l-2">La Red Federal de Pymes Innovadoras surgió a partir de la necesidad, expresada en mesas de diálogo realizadas por la Agencia I+D+i y el Ministerio de Ciencia, Tecnología e Innovación con representantes de empresas de diferentes puntos del país, de acompañar más allá de lo financiero a las pymes innovadoras.</p>

                <p id="red-l-3">Nuestro objetivo es colaborar con instituciones que buscan dar un paso en la transformación tecnológica que la educación está atravesando. La ventaja de este servicio es que brinde todas las soluciones necesarias en el día a día de cada colegio.</p>

                <p id="red-l-4">El objetivo es que la red se continúe desarrollando a partir de un trabajo conjunto entre la Agencia, el Ministerio y las empresas para que actores productivos pertenecientes a áreas diversas como la inteligencia artificial, la industria 4.0, la economía circular, la comunicación satelital se potencien a partir de compartir conocimientos y capacidades y exploren líneas de interés común.</p>

                <p id="red-l-5">Estamos orgullosos de poder formar parte de este espacio de diálogo y mejoras en el mundo de la tecnología e innovación.</p>
            </div>


            <div class="fotos-noticia">

                <?php if (!empty($images)) {
                    foreach($images as $image) { ?>

                    <div class="cada-foto-noticia">
                        <img src=" <?php echo base_url($image['url']) ?> "
                            alt="" onclick="openModal();currentSlide(<?php echo $image['id'] ?>)" class="hover-shadow">
                    </div>
                        
                <?php }
                } ?>


                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                    <?php if (!empty($images)) {
                        foreach($images as $image) { ?>

                        <div class="mySlides">
                            <div class="numbertext"> <?php echo ($image['id']) . ' / ' . count($images) ?> </div>
                            <img src=" <?php echo base_url($image['url']) ?> "style="width:100%">
                        </div>
                            
                    <?php }
                    } ?>

                        <!-- Next/previous controls -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <!-- Caption text -->
                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Lightbox - w3school -->
<script>
    // Open the Modal
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    // Close the Modal
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>
