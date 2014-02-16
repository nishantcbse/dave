<?php include_once('classes/login.class.php'); ?>
<?php include_once('header.php'); ?>

    <div class="container min-hight">
        <!-- BEGIN ABOUT INFO -->   
        <div class="row-fluid margin-bottom-30">
            <!-- BEGIN INFO BLOCK -->               
            <div class="span4 space-mobile pull-left">
				<div class="margin-bottom-30">
                	<div class="loginhead">
						<h4><?php echo LOGIN_SIGN_IN_TO ?>&nbsp;Nwareindia</h4>
                    </div>
					<form method="post" action="login.php" class="form-horizontal">
						<div class="control-group">
							<div class="controls">
                        	</div>
                        </div>
						<div class="control-group">
							<label class="control-label" for="username"><?php echo $login->use_emails ? _('Email address') : _('Email'); ?></label>
							<div class="controls">
								<input class="m-wrap" type="text" id="username" name="username" placeholder="<?php echo LOGIN_EMAIL ?>">
							</div>
						</div>
						<div class="control-group">
							<label for="password" class="control-label"><?php echo LOGIN_PASSWORD; ?></label>
							<div class="controls">
								<input class="m-wrap" type="password" id="password" name="password" placeholder="<?php echo LOGIN_PASSWORD; ?>">
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<label class="checkbox">
									<input type="checkbox" id="remember" name="remember"><?php echo LOGIN_STAY_SIGNEDIN; ?></label>
								<input type="hidden" name="token" value="<?php echo $_SESSION['jigowatt']['token']; ?>"/>
								<button type="submit" value="" class="btn btn-primary" id="login-submit" name="login"><?php echo LOGIN_SIGNIN ?></button><br><br>
								<a href="#" type="text" value="" class="forgt" id="forgate-password" name="forgate-password"><?php echo LOGIN_FORGOT_PASSWORD ?></button></a>
							</div>
						</div>
		<?php if ( !empty($jigowatt_integration->enabledMethods) ) : ?>

		<div class="">
			<?php foreach ($jigowatt_integration->enabledMethods as $key ) : ?>
				<p><a href="login.php?login=<?php echo $key; ?>"><img src="assets/img/<?php echo $key; ?>_signin.png" alt="<?php echo $key; ?>"></a></p>
			<?php endforeach; ?>
		</div>

		<?php endif; ?>
					</form>					
				</div>
            </div>
            <!-- END INFO BLOCK -->   

       <?php include 'pages/right_advertise_login.php'; ?>


         </div>
            <!-- END CAROUSEL -->             
        </div>
        <!-- END ABOUT INFO --> 
        
  </div>
<?php include_once('footer.php'); ?>