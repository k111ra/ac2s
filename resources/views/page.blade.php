@extends('layouts.layout')

@section('title')
.:: Page ::.
@endsection

@section('content')
<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title"><?php echo $page->title  ?></h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->

<section id="portfolio-information" class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="\storage\<?php echo $page->image  ?>" class="img-responsive" alt="">
            </div>
            <div class="col-sm-6">
                <?php echo $page->body  ?>
            </div>
        </div>
    </div>
</section>
 <!--/#portfolio-information-->

<section id="related-work" class="padding-top padding-bottom">
    <div class="container">
        <div class="row">
            <h1 class="title text-center">Related Work</h1>
            <div class="col-sm-3">
                <div class="portfolio-wrapper">
                    <div class="portfolio-single">
                        <div class="portfolio-thumb">
                            <img src="/images/portfolio/1.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="portfolio-view">
                            <ul class="nav nav-pills">
                                <li><a href="/images/portfolio/1.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio-info ">
                        <h2>Sailing Vivamus</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="portfolio-wrapper">
                    <div class="portfolio-single">
                        <div class="portfolio-thumb">
                            <img src="/images/portfolio/2.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="portfolio-view">
                            <ul class="nav nav-pills">
                                <li><a href="/images/portfolio/2.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio-info ">
                        <h2>Sailing Vivamus</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="portfolio-wrapper">
                    <div class="portfolio-single">
                        <div class="portfolio-thumb">
                            <img src="/images/portfolio/3.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="portfolio-view">
                            <ul class="nav nav-pills">
                                <li><a href="/images/portfolio/3.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio-info ">
                        <h2>Sailing Vivamus</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="portfolio-wrapper">
                    <div class="portfolio-single">
                        <div class="portfolio-thumb">
                            <img src="/images/portfolio/4.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="portfolio-view">
                            <ul class="nav nav-pills">
                                <li><a href="/images/portfolio/4.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio-info ">
                        <h2>Sailing Vivamus</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#related-work-->
@endsection
