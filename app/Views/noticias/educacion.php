<section class="plantilla-noticias">
    <div class="plantilla-left">
        <div class="plant-noticia">
            <div class="plant-noti-img">
                <img src=" <?php echo base_url($images[0]['url']) ?> " alt="">
                <div class="plant-noti-titulo">
                    <h1 id="edu-title">En Nodos creamos una plataforma para instituciones educativas</h1>
                    <!-- <p>Fecha / Hora</p> -->
                </div>
            </div>

            <div class="info-noticia">
                <p id="edu-l-1">La plataforma desarrollada permite realizar funciones de educación, gestión académica, sistema de cobros, y lo más importante es que es una actividad oficial de las instituciones.</p>

                <p id="edu-l-2">Facilitamos la comunicación institucional con un canal privado y oficial del colegio. Una comunicación inmediata para todos los miembros: docentes, directivos, padres y alumnos. La forma de enviar y recibir comunicados es intuitiva, simple y segura para todos los perfiles de usuario. La gestión académica, inscripciones, facturación, orientación y seguimiento son ahora tareas cotidianas de ágil resolución.</p>

                <p id="edu-l-3">Nuestro objetivo es colaborar con instituciones que buscan dar un paso en la transformación tecnológica que la educación está atravesando. La ventaja de este servicio es que brinde todas las soluciones necesarias en el día a día de cada colegio.</p>

                <p id="edu-l-4">Actualmente en la provincia de San Juan trabajamos con 20 instituciones, entre ellas:</p>
                
                <p id="edu-l-5">
                    Esc. Modelo, Col. Santa Rosa de Lima, Col. Santo Domingo, Esc. Dante Alighieri, Col. San Bernardo, Col. Dr. B. A. Houssay, Col. Inglés, Col. Fasta Federico Ozanam, Esc. Industrial D. F. Sarmiento, Col. San Agustín, Col. San Pablo, Col. San José, Col. María Auxiliadora, Col. P. Perez Hernandez, Col. Ntra Sra. de la Medalla Milagrosa, Instituto Idiomatic Center, Col. Integral, Col. San Francisco, Del Prado, Col. Modelo.
                </p>

                <p id="edu-l-6">En Nodos queremos ser el puente para un mejor futuro en nuestra educación.</p>
            </div>


            <div class="fotos-noticia">

                <?php if (!empty($images)) {
                    foreach($images as $image) { ?>

                    <div class="cada-foto-noticia">
                        <img src=" <?php echo base_url($image['url']) ?> "
                            alt="" onclick="openModal();currentSlide(<?php echo $image['id'] ?>)" class="hover-shadow">
                            <p><?php echo ($image['id']) ?></p>
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