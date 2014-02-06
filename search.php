<?php
include_once('classes/check.class.php');

$title = 'search';
$label = '';
include_once('header.php');
include_once('classes/function_search.php');

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
												<input type="text" placeholder="Search..." class="m-wrap span12" />
											</div>
											<button type="button" class="btn green searchbtn">Search &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
										</div>
									</form>
								</div>
								<div class="portlet-body">
									<table class="table table-striped table-hover">
										<thead>
											<tr>
												<th>Photo</th>
												<th class="hidden-phone">Fullname</th>
												<th>Username</th>
												<th class="hidden-phone">Joined</th>
												<th class="hidden-phone">Points</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><img src="assets/img/avatar1.jpg" alt="" /></td>
												<td class="hidden-phone">Mark Nilson</td>
												<td>makr124</td>
												<td class="hidden-phone">19 Jan 2012</td>
												<td class="hidden-phone">1245</td>
												<td><span class="label label-success">Approved</span></td>
												<td><a class="btn mini red-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar2.jpg" alt="" /></td>
												<td class="hidden-phone">Filip Rolton</td>
												<td>jac123</td>
												<td class="hidden-phone">09 Feb 2012</td>
												<td class="hidden-phone">15</td>
												<td><span class="label label-info">Pending</span></td>
												<td><a class="btn mini blue-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar3.jpg" alt="" /></td>
												<td class="hidden-phone">Colin Fox</td>
												<td>col</td>
												<td class="hidden-phone">19 Jan 2012</td>
												<td class="hidden-phone">245</td>
												<td><span class="label label-warning">Suspended</span></td>
												<td><a class="btn mini green-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar.png" alt="" /></td>
												<td class="hidden-phone">Nick Stone</td>
												<td>sanlim</td>
												<td class="hidden-phone">11 Mar 2012</td>
												<td class="hidden-phone">565</td>
												<td><span class="label label-danger">Blocked</span></td>
												<td><a class="btn mini red-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar1.jpg" alt="" /></td>
												<td class="hidden-phone">Edward Cook</td>
												<td>sanlim</td>
												<td class="hidden-phone">11 Mar 2012</td>
												<td class="hidden-phone">45245</td>
												<td><span class="label label-danger">Blocked</span></td>
												<td><a class="btn mini green-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar.png" alt="" /></td>
												<td class="hidden-phone">Nick Stone</td>
												<td>sanlim</td>
												<td class="hidden-phone">11 Mar 2012</td>
												<td class="hidden-phone">24512</td>
												<td><span class="label label-danger">Blocked</span></td>
												<td><a class="btn mini blue-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar1.jpg" alt="" /></td>
												<td class="hidden-phone">Elis Lim</td>
												<td>makr124</td>
												<td class="hidden-phone">11 Mar 2012</td>
												<td class="hidden-phone">145</td>
												<td><span class="label label-success">Approved</span></td>
												<td><a class="btn mini red-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar2.jpg" alt="" /></td>
												<td class="hidden-phone">King Paul</td>
												<td>king123</td>
												<td class="hidden-phone">11 Mar 2012</td>
												<td class="hidden-phone">456</td>
												<td><span class="label label-info">Pending</span></td>
												<td><a class="btn mini blue-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar3.jpg" alt="" /></td>
												<td class="hidden-phone">Filip Larson</td>
												<td>fil</td>
												<td class="hidden-phone">11 Mar 2012</td>
												<td class="hidden-phone">12453</td>
												<td><span class="label label-warning">Suspended</span></td>
												<td><a class="btn mini green-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar.png" alt="" /></td>
												<td class="hidden-phone">Martin Larson</td>
												<td>larson12</td>
												<td class="hidden-phone">01 Apr 2011</td>
												<td class="hidden-phone">2453</td>
												<td><span class="label label-danger">Blocked</span></td>
												<td><a class="btn mini red-stripe" href="#">View</a></td>
											</tr>
											<tr>
												<td><img src="assets/img/avatar1.jpg" alt="" /></td>
												<td class="hidden-phone">King Paul</td>
												<td>sanlim</td>
												<td class="hidden-phone">11 Mar 2012</td>
												<td class="hidden-phone">905</td>
												<td><span class="label label-danger">Blocked</span></td>
												<td><a class="btn mini green-stripe" href="#">View</a></td>
											</tr>
										</tbody>
									</table>
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
        
