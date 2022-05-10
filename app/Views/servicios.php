<section class="services">
    <h1 id="servs-title">Servicios</h1>
    <p id="servs-subtitle">Queremos estar en todo el proceso</p>
    <div class="timeline">
        <div class="timeline-cont left">
            <div class="timeline-cont-img wow fadeInRight img-none" data-wow-delay="0.2s"></div>

            <div class="content wow fadeInLeft">
                <h2 id="servs-metodologias">Metodologías ágiles</h2>
                <p id="servs-submetodologias">Implementamos el desarrollo ágil de software para la toma de decisiones. Trabajamos con métodos
                    de ingeniería del software basados en el desarrollo iterativo e incremental, donde los
                    requisitos y soluciones evolucionan con el tiempo según las necesidades del proyecto.</p>
            </div>
            
            <div class="timeline-cont-icon wow enterIcon" data-wow-delay="0s"></div>
        </div>
        
        <div class="timeline-cont right">
            <div class="timeline-cont-img wow fadeInLeft img-none" data-wow-delay="0.2s"></div>
            
            <div class="content wow fadeInRight">
                <h2 id="servs-relevamientos">Relevamiento de datos</h2>
                <p id="servs-subrelevamientos">Recopilamos los datos que son importantes para el sistema que se investiga.</p>
            </div>
            
            <div class="timeline-cont-icon wow enterIcon" data-wow-delay="0s"></div>
        </div>

        <div class="timeline-cont left">
            <div class="timeline-cont-img wow fadeInRight img-none" data-wow-delay="0.2s"></div>
            
            <div class="content wow fadeInLeft">
                <h2 id="servs-diseño">Diseñamos tu experiencia</h2>
                <p id="servs-subdiseño">Nuestros Diseñadores UX/UI realizan la mejor experiencia de usuario para tu producto. En donde analizan cuales son los mejores pasos a seguir para que logres realizar eso que necesitas de manera sencilla y en el menor tiempo posible</p>
            </div>
            
            <div class="timeline-cont-icon wow enterIcon" data-wow-delay="0s"></div>
        </div>

        <div class="timeline-cont right">
            <div class="timeline-cont-img wow fadeInLeft img-none" data-wow-delay="0.2s"></div>
            
            <div class="content wow fadeInRight">
                <h2 id="servs-desarrollo">Desarrollo Web</h2>
                <p id="servs-subdesarrollo">Tenemos Desarrolladores Web especialistas en la creación de tus sitios. Ellos son los encargados de llevar tu diseño a la realidad y van a estar trabajando permanentemente en la mejora de tu plataforma.</p>
            </div>
            
            <div class="timeline-cont-icon wow enterIcon" data-wow-delay="0s"></div>
        </div>

        <div class="timeline-cont left">
            <div class="timeline-cont-img wow fadeInRight img-none" data-wow-delay="0.2s"></div>
            
            <div class="content wow fadeInLeft">
                <h2 id="servs-bpm">BPM</h2>
                <p id="servs-subbpm">Diseñamos, ejecutamos, analizamos y mejoraramos continuamente los procesos de negocios de grandes organizaciones orientado a objetivos.
                </p>
            </div>
            
            <div class="timeline-cont-icon wow enterIcon" data-wow-delay="0s"></div>
        </div>

        <div class="timeline-cont right">
            <div class="timeline-cont-img wow fadeInLeft img-none" data-wow-delay="0.2s"></div>
            
            <div class="content wow fadeInRight">
                <h2 id="servs-devops">DevOps</h2>
                <p id="servs-subdevops">Automatizamos plataformas para generar mayor valor empresarial y capacidad de respuesta, mediante la prestación ágil de servicios de alta calidad.</p>
            </div>
            
            <div class="timeline-cont-icon wow enterIcon" data-wow-delay="0s"></div>
        </div>

        <div class="timeline-cont left">
            <div class="timeline-cont-img wow fadeInRight img-none" data-wow-delay="0.2s"></div>
            
            <div class="content wow fadeInLeft">
                <h2 id="servs-testing">Testeamos lo realizado</h2>
                <p id="servs-subtesting">Evaluamos lo que se creo para que los usuarios tengan la mejor experiencia cuando estan usando el
                    producto, diseñamos y creamos para ellos asique es un punto muy importante para tener en cuenta.
                </p>
            </div>
            
            <div class="timeline-cont-icon wow enterIcon" data-wow-delay="0s"></div>
        </div>
    </div>
</section>


<section class="tecnologias">
    <h2 id="serv-tecnologias">Tecnologías</h2>
    <p id="serv-subtecnologias">Tenemos un equipo especializado en una gran variedad de tecnologías para llevar a cabo el proyecto que
        necesites</p>

    <div class="cajas-tecnologias">
    
        <?php if (!empty($tecnologias)) { 
            foreach($tecnologias as $tecnologia) { ?>

                <div class="card-tecno">
                    <img src=" <?php echo base_url('public/img/tecnologias/' . $tecnologia['img_url']) ?> " alt="" loading="lazy">
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
