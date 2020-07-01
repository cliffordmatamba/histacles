<!DOCTYPE html>
<html lang="zxx">
<!-- index-3.html 02:57  -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <title>JUXBYCRYPT </title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font  -->     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i|Roboto:400,400i,500,500i,700,700i" rel="stylesheet"> 
    <!-- icofont icon -->
    <link rel="stylesheet" href="assets/css/icofont.css">	
    <!-- font awesome icon -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">	
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
	<!--- meanmenu Css-->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" media="all" />	
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- venobox -->
    <link rel="stylesheet" href="assets/venobox/css/venobox.css" />	
    <!-- Style CSS --> 
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive  CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body class="home-3">

	<!-- START PRELOADER -->
	<div id="page-preloader">
		<div class="theme-loader">JUXBYCRYPT</div>
	</div>
	<!-- END PRELOADER --> 
	
	<!-- START HEADER SECTION -->
	<header class="main-header header-3">
		<!-- START TOP AREA -->
		<div class="top-area">
			<div class="auto-container">
				<div class="row">
					<div class="col-12 text-center p-3">				
						<p>Welcome to Juxbycrypt portfolio - </p><p><a href="login/login.html">Login</a> & <a href="#">Register</a></p>
					</div> 
					<!-- end col -->
				</div>
			</div>
		</div>
		<!-- END TOP AREA -->


	</header>
	<!-- END HEADER SECTION -->
	
	<!-- START SLIDER SECTION -->
	<section class="slider-section">
		<div class="home-slides owl-carousel owl-theme ">
			<div class="home-single-slide" data-background="assets/img/bg/slide3.jpg">
				<div class="home-slide-overlay"></div>
				<div class="home-single-slide-inner">
					<div class="auto-container">
						<div class="row">
							<div class="col-lg-6 col-md-8 col-sm-8 col-12 mx-auto text-center">
								<div class="home-single-slide-dec">
									<h2>Sync your exchange data & wallets 
</h2>
									<p>get your crypto tax reports in under 2 minutes</p>
									<div class="home-single-slide-button">
										<a href="#" class="btn-style btn-filled">Learn More</a>
										<a href="login/login.html" class="btn-style btn-border">Start sync </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end single slider -->
			<div class="home-single-slide" data-background="assets/img/bg/slide2.jpg">
				<div class="home-slide-overlay"></div>
				<div class="home-single-slide-inner">
					<div class="auto-container">
						<div class="row">
							<div class="col-lg-6 col-md-8 col-sm-8 col-12 mx-auto text-center">
								<div class="home-single-slide-dec">
									<h2>Juxbycrypt  - The Best Cryptocurrency Portfolio Tracker  </h2>
									<p>User-Friendly</p>
									<div class="home-single-slide-button">
										<a href="#" class="btn-style btn-border">Start Tracking</a>
										<a href="#" class="btn-style btn-filled">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end single slider -->
			<div class="home-single-slide" data-background="assets/img/bg/slide4.jpg">
				<div class="home-slide-overlay"></div>
				<div class="home-single-slide-inner">
					<div class="auto-container">
						<div class="row">
							<div class="col-lg-6 col-md-8 col-sm-8 col-12 mx-auto text-center">
								<div class="home-single-slide-dec">
									<h2> Preview your capital gains free. 300+ exchanges / wallets. Live chat support.</h2>
									<p>300+ exchanges / wallets. Live chat support.</p>
									<div class="home-single-slide-button">
										<a href="#" class="btn-style btn-filled">Contact Us</a>
										<a href="#" class="btn-style btn-border">View More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end single slider -->
		</div>
	</section>
	<!-- END SLIDER SECTION  -->



	
	<!-- START PRICER SECTION -->
    <section id="counter" class="section-padding section-back-image overlay" data-background="assets/img/bg/processbg.jpg">
        <div class="container">
			<div class="row">	 
				<div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
					<div class="calltoaction-two-wrap mb-4">
						<h4 class="text-uppercase mb-4">Currency Calculator</h4>
						<p>Enter the amount to be converted in the box to the left of the currency and press the "convert" button. To show Bitcoins and just one other currency click on any other currency.
						</p>
					</div>
				</div>
				<!--- END COL -->	 
				<div class="col-lg-6 col-md-6 col-12">
					<div class="cal-convertor">
						<script>
						baseUrl = "https://widgets.cryptocompare.com/";
						var scripts = document.getElementsByTagName("script");
						var embedder = scripts[ scripts.length - 1 ];
						var cccTheme = {"General":{"background":"","borderColor":"","headerText":""},"Form":{"inputBackground":"#fff","borderColor":"","labelColor":"#fff","inputColor":"#333","labelFrom":"Put Amount","labelTo":"Get Amount"}};
						(function (){
						var appName = encodeURIComponent(window.location.hostname);
						if(appName==""){appName="local";}
						var s = document.createElement("script");
						s.type = "text/javascript";
						s.async = true;
						var theUrl = baseUrl+'serve/v1/coin/converter?fsym=BTC&tsyms=USD,EUR,CNY,GBP';
						s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
						embedder.parentNode.appendChild(s);
						})();
						</script>
					</div>
					<a href="#" class="mt-3 btn-style btn-filled btn-filled-2">Buy Now!</a>
				</div>
				<!--- END COL -->
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END PRICER SECTION -->

  
    
    <!-- START MARKET NEWS SECTION -->
	<section id="mnews" class="section-padding bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<div class="section-title">
						<h5>daily data</h5>
						<h3>Market <span>News</span></h3>
					</div>
				</div>
			</div>
			<!-- end section title -->
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-5">
					<div class="cal-convertor">
						<script>
							baseUrl = "https://widgets.cryptocompare.com/";
							var scripts = document.getElementsByTagName("script");
							var embedder = scripts[ scripts.length - 1 ];
							var cccTheme = {"General":{"borderColor":"#f7921a"}};
							(function (){
							var appName = encodeURIComponent(window.location.hostname);
							if(appName==""){appName="local";}
							var s = document.createElement("script");
							s.type = "text/javascript";
							s.async = true;
							var theUrl = baseUrl+'serve/v1/coin/histo_week?fsym=BTC&tsym=USD';
							s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
							embedder.parentNode.appendChild(s);
							})();
						</script>
					</div>
				</div>
				<!-- end col -->
				<div class="col-lg-6 col-md-6 col-12 pl-lg-5 pl-md-5 pl-sm-2 pl-2">
					<div class="ser-page-into">
						<p>Although the Coronavirus pandemic has led many brick and mortar industries to close operations, cryptocurrency exchanges seem to have had their best month in a long time. 

