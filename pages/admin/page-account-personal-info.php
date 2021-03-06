  <div style="height: auto;" id="accordion1-1" class="accordion collapse">
     <form action="" method="post" class="form-horizontal" id="personal-info-form">
        <div class="control-group">
          <label class="control-label" for="firstname">
            <?php echo FIRST_NAME ?>
          </label>
          <div class="controls">
            <input type="text" placeholder="" class="m-wrap span12" id="first_name" name="first_name" value="<?php echo $user_first_name; ?>"/>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="lastname">
            <?php echo LAST_NAME ?>
          </label>
          <div class="controls">
            <input type="text" placeholder="" class="m-wrap span12" id="last_name" name="last_name" value="<?php echo $user_last_name; ?>"/>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="address">
            <?php echo REGISTER_ADDRESS ?>
          </label>
          <div class="controls">
            <textarea class="span12 m-wrap" rows="3" id="address" name="address"><?php echo $user_address; ?></textarea>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="city">
            <?php echo REGISTER_CITY ?>
          </label>
          <div class="controls">
            <input type="text" class="span12 m-wrap" tabindex="1" id="city" name="city" value="<?php echo $user_city; ?>"  />
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="email" data-required="1">
            <?php echo REGISTER_EMAIL ?>
          </label>
          <div class="controls">
            <input class="m-wrap span12" type="email" id="email" name="email" value="<?php echo $user_email; ?>">
          </div>
        </div>
        
        <div class="control-group">
          <div class="controls">
            <input type="hidden" name="personal-info-id" id="personal-info-id" value="">
            <input type="hidden" name="action"  value="personal">
            <a href="#" class="btn btn-primary" " onclick="Modify_info('personal')"><?php echo SUBMIT ?></a>
            <button class="btn btn-info" type="reset"><?php echo CLEAR ?></button>
          </div>
        </div>
      </form>
  </div>
