<div class="col-md-3 left_col">
               <div class="left_col scroll-view">
                  <div class="navbar nav_title" style="border: 0;">
                     <a href="/dashboard" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                  </div>
                  <div class="clearfix"></div>
                  <!-- menu profile quick info -->
                  <div class="profile clearfix">
                     <div class="profile_pic">
                        <img src="/assets/images/{{ Auth::user()->user_profile}}" alt="..." class="img-circle profile_img">
                     </div>
                     <div class="profile_info">
                        <span>Welcome,</span>
                        <h2> {{ Auth::user()->name }}</h2>
                     </div>
                  </div>
                  <!-- /menu profile quick info -->
                  <br />
                  <!-- sidebar menu -->
                  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                     <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                           <li>
                              <a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="/dashboard">Dashboard</a></li>
                                 <li><a href="/dashboard2">Dashboard2</a></li>
                                 <li><a href="/dashboard3">Dashboard3</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-home"></i> Teacher <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="/teachers">View</a></li>
                                 <li><a href="/teachers/create">Create</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-home"></i> Classes <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="/classes">View</a></li>
                                 <li><a href="/classes/create">Create</a></li>
                              </ul>
                           </li>
                          
                        </ul>
                     </div>
                     
                  </div>
                  <!-- /sidebar menu -->
                  <!-- /menu footer buttons -->
                  
                  <!-- /menu footer buttons -->
               </div>
            </div>