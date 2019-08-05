@extends('layouts.layout')

@section('title')
Page
@endsection
@section('content')
<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Services</h1>
                            <p>Designed to suit you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="company-information" class="choose">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0ms">
                    <img src="images/services/4.png" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 padding-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0ms">
                    <h2>Domaine d’Expertise </h2>
                    <p>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore<br /> tail corned beef Capicola nisi flank sed.</p>
                    <ul class="elements">
                        <li class="wow fadeInUp" data-wow-duration="900ms" data-wow-delay="100ms"><i class="fa fa-angle-right"></i>Conception et réalisation de sites web & Logiciel (*)</li>
                        <li class="wow fadeInUp" data-wow-duration="800ms" data-wow-delay="200ms"><i class="fa fa-angle-right"></i>Développement d’applications mobiles (*)</li>
                        <li class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms"><i class="fa fa-angle-right"></i>Nom de domaine & Hébergement</li>
                        <li class="wow fadeInUp" data-wow-duration="600ms" data-wow-delay="400ms"><i class="fa fa-angle-right"></i>Référencement organique</li>
                        <li class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms"><i class="fa fa-angle-right"></i>BI/ Outils de reporting</li>
                        <li class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms"><i class="fa fa-angle-right"></i>Veille, Analyse, E réputation, Influence</li>
                        <li class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms"><i class="fa fa-angle-right"></i>Stratégie digitale</li>
                        <li class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms"><i class="fa fa-angle-right"></i>Audit, sécurité IT & conseils</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/#company-information-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/home/icon1.png" alt="">
                        </div>
                        <h2>Conception et réalisation de sites web & Logiciel</h2>
                        <p>Si votre projet intègre une boutique de e-commerce, nous assurons la mise en oeuvre des moyens de paiement en ligne du marché : Cartes Bancaires, Micro-paiement, Paypal, Mobile money </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/home/icon2.png" alt="">
                        </div>
                        <h2>Développement d’applications mobiles </h2>
                        <p>La forte pénétration des Smartphones sur les différents marchés a bouleversé les attitudes et usages des consommateurs. Le marché de la mobilité connait une croissance sans précédent. Et les applications mobiles ont l’avantages </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/home/icon3.png" alt="">
                        </div>
                        <h2>Nom de domaine <br>.</h2>
                        <p>La possession du nom de domaine est un acte majeur dans la protection et la communication de votre activité. C’est pourquoi nous mettons à votre disposition des services intégrés à des tarifs compétitifs défiant la concurrence.<br><br>.</p>
                    </div>
                </div>

                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/services/1.png" alt="">
                        </div>
                        <h2>Référencement organique</h2>
                        <p>Communément appelé le référencement naturel, le référencement organique indique toutes les techniques existantes permettant de positionner un site web sur une ou plusieurs requêtes préalablement identifiées qui permet de mettre en évidence sur internet votre visibilité plus accrue.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/services/2.png" alt="">
                        </div>
                        <h2>Sauvegarde de données</h2>
                        <p> L’enjeu est de vous proposer des systèmes de haut niveau de sécurité de sauvegarde de données sensibles et stratégiques en mode back up et de vous les restituer en état </p>
                    </div>
                </div>
                {{-- <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/services/3.png" alt="">
                        </div>
                        <h2>Business Intelligence & Outils de reporting</h2>
                        <p>Nos outils rassemblent de nombreuses applications d’analyse de données, de reporting, de traitement analytique en ligne, de mobile BI, de BI en temps réel, de BI d’exploitation, de logiciels en tant que service (SaaS), et de BI open source…</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="/images/services/1.png" alt="">
                        </div>
                        <h2>Veille, Analyse, E réputation, Influence</h2>
                        <p>Nous menons une veille permanente selon les problématiques du client grâce à divers canaux de collecte et de traitement des données en local comme à l’international autour d’une variété de sujets. </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="single-service">
                            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                                <img src="/images/services/2.png" alt="">
                            </div>
                            <h2>Stratégie digitale</h2>
                            <p> AC2S se tient à votre disposition pour vous accompagner dans votre transformation digitale en vue d’améliorer votre efficacité opérationnelle. L’enjeu est de mettre au centre des pratiques la digitalisation des services et tâches à accomplir aussi bien en interne qu’à l’externe entre vos clients, partenaires et vous. </p>
                        </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                        <div class="single-service">
                            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                                <img src="/images/services/3.png" alt="">
                            </div>
                            <h2>Audit, sécurité IT & conseils</h2>
                            <p>Nous avons développé pour vous est une démarche méthodique qui permet d’évaluer à une période donnée les risques potentiels auxquels votre système informatique et d’échange de données est exposé. En conséquence, nous proposons des solutions de protections fiables de protection. </p>
                        </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
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
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->

    <section id="recent-projects" class="recent-projects">
        <div class="container">
            <div class="row">
                <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Recent Projects</h1>
                <p class="text-center padding-bottom wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                Ut enim ad minim veniam, quis nostrud </p>
                <div class="col-sm-3 col-xs-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="images/portfolio/1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="images/portfolio/1.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <h2>Sailing Vivamus</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="images/portfolio/2.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="images/portfolio/2.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <h2>Sailing Vivamus</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="images/portfolio/3.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="images/portfolio/3.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <h2>Sailing Vivamus</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="images/portfolio/4.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="images/portfolio/4.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <h2>Sailing Vivamus</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="700ms">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="images/portfolio/5.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="images/portfolio/5.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <h2>Sailing Vivamus</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="800ms">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="images/portfolio/6.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="images/portfolio/6.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <h2>Sailing Vivamus</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="images/portfolio/7.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="images/portfolio/7.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <h2>Sailing Vivamus</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="1000ms">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="images/portfolio/8.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="images/portfolio/8.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <h2>Sailing Vivamus</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#recent-projects-->

    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="images/home/clients.png" class="img-responsive" alt=""></p>
                        <h1 class="title">Happy Clients</h1>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client1.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client2.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client3.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client4.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client5.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client6.png" class="img-responsive" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!--/#clients-->
@endsection
