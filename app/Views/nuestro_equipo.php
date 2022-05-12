<section class="hero-equipo">
    <!-- <picture> -->
        <!-- <source srcset="../img/office1.jpg" media="(min-width:768px)"> -->
        <img src=" <?php echo base_url('public/img/noditos.jpeg') ?> " loading="lazy" alt=""></picture>
        <video src="http://nodoshub.com/testing/public/videos/NODOS-video.mp4" autoplay="autoplay" muted loop="true" preload="auto" class="video"></video>
    <div class="info">
        <h2 id="equipo_title">Te presentamos a nuestro equipo</h2>
        <p id="equipo_subtitle">El que hace realidad tus ideas</p>
    </div>
</section>


<div class="puestos">
    <div onclick="javascript:buttonTodos()" id="todos" class="boton-puesto puesto-active">
        <button id="equipo_all">TODOS</button>
    </div>

    <div onclick="javascript:buttonCeo()" onclick="javascript:buttonCeo()" id="ceo" class="boton-puesto">
        <button>CEO</button>
    </div>

    <!-- <div onclick="javascript:buttonContador()" id="contador" class="boton-puesto">
        <button>CONTADOR</button>
    </div> -->

    <div onclick="javascript:buttonAdministracion()" id="administracion" class="boton-puesto">
        <button id="admin">ADMINISTRACIÓN</button>
    </div>

    <div onclick="javascript:buttonAnalista()" id="analista" class="boton-puesto">
        <button id="analist">ANALISTA FUNCIONAL</button>
    </div>

    <div onclick="javascript:buttonDesMov()" id="dev-mob" class="boton-puesto">
        <button>MOBILE DEVELOPER</button>
    </div>

    <div onclick="javascript:buttonUxUi()" id="ux-ui" class="boton-puesto">
        <button id="uxui">DISEÑO UX/UI</button>
    </div>

    <div onclick="javascript:buttonBack()" id="back" class="boton-puesto">
        <button>BACK END</button>
    </div>

    <div onclick="javascript:buttonFront()" id="front" class="boton-puesto">
        <button>FRONT END</button>
    </div>

    <div onclick="javascript:buttonFstack()" id="f-stack" class="boton-puesto">
        <button>FULL STACK</button>
    </div>

    <div onclick="javascript:buttonQAQC()" id="qaqc" class="boton-puesto">
        <button>QA/QC</button>
    </div>

    <div onclick="javascript:buttonMkt()" id="mkt" class="boton-puesto">
        <button>MARKETING</button>
    </div>

    <div onclick="javascript:buttonPM()" id="pm" class="boton-puesto">
        <button>PROJECT MANAGER</button>
    </div>

    <div onclick="javascript:buttonRRHH()" id="rrhh" class="boton-puesto">
        <button id="hr">RECURSOS HUMANOS</button>
    </div>

    <div onclick="javascript:buttonBPM()" id="bpm" class="boton-puesto">
        <button>BPM</button>
    </div>
</div>


