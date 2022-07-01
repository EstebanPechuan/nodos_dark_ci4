<section class="plantilla-noticias">
    <div class="plantilla-left">
        <div class="plant-noticia">
            <div class="plant-noti-img">
                <img src=" <?php echo base_url($images[0]['url']) ?> " alt="">
                <div class="plant-noti-titulo">
                    <h1>Realización de certificados digitales otorgados por Osse</h1>
                    <!-- <p>Fecha / Hora</p> -->
                </div>
            </div>

            <div class="info-noticia">
                <p>Nuestro equipo  trabajo para digitalizar los certificados emitidos para los participantes del certamen  escolar “Así cuidamos el agua” ya que en el mismo participaron escuelas de toda la provincia.</p>

                <p>Trabajamos en  conjunto con el área de comunicación de Osse y aportando nuestro conocimiento en el mundo IT logramos realizar el pedido principal de la organización: la digitalización de los certificados para los mil alumnos que participaron en la competencia.</p>

                <p>Desde Nodos sentimos que fue muy enriquecedor participar desde lo digital en tan importante certamen que impulsa tanto Osse como el gobierno de San Juan para los alumnos de las escuelas de la provincia.</p>
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