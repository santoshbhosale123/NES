
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>nes</span></a>
            </div>
            <div class="clearfix"></div>
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>/assets/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{tname}}</h2>
               
              </div>
            </div>
            <br />
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                
                  <li><a href="#/"><i class="fa fa-table"></i> Dashboard</a>
                  </li>
                  <li ng-hide="!isclassteacher()" ng-controller="Dashboard"><a><i class="fa fa-tint gradient-aqua"></i>Class <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#/ ">Dashboard</a></li>
                        <li><a href="#/addstudent">Add Students</a></li>
                         <li><a href="#/liststudent">List Students</a></li>
                    </ul>
                  </li>




                        <!--<li ng-hide="!isteacher()" ng-controller="Dashboard"><a><i class="fa fa-group"></i>Report genaration<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#/aquareports">Generate Aqua reports</a></li>
                      <li><a href="#/gasreports">Generate Gas reports</a></li>
                   
                        <!-- <li><a href="#/addexpensive">Add teacher Expensives</a></li>
                          <li><a href="#/listexpensive">List teacher expensives</a></li> 
                    </ul>
                  </li>
-->









                  <li ng-hide="!isteacher()" ng-controller="Dashboard"><a><i class="fa fa-group"></i> Manage Teachers<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#/classteacherlist">List Class-teachers</a></li>
                      <li><a href="#/addclassteacher">Add Class-teacher</a></li>
                        <!-- <li><a href="#/addexpensive">Add teacher Expensives</a></li>
                          <li><a href="#/listexpensive">List teacher expensives</a></li> -->
                    </ul>
                  </li>














                </ul>
              </div>
            </div>
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
          </div>
        </div>