<section class="cards-equipo">
    <div class="card-individual ceo">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/cristian.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-blue">Cristian Gonzalez</h3>
            <p>CEO / Founder</p>
        </div>
    </div>
    
    <div class="card-individual ceo">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/seba-a.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-orange">Sebastián Ávila</h3>
            <p>CEO / Co-Founder</p>
        </div>
    </div>
    
    <div class="card-individual administracion">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/pame.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-blue">Pamela Ávila</h3>
            <p id="equipo-admin">Administración</p>
        </div>
    </div>
    
    <div class="card-individual analista">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/jor.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-blue">Jorgelina Pérez Villa</h3>
            <p id="equipo-analista">Analista Funcional</p>
        </div>
    </div>

    <div class="card-individual des-mob">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/gonza.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-blue">Gonzalo Valdez</h3>
            <p>Mobile Developer</p>
        </div>
    </div>

    <div class="card-individual des-mob">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/lucas.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-orange">Lucas Casco</h3>
            <p>Mobile Developer</p>
        </div>
    </div>

    <div class="card-individual ux-ui">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/vale.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-orange">Valentina Visciglio</h3>
            <p id="equipo-uxui-f">Diseñadora UX/UI</p>
        </div>
    </div>

    <div class="card-individual ux-ui">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/juan-cruz-c.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-blue">Juan Cruz Carreño</h3>
            <p id="equipo-uxui-m">Diseñador UX/UI</p>
        </div>
    </div>

    <div class="card-individual back">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/andres.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-orange">Andrés Gallardo</h3>
            <p>Back End</p>
        </div>
    </div>

    <div class="card-individual back">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/damian.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-blue">Damián Leal</h3>
            <p>Back End</p>
        </div>
    </div>

    <div class="card-individual back">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/gise.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-blue">Gisela Carrizo</h3>
            <p>Back End</p>
        </div>
    </div>

    
    <div class="card-individual back">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/cinthia.jpeg') ?> " loading="lazy" alt="" >
        </div>
        <div class="card-ind-info">
            <h3 class="clr-blue">Cinthia Muñoz</h3>
            <p>Back End</p>
        </div>
    </div>
    
    <div class="card-individual back">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/emilse.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-orange">Emilse Moreno</h3>
            <p>Back End</p>
        </div>
    </div>
    
    <div class="card-individual back">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/mari.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-orange">Mariana Pastrán</h3>
            <p>Back End</p>
        </div>
    </div>  
    
    <!-- Falta foto! -->
    
    <!-- <div class="card-individual backend">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo/persona1.png') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-orange">Lucas Aguilera</h3>
            <p>Back End</p>
        </div>
    </div> -->
    
    <div class="card-individual front">
        <div class="card-ind-img" style="background-size: cover;">
            <img src="<?php echo base_url('public/img/equipo-resize/joaco.jpeg') ?>" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-orange">Joaquín Quiroga</h3>
            <p>Front End</p>
        </div>
    </div>
    
    <div class="card-individual front">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/facu.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-orange">Facundo Gallardo</h3>
            <p>Front End</p>
        </div>
    </div>
    
    <div class="card-individual front">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/fede.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-orange">Federico Rocha Cueli</h3>
            <p>Front End</p>
        </div>
    </div>
    
    <div class="card-individual front">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/esteban.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-blue">Esteban Pechuan</h3>
            <p>Front End</p>
        </div>
    </div>
    
    <!-- Falta foto fondo azul! -->
    
    <div class="card-individual f-stack">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/belen.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-blue">Belén Calibar</h3>
            <p>Full Stack</p>
        </div>
    </div>
    
    <div class="card-individual f-stack">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/marcos.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-orange">Marcos Caballero</h3>
            <p>Full Stack</p>
        </div>
    </div>
      
    <div class="card-individual f-stack">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/santi.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-orange">Santiago Grazino</h3>
            <p>Full Stack</p>
        </div>
    </div>
    
    <div class="card-individual qaqc">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/seba-m.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-orange">Sebastián Morrone</h3>
            <p id="equipo-qaqc">Ingeniero QA/QC</p>
        </div>
    </div>

    <div class="card-individual mkt">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/agus.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-orange">Agustina Zapata</h3>
            <p>Marketing</p>
        </div>
    </div>
    
    <div class="card-individual mkt">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/stefi.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-blue">Stefania Mendoza</h3>
            <p>Marketing</p>
        </div>
    </div>
    
    <div class="card-individual mkt">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/cati.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-blue">Catalina Buffagni</h3>
            <p>Marketing</p>
        </div>
    </div>
    
    <div class="card-individual mkt">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/fer.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-blue">Fernanda Gallardo</h3>
            <p>Marketing</p>
        </div>
    </div>
    
    <div class="card-individual mkt">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/cande.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-blue">Candela Moreno</h3>
            <p>Marketing</p>
        </div>
    </div>

    <div class="card-individual mkt">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/roma.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-blue">Roma Lara</h3>
            <p>Marketing</p>
        </div>
    </div>

    <div class="card-individual pm">
        <div class="card-ind-img" style="background-size: cover; background-position: 0 -60px;">
            <img src="<?php echo base_url('public/img/equipo-resize/mauro.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-orange">Mauro Felez</h3>
            <p>Project Manager</p>
        </div>
    </div>
    
    <div class="card-individual pm">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/pili.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-blue">Pilar Gallardo</h3>
            <p>Project Manager</p>
        </div>
    </div>
    
    <div class="card-individual pm">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/marce.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-blue">Marcelo Cuenca</h3>
            <p>Project Manager</p>
        </div>
    </div>
    
    <div class="card-individual pm">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/lucre.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-orange">Lucrecia Gallardo</h3>
            <p>Project Manager</p>
        </div>
    </div>
    
    
    <!-- Falta foto fondo azul! -->
    
    <div class="card-individual rrhh">
        <div class="card-ind-img">
            <!-- <img src=" <?php echo base_url('public/img/equipo/pulpo.jpg') ?> " loading="lazy" alt=""> -->
            <img src=" <?php echo base_url('public/img/equipo-resize/juan-cruz-g.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-blue">Juan Cruz Gonzalez</h3>
            <p id="equipo-rrhh">Recursos Humanos</p>
        </div>
    </div>
    
    <div class="card-individual bpm">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/mauri.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-orange">Mauricio Flores</h3>
            <p>BPM</p>
        </div>
    </div>

    <div class="card-individual bpm">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo-resize/vale-m.jpeg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-blue">Valeria Mallea</h3>
            <p>BPM</p>
        </div>
    </div>
    
    <!-- Falta foto fondo azul! -->
    
    <!-- <div class="card-individual soporte">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo/fondo-rojo/maxi.jpg') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-orange">Maximiliano Venditti</h3>
            <p>Soporte</p>
        </div>
    </div> -->


    <!-- <div class="card-individual soporte">
        <div class="card-ind-img">
            <img src=" <?php echo base_url('public/img/equipo/persona3.png') ?> " loading="lazy" alt="">
        </div>
        <div class="card-ind-info">
            <h3 class="clr-orange">José Amarfil</h3>
            <p>?</p>
        </div>
    </div> -->
