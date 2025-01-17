<!DOCTYPE html>
<html lang="en">
<?php
require "config.php";
$user = $_SESSION['user'];
$course_array = "select name from course where user_id = ".$user['id'];
$c_a = mysqli_query($conn, $course_array);
if($pro = mysqli_fetch_assoc($c_a)){
  $cartProductNumber = sizeof($pro);
} else {
  $cartProductNumber = 0;
}
?>

<!-- Mirrored from preschool.dreamguystech.com/php-template/teachers.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Teachers</title>

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
                                    $carta = "select name from course where user_id = ".$user['id'];
                                    $result = mysqli_query($conn, $carta);
                                    if($prod = mysqli_fetch_assoc($result)){
                                    ?>
                                    <li class="notification-message">
                                        <a href="#">
                                            <div class="media">
                                                
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title"><?php echo $prod['name'] ?></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>      
                                    </li>
                                <?php } ?>
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
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>

            </ul>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span><?php if ($user['role'] == 'Admin') { ?> Admin Dashboard<?php } elseif ($user['role'] == 'Teacher') { ?>Teacher Dashboard<?php } ?>
                            </span>
                        </li>
                        <?php if ($user['role'] == 'Admin') { ?>
                            <li class="submenu ">
                                <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="students.php">Student List</a></li>
                                    <li><a href="add-student.php">Student Add</a></li>
                                </ul>
                            </li>
                            <li class="submenu ">
                                <a href="#"><i class="fas fa-book-reader"></i> <span> Subscribe</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="subscribes.php">Subscribe List</a></li>
                                    <li><a href="add-subscribe.php">Subscribe Add</a></li>
                                </ul>
                            </li>
                        <?php } if ($user['role'] == 'Teacher' || $user['role'] == 'Admin') { ?>

                            <li class="submenu active">
                                <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="teachers.php" class="active">Teacher List</a></li>
                                    <?php if ($user['role'] == 'Admin') { ?>
                                        <li><a href="add-teacher.php">Teacher Add</a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
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
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Teachers</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Teachers</li>
                            </ul>
                        </div>
                        <div class="col-auto text-right float-right ml-auto">
                            <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
                            <a href="add-teacher.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <?php
                if (isset($_GET['user_id'])) {
                    $delete = "delete from user where id = " . $_GET['user_id'];
                    $$resulti = mysqli_query($conn, $delete);
                }
                ?>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                                <form method="POST" class="col-md-60">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center mb-0 datatable">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Surname</th>
                                                    <th>Gender</th>
                                                    <th>Username</th>


                                                    <th class="text">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "select * from user where role = 'Teacher'";
                                                $result = mysqli_query($conn, $sql);
                                                if ($result->num_rows > 0) {
                                                    while ($product = $result->fetch_assoc()) {


                                                ?>

                                                        <tr>
                                                            <td><?php echo $product['id']; ?></td>
                                                            <td><?php echo $product['name']; ?></td>
                                                            <td><?php echo $product['surname']; ?></td>
                                                            <td><?php echo $product['gender']; ?></td>
                                                            <td><?php echo $product['username']; ?></td>
                                                            <td>
                                                                <div>
                                                                
                                                                    <?php if ($user['role'] == 'Admin') { ?>
                                                                        <a href="edit-teacher.php?id=<?php echo $product['id']; ?>" class="btn btn-sm bg-success-light mr-2">
                                                                            <i class="fas fa-pen"></i>
                                                                        </a>
                                                                        <a href="teachers.php?user_id=<?php echo $product['id']; ?>" class="btn btn-sm bg-danger-light" onClick="return confirm('Do you really want to delete');">
                                                                            <i class="fa fa-trash"></i></a>

                                                                    <?php } ?>

                                                                    <a href="teacher-details.php?user=<?php echo $product['id']; ?>" class="btn btn-info btn-sm"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                                                                </div>

                                                            </td>
                                                        </tr>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                </form>
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

<!-- Mirrored from preschool.dreamguystech.com/php-template/teachers.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->


</html>