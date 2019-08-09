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
                        <h1 class="title">AC2S Sms</h1>
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
                        <p class="plan-name">Bronze</p>
                        <p class="plan-price"><span class="price">4 500</span><span class="dollar-sign">F CFA </span><span class="month">/ Mois</span></p>
                    </div>
                    <ul>
                        <li>Volume SMS <span>100</span></li>

                    </ul>
                    <a href="#" class="btn btn-buynow">Commander</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="single-price price-two">
                        <div class="table-heading">
                                <p class="plan-name">Argent</p>
                                <p class="plan-price"><span class="price">20 000</span><span class="dollar-sign">F CFA </span><span class="month">/ Mois</span></p>
                            </div>
                            <ul>
                                <li>Volume SMS <span>500</span></li>

                            </ul>
                            <a href="#" class="btn btn-buynow">Commander</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="single-price price-three">
                        <div class="table-heading">
                                <p class="plan-name">Or</p>
                                <p class="plan-price"><span class="price">35 000</span><span class="dollar-sign">F CFA </span><span class="month">/ Mois</span></p>
                            </div>
                            <ul>
                                <li>Volume SMS <span>1000</span></li>

                            </ul>
                            <a href="#" class="btn btn-buynow">Commander</a>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                    <div class="single-price price-four">
                            <div class="table-heading">
                                    <p class="plan-name">Platine</p>
                                    <p class="plan-price"><span class="price">150 000</span><span class="dollar-sign">F CFA </span><span class="month">/ Mois</span></p>
                                </div>
                                <ul>
                                    <li>Volume SMS <span>5000</span></li>

                                </ul>
                                <a href="#" class="btn btn-buynow">Commander</a>
                    </div>
                </div>
        </div>
    </div><!--/#price-table-->
    <p>10% de remise pour plus de 5000 SMS</p>
</section>

@endsection
