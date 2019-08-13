@extends('layouts.layout')

@section('title')
Home
@endsection

@section('content')
    <section id="home-slider">
        <div id="carousel-container">

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="/images/home/2612371.jpg" alt="">
                        <div class="carousel-caption">
                            <h1 style="color:white;">Conception web-design et logo </h1>
                            <p style="font-size:20px;">AC2S a réalisé de nombreux sites institutionnels, sites d'entreprises et sites grand public, grâce à ses compétences dans les dernières technologies du Web et du Web 2.0 : logiciels libres, PHP5, JQuery, Flash AS3, Ajax, CMS du marché tels que Drupal, Joomla, WordPress ou Magento.</p>
                        </div>
                    </div>
                    <div class="item">

                        <img src="images/home/388088-PC4BSQ-224.jpg" alt="">
                        <div class="carousel-caption">
                            <h1 style="color:white;">Faites évoluer vos idées </h1>
                            <p style="font-size:20px;" >Vous êtes à la recherche de solutions adaptées pour optimiser la gestion de vos activités. Eh bien, AC2S répond à vos besoins en vous proposant des logiciels spécifiques à vos métiers</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/home/882.jpg" alt="">
                        <div class="carousel-caption" >
                            <h1 style="color:white;">hebergement & réseau informatique </h1>
                            <p style="font-size:20px;" >La possession du nom de domaine est un acte majeur dans la protection et la communication de votre activité. C’est pourquoi nous mettons à votre disposition des services intégrés à des tarifs compétitifs défiant la concurrence</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control hidden-xs" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control hidden-xs" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div><!--/#carousel-example-generic-->
            <ol class="carousel-indicators hidden-xs">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
        </div><!--/#carousel-container-->
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>

    </section>
    <!--/#home-slider-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="/images/ico/cloud-storage-128.png" alt="">
                        </div>
                        <h2>Sauvegarde de données</h2>
                        <p> L’enjeu est de vous proposer des systèmes de haut niveau de sécurité de sauvegarde de données sensibles et stratégiques en mode back up et de vous les restituer en état en cas de :
                             <br> Perte des données de l’entreprise
                             <br> Reprise de l’activité suite à un sinistre
                                </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="/images/ico/web-design-128.png" alt="">
                        </div>
                        <h2>Conception et réalisation de sites web & Logiciel</h2>
                        <p>Vous êtes à la recherche de solutions adaptées pour optimiser la gestion de vos activités. Eh bien, AC2S répond à vos besoins en vous proposant des logiciels spécifiques à vos métiers </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/ico/control-panel-160.png" alt="">
                        </div>
                        <h2>Business Intelligence & Outils de reporting</h2>
                        <p>La Business Intelligence ou informatique décisionnelle analyse des données pour assister les dirigeants et les décideurs dans leurs prises de décisions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                {{-- <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Triangle Corporate Template</h1>
                            <p>A responsive, retina-ready &amp; wide multipurpose template.</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                                <a href="#" class="btn btn-common">TAKE THE TOUR</a>
                             </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/imac-.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Web Design Tendance</h2>
                        <P>AC2S a réalisé de nombreux sites institutionnels, sites d'entreprises et sites grand public, grâce à ses compétences dans les dernières technologies du Web et du Web 2.0 : logiciels libres, PHP5, JQuery, Flash AS3, Ajax, CMS du marché tels que Drupal, Joomla, WordPress ou Magento. <br> Si votre projet intègre une boutique de e-commerce, nous assurons la mise en œuvre des moyens de paiement en ligne du marché : Cartes Bancaires, Micro-paiement, PayPal, Mobile money </P>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <br> <br>
                        <h2>Audit, sécurité IT & conseils</h2>
                        <P>Nous avons développé pour vous est une démarche méthodique qui permet d’évaluer à une période donnée les risques potentiels auxquels votre système informatique et d’échange de données est exposé. En conséquence, nous proposons des solutions de protections fiables de protection. </P>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/cyber-security-.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/desk-.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <br> <br>
                        <h2>Stratégie digitale</h2>
                        <P>AC2S se tient à votre disposition pour vous accompagner dans votre transformation digitale en vue d’améliorer votre efficacité opérationnelle. L’enjeu est de mettre au centre des pratiques la digitalisation des services et tâches à accomplir aussi bien en interne qu’à l’externe entre vos clients, partenaires et vous.</P>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--/#features-->

    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="images/home/client.png" class="img-responsive" alt=""></p>
                        <h1 class="title">Clients satisfait </h1>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/coffee-.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/hummingbird-.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/animal.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/logo-google.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/shield.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/red.png" class="img-responsive" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!--/#clients-->

@endsection

