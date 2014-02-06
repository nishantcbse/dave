<?php include_once('classes/generic.class.php'); ?>
<?php include_once('classes/admin/manage_users.class.php'); ?>
<?php include_once('classes/admin/functions-users.php'); ?>

<script src="js/admin/manage_users.js"></script>


                    <div class="row-fluid">
						<div class="span12">
                            <div class="box">
    							<div class="box-title">
                                    <h3 id="users-label" ></h3>  
                                    <div class="actions" id='list-actions'>
                                        <a class="btn btn-mini" id="users-add" href="#">
                                            <i class="icon-plus"></i>
                                        </a>
                                    </div>
    							</div>
    							<div class="box-content" id='users-list'>
                                    <?php list_manageusers(); ?>
    							</div>
  						    </div>

						</div>
					</div>

                 	<div id='users-box' style="display:none">
                        <div class="row-fluid">
                                <div class="span12">
                                    <div class="box-content nopadding">
                                        <form method="POST" class='form-horizontal form-bordered' id='users-form'>
                                            <div class="control-group">
                                                <label for="textfield" class="control-label">Name</label>
                                                <div class="controls">
                                                    <input type="text" name="name" id="name" class="input-large span7">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="textfield" class="control-label">Username</label>
                                                <div class="controls">
                                                    <input type="text" name="username" id="username" class="input-large span7">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="textfield" class="control-label">Email</label>
                                                <div class="controls">
                                                    <input type="text" name="email" id="email" class="input-large span7">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="textfield" class="control-label">Password</label>
                                                <div class="controls">
                                                    <input type="password" name="password" id="password" class="input-large span7">
                                                </div>
                                            </div>
<!--                                            <div class="control-group">
                                                <label for="textfield" class="control-label" style="margin-left:4px;">Conferm Password</label>
                                                <div class="controls">
                                                    <input type="password" name="re-password" id="re-password" class="input-large span7">
                                                </div>
                                            </div>
-->                                            
                                            
                                            <div class="check-col" id="record-delete" style="margin-top:10px; margin-left:102px;" >
                                                 <div class="check-line " >
                                                        <input type="checkbox"  name="users-delete" id="user-delete" class="icheck-me" data-skin="square" data-color="blue"> <label class='inline ' for="user-delete"> Delete? </label>
                                                  </div>
                                             </div>
                                            <input type="hidden" name="users-id" id="users-id" value="">
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-primary" id="user-save">Save</button>
                                                <button type="button" class="btn" id="users-cancel">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>                
