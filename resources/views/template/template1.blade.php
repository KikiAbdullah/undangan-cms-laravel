<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $content['config']->slug_undangan }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{url('assets/template1/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{url('assets/template1/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{url('assets/template1/css/bootstrap.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{url('assets/template1/css/magnific-popup.css')}}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{url('assets/template1/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/template1/css/owl.theme.default.min.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{url('assets/template1/css/style.css')}} ">

    <!-- Modernizr JS -->
    <script src="{{url('assets/template1/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="{{url('assets/template1/js/respond.min.js')}}"></script>
	<![endif]-->

</head>

<body>

    <div class="fh5co-loader"></div>

    <div id="page">

        <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url('{{ url('/upload/undangan/'.$content['config']->slug_undangan.'/config/'.$content['config']->background_1) }}');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                <h1>{{ $content['pengantin']->panggilan_pria }} &amp; {{ $content['pengantin']->panggilan_wanita }}</h1>
                                <h2>We Are Getting Married</h2>
                                <div class="simply-countdown simply-countdown-one"></div>
                                <p><a href="#" class="btn btn-default btn-sm">Save the date</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="fh5co-couple">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <h2>Hello!</h2>
                        <h3>{{ $content['config']->lokasi }}, {{ $content['resepsi']->tanggal_resepsi }}</h3>
                        <p>We invited you to celebrate our wedding</p>
                    </div>
                </div>
                <div class="couple-wrap animate-box">
                    <div class="couple-half">
                        <div class="groom">
                            <img src="images/groom.jpg" alt="groom" class="img-responsive">
                        </div>
                        <div class="desc-groom">
                            <h3>{{ $content['pengantin']->nama_pria }}</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
                        </div>
                    </div>
                    <p class="heart text-center"><i class="icon-heart2"></i></p>
                    <div class="couple-half">
                        <div class="bride">
                            <img src="images/bride.jpg" alt="groom" class="img-responsive">
                        </div>
                        <div class="desc-bride">
                            <h3>{{ $content['pengantin']->nama_wanita }}</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-event" class="fh5co-bg" style="background-image:url('{{ url('/upload/undangan/'.$content['config']->slug_undangan.'/config/'.$content['config']->background_2) }}');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <span>Our Special Events</span>
                        <h2>Wedding Events</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-6 col-sm-6 text-center">
                                    <div class="event-wrap animate-box">
                                        <h3>Akad</h3>
                                        <div class="event-col">
                                            <i class="icon-clock"></i>
                                            <span>{{ $content['akad']->jam_akad }}</span>
                                        </div>
                                        <div class="event-col">
                                            <i class="icon-calendar"></i>
                                            <span>{{ $content['akad']->tanggal_akad }}</span>
                                        </div>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 text-center">
                                    <div class="event-wrap animate-box">
                                        <h3>Resepsi</h3>
                                        <div class="event-col">
                                            <i class="icon-clock"></i>
                                            <span>{{ $content['resepsi']->jam_resepsi }}</span>
                                        </div>
                                        <div class="event-col">
                                            <i class="icon-calendar"></i>
                                            <span>{{ $content['resepsi']->tanggal_resepsi }}</span>
                                        </div>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-couple-story">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <span>We Love Each Other</span>
                        <h2>Our Story</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-0">
                        <ul class="timeline animate-box">
                            <li class="animate-box">
                                <div class="timeline-badge" style="background-image:url({{url('assets/template1/images/couple-1.jpg')}});"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">{{ $content['moment']->judul_moment_1 }}</h3>
                                        <span class="date">{{ $content['moment']->tanggal_moment_1 }}</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{ $content['moment']->isi_moment_1 }}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="animate-box">
                                <div class="timeline-badge" style="background-image:url({{url('assets/template1/images/couple-1.jpg')}});"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">{{ $content['moment']->judul_moment_2 }}</h3>
                                        <span class="date">{{ $content['moment']->tanggal_moment_2 }}</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{ $content['moment']->isi_moment_2 }}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="animate-box">
                                <div class="timeline-badge" style="background-image:url({{url('assets/template1/images/couple-1.jpg')}});"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">{{ $content['moment']->judul_moment_3 }}</h3>
                                        <span class="date">{{ $content['moment']->tanggal_moment_3 }}</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{ $content['moment']->isi_moment_3 }}</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-gallery" class="fh5co-section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <span>Our Memories</span>
                        <h2>Wedding Gallery</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="row row-bottom-padded-md">
                    <div class="col-md-12">
                        <ul id="fh5co-gallery-list">
                            <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(assets/template1/images/gallery-2.jpg); ">
                                <a href="'image/' . $slug . '/' . $content->foto_1 ?>/image/" class="color-2"></a>
                            </li>
                            <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(assets/template1/images/gallery-3.jpg); ">
                                <a href="'image/' . $slug . '/' . $content->foto_2 ?>/image/" class="color-3"></a>
                            </li>
                            <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(assets/template1/images/gallery-4.jpg); ">
                                <a href="'image/' . $slug . '/' . $content->foto_3 ?>/image/" class="color-4"></a>
                            </li>

                            <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(assets/template1/images/gallery-5.jpg); ">
                                <a href="'image/' . $slug . '/' . $content->foto_4 ?>/image/" class="color-3"></a>
                            </li>
                            <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(assets/template1/images/gallery-6.jpg); ">
                                <a href="'image/' . $slug . '/' . $content->foto_5 ?>" class="color-4"></a>
                            </li>

                            <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(assets/template1/images/gallery-7.jpg); ">
                                <a href="'image/' . $slug . '/' . $content->foto_6 ?>" class="color-4"></a>
                            </li>

                            <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(assets/template1/images/gallery-8.jpg); ">
                                <a href="'image/' . $slug . '/' . $content->foto_7 ?>" class="color-5"></a>
                            </li>
                            <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(assets/template1/images/gallery-9.jpg); ">
                                <a href="'image/' . $slug . '/' . $content->foto_8 ?>" class="color-6"></a>
                            </li>
                            <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(assets/template1/images/gallery-9.jpg); ">
                                <a href="'image/' . $slug . '/' . $content->foto_9 ?>" class="color-7"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-testimonial">
            <div class="container">
                <div class="row">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                            <span>Best Wishes</span>
                            <h2>Friends Wishes</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box">
                            <div class="wrap-testimony">
                                <div class="owl-carousel-fullwidth">
                                    <?php foreach ($content['ucapan'] as $data_ucapan) { ?>
                                        <div class="item">
                                            <div class="testimony-slide active text-center">
                                                <span>{{ $data_ucapan->pengirim }}</span>
                                                <blockquote>
                                                    <p>"{{ $data_ucapan->ucapan }}"</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-started" class="fh5co-bg" style="background-image:url('{{ url('/upload/undangan/'.$content['config']->slug_undangan.'/config/'.$content['config']->background_3) }}');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Are You Attending?</h2>
                        <p>Please Fill-up the form to notify you that you're attending. Thanks.</p>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="col-md-10 col-md-offset-1">
                        <form class="form-inline">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Name</label>
                                    <input type="name" class="form-control" id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="ucapan" class="sr-only">Ucapan</label>
                                    <input type="textarea" class="form-control" placeholder="Ucapan">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <button type="submit" class="btn btn-default btn-block">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="{{url('assets/template1/js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{url('assets/template1/js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{url('assets/template1/js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{url('assets/template1/js/jquery.waypoints.min.js')}}"></script>
    <!-- Carousel -->
    <script src="{{url('assets/template1/js/owl.carousel.min.js')}}"></script>
    <!-- countTo -->
    <script src="{{url('assets/template1/js/jquery.countTo.js')}}"></script>

    <!-- Stellar -->
    <script src="{{url('assets/template1/js/jquery.stellar.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{url('assets/template1/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('assets/template1/js/magnific-popup-options.js')}}"></script>

    <!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js')}}"></script> -->
    <script src="{{url('assets/template1/js/simplyCountdown.js')}}"></script>
    <!-- Main -->
    <script src="{{url('assets/template1/js/main.js')}}"></script>

    <script>
        var d = new Date('{{ $content["resepsi"]->tanggal_resepsi }}');

        // default example
        simplyCountdown('.simply-countdown-one', {
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate()
        });

        //jQuery example
        $('#simply-countdown-losange').simplyCountdown({
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate(),
            enableUtc: false
        });
    </script>

</body>

</html>