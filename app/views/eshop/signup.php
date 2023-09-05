<?php

    include "lang.php";
?>

<?php $this->view("header",$data); ?>

	<section id="form" style="margin-top: 5px;"><!--form-->
		<div class="container">
			<div class="row" style="text-align: center;">
				 

				 <span style="font-size:18px;color:red;"><?php check_error() ?></span>

				<div class="col-sm-4" style="float: none;display: inline-block;">
					<div class="signup-form"><!--sign up form-->
						<h2><?php echo $lang['new_user_signup'] ?></h2>
						<form method="post">
							<input name="name" value="<?= isset($_POST['name']) ? $_POST['name'] : '';?>" type="text" placeholder="<?php echo $lang['name'] ?>"/>
							<input name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '';?>" type="email" placeholder="<?php echo $lang['email_address'] ?>"/>
							<input name="password" type="password" placeholder="<?php echo $lang['password'] ?>"/>
							<input name="password2" type="password" placeholder="<?php echo $lang['retype_password'] ?>"/>
							<button type="submit" class="btn btn-default"><?php echo $lang['signup'] ?></button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
 
<?php $this->view("footer",$data); ?>
