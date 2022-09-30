<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/php-template/students.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:43 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Preskool - Students</title>
      <link rel="shortcut icon" href="assets/img/favicon.png">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
      <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
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
                     <a class="dropdown-item" href="login.php">Logout</a>
                  </div>
               </li>
            </ul>
         </div>
         <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
               <div id="sidebar-menu" class="sidebar-menu">
                  <ul>
                     <li class="menu-title">
                        <span>Main Menu</span>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="index.php">Admin Dashboard</a></li>
                           <li><a href="teacher-dashboard.php">Teacher Dashboard</a></li>
                           <li><a href="student-dashboard.php">Student Dashboard</a></li>
                        </ul>
                     </li>
                     <li class="submenu active">
                        <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="students.php" class="active">Student List</a></li>
                           <li><a href="student-details.php">Student View</a></li>
                           <li><a href="add-student.php">Student Add</a></li>
                           <li><a href="edit-student.php">Student Edit</a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="teachers.php">Teacher List</a></li>
                           <li><a href="teacher-details.php">Teacher View</a></li>
                           <li><a href="add-teacher.php">Teacher Add</a></li>
                           <li><a href="edit-teacher.php">Teacher Edit</a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="subjects.php">Subject List</a></li>
                           <li><a href="add-subject.php">Subject Add</a></li>
                           <li><a href="edit-subject.php">Subject Edit</a></li>
                        </ul>
                     </li>
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
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">Students</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                           <li class="breadcrumb-item active">Students</li>
                        </ul>
                     </div>
                     <div class="col-auto text-right float-right ml-auto">
                        <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
                        <a href="add-student.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card card-table">
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-hover table-center mb-0 datatable">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>Name</th>
                                       <th>Class</th>
                                       <th>DOB</th>
                                       <th>Parent Name</th>
                                       <th>Mobile Number</th>
                                       <th>Address</th>
                                       <th class="text-right">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>PRE2209</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a href="student-details.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a>
                                             <a href="student-details.php">Aaliyah</a>
                                          </h2>
                                       </td>
                                       <td>10 A</td>
                                       <td>2 Feb 2002</td>
                                       <td>Jeffrey Wong</td>
                                       <td>097 3584 5870</td>
                                       <td>911 Deer Ridge Drive,USA</td>
                                       <td class="text-right">
                                          <div class="actions">
                                             <a href="edit-student.php" class="btn btn-sm bg-success-light mr-2">
                                             <i class="fas fa-pen"></i>
                                             </a>
                                             <a href="#" class="btn btn-sm bg-danger-light">
                                             <i class="fas fa-trash"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>PRE2213</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a href="student-details.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-03.jpg" alt="User Image"></a>
                                             <a href="student-details.php">Malynne</a>
                                          </h2>
                                       </td>
                                       <td>8 A</td>
                                       <td>3 June 2010</td>
                                       <td>Fields Malynne</td>
                                       <td>242 362 3100</td>
                                       <td>Bacardi Rd P.O. Box N-4880, New Providence</td>
                                       <td class="text-right">
                                          <div class="actions">
                                             <a href="edit-student.php" class="btn btn-sm bg-success-light mr-2">
                                             <i class="fas fa-pen"></i>
                                             </a>
                                             <a href="#" class="btn btn-sm bg-danger-light">
                                             <i class="fas fa-trash"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>PRE2143</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a href="student-details.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                             <a href="student-details.php">Levell Scott</a>
                                          </h2>
                                       </td>
                                       <td>10 A</td>
                                       <td>12 Apr 2002</td>
                                       <td>Jeffrey Scott</td>
                                       <td>026 7318 4366</td>
                                       <td>P.O. Box: 41, Gaborone</td>
                                       <td class="text-right">
                                          <div class="actions">
                                             <a href="edit-student.php" class="btn btn-sm bg-success-light mr-2">
                                             <i class="fas fa-pen"></i>
                                             </a>
                                             <a href="#" class="btn btn-sm bg-danger-light">
                                             <i class="fas fa-trash"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>PRE2431</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a href="student-details.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-03.jpg" alt="User Image"></a>
                                             <a href="student-details.php">Minnie</a>
                                          </h2>
                                       </td>
                                       <td>11 C</td>
                                       <td>24 Feb 2000</td>
                                       <td>J Shaffer</td>
                                       <td>952 512 4909</td>
                                       <td>4771 Oral Lake Road, Golden Valley</td>
                                       <td class="text-right">
                                          <div class="actions">
                                             <a href="edit-student.php" class="btn btn-sm bg-success-light mr-2">
                                             <i class="fas fa-pen"></i>
                                             </a>
                                             <a href="#" class="btn btn-sm bg-danger-light">
                                             <i class="fas fa-trash"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>PRE1534</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a href="student-details.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="User Image"></a>
                                             <a href="student-details.php">Lois A</a>
                                          </h2>
                                       </td>
                                       <td>10 A</td>
                                       <td>22 Jul 2006</td>
                                       <td>Cleary Wong</td>
                                       <td>413 289 1314</td>
                                       <td>2844 Leverton Cove Road, Palmer</td>
                                       <td class="text-right">
                                          <div class="actions">
                                             <a href="edit-student.php" class="btn btn-sm bg-success-light mr-2">
                                             <i class="fas fa-pen"></i>
                                             </a>
                                             <a href="#" class="btn btn-sm bg-danger-light">
                                             <i class="fas fa-trash"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>PRE2153</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a href="student-details.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
                                             <a href="student-details.php">Calvin</a>
                                          </h2>
                                       </td>
                                       <td>9 B</td>
                                       <td>8 Dec 2003</td>
                                       <td>Minnie J Shaffer</td>
                                       <td>701 753 3810</td>
                                       <td>1900 Hidden Meadow Drive, Crete</td>
                                       <td class="text-right">
                                          <div class="actions">
                                             <a href="edit-student.php" class="btn btn-sm bg-success-light mr-2">
                                             <i class="fas fa-pen"></i>
                                             </a>
                                             <a href="#" class="btn btn-sm bg-danger-light">
                                             <i class="fas fa-trash"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>PRE1252</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a href="student-details.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-06.jpg" alt="User Image"></a>
                                             <a href="student-details.php">Joe Kelley</a>
                                          </h2>
                                       </td>
                                       <td>11 C</td>
                                       <td>7 Oct 2000</td>
                                       <td>Vincent Howard</td>
                                       <td>402 221 7523</td>
                                       <td>3979 Ashwood Drive, Omaha</td>
                                       <td class="text-right">
                                          <div class="actions">
                                             <a href="edit-student.php" class="btn btn-sm bg-success-light mr-2">
                                             <i class="fas fa-pen"></i>
                                             </a>
                                             <a href="#" class="btn btn-sm bg-danger-light">
                                             <i class="fas fa-trash"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>PRE1434</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a href="student-details.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-07.jpg" alt="User Image"></a>
                                             <a href="student-details.php">Vincent</a>
                                          </h2>
                                       </td>
                                       <td>10 A</td>
                                       <td>4 Jan 2002</td>
                                       <td>Kelley Joe</td>
                                       <td>402 221 7523</td>
                                       <td>3979 Ashwood Drive, Omaha</td>
                                       <td class="text-right">
                                          <div class="actions">
                                             <a href="edit-student.php" class="btn btn-sm bg-success-light mr-2">
                                             <i class="fas fa-pen"></i>
                                             </a>
                                             <a href="#" class="btn btn-sm bg-danger-light">
                                             <i class="fas fa-trash"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>PRE2345</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a href="student-details.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-08.jpg" alt="User Image"></a>
                                             <a href="student-details.php">Kozma  Tatari</a>
                                          </h2>
                                       </td>
                                       <td>9 A</td>
                                       <td>1 Feb 2006</td>
                                       <td>Lombardi</td>
                                       <td>04 2239 968</td>
                                       <td>Rruga E Kavajes, Condor Center, Tirana</td>
                                       <td class="text-right">
                                          <div class="actions">
                                             <a href="edit-student.php" class="btn btn-sm bg-success-light mr-2">
                                             <i class="fas fa-pen"></i>
                                             </a>
                                             <a href="#" class="btn btn-sm bg-danger-light">
                                             <i class="fas fa-trash"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>PRE2365</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a href="student-details.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
                                             <a href="student-details.php">John Chambers</a>
                                          </h2>
                                       </td>
                                       <td>11 B</td>
                                       <td>13 Sept 2003</td>
                                       <td>Wong Jeffrey</td>
                                       <td>870 663 2334</td>
                                       <td>4667 Sunset Drive, Pine Bluff</td>
                                       <td class="text-right">
                                          <div class="actions">
                                             <a href="edit-student.php" class="btn btn-sm bg-success-light mr-2">
                                             <i class="fas fa-pen"></i>
                                             </a>
                                             <a href="#" class="btn btn-sm bg-danger-light">
                                             <i class="fas fa-trash"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>PRE1234</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a href="student-details.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
                                             <a href="student-details.php">Nathan Humphries</a>
                                          </h2>
                                       </td>
                                       <td>10 B</td>
                                       <td>26 Apr 1994</td>
                                       <td>Stephen Marley</td>
                                       <td>077 3499 9959</td>
                                       <td>86 Lamphey Road, Thelnetham</td>
                                       <td class="text-right">
                                          <div class="actions">
                                             <a href="edit-student.php" class="btn btn-sm bg-success-light mr-2">
                                             <i class="fas fa-pen"></i>
                                             </a>
                                             <a href="#" class="btn btn-sm bg-danger-light">
                                             <i class="fas fa-trash"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
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
      <script src="assets/plugins/datatables/datatables.min.js"></script>
      <script src="assets/js/script.js"></script>
   </body>
   <!-- Mirrored from preschool.dreamguystech.com/php-template/students.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:49 GMT -->
</html>