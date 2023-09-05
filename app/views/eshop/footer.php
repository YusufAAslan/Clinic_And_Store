<?php

    include "lang.php";
?>

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Ruya</span>-clinics</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
				   
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="<?= ASSETS . THEME ?>images/home/map.png" alt="" />
							<p>33/59 Istanbul Turkey</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2><?php echo $lang['services'] ?></h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#"><?php echo $lang['online_help'] ?></a></li>
								<li><a href="#"><?php echo $lang['contact_us'] ?></a></li>
								<li><a href="#"><?php echo $lang['order_status'] ?></a></li>
<!-- 								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li> -->
								<?php if(isset($data['user_data']) && $data['user_data']->rank == 'admin'): ?>
									<li><br><a href="<?=ROOT?>admin">Control Panel</a></br></li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
<!-- 					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div> -->
					<div class="col-sm-2">
						<div class="single-widget">
							<h2><?php echo $lang['policies'] ?></h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#"><?php echo $lang['term_of_use'] ?></a></li>
								<li><a href="#"><?php echo $lang['privecy_policy'] ?></a></li>
								<li><a href="#"><?php echo $lang['refund_policy'] ?></a></li>
								<li><a href="#"><?php echo $lang['biliing_system'] ?></a></li>
<!-- 								<li><a href="#">Ticket System</a></li>
 -->							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2><?php echo $lang['about_clinics'] ?></h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#"><?php echo $lang['career'] ?></a></li>
								<li><a href="#"><?php echo $lang['location'] ?></a></li>
<!-- 								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2><?php echo $lang['about_clinics'] ?></h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="<?php echo $lang['your_email'] ?>" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p><?php echo $lang['about_us_message1'] ?></p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2023 Ruya-Clinics Inc. All rights reserved.</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="<?= ASSETS . THEME ?>js/jquery.js"></script>
	<script src="<?= ASSETS . THEME ?>js/bootstrap.min.js"></script>
	<script src="<?= ASSETS . THEME ?>js/jquery.scrollUp.min.js"></script>
	<script src="<?= ASSETS . THEME ?>js/price-range.js"></script>
    <script src="<?= ASSETS . THEME ?>js/jquery.prettyPhoto.js"></script>
    <script src="<?= ASSETS . THEME ?>js/main.js"></script>
</body>
</html>