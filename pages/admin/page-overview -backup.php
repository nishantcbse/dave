                    <ul class="unstyled profile-nav span3">
                      <li><img src="<?php echo $avatar ?>" alt=""> <a href="#" class="profile-edit">edit</a></li>
                      <li>
                      
                      </li>
                    </ul>
                    <div class="span9">
                      <div class="row-fluid">
                        <div class="span8 profile-info">
                          <h1><?php echo $name; ?></h1>
                          <span><p><?php echo $candidateinfo; ?></p></span>
                          <div style="width:12%"><img src="<?php echo $party_symbol; ?>" /></div>
                          <span><p><?php echo $party_name; ?></p></span>
                        </div>
                        <!--end span8-->
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
                                    <td><a class="btn btn-info mini green-stripe" href="#">View</a></td>
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
