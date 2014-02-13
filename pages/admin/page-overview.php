
<div class="span12"> 
  <!--BEGIN TABS-->
  <div class="tab-content">
    <ul class="unstyled profile-nav span3">
      <li><img src="assets/img/profile/profile-img.png" alt="" /> <a href="#" class="profile-edit">edit</a></li>
      <li><a href="#">Projects</a></li>
      <li><a href="#">Messages <span>3</span></a></li>
      <li><a href="#">Friends</a></li>
      <li><a href="#">Settings</a></li>
    </ul>
    <div class="span9">
      <div class="row-fluid">
        <div class="span8 profile-info">
          <h1>John Doe</h1>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.</p>
          <p><a href="#"></a></p>
          <ul class="unstyled inline">
            <li>
              <div ><img src="<?php echo $party_symbol; ?>" style="width:9%" />&nbsp;&nbsp;&nbsp;<span><?php echo $party_name; ?></span></div>
            </li>
          </ul>
          <div class="control-group form-horizontal">
            <label class="control-label overviewn" for="firstname">
              <?php _e('Name'); ?>
            </label>
            <div class="controls overviewv"> <?php echo $user_first_name; ?> </div>
          </div>
          <div class="control-group form-horizontal">
            <label class="control-label overviewn" for="lastname">
              <?php _e('Address'); ?>
            </label>
            <div class="controls overviewv"> <?php echo $user_address; ?> </div>
          </div>
          <div class="control-group form-horizontal">
            <label class="control-label overviewn" for="lastname">
              <?php _e('City'); ?>
            </label>
            <div class="controls overviewv"> <?php echo $user_city; ?> </div>
          </div>
          <div class="control-group form-horizontal">
            <label class="control-label overviewn" for="lastname">
              <?php _e('Email'); ?>
            </label>
            <div class="controls overviewv"> <?php echo $user_email; ?> </div>
          </div>
        </div>
        <!--end span8--> 
        <!--end span4--> 
      </div>
      <!--end row-fluid-->
      <div class="tabbable tabbable-custom tabbable-custom-profile">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab_1_11" data-toggle="tab">Latest Customers</a></li>
          <li ><a href="#tab_1_22" data-toggle="tab">Feeds</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_1_11">
            <div class="portlet-body" style="display: block;">
              <table class="table table-striped table-bordered table-advance table-hover">
                <thead>
                  <tr>
                    <th><i class="icon-briefcase"></i> Company</th>
                    <th class="hidden-phone"><i class="icon-question-sign"></i> Descrition</th>
                    <th><i class="icon-bookmark"></i> Amount</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="#">Pixel Ltd</a></td>
                    <td class="hidden-phone">Server hardware purchase</td>
                    <td>52560.10$ <span class="label label-success label-mini">Paid</span></td>
                    <td><a class="btn mini green-stripe" href="#">View</a></td>
                  </tr>
                  <tr>
                    <td><a href="#"> Smart House </a></td>
                    <td class="hidden-phone">Office furniture purchase</td>
                    <td>5760.00$ <span class="label label-warning label-mini">Pending</span></td>
                    <td><a class="btn mini blue-stripe" href="#">View</a></td>
                  </tr>
                  <tr>
                    <td><a href="#"> FoodMaster Ltd </a></td>
                    <td class="hidden-phone">Company Anual Dinner Catering</td>
                    <td>12400.00$ <span class="label label-success label-mini">Paid</span></td>
                    <td><a class="btn mini blue-stripe" href="#">View</a></td>
                  </tr>
                  <tr>
                    <td><a href="#"> WaterPure Ltd </a></td>
                    <td class="hidden-phone">Payment for Jan 2013</td>
                    <td>610.50$ <span class="label label-danger label-mini">Overdue</span></td>
                    <td><a class="btn mini red-stripe" href="#">View</a></td>
                  </tr>
                  <tr>
                    <td><a href="#">Pixel Ltd</a></td>
                    <td class="hidden-phone">Server hardware purchase</td>
                    <td>52560.10$ <span class="label label-success label-mini">Paid</span></td>
                    <td><a class="btn mini green-stripe" href="#">View</a></td>
                  </tr>
                  <tr>
                    <td><a href="#"> Smart House </a></td>
                    <td class="hidden-phone">Office furniture purchase</td>
                    <td>5760.00$ <span class="label label-warning label-mini">Pending</span></td>
                    <td><a class="btn mini blue-stripe" href="#">View</a></td>
                  </tr>
                  <tr>
                    <td><a href="#"> FoodMaster Ltd </a></td>
                    <td class="hidden-phone">Company Anual Dinner Catering</td>
                    <td>12400.00$ <span class="label label-success label-mini">Paid</span></td>
                    <td><a class="btn mini blue-stripe" href="#">View</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!--tab-pane-->
          <div class="tab-pane" id="tab_1_22">
            <div class="tab-pane active" id="tab_1_1_1">
              <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
                <ul class="feeds">
                  <li>
                    <div class="col1">
                      <div class="cont">
                        <div class="cont-col1">
                          <div class="label label-success"> <i class="icon-bell"></i> </div>
                        </div>
                        <div class="cont-col2">
                          <div class="desc"> You have 4 pending tasks. <span class="label label-important label-mini"> Take action <i class="icon-share-alt"></i> </span> </div>
                        </div>
                      </div>
                    </div>
                    <div class="col2">
                      <div class="date"> Just now </div>
                    </div>
                  </li>
                  <li> <a href="#">
                    <div class="col1">
                      <div class="cont">
                        <div class="cont-col1">
                          <div class="label label-success"> <i class="icon-bell"></i> </div>
                        </div>
                        <div class="cont-col2">
                          <div class="desc"> New version v1.4 just lunched! </div>
                        </div>
                      </div>
                    </div>
                    <div class="col2">
                      <div class="date"> 20 mins </div>
                    </div>
                    </a> </li>
                  <li>
                    <div class="col1">
                      <div class="cont">
                        <div class="cont-col1">
                          <div class="label label-important"> <i class="icon-bolt"></i> </div>
                        </div>
                        <div class="cont-col2">
                          <div class="desc"> Database server #12 overloaded. Please fix the issue. </div>
                        </div>
                      </div>
                    </div>
                    <div class="col2">
                      <div class="date"> 24 mins </div>
                    </div>
                  </li>
                  <li>
                    <div class="col1">
                      <div class="cont">
                        <div class="cont-col1">
                          <div class="label label-info"> <i class="icon-bullhorn"></i> </div>
                        </div>
                        <div class="cont-col2">
                          <div class="desc"> New order received. Please take care of it. </div>
                        </div>
                      </div>
                    </div>
                    <div class="col2">
                      <div class="date"> 30 mins </div>
                    </div>
                  </li>
                  <li>
                    <div class="col1">
                      <div class="cont">
                        <div class="cont-col1">
                          <div class="label label-success"> <i class="icon-bullhorn"></i> </div>
                        </div>
                        <div class="cont-col2">
                          <div class="desc"> New order received. Please take care of it. </div>
                        </div>
                      </div>
                    </div>
                    <div class="col2">
                      <div class="date"> 40 mins </div>
                    </div>
                  </li>
                  <li>
                    <div class="col1">
                      <div class="cont">
                        <div class="cont-col1">
                          <div class="label label-warning"> <i class="icon-plus"></i> </div>
                        </div>
                        <div class="cont-col2">
                          <div class="desc"> New user registered. </div>
                        </div>
                      </div>
                    </div>
                    <div class="col2">
                      <div class="date"> 1.5 hours </div>
                    </div>
                  </li>
                  <li>
                    <div class="col1">
                      <div class="cont">
                        <div class="cont-col1">
                          <div class="label label-success"> <i class="icon-bell-alt"></i> </div>
                        </div>
                        <div class="cont-col2">
                          <div class="desc"> Web server hardware needs to be upgraded. <span class="label label-inverse label-mini">Overdue</span> </div>
                        </div>
                      </div>
                    </div>
                    <div class="col2">
                      <div class="date"> 2 hours </div>
                    </div>
                  </li>
                  <li>
                    <div class="col1">
                      <div class="cont">
                        <div class="cont-col1">
                          <div class="label"> <i class="icon-bullhorn"></i> </div>
                        </div>
                        <div class="cont-col2">
                          <div class="desc"> New order received. Please take care of it. </div>
                        </div>
                      </div>
                    </div>
                    <div class="col2">
                      <div class="date"> 3 hours </div>
                    </div>
                  </li>
                  <li>
                    <div class="col1">
                      <div class="cont">
                        <div class="cont-col1">
                          <div class="label label-warning"> <i class="icon-bullhorn"></i> </div>
                        </div>
                        <div class="cont-col2">
                          <div class="desc"> New order received. Please take care of it. </div>
                        </div>
                      </div>
                    </div>
                    <div class="col2">
                      <div class="date"> 5 hours </div>
                    </div>
                  </li>
                  <li>
                    <div class="col1">
                      <div class="cont">
                        <div class="cont-col1">
                          <div class="label label-info"> <i class="icon-bullhorn"></i> </div>
                        </div>
                        <div class="cont-col2">
                          <div class="desc"> New order received. Please take care of it. </div>
                        </div>
                      </div>
                    </div>
                    <div class="col2">
                      <div class="date"> 18 hours </div>
                    </div>
                  </li>
                  <li>
                    <div class="col1">
                      <div class="cont">
                        <div class="cont-col1">
                          <div class="label"> <i class="icon-bullhorn"></i> </div>
                        </div>
                        <div class="cont-col2">
                          <div class="desc"> New order received. Please take care of it. </div>
                        </div>
                      </div>
                    </div>
                    <div class="col2">
                      <div class="date"> 21 hours </div>
                    </div>
                  </li>
                  <li>
                    <div class="col1">
                      <div class="cont">
                        <div class="cont-col1">
                          <div class="label label-info"> <i class="icon-bullhorn"></i> </div>
                        </div>
                        <div class="cont-col2">
                          <div class="desc"> New order received. Please take care of it. </div>
                        </div>
                      </div>
                    </div>
                    <div class="col2">
                      <div class="date"> 22 hours </div>
                    </div>
                  </li>
                  <li>
                    <div class="col1">
                      <div class="cont">
                        <div class="cont-col1">
                          <div class="label"> <i class="icon-bullhorn"></i> </div>
                        </div>
                        <div class="cont-col2">
                          <div class="desc"> New order received. Please take care of it. </div>
                        </div>
                      </div>
                    </div>
                    <div class="col2">
                      <div class="date"> 21 hours </div>
                    </div>
                  </li>
                  <li>
                    <div class="col1">
                      <div class="cont">
                        <div class="cont-col1">
                          <div class="label label-info"> <i class="icon-bullhorn"></i> </div>
                        </div>
                        <div class="cont-col2">
                          <div class="desc"> New order received. Please take care of it. </div>
                        </div>
                      </div>
                    </div>
                    <div class="col2">
                      <div class="date"> 22 hours </div>
                    </div>
                  </li>
                  <li>
                    <div class="col1">
                      <div class="cont">
                        <div class="cont-col1">
                          <div class="label"> <i class="icon-bullhorn"></i> </div>
                        </div>
                        <div class="cont-col2">
                          <div class="desc"> New order received. Please take care of it. </div>
                        </div>
                      </div>
                    </div>
                    <div class="col2">
                      <div class="date"> 21 hours </div>
                    </div>
                  </li>
                  <li>
                    <div class="col1">
                      <div class="cont">
                        <div class="cont-col1">
                          <div class="label label-info"> <i class="icon-bullhorn"></i> </div>
                        </div>
                        <div class="cont-col2">
                          <div class="desc"> New order received. Please take care of it. </div>
                        </div>
                      </div>
                    </div>
                    <div class="col2">
                      <div class="date"> 22 hours </div>
                    </div>
                  </li>
                  <li>
                    <div class="col1">
                      <div class="cont">
                        <div class="cont-col1">
                          <div class="label"> <i class="icon-bullhorn"></i> </div>
                        </div>
                        <div class="cont-col2">
                          <div class="desc"> New order received. Please take care of it. </div>
                        </div>
                      </div>
                    </div>
                    <div class="col2">
                      <div class="date"> 21 hours </div>
                    </div>
                  </li>
                  <li>
                    <div class="col1">
                      <div class="cont">
                        <div class="cont-col1">
                          <div class="label label-info"> <i class="icon-bullhorn"></i> </div>
                        </div>
                        <div class="cont-col2">
                          <div class="desc"> New order received. Please take care of it. </div>
                        </div>
                      </div>
                    </div>
                    <div class="col2">
                      <div class="date"> 22 hours </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--tab-pane--> 
        </div>
      </div>
    </div>
    <!--end span9--> 
  </div>
  <!--END TABS--> 
</div>