According to an exchange report released by CryptoCompare, Bitcoin (BTC) trading volume saw record-breaking numbers throughout the month.</p>
						<p>The March 13 market crash that brought the Bitcoin price from $8,000 to a low of $3,800 in 24 hours registered the biggest day for crypto in terms of trading volumes registered at Bitcoin spot markets. On March 13 alone, total daily volumes hit an all-time high of $75.9 billion.</p>
					</div>
					<div class="ser-page-into">
						<ul>
							<li><i class="icofont icofont-ui-press"></i> <strong>Bitcoin-</strong>  Still Up 27% This Year Despite Dismal June Performance.</li>
							<li><i class="icofont icofont-ui-press"></i> <strong>Coin-</strong> Coin Metrics Offers More Rigorous Measure of Crypto Market Supply.</li>
							<li><i class="icofont icofont-ui-press"></i> <strong>Ethereum -</strong> Developers considered new fee model as gas costs climb  .</li>
							<li><i class="icofont icofont-ui-press"></i> <strong>Hacker  -</strong> Drains 500k from DEFI liquidity provider balance .</li>
						</ul>
					</div>
				</div>
				<!-- end col -->
			</div>
			<!-- end row-->
		</div>
	</section>
    <!-- END MARKET NEWS SECTION -->


	<!-- START CALLTOACTION SECTION -->
	<section id="calltoaction" class="calltoaction-padding section-padding mt-3 bg-theme">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
					<div class="calltoaction-two-wrap">
						<h4>Download Juxbycrypt?</h4>
						<p>Track prices & view historical data for 5000+ coins: Bitcoin, Etherum, xrp and others. Keep track of your trade and transactions and stay up to date with latest crpyto news. Download Our Mobile App. Create Your portfolio.</p>
					</div>
				</div>
				<!-- end col -->
				<div class="col-lg-4 col-md-4 col-sm-12 col-12 text-lg-right text-md-right text-sm-left text-left wow fadeInDown">
					<a href="#" class="btn-style btn-border btn-border-3">Download</a>
				</div>
				<!-- end col -->
			</div>
			<!-- end row-->
		</div>
	</section>
    <!-- END CALLTOACTION SECTION -->





    <!-- START FOOTER -->
    <footer class="footer-2">
        <!--Footer top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="footer-logo-h3 col-12 p-0 wow fadeInDown">
                            <a href="index-2.html">
								<div class="footer-logo-h3-icon">
                                 <i class="fab fa-gg-circle"></i>
                                </div>
								<div class="footer-logo-h3-text">
                                    <h3>Juxbycrypt </h3>
                                    <p>Cryptocurrency portfolio</p>
                                </div>
							</a>
                        	<p>Sync your exchange data & wallets and get your crypto tax reports in under 2 minutes! Preview your capital gains free. 300+ exchanges / wallets. Live chat support. Best price guarantee. Margin & Futures trades.
.</p>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>
              

        <!--Footer Bottom -->
        <div class="copyright">
            <div class="auto-container">
                <div class="row">
                    <div class="col-12 copyright-text text-center">
                        <p><a>Juxbycrypt</a></p>
                    </div>
                </div>
            </div>
        </div>
		
    </footer>
    <!-- END FOOTER -->
	
	<!-- Latest jQuery -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <!-- popper js -->
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- meanmenu min js  -->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- Sticky JS -->
    <script src="assets/js/jquery.sticky.js"></script>
    <!-- owl-carousel min js  -->
    <script src="assets/owlcarousel/js/owl.carousel.min.js"></script>	
    <!-- jquery appear js  -->
    <script src="assets/js/jquery.appear.js"></script>
    <!-- countTo js -->
    <script src="assets/js/jquery.inview.min.js"></script>
    <!-- venobox js -->
    <script src="assets/venobox/js/venobox.min.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <!-- scroll to top js -->
    <script src="assets/js/scrolltopcontrol.js"></script>
    <!-- WOW - Reveal Animations When You Scroll -->
    <script src="assets/js/wow.min.js"></script>
    <!-- scripts js -->
    <script src="assets/js/scripts.js"></script>
</body>


<!-- index-3.html 04:54  -->
</html>
