<div style="height: auto;" id="accordion3-3" class="accordion collapse">
  <form action="" method="post" id="password-edit-form" >
    <label class="control-label">Current Password</label>
    <input type="password" class="m-wrap span8" name="CurrentPass" value="" />
    <label class="control-label">New Password</label>
        <input type="password" autocomplete="off" class="input-xlarge span8" id="password" name="password" placeholder="Leave blank for no change">
    <label class="control-label">Re-type New Password</label>
                        						        <input type="password" autocomplete="off" class="input-xlarge span8" id="password_confirm" name="password_confirm">
     <input type="hidden" name="action"  value="password">
    <input type="hidden" name="password-info-id" id="password-info-id" value="<?php echo $_SESSION['jigowatt']['user_id'] ?>"  />

    <div class="submit-btn"> 
        <a href="#" class="btn green"  onclick="Modify_info('password')">Change Password</a> 
        <a href="#" class="btn">Cancel</a> 
    </div>
  </form>
</div>
