<section class="plantilla-noticias">
    <div class="plantilla-left">
        <div class="plant-noticia">
            <div class="plant-noti-img">
                <img src=" <?php echo base_url('public/img/noti1.jpg') ?> " alt="">
                <div class="plant-noti-titulo">
                    <h1>Título noticia 1</h1>
                    <p>Fecha / Hora</p>
                </div>
            </div>

            <div class="info-noticia">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque, doloribus fugiat obcaecati
                    rerum beatae at? Culpa, dolorum laborum expedita ex, unde facilis quidem sint eum voluptas modi
                    alias, odio ratione exercitationem? Nisi totam debitis temporibus ab, saepe, a id distinctio,
                    quaerat impedit expedita rerum eveniet soluta. Obcaecati, eaque. Eaque, dolor.</p>

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt deleniti animi sit voluptas
                    reiciendis aut consequuntur praesentium vel repudiandae soluta. Nobis iure illum nisi dolorum
                    molestiae dicta dolor architecto, pariatur reprehenderit! Natus laudantium nihil itaque quam
                    aspernatur consequatur magni minus, neque at veniam esse tempora ea voluptatibus, sit et
                    delectus impedit voluptates mollitia debitis velit ducimus inventore. Dolorem aliquid aperiam,
                    saepe quae unde quia odit rerum totam numquam fugit incidunt vitae at laudantium laboriosam quod
                    soluta ducimus eligendi animi adipisci molestias dolores tenetur optio. Iusto distinctio facere
                    qui mollitia et consequuntur corrupti at porro tempore animi saepe, optio enim, ad culpa fuga
                    magni est velit minima dolorem voluptates? Ipsum porro similique, aperiam error vitae blanditiis
                    tempora impedit voluptatibus? Tempora natus earum delectus temporibus neque perferendis, placeat
                    quod enim ab, unde inventore porro numquam repellat quasi quia sapiente minus nobis, veniam
                    laborum fugit perspiciatis quam. Reiciendis sed maxime vero unde fugit numquam et asperiores nam
                    minus. A, adipisci fugit! Dolorem expedita similique ipsum quos nihil, molestias exercitationem
                    in, officiis nesciunt rem magni impedit doloribus, quaerat libero error ratione dolores eligendi
                    blanditiis vitae reiciendis! Ratione nostrum repellat voluptate consequatur suscipit nulla omnis
                    sint quaerat vero assumenda? Nobis earum labore at cum dolores.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod porro, qui accusantium, quam dicta
                    eum sint impedit nostrum ab, tenetur repudiandae omnis. Corporis ipsa, iste reiciendis
                    laboriosam velit fugit saepe, dicta nesciunt sunt ab incidunt commodi dolores doloribus
                    perspiciatis, eligendi nostrum quaerat! Corrupti, ad? Asperiores sunt, ipsam aliquid iusto quod
                    rerum consequuntur dolor necessitatibus culpa praesentium nisi saepe dolorum. Ratione quia velit
                    ad sunt minima mollitia, adipisci a necessitatibus. Aliquid inventore dolorem quam repudiandae
                    est? Deserunt omnis, quisquam, sed neque molestiae temporibus dolorum suscipit laboriosam vero
                    explicabo ipsum, ratione deleniti impedit ab officiis! Eos ratione consectetur facilis, eveniet
                    et modi.</p>
            </div>


            <div class="fotos-noticia">
                <div class="cada-foto-noticia">
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                        alt="" onclick="openModal();currentSlide(1)" class="hover-shadow">
                </div>

                <div class="cada-foto-noticia">
                    <img src="https://images.unsplash.com/photo-1589652717521-10c0d092dea9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                        alt="" onclick="openModal();currentSlide(2)" class="hover-shadow">
                </div>

                <div class="cada-foto-noticia">
                    <img src="https://images.unsplash.com/photo-1594178613616-b3b3ed2d1c43?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                        alt="" onclick="openModal();currentSlide(3)" class="hover-shadow">
                </div>

                <!-- <div class="cada-foto-noticia">
                    <img src="https://images.unsplash.com/photo-1537201833901-8b144f2dc3d1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1015&q=80" alt="">
                </div> -->





                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <div class="mySlides">
                            <div class="numbertext">1 / 3</div>
                            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 3</div>
                            <img src="https://images.unsplash.com/photo-1589652717521-10c0d092dea9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 3</div>
                            <img src="https://images.unsplash.com/photo-1594178613616-b3b3ed2d1c43?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                style="width:100%">
                        </div>

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

    <div class="plantilla-right">
        <h4>Noticias recientes</h4>
        <ul>
            <li>
                <a href="#c">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
            </li>
            <li>
                <a href="#c">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
            </li>
            <li>
                <a href="#c">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
            </li>
            <li>
                <a href="#c">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
            </li>
        </ul>
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