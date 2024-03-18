<?php
include_once 'header.php';
?>
    <link rel="stylesheet" href="assets/css/style.css">

    <section class="py-5 shadow-lg">
        <div class="container">
            <div class="row align-items-center py-5" >
                <div id="sobre" class="col-md-8 text-white">
                    <h1 class="display-5 text-dark">Sobre O Portal Do Dador</h1>
                    <h3 class="display-4" style="color: #0085ff;">Um portal preocupado com a comunidade</h3>
                    <p class="text-dark">O portal foi desenvolvido com o intuito de promover o aumento da concientização sobre a doação de sangue, e dar a conhecer algumas das etapas que a antecedem. A doação de sangue é um ato voluntário e altruísta, que pode salvar vidas. O sangue doado é utilizado em transfusões para pacientes que precisam de sangue como em casos de cirurgias, acidentes, doenças crônicas, entre outros.</p>
                    <p>De referir ainda, que o sistema conta com:</p>
                    <ul class="about-list text-dark" style="list-style-type: none;">
                    <li><i style="color: #0085ff;" class="fa-solid fa-circle-chevron-right"></i> Layout responsivo para os dispositivos comuns;</li>
                    <li><i style="color: #0085ff;" class="fa-solid fa-circle-chevron-right"></i> Layout simples, que facilita o aprendiado e utilização;</li>
                    <li><i style="color: #0085ff;" class="fa-solid fa-circle-chevron-right"></i> Recurso de geolocalização, se desejar saber quais as unidades estão próximas de si;</li>
                    <li><i style="color: #0085ff;" class="fa-solid fa-circle-chevron-right"></i> E ainda, pode emitir seu relatório de rastreio.</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img id="sobre_img" class="img-fluid" src="assets/img/blood-heart.jpeg" alt="Sangue, simbolizando amor">
                </div>
            </div>
            <a href="contacto.php" class="main-btn"><button class="text-light bg-danger rounded-2 border-0 p-2 m-auto">Contactos</button></a>
        </div>
    </section>
    <!-- Close Banner -->

    <!-- Start Categories of The Month -->
    <section class="container py-5" id="serviço">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="display-4 text-primary">Nossos Serviços </h1>
                <span class="display-5">Conheça os nossos serviços</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center col-md-4 p-5 mt-3">
                <img src="./assets/img/smart-rout.jpg" alt="" class="img-thumbnail shadow py-3 w-100 h-50">
                <h5 class="text-center text-primary h2 ">Localizar Centro Hospitalar</h5>
                <p class="lead">Este serviço permite identificar os centros hospitalares que podem lhe ofercer sangue, ou podem estar precisando do seu sangue.</p>
                <a href="#" class="main-btn"><button class="text-light bg-danger rounded-2 border-0">Saiba mais</button></a>
            </div>
            <div class="col-12 col-md-4 text-center p-5 mt-3">
                <img src="./assets/img/blood-exm.png" alt="" class="img-thumbnail shadow float-end ms-3">
                <h5 class="text-center text-primary h2">Reservar Sangue</h5>               
                <p class="lead ">Pode fazer reserva de sangue , sabe qual é o seu grupo sanguíneo? para avaliar as três principais linhagens de células do , sendo bastante utilizado no diagnóstico de várias doenças.</p>
                <a href="#" class="main-btn"><button class="text-light bg-danger rounded-2 border-0">Saiba mais</button></a>
            </div>
            <div class="col-12 col-md-4 text-center p-5 mt-3 w-45">
                <a href="#"><img src="./assets/img/blood.png" width="90%" class="img-thumbnail shadow float-end ms-3"></a>
                <h5 class="text-center text-primary h2 ">Agendar doação</h5>               
                <p class="lead"> Venha agendar a sua doação connosco do sangue, sendo bastante utilizado no diagnóstico de várias doenças.</p>
                <a href="#" class="main-btn"><button class="text-light bg-danger rounded-2 border-0">Saiba mais</button></a>
            </div>
        </div>      
       
    </section>
    <!-- End Categories of The Month -->

   
<?php
include_once 'footer.php';
?>