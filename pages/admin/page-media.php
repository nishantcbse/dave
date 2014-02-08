            <div class="row-fluid">
              <div class="span12">
                <div class="span2">
                  <ul class="ver-inline-menu tabbable margin-bottom-10">
                    <li class="active"> <a data-toggle="tab" href="#upload"> <i class="icon-cog"></i> Upload </a> <span class="after"></span> </li>
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
