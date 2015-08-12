<!DOCTYPE html>
<!--[if lt IE 7]> <html dir="ltr" lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->

<!-- BEGIN head -->
<head>

	<!--Meta Tags-->
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
	<!--Title-->
	<title>Organic Shop - A Premium HTML Template for Ecommerce Websites</title>

	<!--Stylesheets-->
	<link rel="stylesheet" href="templates/asset/css/superfish.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="templates/asset/css/prettyPhoto.css" type="text/css" media="all" />
	<link type="text/css" href="templates/asset/css/jqueryui/jquery.ui.datepicker.css" rel="stylesheet" />
	<link rel="stylesheet" href="templates/asset/style.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="templates/asset/css/responsive.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="templates/asset/css/flexslider.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="templates/asset/css/colours/green.css" type="text/css"  media="all" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>

	<!--Favicon-->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

	<!--JavaScript-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js'></script>
	<script type='text/javascript' src='templates/asset/js/jquery.prettyPhoto.js'></script>
	<script type="text/javascript" src="templates/asset/js/superfish.js"></script>
	<script type="text/javascript" src="templates/asset/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="templates/asset/js/scripts.js"></script>
	
	<!--[if (gte IE 6)&(lte IE 8)]>
		<script type="text/javascript" src="js/selectivizr-min.js"></script>
	<![endif]-->

<!-- END head -->
</head>

<!-- BEGIN body -->
<body>
	
	<!-- BEGIN .wrapper -->
	<div class="wrapper">
		
		<!-- BEGIN .topbar -->
		<div class="topbar clearfix">
			
			<!-- BEGIN .social-icons -->
			<ul class="social-icons">
				<li><a href="#"><span id="twitter_icon"></span></a></li>
				<li><a href="#"><span id="facebook_icon"></span></a></li>
				<li><a href="#"><span id="googleplus_icon"></span></a></li>
				<li><a href="#"><span id="skype_icon"></span></a></li>
				<li><a href="#"><span id="flickr_icon"></span></a></li>
				<li><a href="#"><span id="linkedin_icon"></span></a></li>
				<li><a href="#"><span id="vimeo_icon"></span></a></li>
				<li><a href="#"><span id="youtube_icon"></span></a></li>
				<li><a href="#"><span id="rss_icon"></span></a></li>
			<!-- END .social-icons -->
			</ul>
			
			<!-- BEGIN .topbar-right -->
			<div class="topbar-right clearfix">
				
				<ul class="clearfix">
					<li class="checkout-icon"><a href="?module=cart&action=checkout">Checkout</a></li>
					
                    <?php
                    if($_SESSION['user_id'])
                    {
                        ?>
                    <li class="myaccount-icon"><a href="?module=users&action=account">Account</a></li>
                    <li class="myaccount-icon"><a href="?module=users&action=logout">Logout</a></li>
                        <?php
                    } else {
                        ?>
                    <li class="myaccount-icon"><a href="?module=users&action=login">Login</a></li>
                    <li class="myaccount-icon"><a href="?module=users&action=register">Register</a></li>
                        <?php
                    }
                    ?>
				</ul>
                <?php  
                if(isset($_SESSION['cart']))
                {
                    $count_cart = count($_SESSION['cart']);
                } else {
                    $count_cart = 0;
                }
                ?>
				<div class="cart-top">
					<p><a href="?module=cart"><?php echo $count_cart ?> Items</a></p>
				</div>
				
			<!-- END .topbar-right -->
			</div>
		
		<!-- END .topbar -->
		</div>
		
		<!-- BEGIN #site-title -->
		<div id="site-title">
			<a href="index.php">
				<h1>Organic <span>shop</span></h1>
			</a>
		<!-- END #site-title -->
		</div>
		
		<!-- BEGIN .main-menu-wrapper -->
		<div id="main-menu-wrapper" class="clearfix">
			
			<ul id="main-menu" class="fl">
				<li class="current_page_item"><a href="index.php">Home</a></li>
				<li><a href="products.html">Products</a>
					<ul>
						<li><a href="product-single.html">Cleansers</a></li>
						<li><a href="product-single.html">Exfoliators &amp; Masks</a></li>
						<li><a href="product-single.html">Toners</a></li>
						<li><a href="product-single.html">Moisturisers</a>
							<ul>
								<li><a href="product-single.html">Hands</a></li>
								<li><a href="product-single.html">Face</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="testimonials.html">Testimonials</a></li>
				<li><a href="typography.html">About</a>
					<ul>
						<li><a href="typography.html">Typography</a></li>
						<li><a href="js-elements.html">JS Elements</a></li>
					</ul>
				</li>
				<li><a href="contact.html">Contact</a></li>	
			</ul>
			
			<form method="get" action="#" id="menu-search" class="fr">
				<input type="text" name="s" />
			</form>
		
		<!-- END .main-menu-wrapper -->	
		</div>