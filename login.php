<?php include_once('classes/login.class.php'); ?>
<?php include_once('header.php'); ?>

    <div class="container min-hight">
        <!-- BEGIN ABOUT INFO -->   
        <div class="row-fluid margin-bottom-30">
            <!-- BEGIN INFO BLOCK -->               
            <div class="span7 space-mobile">
				<div class="margin-bottom-30">
                	<div class="loginhead">
						<h4><?php _e('Sign in to Nwareindia'); ?></h4>
                    </div>
					<form method="post" action="login.php" class="form-horizontal">
						<div class="control-group">
							<div class="controls">
                        	</div>
                        </div>
						<div class="control-group">
							<label class="control-label" for="username"><?php echo $login->use_emails ? _('Email address') : _('Username'); ?></label>
							<div class="controls">
								<input class="m-wrap" type="text" id="username" name="username" placeholder="Email">
							</div>
						</div>
						<div class="control-group">
							<label for="password" class="control-label"><?php _e('Password'); ?></label>
							<div class="controls">
								<input class="m-wrap" type="password" id="password" name="password" placeholder="Password">
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<label class="checkbox">
									<input type="checkbox" id="remember" name="remember"><?php _e('Stay signed in'); ?></label>
								<input type="hidden" name="token" value="<?php echo $_SESSION['jigowatt']['token']; ?>"/>
								<button type="submit" value="" class="btn black" id="login-submit" name="login"><?php _e('Sign In'); ?></button>
								<a href="#"><button type="button" value="" class="btn black" id="forgate-password" name="forgate-password"><?php _e('Forgate Password'); ?></button></a>
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

            <!-- BEGIN CAROUSEL -->            
            <div class="span5 front-carousel">
            <div class="row-fluid">
            <div class="span12">
                  <div class="fullwidthbanner-container slider-main margin-bottom-10" >

        	<div class="fullwidthabnner">
            <ul id="revolutionul" style="display:none;">            
                    <!-- THE FIRST SLIDE -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb=		                     "assets/img/sliders/revolution/thumbs/thumb2.jpg">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="assets/img/pics/img2-medium.jpg" alt="">
                    </li>

                    <!-- THE SECOND SLIDE -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-delay="9400" data-thumb=                          			                      "assets/img/sliders/revolution/thumbs/thumb2.jpg">                        
                        <img src="assets/img/sliders/revolution/bg6.jpg" alt="">

                    </li>
                    
                    <!-- THE THIRD SLIDE -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb=                        "assets/img/sliders/revolution/thumbs/thumb2.jpg">
                        <img src="assets/img/sliders/revolution/bg7.jpg" alt="">
                       
                    </li>               
                    
                    <!-- THE FORTH SLIDE -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb=                        "assets/img/sliders/revolution/thumbs/thumb2.jpg">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="assets/img/sliders/revolution/bg8.jpg" alt="">                        
                        
                    </li>
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        	</div>
            </div>

            </div>                
            </div>
            
                <div class="row-fluid">
                <div class="span12">
            <div class="fullwidthbanner-container slider-main margin-bottom-10" >

        	<div class="fullwidthabnner">
            <ul id="revolutionul" style="display:none;">            
                    <!-- THE FIRST SLIDE -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb=		                     "assets/img/sliders/revolution/thumbs/thumb2.jpg">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="assets/img/pics/img2-medium.jpg" alt="">
                    </li>

                    <!-- THE SECOND SLIDE -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-delay="9400" data-thumb=                          			                      "assets/img/sliders/revolution/thumbs/thumb2.jpg">                        
                        <img src="assets/img/sliders/revolution/bg6.jpg" alt="">

                    </li>
                    
                    <!-- THE THIRD SLIDE -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb=                        "assets/img/sliders/revolution/thumbs/thumb2.jpg">
                        <img src="assets/img/sliders/revolution/bg7.jpg" alt="">
                       
                    </li>               
                    
                    <!-- THE FORTH SLIDE -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb=                        "assets/img/sliders/revolution/thumbs/thumb2.jpg">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="assets/img/sliders/revolution/bg8.jpg" alt="">                        
                        
                    </li>
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        	</div>
            </div>
                </div>                
            </div>

                <div class="row-fluid">
                <div class="span12">
            <div class="fullwidthbanner-container slider-main margin-bottom-10" >

        	<div class="fullwidthabnner">
            <ul id="revolutionul" style="display:none;">            
                    <!-- THE FIRST SLIDE -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb=		                     "assets/img/sliders/revolution/thumbs/thumb2.jpg">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="assets/img/pics/img2-medium.jpg" alt="">
                    </li>

                    <!-- THE SECOND SLIDE -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-delay="9400" data-thumb=                          			                      "assets/img/sliders/revolution/thumbs/thumb2.jpg">                        
                        <img src="assets/img/sliders/revolution/bg6.jpg" alt="">

                    </li>
                    
                    <!-- THE THIRD SLIDE -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb=                        "assets/img/sliders/revolution/thumbs/thumb2.jpg">
                        <img src="assets/img/sliders/revolution/bg7.jpg" alt="">
                       
                    </li>               
                    
                    <!-- THE FORTH SLIDE -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb=                        "assets/img/sliders/revolution/thumbs/thumb2.jpg">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="assets/img/sliders/revolution/bg8.jpg" alt="">                        
                        
                    </li>
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        	</div>
            </div>
                </div>                
            </div>

         </div>
            <!-- END CAROUSEL -->             
        </div>
        <!-- END ABOUT INFO --> 
        
  </div>
<?php include_once('footer.php'); ?>