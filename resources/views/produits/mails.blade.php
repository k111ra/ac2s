@extends('layouts.layout')

@section('title')
.:: Prestation || SMS ::.

@endsection

@section('content')

<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">AC2S Mails</h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div class="price-table">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="single-price price-one">
                    <div class="table-heading">
                        <p class="plan-name">Classic</p>
                        <p class="plan-price"><span class="price">15 000</span><span class="dollar-sign">F CFA </span><span class="month">/ Mois</span></p>
                    </div>
                    <ul>
                        <li>Nom de domaine <span><i class="fa fa-check"></i></span></li>
                        <li>Webmail Sécurisé (Roundcube) <span><i class="fa fa-times"></i></span></li>
                        <li>Nb de comptes email <span>20</span> </li>
                        <li> SpamAssasin <span><i class="fa fa-check"></i></span></li>
                        <li>Repondeur automatiques <span><i class="fa fa-times"></i></span></li>
                        <li>Espace Disque <span>3</span></li>
                    </ul>
                    <a href="#" class="btn btn-buynow">Commander</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="single-price price-two">
                        <div class="table-heading">
                                <p class="plan-name">Pro</p>
                                <p class="plan-price"><span class="price">25 000</span><span class="dollar-sign">F CFA </span><span class="month">/ Mois</span></p>
                            </div>
                            <ul>
                                <li>Nom de domaine <span><i class="fa fa-check"></i></span></li>
                                <li>Webmail Sécurisé (Roundcube) <span><i class="fa fa-times"></i></span></li>
                                <li>Nb de comptes email <span>40</span> </li>
                                <li> SpamAssasin <span><i class="fa fa-check"></i></span></li>
                                <li>Repondeur automatiques <span><i class="fa fa-times"></i></span></li>
                                <li>Espace Disque <span>7</span></li>
                            </ul>
                            <a href="#" class="btn btn-buynow">Commander</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="single-price price-three">
                        <div class="table-heading">
                                <p class="plan-name">Business</p>
                                <p class="plan-price"><span class="price">30 000</span><span class="dollar-sign">F CFA </span><span class="month">/ Mois</span></p>
                            </div>
                            <ul>
                                <li>Nom de domaine <span><i class="fa fa-check"></i></span></li>
                                <li>Webmail Sécurisé (Roundcube) <span><i class="fa fa-times"></i></span></li>
                                <li>Nb de comptes email <span>60</span> </li>
                                <li> SpamAssasin <span><i class="fa fa-check"></i></span></li>
                                <li>Repondeur automatiques <span><i class="fa fa-times"></i></span></li>
                                <li>Espace Disque <span>10</span></li>
                            </ul>
                            <a href="#" class="btn btn-buynow">Commander</a>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                    <div class="single-price price-four">
                            <div class="table-heading">
                                    <p class="plan-name">Premium/ Ultimate</p>
                                    <p class="plan-price"><span class="price">40 000</span><span class="dollar-sign">F CFA </span><span class="month">/ Mois</span></p>
                                </div>
                                <ul>
                                    <li>Nom de domaine <span><i class="fa fa-check"></i></span></li>
                                    <li>Webmail Sécurisé (Roundcube) <span><i class="fa fa-times"></i></span></li>
                                    <li>Nb de comptes email <span>100</span> </li>
                                    <li> SpamAssasin <span><i class="fa fa-check"></i></span></li>
                                    <li>Repondeur automatiques <span><i class="fa fa-times"></i></span></li>
                                    <li>Espace Disque <span>20</span></li>
                                </ul>
                                <a href="#" class="btn btn-buynow">Commander</a>
                    </div>
                </div>
        </div>
    </div><!--/#price-table-->
</section>

@endsection