</section>

<figure class="circle-1-h"></figure>
<figure class="circle-2-h"></figure>
<!-- <figure class="circle-3-h"></figure>
<figure class="circle-4-h"></figure> -->

<script defer>
    // Cambio de estilos del los 'boton-puesto'
    const arrbotons = document.querySelectorAll('.boton-puesto')

    arrbotons.forEach(boton => {
        boton.addEventListener('click', () => {
            arrbotons.forEach(boton2 => {
                boton2.classList.remove('puesto-active')
            })
            boton.classList.add('puesto-active')
        })
    })



    // Búsqueda de las cards según el botón
    const todos = document.querySelector('#todos')
    const ceo = document.querySelector('#ceo')
    const contador = document.querySelector('#contador')
    const administracion = document.querySelector('#administracion')
    const analista = document.querySelector('#analista')
    const devMob = document.querySelector('#dev-mob')
    const uxUi = document.querySelector('#ux-ui')
    const back = document.querySelector('#back')
    const front = document.querySelector('#front')
    const fStack = document.querySelector('#f-stack')
    const qaqc = document.querySelector('#qaqc')
    const mkt = document.querySelector('#mkt')
    const pm = document.querySelector('#pm')
    const rrhh = document.querySelector('#rrhh')
    const bpm = document.querySelector('#bpm')


    const cardTodos = document.querySelectorAll('.card-individual')
    const cardCeo = document.querySelectorAll('.ceo')
    const cardContador = document.querySelectorAll('.contador')
    const cardAdministracion = document.querySelectorAll('.administracion')
    const cardAnalista = document.querySelectorAll('.analista')
    const cardDevMob = document.querySelectorAll('.des-mob')
    const cardUxUi = document.querySelectorAll('.ux-ui')
    const cardBack = document.querySelectorAll('.back')
    const cardFront = document.querySelectorAll('.front')
    const cardFstack = document.querySelectorAll('.f-stack')
    const cardQAQC = document.querySelectorAll('.qaqc')
    const cardMkt = document.querySelectorAll('.mkt')
    const cardPm = document.querySelectorAll('.pm')
    const cardRrhh = document.querySelectorAll('.rrhh')
    const cardBPM = document.querySelectorAll('.bpm')


    function buttonTodos() {
        removeDisplay()
    }

    function buttonCeo() {
        addDisplay()
        cardCeo.forEach(i => {
            i.classList.remove('d-none')
        })
    }

    function buttonContador() {
        addDisplay()
        cardContador.forEach(i => {
            i.classList.remove('d-none')
        })
    }

    function buttonAdministracion() {
        addDisplay()
        cardAdministracion.forEach(i => {
            i.classList.remove('d-none')
        })
    }

    function buttonAnalista() {
        addDisplay()
        cardAnalista.forEach(i => {
            i.classList.remove('d-none')
        })
    }

    function buttonDesMov() {
        addDisplay()
        cardDevMob.forEach(i => {
            i.classList.remove('d-none')
        })
    }

    function buttonUxUi() {
        addDisplay()
        cardUxUi.forEach(i => {
            i.classList.remove('d-none')
        })
    }

    function buttonBack() {
        addDisplay()
        cardBack.forEach(i => {
            i.classList.remove('d-none')
        })
    }

    function buttonFront() {
        addDisplay()
        cardFront.forEach(i => {
            i.classList.remove('d-none')
        })
    }

    function buttonFstack() {
        addDisplay()
        cardFstack.forEach(i => {
            i.classList.remove('d-none')
        })
    }

    function buttonFstack() {
        addDisplay()
        cardFstack.forEach(i => {
            i.classList.remove('d-none')
        })
    }

    function buttonQAQC() {
        addDisplay()
        cardQAQC.forEach(i => {
            i.classList.remove('d-none')
        })
    }

    function buttonMkt() {
        addDisplay()
        cardMkt.forEach(i => {
            i.classList.remove('d-none')
        })
    }

    function buttonPM() {
        addDisplay()
        cardPm.forEach(i => {
            i.classList.remove('d-none')
        })
    }

    function buttonRRHH() {
        addDisplay()
        cardRrhh.forEach(i => {
            i.classList.remove('d-none')
        })
    }

    function buttonBPM() {
        addDisplay()
        cardBPM.forEach(i => {
            i.classList.remove('d-none')
        })
    }

    function removeDisplay() {
        cardTodos.forEach(card => {
            card.classList.remove('d-none')
        })
    }

    function addDisplay() {
        cardTodos.forEach(card => {
            card.classList.add('d-none')
        })
    }

</script>