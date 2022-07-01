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
                    <h1>En Nodos Hub generamos una nueva alianza</h1>
                    <!-- <p>Fecha / Hora</p> -->
                </div>
            </div>

            <div class="info-noticia">
                <p>Nuestro equipo trabaja para crecer, es por eso que sumamos expertos en tecnología.</p>

                <p>Nos unimos junto a Communi una empresa que ofrece cybersecurity &Complianse as a service para promover cambios que minimicen riesgos futuros y contribuyan a generar entornos resilientes para el éxito de los negocios y la performance organizacional.</p>

                <p>Seguimos creciendo y seguimos sumando expertos a nuestra empresa.</p>
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
