<!DOCTYPE html>
<html lang="en">
<?php
   require "config.php";
   require "authentication.php";
   studentAccess();
   $user = $_SESSION['user'];
   $title = "Wllcome ".$user['name']." ".$user['surname']."!";

   $cart = "select course_id from student_course where user_id = ".$user['id'];
   $result = mysqli_query($conn, $cart);

   if ($product = mysqli_fetch_assoc($result)) {

    $course_array = "select name from course where id = '".$product."'";
    $c_a = mysqli_query($conn, $course_array);
    $pro = mysqli_fetch_assoc($c_a);

      $cartProductNumber = sizeof($product);
   } else {
      $cartProductNumber = 0;
   }
   ?>
<!-- Mirrored from preschool.dreamguystech.com/php-template/student-dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:43 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Dashboard</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/simple-calendar/simple-calendar.css">

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
                    <i class="bi-cart-fill me-1"></i> Course
                                <span class="badge bg-dark text-white ms-1 rounded-pill"><?php echo $cartProductNumber ?></span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Courses</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                    <?php 
                                    $carta = "select course_id from student_course where user_id = ".$user['id'];
                                    $result = mysqli_query($conn, $carta);
                                    if($prod = mysqli_fetch_assoc($result)){
                                    $sql = "select name from course where id = '".$prod['course_id']."'";
                                            $resultat = mysqli_query($conn, $sql);
                                            if($produkt = mysqli_fetch_assoc($resultat)){ ?>
                                    <li class="notification-message">
                                        <a href="#">
                                            <div class="media">
                                                
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title"><?php echo $produkt['name'] ?></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>      
                                    </li>
                                <?php }} ?>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg"
                                width="31" alt="Ryan Taylor"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="assets/img/profiles/avatar-01.jpg" alt="User Image"
                                    class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>Ryan Taylor</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="profile.php">My Profile</a>
                        <a class="dropdown-item" href="inbox.php">Inbox</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>

            </ul>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                    <span><?php if($user['role'] == 'Admin'){?> Admin Dashboard<?php }elseif($user['role'] == 'Student'){?>Student Dashboard<?php } ?>
                            </span>
                        </li>
                        <?php if($user['role'] == 'Student' || $user['role'] == 'Admin') {?>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="students.php">Student List</a></li>
                                <?php if($user['role'] == 'Admin'){?>
                                <li><a href="add-student.php">Student Add</a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="submenu ">
                        <a href="#"><i class="fas fa-book-reader"></i> <span> Subscribe</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="subscribes.php" >Subscribe List</a></li>
                           <li><a href="add-subscribe.php">Subscribe Add</a></li>
                        </ul>
                     </li>
                     <?php }if($user['role'] == 'Admin'){?>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="teachers.php">Teacher List</a></li>
                                <li><a href="add-teacher.php">Teacher Add</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="subjects.php">Subject List</a></li>
                                <li><a href="add-subject.php">Subject Add</a></li>
                            </ul>
                        </li>
                        <li class="submenu ">
                                <a href="#"><i class="fas fa-book-reader"></i> <span> Subscribe Grade</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="subscribes-grade.php">Subscribe List</a></li>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title"><?php echo $title?></h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Student Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-nine w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <div class="db-info">
                                        <h3>04/06</h3>
                                        <h6>All Courses</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-six w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                    <div class="db-info">
                                        <h3>40/60</h3>
                                        <h6>All Projects</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-ten w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa-clipboard-list"></i>
                                    </div>
                                    <div class="db-info">
                                        <h3>30/50</h3>
                                        <h6>Test Attended</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-eleven w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-icon">
                                        <i class="fas fa-clipboard-check"></i>
                                    </div>
                                    <div class="db-info">
                                        <h3>15/20</h3>
                                        <h6>Test Passed</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-9">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Today’s Lesson</h5>
                                    </div>
                                    <div class="col-6">
                                        <span class="float-right view-link"><a href="#">View All Courses</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="dash-circle">
                                <div class="row">
                                    <div class="col-12 col-lg-6 col-xl-6 dash-widget3">
                                        <div class="card-body dash-widget1">
                                            <div class="circle-bar circle-bar2">
                                                <div class="circle-graph2" data-percent="20">
                                                    <b>20%</b>
                                                </div>
                                                <h6>Lesson Learned</h6>
                                                <h4>10 <span>/ 50</span></h4>
                                            </div>
                                            <div class="dash-details">
                                                <h4>Facilisi etiam</h4>
                                                <ul>
                                                    <li><i class="fas fa-clock"></i> 2.30pm - 3.30pm</li>
                                                    <li><i class="fas fa-book-open"></i> 5 Lessons</li>
                                                    <li><i class="fas fa-hourglass-end"></i> 60 Minutes</li>
                                                    <li><i class="fas fa-clipboard-check"></i> 5 Asignment</li>
                                                </ul>
                                                <div class="dash-btn">
                                                    <button type="submit" class="btn btn-info btn-border">Skip</button>
                                                    <button type="submit" class="btn btn-info">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-xl-6 dash-widget4">
                                        <div class="card-body dash-widget1 dash-widget2">
                                            <div class="circle-bar circle-bar3">
                                                <div class="circle-graph3" data-percent="50">
                                                    <b>50%</b>
                                                </div>
                                                <h6>Lesson Learned</h6>
                                                <h4>25 <span>/ 50</span></h4>
                                            </div>
                                            <div class="dash-details">
                                                <h4>Augue mauris</h4>
                                                <ul>
                                                    <li><i class="fas fa-clock"></i> 3.30pm - 4.30pm</li>
                                                    <li><i class="fas fa-book-open"></i> 6 Lessons</li>
                                                    <li><i class="fas fa-hourglass-end"></i> 60 Minutes</li>
                                                    <li><i class="fas fa-clipboard-check"></i> 6 Asignment</li>
                                                </ul>
                                                <div class="dash-btn">
                                                    <button type="submit" class="btn btn-info btn-border">Skip</button>
                                                    <button type="submit" class="btn btn-info">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-12 col-xl-8 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="card-title">Learning Activity</h5>
                                            </div>
                                            <div class="col-6">
                                                <ul class="list-inline-group text-right mb-0 pl-0">
                                                    <li class="list-inline-item">
                                                        <div class="form-group mb-0 amount-spent-select">
                                                            <select class="form-control form-control-sm">
                                                                <option>Weekly</option>
                                                                <option>Monthly</option>
                                                                <option>Yearly</option>
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
                            <div class="col-12 col-lg-12 col-xl-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header">
                                        <h5 class="card-title">Learning History</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="teaching-card">
                                            <ul class="activity-feed">
                                                <li class="feed-item">
                                                    <div class="feed-date1">Sep 05, 9 am - 10 am (60min)</div>
                                                    <span class="feed-text1"><a>Lorem ipsum dolor</a></span>
                                                    <p><span>In Progress</span></p>
                                                </li>
                                                <li class="feed-item">
                                                    <div class="feed-date1">Sep 04, 2 pm - 3 pm (70min)</div>
                                                    <span class="feed-text1"><a>Et dolore magna</a></span>
                                                    <p>Completed</p>
                                                </li>
                                                <li class="feed-item">
                                                    <div class="feed-date1">Sep 02, 1 pm - 2 am (80min)</div>
                                                    <span class="feed-text1"><a>Exercitation ullamco</a></span>
                                                    <p><span>In Progress</span></p>
                                                </li>
                                                <li class="feed-item">
                                                    <div class="feed-date1">Aug 30, 10 am - 12 pm (90min)</div>
                                                    <span class="feed-text1"><a>Occaecat cupidatat</a></span>
                                                    <p>Completed</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-xl-3 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h5 class="card-title">Calendar</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="calendar-doctor" class="calendar-container"></div>
                                <div class="calendar-info calendar-info1">
                                    <div class="calendar-details">
                                        <p>09 am</p>
                                        <h6 class="calendar-blue d-flex justify-content-between align-items-center">
                                            Fermentum <span>09am - 10pm</span></h6>
                                    </div>
                                    <div class="calendar-details">
                                        <p>10 am</p>
                                        <h6 class="calendar-violet d-flex justify-content-between align-items-center">
                                            Pharetra et <span>10am - 11am</span></h6>
                                    </div>
                                    <div class="calendar-details">
                                        <p>11 am</p>
                                        <h6 class="calendar-red d-flex justify-content-between align-items-center">Break
                                            <span>11am - 11.30am</span></h6>
                                    </div>
                                    <div class="calendar-details">
                                        <p>12 pm</p>
                                        <h6 class="calendar-orange d-flex justify-content-between align-items-center">
                                            Massa <span>11.30am - 12.00pm</span></h6>
                                    </div>
                                    <div class="calendar-details">
                                        <p>09 am</p>
                                        <h6 class="calendar-blue d-flex justify-content-between align-items-center">
                                            Fermentum <span>09am - 10pm</span></h6>
                                    </div>
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

    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>

    <script src="assets/plugins/simple-calendar/jquery.simple-calendar.js"></script>
    <script src="assets/js/calander.js"></script>

    <script src="assets/js/circle-progress.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/php-template/student-dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:43 GMT -->

</html>