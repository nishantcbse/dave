<?php
include_once('classes/check.class.php');
$title = 'search';
$label = '';
include_once('header.php');
//include_once('classes/function_search.php');
include_once('classes/search.class.php');

?>
<script src="js/search.js"></script>

<div class="container min-hight"> 
  <!-- BEGIN ABOUT INFO -->
  <div class="row-fluid margin-bottom-30"> 
    <!-- BEGIN INFO BLOCK -->
    <div class="span12 space-mobile"> 
						<div class="content">
							<div id="" class="tab-pane">
								<div class="row-fluid search-default">
									<form class="form-search" action="#">
										<div class="chat-form">
											<div class="input-cont">   
												<input type="text" placeholder="Search..." class="m-wrap span12" id="search_val"/>
											</div>
											<button type="button" class="btn green searchbtn" onclick="search_candidate()">Search &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
										</div>
									</form>
								</div>
								<div class="portlet-body span11" id="search_result">
								    <?php  $search->list_candidate() ?>		
								</div>
								<div class="space12"></div>
								<div class="pagination pagination-right">
									<ul>
										<li><a href="#">Prev</a></li>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li class="active"><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">Next</a></li>
									</ul>
								</div>
							</div>
							<!--end tab-pane-->
						</div>
					</div>
					<!--end tabbable-->           
				</div>
                </div>

    <!-- END CONTAINER -->
<?php include 'footer.php' ?>
        
