<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Organize Plus Cleaning</title>
    <link rel="stylesheet" type="text/css" href="assets/css/glider.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="assets/css/boot.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="container-fluid flex wrap-footer">
		<div class="col-6 bg-green m-none"></div>
		<div class="col-6 flex bg-blue link-icon right">
			<div class="padding-right">
			<a href="" class="fab fa-instagram" title="Instagram"></a>
			<a href="" class="fab fa-facebook-square" title="Facebook"></a>
			<a href="" class="icon-end-phone" title="Telefone"><i class="fas fa-phone-alt"></i> <span>470-263-6315</span></a>
		</div>
		</div>
	</div>
	<header class="container-fluid flex header-top aling-cente">
		<div class="logo-box">
			<a href=""><img src="assets/images/logo.png" alt="Organize Plus Cleaning" title="Organize Plus Cleaning" /></a>
		</div>
        <div class="box-mobile-nav transition">
        	<i class="fas fa-bars"></i>
        </div>
		<div class="nav">
			<ul class="flex right">
				<div class="box-mobile-nav transition">
		        	<i class="fas fa-bars"></i>
		        </div>
				<li><a href="/" title="Home">Home</a></li>
				<li><a href="/service" title="Services">Services</a></li>
				<li><a href="/Blog" title="Blog">Blog</a></li>
				<li><a href="/whyus" title="Why Us">Why Us</a></li>
				<li><a href="/contact" title="Contact Us">Contact Us</a></li>
			</ul>
		</div>
	</header>
    <!-- end header -->

    <main class="container-fluid">
    	<section class="col-12 splide box-slide">
            <img src="assets/images/banner.jpg" alt="" title="">
    	</section>
    	<!-- end slide -->

    	<section class="col-12 m-bottom">
    		<div class="content">
	    		<header class="header-title">
	    			<h1 class="font-mobile">HOUSE CLEANING & ORGANIZING SERVICES</h1>
	    		</header>
	    		<section class=" glider-contain  multiple">
                     <div class=" glider-track glider" style="width: 100%">
	    			<?php for ($i=1; $i < 12; $i++) { ?>    				
	    			<div class="card  card-bottom col-4 flex flex-center">
	    				<div class="box-image m-right position-relative flex flex-center aling-cente position-left-right-top-bottom">
	    					<div class="effect-hover-card position-absolute"><i class="fas fa-plus-square"></i></div>
	    					<img src="assets/images/image-service.jpg">
	    				</div>
	    				<a href="" class="btn-big hover-before p-bottom-b  position-absolute bg-blue fontLight transition blueHover" title="House Cleaning Services">House Cleaning Services</a>
	    			</div>
	    			<?php } ?>
                </div>
                    <button aria-label="Previous" class="glider-prev" ><i class="fas fa-chevron-left"></i></button>
                    <button aria-label="Next" class="glider-next"><i class="fas fa-chevron-right"></i></button>
	    		</section>
    		</div>
    	</section>
    </main>
    <footer class="main-footer">
    		<div class="col-12 flex wrap-footer spaceBetween">
    			<div class="col-4 card-4">
    			<h2>ORGANIZE PLUS CLEANING, LLC.</h2>
    			<span>Maria Tavares “Professional Organizer”</span>
    			<span>PH: 239.603.2279</span>
    			<span>Cape Coral, FL 33904</span>
    			<span>PH: 470.263.6315</span>
    			<span>Acworth, GA 3010</span>
    		</div>
    		<div class="col-4 card-4">
    			<h2>OFFICE HOURS</h2>
    			<span>Mon-Fri: 8:00am-5:00pm</span>
    			<span>Sat: Closed</span>
    			<span>Sun: closed</span>
    		</div>
    		<div class="col-4 card-4">
    			<h2>SOCIAL MEDIA</h2>
    			<a href="" title="Instagram" class="fab fa-instagram social-icon transition"></a>
			    <a href="" title="Facebook" class="fab fa-facebook-square social-icon transition"></a>
    		</div>
    		<div class="col-4 card-4">
    			<h2>SECURITY</h2>
    			<img src="assets/images/logo-secutity.png" alt="Site Seguro Google" title="Site Seguro Google">
    		</div>
    		</div>
    		<p>© 2018 - 2021 - Organize Plus Cleaning, LLC | House Cleaning</p>
    </footer>
	<script src="https://kit.fontawesome.com/86f5b0a58f.js" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/splide.min.js"></script>
    <script src="assets/js/glider.min.js"></script>
    <script>
          new Glider(document.querySelector('.glider'), {
        // Mobile-first defaults
        slidesToShow: 2,
        slidesToScroll: 2,
        draggable: true,
        dots: '#resp-dots',
        arrows: {
            prev: '.glider-prev',
            next: '.glider-next'
        },
        responsive: [
          {
            // screens greater than >= 775px
            breakpoint: 480,
            settings: {
              // Set to `auto` and provide item width to adjust to viewport
              slidesToShow: 1,
              slidesToScroll: 1,
              itemWidth: 150,
              duration: 0.25
            }
          },
            {
                // screens greater than >= 775px
                breakpoint: 775,
                settings: {
                    // Set to `auto` and provide item width to adjust to viewport
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    itemWidth: 150,
                    duration: 0.25
                }
            }, {
                // screens greater than >= 1024px
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    itemWidth: 150,
                    duration: 0.25
                }
            }
        ]
    });
    </script>
</body>
</html>