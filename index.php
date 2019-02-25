<?php    
if(isset($_POST['submit']))
{


$name = 'name';
$email = 'email';
$to_email = 'Sachin.yadavk98@gmail.com';
$subject = 'subject';
$message = 'message';
$headers = 'From:'.$_POST['email'];
$msg =  "Hi Sir new User For Digital Markteting : 
Name : ". $_POST['name']. " ,
Email : ".$_POST["email"]." ,
Mobile No: ".$_POST["phon"]." ,
Message: ".$_POST["message"]." 
wants to contact";
$send = mail($to_email,$subject,$msg,$headers);

if($send)
{
	$massage =  '<h4 class="text-center" style="color:green;    font-size: 13px;">Your Messege has been sent successfully.We Will Contact you as soon as possible</h4>';
	//$msg = "You are register successfully";
}else{
	$massage =  '<h4 class="text-center" style="color:green">Your Messege has not been sent successfully.Please try again."</h4>';
	//$msg = "Your Messege has not been sent successfully.Please try again.";
}
}

?>


<!doctype html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Appico is a app landing page. Where include 6+ landing page template.">
        <meta name="author" content="WowThemez">

        <title>Python Training-Softcrayons Tech Solution</title>
<link href="img/favicon.ico" rel="shortcut icon" type="image/png">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		
		<!-- OWL-Carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="css/main.css">
		<!-- <link rel="stylesheet" href="css/color.css"> -->
		<!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target="#navmenu" data-offset="70">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id='preloader' >
            <div class='loader' >
               <img src="img/preloader.svg" width="60" alt="">
            </div>
        </div><!-- Preloader -->

        <header id="header" class="header-section">
            <div class="container">
                <nav class="navbar">
                    <a href="http://softcrayons.com/Python-training/index.php" class="navbar-brand"><img src="img/logo.png" alt="Astra" style="height: 63px;"></a>
					<div class="col-sm-4"><h3><a href="tel:+91 85450 12345"><i class="fa fa-phone"></i> &nbsp;&nbsp;+91 85450 12345</a></h3></div>
					<div class="col-sm-4"><h3><a href="mailto:info@softcrayons.com" style="text-decoration:none"><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp; info@softcrayons.com </a></h3></div>
                    <!--<div class="d-flex menu-wrap">
                       <div id="navmenu" class="mainmenu">
                            <ul class="nav">
                                <li ><a data-scroll class="nav-link active" href="#home">Home <span class="sr-only">(current)</span></a></li>
                                <li><a data-scroll class="nav-link" href="#about">About</a></li>
                                <li><a data-scroll class="nav-link" href="#features">Features</a></li>
                                <li><a data-scroll class="nav-link" href="#screenshots">Screenshots</a></li>
                                <li><a data-scroll class="nav-link" href="#pricing">Pricing</a></li>
                                <li><a data-scroll class="nav-link" href="#reviews">Reviews</a></li>
                                <li><a data-scroll class="nav-link" href="#blog">Blog</a></li>
                                <li><a data-scroll class="nav-link" href="#download">Download</a></li>
                                <li><a data-scroll class="nav-link" href="#subscribe">Subscribe</a></li> 
                            </ul>
                       </div>
                    </div>-->
                </nav>
            </div>
		</header> <!-- Header Section -->

        <section id="home" class="hero-section d-flex align-items-center">
			<div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
    					<div class="hero-content">
    						<h1>Python Course<br>makes your life better</h1>
    						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived mobile app not only five business more centuries.</p>
    						<a href="#features" class="hero_btn"><i class="fa fa-books"></i>  Features</a>
    					</div>
    				</div>
                    <div class="col-lg-4 offset-lg-2 pt">
                        <div class="hero-moc text-right">
                            <!-- <img data-tilt src="img/hero-moc.png" alt="Hero Mockup"> -->
							
				<h3 class="text-center" style="padding: 21px 0px;">Book Your Demo Class Now</h3>
				                                                                              <?php
										if(isset($massage))
										{
										?>
										<span><?php echo $massage;?></span>
										<?php
										}
										?>
                <form class="form-group" method="post" action="">
					<div class="form-group"><input type="text" name="name" class="form-control" placeholder="Name" required></div>
					<div class="form-group"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
					<div class="form-group"><input type="tel" name="phon" class="form-control" placeholder="Phone" required></div>
					
					<div class="form-group"><textarea type="message" name="message" class="form-control" placeholder="Message" required></textarea></div>
					<div class="col-sm-12"><input type="submit" name="submit" class="btn btn-danger"></div>
                </form>
				<span style="font-size: 13px;">We will not share your email. Read our <a href="">privacy policy</a>.</span>
              
                        </div>
                    </div>
                </div>
			</div>
		</section><!-- /.hero-section -->

		<section class="promo_section padding">
			<div class="container">
                <div class="row promo-items">
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-box">
                            <div class="promo-icon">
                                <i class="icon-mobile"></i>
                            </div>
                            <h3 class="title">Why Choose Us ?</h3>
                            <p class="description" style="text-align:justify;">SoftCrayons Tech Solutions Pvt. Ltd. is one of the well-known IT organizations in Ghaziabad. We deliver our services world-wide along with local areas like Vashundhara, Noida, and Ghaziabad in various sectors like web development, software development, digital marketing, App development, and Professional training and certification. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-box">
                            <div class="promo-icon">
                                <i class="icon-tools"></i>
                            </div>
                            <h3 class="title">Clean Design</h3>
                            <p class="description">Lorem ipsum dolor sit amet consectetur ipsum dolor sit amet consectetur adipisicing elit Quisquam eveniet.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 xs-padding">
                        <div class="promo-box">
                            <div class="promo-icon">
                                <i class="icon-linegraph"></i>
                            </div>
                            <h3 class="title">Pixel Perfect</h3>
                            <p class="description">Lorem ipsum dolor sit amet consectetur ipsum dolor sit amet consectetur adipisicing elit Quisquam eveniet.</p>
                        </div>
                    </div>
                </div><!-- /.promo-items -->
			</div>
		</section><!-- /.promo_section -->

		<section id="about" class="about-section padding">
		    <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-mockup">
                           <iframe width="100%" height="315" src="https://www.youtube.com/embed/_Z5G1NoDwJk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 xs-padding">
                        <div class="about-content">
                            <h2>What is Python (Programming)?</h2>
                            <p>Python is a general-purpose language. It has wide range of applications from Web development (like: Django and Bottle), scientific and mathematical computing (Orange, SymPy, NumPy) to desktop graphical user Interfaces (Pygame, Panda3D).</p>
                            <ul class="list-check mt-30 mb-30"><h2>Applications of Python</h2>
                                <li>Web Applications.</li>
                                <li>Scientific and Numeric Computing.</li>
                                <li>Creating software Prototypes.</li>
                                <li>Good Language to Teach Programming.</li>
                            </ul>
                            <a href="#Join" class="app_btn">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
		</section><!-- /.about-section -->

		<section id="features" class="feature-section padding">
            <div class="container">
               <div class="section-heading align-center mb-40">
                   <h2>Awesome Features</h2>
                   <p>Before getting started, lets get familiarized with the language first.</p>
               </div><!-- /.section-heading -->
               <div class="feature-wrap row">
                    <div class="col-lg-4 col-md-6 xs-padding">
                        <ul class="feature-list feature-left text-right xs-no-padding">
                            <li class="feature-box mb-40 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="800ms">
                                <h4>A simple language which is easier to learn</h4>
                                <div class="feature-content">
                                    <p>Python has a very simple and elegant syntax. It's much easier to read and write Python programs compared to other languages like: C++, Java, C#. Python makes programming fun.</p>
                                    <div class="feature-icon icon-mobile"></div>
                                </div>
                            </li>
                            <li class="feature-box mb-40 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="800ms">
                                <h4>Free and open-source</h4>
                                <div class="feature-content">
                                    <p>You can freely use and distribute Python, even for commercial use. Not only can you use and distribute softwares written in it, you can even make changes to the Python's source code.</p>
                                    <div class="feature-icon icon-browser"></div>
                                </div>
                            </li>
                            <li class="feature-box wow fadeInRight" data-wow-delay="400ms" data-wow-duration="800ms">
                                <h4>Portability</h4>
                                <div class="feature-content">
                                    <p>You can move Python programs from one platform to another, and run it without any changes.</p>
                                    <div class="feature-icon icon-global"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 d-lg-block d-none wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
                        <img src="img/feature-moc.png" alt="Service" class="feature-moc">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <ul class="feature-list xs-no-padding">
                            <li class="feature-box mb-40 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="800ms">
                                <h4>A high-level, interpreted language</h4>
                                <div class="feature-content">
                                    <p>Unlike C/C++, you don't have to worry about daunting tasks like memory management, garbage collection and so on.Likewise, when you run Python code, it automatically converts your code to the language your computer understands. </p>
                                    <div class="feature-icon icon-hotairballoon"></div>
                                </div>
                            </li>
                            <li class="feature-box mb-40 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="800ms">
                                <h4>Large standard libraries to solve common tasks</h4>
                                <div class="feature-content">
                                    <p>Python has a number of standard libraries which makes life of a programmer much easier since you don't have to write all the code yourself.</p>
                                    <div class="feature-icon icon-happy"></div>
                                </div>
                            </li>
                            <li class="feature-box wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="800ms">
                                <h4>Object-oriented</h4>
                                <div class="feature-content">
                                    <p>Everything in Python is an object. Object oriented programming (OOP) helps you solve a complex problem intuitively.</p>
                                    <div class="feature-icon icon-chat"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- feature-section 
        <section id="screenshots" class="screenshots-section bd-bottom bg-grey padding">
		    <div class="container">
                <div class="section-heading align-center mb-60">
                    <h2>Screenshots</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div><!-- /.section-heading 
		         <div class="swiper-container">
                    <div class="mobile-mock">
                        <div class="screen"></div>
                        <div class="circle"></div>
                    </div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                        	<img class="w-100" src="img/screenshot-1.jpg" alt="screenshot">
                        </div>
                        <div class="swiper-slide">
                        	<img class="w-100" src="img/screenshot-2.jpg" alt="screenshot">
                        </div>
                        <div class="swiper-slide">
                        	<img class="w-100" src="img/screenshot-3.jpg" alt="screenshot">
                        </div>
                        <div class="swiper-slide">
                        	<img class="w-100" src="img/screenshot-4.jpg" alt="screenshot">
                        </div>
                        <div class="swiper-slide">
                        	<img class="w-100" src="img/screenshot-5.jpg" alt="screenshot">
                        </div>
                        <div class="swiper-slide">
                        	<img class="w-100" src="img/screenshot-6.jpg" alt="screenshot">
                        </div>
                        <div class="swiper-slide">
                        	<img class="w-100" src="img/screenshot-7.jpg" alt="screenshot">
                        </div>
                        <div class="swiper-slide">
                        	<img class="w-100" src="img/screenshot-8.jpg" alt="screenshot">
                        </div>
                    </div>
                    <!-- Carousel Arrows
				    <div class="swiper-next"><i class=" arrow_carrot-right"></i></div>
				    <div class="swiper-prev"><i class=" arrow_carrot-left"></i></div>
                </div>
		    </div>
		</section> Screenshots Section -->

        <div class="video-section align-center">
			<div class="container">
				<div class="video-content">
					<a  href="https://youtu.be/5PSNL1qE6VY" data-vbtype="video" class="img_popup play-button">
                        <span class="fa fa-play"></span>
                        <div class="ripple"></div>
                    </a>
				</div>
			</div>
		</div><!-- /.video_section -->

        <section id="pricing" class="pricing-section padding bg-grey">
            <div class="container">
                <div class="heading align-center mb-40">
                    <h2>Python Course</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                </div><!-- /.heading -->
                <div class="row pricing-items">
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="pricing-table mid-table wow flipInY" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <div class="pricing-head">
                                <img src="img/python.jpg" style="width:100%;height:150px;">
                            </div><!-- /.pricing_head -->
                            <ul class="pricing-list"><h5>Core and Advance Python</h5>
                                <li>Basics</li>
                                <li>Functions</li>
                                <li>OOPS Concepts</li>
                                <li>Advanced Topics</li>
                            </ul>
                            
                        </div>
                    </div><!-- pricing 1 -->
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="pricing-table mid-table wow flipInY" data-wow-delay="200ms" data-wow-duration="1000ms">
                            <div class="pricing-head">
                                <img src="img/python2.jpg" style="width:100%;height:150px;">
                            </div><!-- /.pricing_head -->
                            <ul class="pricing-list"><h5>Python With Django</h5>
                                <li>Basics</li>
                                <li>URL</li>
                                <li>MVC</li>
                                <li>Form Security</li>
                            </ul>
                            
                        </div>
                    </div>
					 <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="pricing-table mid-table wow flipInY" data-wow-delay="500ms" data-wow-duration="1000ms">
                            <div class="pricing-head">
                              <img src="img/python4.jpg" style="width:100%;height:150px;">
                            </div><!-- /.pricing_head -->
                            <ul class="pricing-list"><h5>Python With Data Analysis</h5>
                                <li>Basics</li>
                                <li>Numpy</li>
                                <li>Pandas</li>
                                <li>Matplotlib</li>
                            </ul>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="pricing-table mid-table wow flipInY" data-wow-delay="400ms" data-wow-duration="1000ms">
                            <div class="pricing-head">
                                <img src="img/python3.jpg" style="width:100%;height:150px;">
                            </div><!-- /.pricing_head -->
                            <ul class="pricing-list"><h5>Python With Machine Learning</h5>
                                <li>Introductions</li>
                                <li>Supervise Learning</li>
                                <li>Unsupervise Learning</li>
                                <li>NLP</li>
                            </ul>
                            
                        </div>
                    </div>
                   
                </div>
            </div>
        </section><!-- /.pricing_section -->

        <section id="reviews" class="review-section padding">
            <div class="container">
                <div class="heading align-center mb-40">
                    <h2>User Reviews</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                </div><!-- /.heading -->
                <div id="review-carousel" class="review-carousel owl-carousel">
                    <div class="review-item">
                        <div class="review-thumb">
                           <img src="img/testi-1.jpg" alt="thumb">
                        </div>
                        <div class="review-content">
                            <h3>Michel Brown</h3>
                            <ul class="rattings">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <div class="review-text">
                                <p>"There are design companies, and then there are user experience design interface design. navato is the best choice for app developers"</p>
                            </div>
                        </div>
                    </div><!-- /.review-item -->
                    <div class="review-item">
                        <div class="review-thumb">
                           <img src="img/testi-2.jpg" alt="thumb">
                        </div>
                        <div class="review-content">
                            <h3>Angelina Rose</h3>
                            <ul class="rattings">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <div class="review-text">
                                <p>"There are design companies, and then there are user experience design interface design. navato is the best choice for app developers"</p>
                            </div>
                        </div>
                    </div><!-- /.review-item -->
                    <div class="review-item">
                        <div class="review-thumb">
                           <img src="img/testi-3.jpg" alt="thumb">
                        </div>
                        <div class="review-content">
                            <h3>Jonathan Smith</h3>
                            <ul class="rattings">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <div class="review-text">
                                <p>"There are design companies, and then there are user experience design interface design. navato is the best choice for app developers"</p>
                            </div>
                        </div>
                    </div><!-- /.review-item -->
                    <div class="review-item">
                        <div class="review-thumb">
                           <img src="img/testi-4.jpg" alt="thumb">
                        </div>
                        <div class="review-content">
                            <h3>Veera Pamela</h3>
                            <ul class="rattings">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <div class="review-text">
                                <p>"There are design companies, and then there are user experience design interface design. navato is the best choice for app developers"</p>
                            </div>
                        </div>
                    </div><!-- /.review-item -->
                </div>
            </div>
        </section><!-- /.review-section -->

       
        <section id="download" class="download-section padding">
            <div class="container">
                <div class="row download-content">
                    
					<div  class="col-lg-4 offset-8"><h3  id="Join" class="text-center" style="padding: 21px 0px;color: #fece3c;font-size: 23px;">Book Your Demo Class Now</h3>
						 <form class="form-group" method="post" action="">
					<div class="form-group"><input type="text" name="name" class="form-control" placeholder="Name" required></div>
					<div class="form-group"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
					<div class="form-group"><input type="tel" name="phon" class="form-control" placeholder="Phone" required></div>
					
					<div class="form-group"><textarea type="message" name="message" class="form-control" placeholder="Message" required></textarea></div>
					<div class="col-sm-12"><input type="submit" name="submit" class="btn btn-danger"></div>
                </form>
				<span style="font-size: 13px;color:#fff">We will not share your email. Read our <a href="" style="color:black">privacy policy</a>.</span>
					</div>
                </div><!-- /.download-content -->
            </div>
        </section><!-- /.download-section -->

        <div id="subscribe" class="subscribe-section">
       		<div class="subscribe-wrapper">
       			<div class="container">
					<div class="col-lg-12 hh">
						<div class="col-lg-6">
							<h2 class="">Get In Touch</h2>
							<p class="">693, Sector-14A, Opposite <br>
							Sahibabad Sabji Mandi,<br>Vasundhara, Ghaziabad(U.P.) 201012</p>
							<p >+91 85450-12345 </p>
							<p class="text-light"><a class=""  href="mailto:info@softcrayons.com"> info@softcrayons.com </a></p>
							<p class="text-light"><a href="http://softcrayons.com/" class="" target="_blank"> www.softcrayons.com </a></p>
						</div>
						<div class="col-lg-6">
							<ul class=" social-link"><h2 class="">Follow US</h2><br><br><br>
								 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
								 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
								 <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								 <li><a href="#"><i class="fa fa-instagram"></i></a></li>
								 <li><a href="#"><i class="fa fa-skype"></i></a></li>
								 <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul><!-- /.social-link -->
						</div>
					</div>
				</div>
       		</div><!-- /.subscribe-wrapper -->
        </div><!-- /.subscribe-section -->

		<footer class="footer-section">
			<div class="container">
				<p class="text-center">&copy; 2019 Softcrayons Tech Solution Pvt Ltd.All Rights Reserved</p>
			</div>
		</footer><!-- /.footer-section -->

		<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+918545012345",
            call_to_action: "Whats-app Me ",
            position: "right",
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
		<!-- jQuery Lib -->
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/vendor/bootstrap.min.js"></script>
        <!-- Tether JS -->
		<script src="js/vendor/tether.min.js"></script>
		<!-- OWL-Carousel JS -->
		<script src="js/vendor/owl.carousel.min.js"></script>
		<!-- Smooth Scroll JS -->
		<script src="js/vendor/smooth-scroll.min.js"></script>
		<!-- venobox JS -->
		<script src="js/vendor/venobox.min.js"></script>
		<!-- Ajaxchimp JS -->
		<script src="js/vendor/jquery.ajaxchimp.min.js"></script>
        <!-- Swiper JS -->
		<script src="js/vendor/swiper.min.js"></script>
        <!-- wow JS -->
        <script src="js/vendor/wow.min.js"></script>
        <!-- Tilt JS -->
        <script src="js/vendor/tilt.jquery.min.js"></script>
        <!-- Slicknav JS -->
        <script src="js/vendor/jquery.slicknav.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
    </body>

<!-- Mirrored from wowthemez.com/templates/appico/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jan 2019 11:33:06 GMT -->
</html>





