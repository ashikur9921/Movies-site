@extends('layout.app')
@section('title', $movie->name ?? 'Movie Details')


@section('content')

    <section class="section details">
      
            
        
        <!-- details background -->
        <div class="details__bg" data-bg="{{asset('allphotos/img/home/home__bg.jpg')}}"></div>
        <!-- end details background -->

        <!-- details content -->
        <div class="container">
            <div class="row">
                <!-- title -->
                <div class="col-12">
                    <h1 class="details__title">{{ $movie->name }}</h1>
                </div>
                <!-- end title -->

                <!-- content -->
                <div class="col-12 col-xl-6">
                    <div class="card card--details bg-transparent">
                        <div class="row">
                            <!-- card cover -->
                            <div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-5">
                                <div class="card__cover">
                                    <img src="{{ $movie->movie_image_link }}" alt="">
                                </div>
                            </div>
                            <!-- end card cover -->

                            <!-- card content -->
                            <div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
                                <div class="card__content">
                                    <div class="card__wrap">
                                        <span class="card__rate"><i class="icon ion-ios-star"></i>{{$movie->rating}}</span>

                                        <ul class="card__list">
                                            <li>HD</li>
                                            <li>16+</li>
                                        </ul>
                                    </div>

                                    <ul class="card__meta">
                                        <li><span>Genre:</span> <a href="#">{{$movie->type}}</a>
                                           {{-- <a href="#">Triler</a>
                                        </li>
                                        <li><span>Release year:</span> 2017</li>
                                        <li><span>Running time:</span> 120 min</li>
                                        <li><span>Country:</span> <a href="#">USA</a> </li> --}} 
                                    </ul>

                                    <div class="card__description card__description--details">
                                        <p>{{$movie->description}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end card content -->
                        </div>
                    </div>
                </div>
                <!-- end content -->

                <!-- player -->
                <div class="col-12 col-xl-6">
                    <video controls crossorigin playsinline
                        poster="../../../cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player">
                        <!-- Video files -->
                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                            type="video/mp4" size="576">
                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4"
                            type="video/mp4" size="720">
                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4"
                            type="video/mp4" size="1080">
                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1440p.mp4"
                            type="video/mp4" size="1440">

                        <!-- Caption files -->
                        <track kind="captions" label="English" srclang="en"
                            src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default>
                        <track kind="captions" label="Français" srclang="fr"
                            src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">

                        <!-- Fallback for browsers that don't support the <video> element -->
                        <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                            download>Download</a>
                    </video>
                </div>
                <!-- end player -->

                <div class="col-12">
                    <div class="details__wrap">
                        <!-- availables -->
                        <div class="details__devices">
                            << /button>

                                <div class="d-flex align-items-center gap-2">
                                    <a href="{{ $movie->download_link }}" class="header__sign-in">
                                        <i class="icon ion-ios-log-in"></i>
                                        <span>DOWNLOAD</span>
                                    </a>
                                    <a href="{{ $movie->watch_link }}" class="header__sign-in">
                                        <i class="icon ion-ios-log-in"></i>
                                        <span>WATCH</span>
                                    </a>
                                </div>
                        </div>

                        <!-- end availables --> 
                        <!-- share -->
                        <div class="details__share">
                            <span class="details__share-title">Share with friends:</span>

                            <ul class="details__share-list">
                                <li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                                <li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
                                <li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                                <li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
                            </ul>
                        </div>
                        <!-- end share -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end details content -->
    </section>
    


@endsection