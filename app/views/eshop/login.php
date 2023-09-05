<?php

    include "lang.php";
?>

<?php $this->view("header",$data); ?>

	<section id="form" style="margin-top: 5px;"><!--form-->
		<div class="container">
			<div class="row" style="text-align: center;">

				<span style="font-size:18px;color:red;"><?php check_error() ?></span>
				
				<div class="col-sm-4 col-sm-offset-1" style="float: none;display: inline-block;">
					<div class="login-form"><!--login form-->
						<h2><?php echo $lang['Login_to_your_acount']?></h2>
						<form method="post">
							<input type="email" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '';?>" placeholder="<?php echo $lang['email_address']?>" />
							<input type="password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '';?>" placeholder="<?php echo $lang['password']?>" />
							<span>
								<input type="checkbox" class="checkbox"> 
								<?php echo $lang['keep_me_signed_in']?>

							</span>
							<button type="submit" class="btn btn-default"><?php echo $lang['login']?></button>
						</form>
						<br>
						<a href="<?=ROOT?>signup"><?php echo $lang['Signup_here']?></a>
					</div><!--/login form-->
				</div>
			 
			</div>
		</div>
	</section><!--/form-->
	
<?php $this->view("footer",$data); ?>
