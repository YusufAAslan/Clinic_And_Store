<?php

    include "lang.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $data['page_title']?> | Ruya Clinics</title>
    <link href="<?= ASSETS . THEME ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= ASSETS . THEME ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= ASSETS . THEME ?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?= ASSETS . THEME ?>css/price-range.css" rel="stylesheet">
    <link href="<?= ASSETS . THEME ?>css/animate.css" rel="stylesheet">
	<link href="<?= ASSETS . THEME ?>css/main.css" rel="stylesheet">
	<link href="<?= ASSETS . THEME ?>css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?= ASSETS . THEME ?>js/html5shiv.js"></script>
    <script src="<?= ASSETS . THEME ?>js/respond.min.js"></script>
    <![endif]-->     
 
    <link rel="shortcut icon" href="<?= ASSETS . THEME ?>images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= ASSETS . THEME ?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= ASSETS . THEME ?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= ASSETS . THEME ?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= ASSETS . THEME ?>images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 95 95 959</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> Ruya@domain.com</a></li>
								<div class="header bg-dark" style="padding: 10px;">
						        <a href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a>
						        | <a href="index.php?lang=ar"><?php echo $lang['lang_ar'] ?></a>
						    </div>
								<?php if(isset($data['user_data'])): ?>
									<li><a href="#"><i class="fa fa-user"></i> <?= $data['user_data']->name ?></a></li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index"><img src="<?= ASSETS . THEME ?>images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">USA</a></li>
									<li><a href="#">TURKEY</a></li>
									<li><a href="#">KUWAIT</a></li>
									<li><a href="#">SUADI ARABIA</a></li>
									<li><a href="#">UAE</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">US DOLLAR (USD)</a></li>
									<li><a href="#">TURKISH LIRA(₺)</a></li>
									<li><a href="#">KUWAITI DINAR (KWD)</a></li>
									<li><a href="#">SAUDI RIYAL (SAR)</a></li>
									<li><a href="#">UNITED ARAB EMIRATES DIRHAM (AED)</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php if(isset($data['user_data']) && $data['user_data']->rank == 'admin'): ?>
									<li><a href="<?=ROOT?>profile"><i class="fa fa-user"></i> Account</a></li>
								<?php endif; ?>
								<li><a href="#"><i class="fa fa-star"></i> <?php echo $lang['whishlist'] ?></a></li>
								<li><a href="checkout"><i class="fa fa-crosshairs"></i> <?php echo $lang['checkout'] ?></a></li>
								<li><a href="cart"><i class="fa fa-shopping-cart"></i> <?php echo $lang['cart'] ?></a></li>
								
								<?php if(isset($data['user_data'])): ?>
									<li><a href="logout"><i class="fa fa-lock"></i> <?php echo $lang['logout'] ?></a></li>
								<?php else: ?>
 									<li><a href="login"><i class="fa fa-lock"></i> <?php echo $lang['login'] ?></a></li>
								<?php endif; ?>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index" class="active"><?php echo $lang['home'] ?></a></li>
								<li class="dropdown"><a href="#"><?php echo $lang['shop'] ?><i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop"><?php echo $lang['products'] ?></a></li>
										<li><a href="product-details"><?php echo $lang['product details'] ?></a></li> 
										<li><a href="checkout"><?php echo $lang['checkout'] ?></a></li> 
										<li><a href="cart"><?php echo $lang['cart'] ?></a></li> 
										<li><a href="login"><?php echo $lang['login'] ?></a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#"><?php echo $lang['Blog'] ?><i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog"><?php echo $lang['Blog list'] ?></a></li>
										<li><a href="blog-single"><?php echo $lang['Blog single'] ?></a></li>
                                    </ul>
                                </li> 
								<li><a href="404">404</a></li>
								<li><a href="contact-us"><?php echo $lang['contact'] ?></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="<?php echo $lang['search'] ?>"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	