<!DOCTYPE html>
<html lang="en">
   
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Preskool - Dashboard</title>
      <link rel="shortcut icon" href="assets/img/favicon.png">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
      <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
      <div class="main-wrapper">
         <div class="header">
            <div class="header-left">
               <a href="index.php" class="logo">
               <img src="assets/img/logo.png" alt="Logo">
               </a>
               <a href="index.php" class="logo logo-small">
               <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
               </a>
            </div>
            <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-align-left"></i>
            </a>
            <div class="top-nav-search">
               <form>
                  <input type="text" class="form-control" placeholder="Search here">
                  <button class="btn" type="submit"><i class="fas fa-search"></i></button>
               </form>
            </div>
            <a class="mobile_btn" id="mobile_btn">
            <i class="fas fa-bars"></i>
            </a>
            <ul class="nav user-menu">
               <li class="nav-item dropdown noti-dropdown">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <i class="far fa-bell"></i> <span class="badge badge-pill">3</span>
                  </a>
                  <div class="dropdown-menu notifications">
                     <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                     </div>
                     <div class="noti-content">
                        <ul class="notification-list">
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media">
                                    <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                                    </span>
                                    <div class="media-body">
                                       <p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
                                       <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media">
                                    <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
                                    </span>
                                    <div class="media-body">
                                       <p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                       <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media">
                                    <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
                                    </span>
                                    <div class="media-body">
                                       <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
                                       <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media">
                                    <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
                                    </span>
                                    <div class="media-body">
                                       <p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
                                       <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="topnav-dropdown-footer">
                        <a href="#">View all Notifications</a>
                     </div>
                  </div>
               </li>
               <li class="nav-item dropdown has-arrow">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
                  </a>
                  <div class="dropdown-menu">
                     <div class="user-header">
                        <div class="avatar avatar-sm">
                           <img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                           <h6>Ryan Taylor</h6>
                           <p class="text-muted mb-0">Administrator</p>
                        </div>
                     </div>
                     <a class="dropdown-item" href="profile.php">My Profile</a>
                     <a class="dropdown-item" href="inbox.php">Inbox</a>
                     <a class="dropdown-item" href="logout  .php">Logout</a>
                  </div>
               </li>
            </ul>
         </div>
         <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
               <div id="sidebar-menu" class="sidebar-menu">
                  <ul>
                      <li class="submenu">
                        <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="login.php">Login</a></li>
                           <li><a href="register.php">Register</a></li>
                           <li><a href="forgot-password.php">Forgot Password</a></li>
                           <li><a href="error-404.php">Error Page</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row">
                     <div class="col-sm-12">
                        <h3 class="page-title">Welcome To Pre-School Education!</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-3 col-sm-6 col-12 d-flex">
                     <div class="card bg-one w-100">
                        <div class="card-body">
                           <div class="db-widgets d-flex justify-content-between align-items-center">
                              <div class="db-icon">
                                 <i class="fas fa-user-graduate"></i>
                              </div>
                              <div class="db-info">
                                 <h3>50055</h3>
                                 <h6>Students</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 d-flex">
                     <div class="card bg-two w-100">
                        <div class="card-body">
                           <div class="db-widgets d-flex justify-content-between align-items-center">
                              <div class="db-icon">
                                 <i class="fas fa-crown"></i>
                              </div>
                              <div class="db-info">
                                 <h3>50+</h3>
                                 <h6>Awards</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 d-flex">
                     <div class="card bg-three w-100">
                        <div class="card-body">
                           <div class="db-widgets d-flex justify-content-between align-items-center">
                              <div class="db-icon">
                                 <i class="fas fa-building"></i>
                              </div>
                              <div class="db-info">
                                 <h3>30+</h3>
                                 <h6>Department</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 d-flex">
                     <div class="card bg-four w-100">
                        <div class="card-body">
                           <div class="db-widgets d-flex justify-content-between align-items-center">
                              <div class="db-icon">
                                 <i class="fas fa-file-invoice-dollar"></i>
                              </div>
                              <div class="db-info">
                                 <h3>$505</h3>
                                 <h6>Revenue</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 col-lg-6">
                     <div class="card card-chart">
                        <div class="card-header">
                           <div class="row align-items-center">
                              <div class="col-6">
                                 <h5 class="card-title">Revenue</h5>
                              </div>
                              <div class="col-6">
                                 <ul class="list-inline-group text-right mb-0 pl-0">
                                    <li class="list-inline-item">
                                       <div class="form-group mb-0 amount-spent-select">
                                          <select class="form-control form-control-sm">
                                             <option>Today</option>
                                             <option>Last Week</option>
                                             <option>Last Month</option>
                                          </select>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <div id="apexcharts-area"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-6">
                     <div class="card card-chart">
                        <div class="card-header">
                           <div class="row align-items-center">
                              <div class="col-6">
                                 <h5 class="card-title">Number of Students</h5>
                              </div>
                              <div class="col-6">
                                 <ul class="list-inline-group text-right mb-0 pl-0">
                                    <li class="list-inline-item">
                                       <div class="form-group mb-0 amount-spent-select">
                                          <select class="form-control form-control-sm">
                                             <option>Today</option>
                                             <option>Last Week</option>
                                             <option>Last Month</option>
                                          </select>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <div id="bar"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 d-flex">
                     <div class="card flex-fill">
                        <div class="card-header">
                           <h5 class="card-title">Star Students</h5>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-hover table-center">
                                 <thead class="thead-light">
                                    <tr>
                                       <th>ID</th>
                                       <th>Name</th>
                                       <th class="text-center">Marks</th>
                                       <th class="text-center">Percentage</th>
                                       <th class="text-right">Year</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td class="text-nowrap">
                                          <div>PRE2209</div>
                                       </td>
                                       <td class="text-nowrap">John Smith</td>
                                       <td class="text-center">1185</td>
                                       <td class="text-center">98%</td>
                                       <td class="text-right">
                                          <div>2019</div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="text-nowrap">
                                          <div>PRE1245</div>
                                       </td>
                                       <td class="text-nowrap">Jolie Hoskins</td>
                                       <td class="text-center">1195</td>
                                       <td class="text-center">99.5%</td>
                                       <td class="text-right">
                                          <div>2018</div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="text-nowrap">
                                          <div>PRE1625</div>
                                       </td>
                                       <td class="text-nowrap">Pennington Joy</td>
                                       <td class="text-center">1196</td>
                                       <td class="text-center">99.6%</td>
                                       <td class="text-right">
                                          <div>2017</div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="text-nowrap">
                                          <div>PRE2516</div>
                                       </td>
                                       <td class="text-nowrap">Millie Marsden</td>
                                       <td class="text-center">1187</td>
                                       <td class="text-center">98.2%</td>
                                       <td class="text-right">
                                          <div>2016</div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="text-nowrap">
                                          <div>PRE2209</div>
                                       </td>
                                       <td class="text-nowrap">John Smith</td>
                                       <td class="text-center">1185</td>
                                       <td class="text-center">98%</td>
                                       <td class="text-right">
                                          <div>2015</div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 d-flex">
                     <div class="card flex-fill">
                        <div class="card-header">
                           <h5 class="card-title">Student Activity</h5>
                        </div>
                        <div class="card-body">
                           <ul class="activity-feed">
                              <li class="feed-item">
                                 <div class="feed-date">Apr 13</div>
                                 <span class="feed-text"><a>John Doe</a> won 1st place in <a>"Chess"</a></span>
                              </li>
                              <li class="feed-item">
                                 <div class="feed-date">Mar 21</div>
                                 <span class="feed-text"><a>Justin Lee</a> participated in <a href="invoice.php">"Carrom"</a></span>
                              </li>
                              <li class="feed-item">
                                 <div class="feed-date">Feb 2</div>
                                 <span class="feed-text"><a>Justin Lee</a>attended internation conference in <a href="profile.php">"St.John School"</a></span>
                              </li>
                              <li class="feed-item">
                                 <div class="feed-date">Apr 13</div>
                                 <span class="feed-text"><a>John Doe</a> won 1st place in <a>"Chess"</a></span>
                              </li>
                              <li class="feed-item">
                                 <div class="feed-date">Mar 21</div>
                                 <span class="feed-text"><a>Justin Lee</a> participated in <a href="invoice.php">"Carrom"</a></span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card flex-fill fb sm-box">
                        <i class="fab fa-facebook"></i>
                        <h6>50,095</h6>
                        <p>Likes</p>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card flex-fill twitter sm-box">
                        <i class="fab fa-twitter"></i>
                        <h6>48,596</h6>
                        <p>Follows</p>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card flex-fill insta sm-box">
                        <i class="fab fa-instagram"></i>
                        <h6>52,085</h6>
                        <p>Follows</p>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card flex-fill linkedin sm-box">
                        <i class="fab fa-linkedin-in"></i>
                        <h6>69,050</h6>
                        <p>Follows</p>
                     </div>
                  </div>
               </div>
            </div>
            <footer>
               <p>Copyright © 2020 Dreamguys.</p>
            </footer>
         </div>
      </div>
      <script src="assets/js/jquery-3.6.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
      <script src="assets/plugins/apexchart/chart-data.js"></script>
      <script src="assets/js/script.js"></script>
   </body>
   
</html>