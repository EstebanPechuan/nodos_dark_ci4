<section class="services">
    <h1>Servicios</h1>
    <p>Queremos estar en todo el proceso</p>
    <div class="timeline">
        <div class="timeline-cont left">
            <div class="timeline-cont-img wow fadeInRight img-none" data-wow-delay="0.2s"></div>

            <div class="content wow fadeInLeft">
                <h2>Metodologías ágiles</h2>
                <p>Implementamos el desarrollo ágil de software para la toma de decisiones. Trabajamos con métodos
                    de ingeniería del software basados en el desarrollo iterativo e incremental, donde los
                    requisitos y soluciones evolucionan con el tiempo según las necesidades del proyecto.</p>
            </div>
            
            <div class="timeline-cont-icon wow enterIcon" data-wow-delay="0s"></div>
        </div>
        
        <div class="timeline-cont right">
            <div class="timeline-cont-img wow fadeInLeft img-none" data-wow-delay="0.2s"></div>
            
            <div class="content wow fadeInRight">
                <h2>Relevamiento de datos</h2>
                <p>Recopilamos los datos que son importantes para el sistema que se investiga.</p>
            </div>
            
            <div class="timeline-cont-icon wow enterIcon" data-wow-delay="0s"></div>
        </div>

        <div class="timeline-cont left">
            <div class="timeline-cont-img wow fadeInRight img-none" data-wow-delay="0.2s"></div>
            
            <div class="content wow fadeInLeft">
                <h2>Diseñamos tu experiencia</h2>
                <p>Nuestros Diseñadores UX/UI realizan la mejor experiencia de usuario para tu producto. En donde analizan cuales son los mejores pasos a seguir para que logres realizar eso que necesitas de manera sencilla y en el menor tiempo posible</p>
            </div>
            
            <div class="timeline-cont-icon wow enterIcon" data-wow-delay="0s"></div>
        </div>

        <div class="timeline-cont right">
            <div class="timeline-cont-img wow fadeInLeft img-none" data-wow-delay="0.2s"></div>
            
            <div class="content wow fadeInRight">
                <h2>Desarrollo Web</h2>
                <p>Tenemos Desarrolladores Web especialistas en la creación de tus sitios. Ellos son los encargados de llevar tu diseño a la realidad y van a estar trabajando permanentemente en la mejora de tu plataforma.</p>
            </div>
            
            <div class="timeline-cont-icon wow enterIcon" data-wow-delay="0s"></div>
        </div>

        <div class="timeline-cont left">
            <div class="timeline-cont-img wow fadeInRight img-none" data-wow-delay="0.2s"></div>
            
            <div class="content wow fadeInLeft">
                <h2>BPM</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta vitae aut atque provident quis hic fugiat illo nisi? Id culpa perferendis nihil excepturi veniam voluptatem unde molestiae amet magni distinctio.
                </p>
            </div>
            
            <div class="timeline-cont-icon wow enterIcon" data-wow-delay="0s"></div>
        </div>

        <div class="timeline-cont right">
            <div class="timeline-cont-img wow fadeInLeft img-none" data-wow-delay="0.2s"></div>
            
            <div class="content wow fadeInRight">
                <h2>DevOps</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione veniam autem labore mollitia officiis voluptatem non in perspiciatis, temporibus animi totam, quos tenetur consequatur velit quis recusandae a. Reiciendis, atque.</p>
            </div>
            
            <div class="timeline-cont-icon wow enterIcon" data-wow-delay="0s"></div>
        </div>

        <div class="timeline-cont left">
            <div class="timeline-cont-img wow fadeInRight img-none" data-wow-delay="0.2s"></div>
            
            <div class="content wow fadeInLeft">
                <h2>Testeamos lo realizado</h2>
                <p>Evaluamos lo que se creo para que los usuarios tengan la mejor experiencia cuando estan usando el
                    producto, diseñamos y creamos para ellos asique es un punto muy importante para tener en cuenta.
                </p>
            </div>
            
            <div class="timeline-cont-icon wow enterIcon" data-wow-delay="0s"></div>
        </div>
    </div>
</section>


<section class="tecnologias">
    <h2>Tecnologías</h2>
    <p>Tenemos un equipo especializado en una gran variedad de tecnologías para llevar a cabo el proyecto que
        necesites</p>

    <div class="cajas-tecnologias">
    
        <?php if (!empty($tecnologias)) { 
            foreach($tecnologias as $tecnologia) { ?>

                <div class="card-tecno">
                    <img src=" <?php echo base_url('public/img/tecnologias/' . $tecnologia['img_url']) ?> " alt="">
                    <span> <?php echo $tecnologia['name'] ?> </span>
                </div>
                                
            <?php } ?>
        <?php } ?>
        
    </div>
</section>

<figure class="circle-1"></figure>
<figure class="circle-2"></figure>
<figure class="circle-3"></figure>
<figure class="circle-4"></figure>

<script src=" <?php echo base_url('public/js/wow.min.js') ?> "></script>
<script>
    new WOW().init();
</script>