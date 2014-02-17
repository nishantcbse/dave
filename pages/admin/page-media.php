            <div class="row-fluid">
              <div class="span12">
                <div class="span2">
                  <ul class="ver-inline-menu tabbable margin-bottom-10">
                    <li class="active"> <a data-toggle="tab" href="#upload" onclick="location.replace('#upload')"> <i class="icon-cog"></i><?php echo SETTINGS_IMAGE ?></a> <span class="after"></span> </li>
                    <li ><a data-toggle="tab" href="#video1" onclick="location.replace('#video1')"><i class="icon-picture"></i> <?php echo SETTINGS_VIDEO ?></a></li>
<!--                    <li ><a data-toggle="tab" href="#view" onclick="viewMedia()"><i class="icon-picture"></i> View </a></li>
-->                  </ul>
                </div>
                
                <div class="span10">
                  <div class="tab-content">
                    <div id="upload" class="tab-pane active">
                      <div style="height: auto;" id="upload" class="accordion collapse">
                        <?php include_once('page-media-upload.php'); ?>
                      </div>
                    </div>
                    
                    <div id="video1" class="tab-pane">
                      <div style="height: auto;" id="video1" class="accordion collapse">
                        <?php include('page-media-video.php'); ?>
                      </div>
                    </div>
                    <!--<div id="view" class="tab-pane">
                      <div style="height: auto;" id="view" class="accordion collapse">
                    <?php //include_once('page-media-view.php'); ?>
                    </div>
                  </div>-->
                  
                   </div>
                <!--end span9--> 
              </div>
               </div>
            </div>
