<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="/favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="/fonts/icomoon/style.css">
	<link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="/css/daterangepicker.css">
	<link rel="stylesheet" href="/css/aos.css">
	<link rel="stylesheet" href="/css/style.css">


	<title>Tour Free Bootstrap Template for Travel Agency by Untree.co</title>
    <div class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="intro-wrap">
                        <h1 class="mb-5"><span class="d-block">Let's Enjoy Your</span> Trip In <span class="typed-words"></span></h1>

                        <div class="row">
                            <div class="col-12">
                                <form class="form">
                                    <div class="row mb-2">
                                        <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                                            <select name="" id="" class="form-control custom-select">
                                                <option value="">Destination</option>
                                                <option value="">Peru</option>
                                                <option value="">Japan</option>
                                                <option value="">Thailand</option>
                                                <option value="">Brazil</option>
                                                <option value="">United States</option>
                                                <option value="">Israel</option>
                                                <option value="">China</option>
                                                <option value="">Russia</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-5">
                                            <input type="text" class="form-control" name="daterange">
                                        </div>
                                        <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
                                            <input type="text" class="form-control" placeholder="# of People">
                                        </div>

                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                                            <input type="submit" class="btn btn-primary btn-block" value="Search">
                                        </div>
                                        <div class="col-lg-8">
                                            <label class="control control--checkbox mt-3">
                                                <span class="caption">Save this search</span>
                                                <input type="checkbox" checked="checked" />
                                                <div class="control__indicator"></div>
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="slides">
                        <img src="/images/hero-slider-1.jpg" alt="Image" class="img-fluid active">
                        <img src="/images/hero-slider-2.jpg" alt="Image" class="img-fluid">
                        <img src="/images/hero-slider-3.jpg" alt="Image" class="img-fluid">
                        <img src="/images/hero-slider-4.jpg" alt="Image" class="img-fluid">
                        <img src="/images/hero-slider-5.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="site-navigation">
                <a href="index.html" class="logo m-0">Tour <span class="text-primary">.</span></a>

                <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
                    <li class="active"><a href="{{route('index')}}">Home</a></li>
                    <li class="has-children">
                        <a href="#">Dropdown</a>
                        <ul class="dropdown">
                            <li><a href="{{route('elements')}}">Elements</a></li>
                            <li><a href="#">Menu One</a></li>
                            <li class="has-children">
                                <a href="#">Menu Two</a>
                                <ul class="dropdown">

                                    <li><a href="#">Sub Menu One</a></li>
                                    <li><a href="#">Sub Menu Two</a></li>
                                    <li><a href="#">Sub Menu Three</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Menu Three</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('services')}}">Services</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                </ul>

                <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>

            </div>
        </div>
    </nav>


    <div class="single-product mt-150 mb-150" >
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="{{$sanpham->img}}" alt="" width="450px" height="350px">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h2 >{{$sanpham->name}}</h2>
						<p class="single-product-pricing">Mã Tour: &ensp;{{$sanpham->matour}}
						<p >Ngày khởi hành: &ensp;<a href="">{{$sanpham->ngaykhoihanh}}</a></p>
						<p>Thời gian:&ensp;{{$sanpham->thoigiantour}}</p>
						<p>Xuất phát:&ensp;{{$sanpham->xuatphat}}</p>
						<p>Điểm du lịch:&ensp;{{$sanpham->diemdl}}</p>
						<p>Lịch trình tour:&ensp;{{$sanpham->lttour}}</p>
						<p>Giá chỉ từ:&ensp;{{number_format($sanpham->gia)}} VNĐ
                        </p>
						<p></p>
						<div class="single-product-form">
                            <p></p>
				</div>
			</div>
		</div>
	</div>
        </div>
        </div>
	<!-- end single product -->
    <br>

                                                                                <div class="site-footer">
                                                                                    <div class="inner first">
                                                                                        <div class="container">
                                                                                            <div class="row">
                                                                                                <div class="col-md-6 col-lg-4">
                                                                                                    <div class="widget">
                                                                                                        <h3 class="heading">About Tour</h3>
                                                                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                                                                                    </div>
                                                                                                    <div class="widget">
                                                                                                        <ul class="list-unstyled social">
                                                                                                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                                                                                                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                                                                                                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                                                                                                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                                                                                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                                                                                                            <li><a href="#"><span class="icon-pinterest"></span></a></li>
                                                                                                            <li><a href="#"><span class="icon-apple"></span></a></li>
                                                                                                            <li><a href="#"><span class="icon-google"></span></a></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6 col-lg-2 pl-lg-5">
                                                                                                    <div class="widget">
                                                                                                        <h3 class="heading">Pages</h3>
                                                                                                        <ul class="links list-unstyled">
                                                                                                            <li><a href="#">Blog</a></li>
                                                                                                            <li><a href="#">About</a></li>
                                                                                                            <li><a href="#">Contact</a></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6 col-lg-2">
                                                                                                    <div class="widget">
                                                                                                        <h3 class="heading">Resources</h3>
                                                                                                        <ul class="links list-unstyled">
                                                                                                            <li><a href="#">Blog</a></li>
                                                                                                            <li><a href="#">About</a></li>
                                                                                                            <li><a href="#">Contact</a></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6 col-lg-4">
                                                                                                    <div class="widget">
                                                                                                        <h3 class="heading">Contact</h3>
                                                                                                        <ul class="list-unstyled quick-info links">
                                                                                                            <li class="email"><a href="#">mail@example.com</a></li>
                                                                                                            <li class="phone"><a href="#">+1 222 212 3819</a></li>
                                                                                                            <li class="address"><a href="#">43 Raymouth Rd. Baltemoer, London 3910</a></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>



                                                                                    <div class="inner dark">
                                                                                        <div class="container">
                                                                                            <div class="row text-center">
                                                                                                <div class="col-md-8 mb-3 mb-md-0 mx-auto">
                                                                                                    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co" class="link-highlight">Untree.co</a> <!-- License information: https://untree.co/license/ -->Distributed By <a href="https://themewagon.com" target="_blank" >ThemeWagon</a>
                                                                                                    </p>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div id="overlayer"></div>
                                                                                <div class="loader">
                                                                                    <div class="spinner-border" role="status">
                                                                                        <span class="sr-only">Loading...</span>
                                                                                    </div>
                                                                                </div>
                                                                                <script src="/js/jquery-3.4.1.min.js"></script>
                                                                                <script src="/js/popper.min.js"></script>
                                                                                <script src="/js/bootstrap.min.js"></script>
                                                                                <script src="/js/owl.carousel.min.js"></script>
                                                                                <script src="/js/jquery.animateNumber.min.js"></script>
                                                                                <script src="/js/jquery.waypoints.min.js"></script>
                                                                                <script src="/js/jquery.fancybox.min.js"></script>
                                                                                <script src="/js/aos.js"></script>
                                                                                <script src="/js/moment.min.js"></script>
                                                                                <script src="/js/daterangepicker.js"></script>

                                                                                <script src="/js/typed.js"></script>
                                                                                <script>
                                                                                    $(function() {
                                                                                        var slides = $('.slides'),
                                                                                        images = slides.find('img');

                                                                                        images.each(function(i) {
                                                                                            $(this).attr('data-id', i + 1);
                                                                                        })

                                                                                        var typed = new Typed('.typed-words', {
                                                                                            strings: ["San Francisco."," Paris."," New Zealand.", " Maui.", " London."],
                                                                                            typeSpeed: 80,
                                                                                            backSpeed: 80,
                                                                                            backDelay: 4000,
                                                                                            startDelay: 1000,
                                                                                            loop: true,
                                                                                            showCursor: true,
                                                                                            preStringTyped: (arrayPos, self) => {
                                                                                                arrayPos++;
                                                                                                console.log(arrayPos);
                                                                                                $('.slides img').removeClass('active');
                                                                                                $('.slides img[data-id="'+arrayPos+'"]').addClass('active');
                                                                                            }

                                                                                        });
                                                                                    })
                                                                                </script>

                                                                                <script src="/js/custom.js"></script>


