<!doctype html>
<?php
ob_start();
session_start();
require "../loginCheck.php";

use Classess\Auth\HeadManager;
use Classess\Auth\Manager;
use Classess\Auth\Staff;
?>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard | Core Bank</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.css">
    <link rel="stylesheet" href="../css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="../css/meanmenu.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="css/alerts.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="../css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="../css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="../css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../css/metisMenu/metisMenu-vertical.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="../css/data-table/bootstrap-editable.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="../css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="../style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="../css/form/all-type-forms.css">
    <!-- modernizr JS
		============================================ -->
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="../js/changeTitle.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Header menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="../img/logo/logosn.png" alt="logo" width="50px"/></a>
                <strong><a href="index.php"><img src="../img/logo/logosn.png" alt="logo" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="has-arrow" href="index.php">
								   <span class="educate-icon educate-home icon-wrap"></span>
								   <span class="mini-click-non">Education</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="index.php"><span class="mini-sub-pro">Dashboard v.1</span></a></li>
                                <li><a title="Dashboard v.2" href="index-1.php"><span class="mini-sub-pro">Dashboard v.2</span></a></li>
                                <li><a title="Dashboard v.3" href="index-2.php"><span class="mini-sub-pro">Dashboard v.3</span></a></li>
                                <li><a title="Analytics" href="analytics.php"><span class="mini-sub-pro">Analytics</span></a></li>
                                <li><a title="Widgets" href="widgets.php"><span class="mini-sub-pro">Widgets</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a title="Landing Page" href="events.php" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Event</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-professors.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Professors</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Professors" href="all-professors.php"><span class="mini-sub-pro">All Professors</span></a></li>
                                <li><a title="Add Professor" href="add-professor.php"><span class="mini-sub-pro">Add Professor</span></a></li>
                                <li><a title="Edit Professor" href="edit-professor.php"><span class="mini-sub-pro">Edit Professor</span></a></li>
                                <li><a title="Professor Profile" href="professor-profile.php"><span class="mini-sub-pro">Professor Profile</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-students.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Students</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="all-students.php"><span class="mini-sub-pro">All Students</span></a></li>
                                <li><a title="Add Students" href="add-student.php"><span class="mini-sub-pro">Add Student</span></a></li>
                                <li><a title="Edit Students" href="edit-student.php"><span class="mini-sub-pro">Edit Student</span></a></li>
                                <li><a title="Students Profile" href="student-profile.php"><span class="mini-sub-pro">Student Profile</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.php" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Courses</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="all-courses.php"><span class="mini-sub-pro">All Courses</span></a></li>
                                <li><a title="Add Courses" href="add-course.php"><span class="mini-sub-pro">Add Course</span></a></li>
                                <li><a title="Edit Courses" href="edit-course.php"><span class="mini-sub-pro">Edit Course</span></a></li>
                                <li><a title="Courses Profile" href="course-info.php"><span class="mini-sub-pro">Courses Info</span></a></li>
                                <li><a title="course Payment" href="course-payment.php"><span class="mini-sub-pro">Courses Payment</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.php" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Library</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Library" href="library-assets.php"><span class="mini-sub-pro">Library Assets</span></a></li>
                                <li><a title="Add Library" href="add-library-assets.php"><span class="mini-sub-pro">Add Library Asset</span></a></li>
                                <li><a title="Edit Library" href="edit-library-assets.php"><span class="mini-sub-pro">Edit Library Asset</span></a></li>
                            </ul>
                        </li>
                        <?php
                            if ($loginedUser instanceof Staff) {
            
                        ?>
                        <li>
                            <a class="has-arrow" href="all-courses.php" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Account</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Add account" href="../Account/addAccount.php"><span class="mini-sub-pro">Add Account</span></a></li>
                                <li><a title="View All Account" href="../Account/viewAccount.php"><span class="mini-sub-pro">View All Account</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.php" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Transacation</span></a>
                            <ul class="submenu-angle interface-mini-nb-dp" aria-expanded="false">                                
                                <li><a title="Depositr" href="../Transaction/deposit.php"><span class="mini-sub-pro">Deposit</span></a></li>
                                <li><a title="Withdraw" href="../Transaction/withdrawal.php"><span class="mini-sub-pro">Withdraw</span></a></li>
                                <li><a title="TransferMoney" href="../Transaction/MoneyTransfer.php"><span class="mini-sub-pro">TransferMoney</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.php" aria-expanded="false"><span class="educate-icon educate-form icon-wrap"></span> <span class="mini-click-non">View Transaction</span></a>
                            <ul class="submenu-angle form-mini-nb-dp" aria-expanded="false">
                                <li><a title=">View Deposits" href="../Transaction/viewDeposit.php"><span class="mini-sub-pro">View Deposits</span></a></li>                                
                                <li><a title=">View Withdraws" href="../Transaction/viewWithdrawal.php"><span class="mini-sub-pro">View Withdrews</span></a></li>                                
                                <li><a title=">View Transaction" href="../Transaction/viewMoneyTransfer.php"><span class="mini-sub-pro">View Transfer</span></a></li>                                
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Fixed Deposit</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Create FD" href="../FD/createFD.php"><span class="mini-sub-pro">Create FD</span></a></li>
                                <li><a title="All FD" href="../FD/AllFD.php"><span class="mini-sub-pro">All FD</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Loan</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Request Loan" href="../loan/requestLoan.php"><span class="mini-sub-pro">Request a Loan</span></a></li>
                                <?php
                                    if ($loginedUser instanceof Manager) {                    
                                ?>
                                <li><a title="Approved Loan" href="../loan/pendingLoan.php"><span class="mini-sub-pro">Pending Loan</span></a></li>
                                <li><a title="Approved Loan" href="../loan/ApprovedLoan.php"><span class="mini-sub-pro">Approved Loan</span></a></li>
                                <li><a title="Approved Loan" href="../loan/rejectedLoan.php"><span class="mini-sub-pro">Rejected Loan</span></a></li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </li>
                        <li><a href="../installment/installmentPayment.php"><span class="educate-icon educate-form icon-wrap"></span> <span class="mini-click-non">Payments</span></a></li>
                        <?php
                            }
                            if ($loginedUser instanceof Manager){
                        ?>
                        <li>
                            <a class="has-arrow" href="all-professors.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Staffs</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Staff" href="../manager/all-staff.php"><span class="mini-sub-pro">All Staffs</span></a></li>
                                <li><a title="Add Staff" href="../manager/add-staff.php"><span class="mini-sub-pro">Add Staff</span></a></li>                               
                            </ul>
                        </li> 
                        <li>
                            <a class="has-arrow" href="all-professors.php" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Reports</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Staff" href="../report/monthly Report.php"><span class="mini-sub-pro">Monthly Report</span></a></li>
                                <li><a title="Add Staff" href="../report/annual Report.php"><span class="mini-sub-pro">Annual Report</span></a></li>                               
                            </ul>
                        </li>                        

                        <?php
                            }
                            if ($loginedUser instanceof HeadManager) {
                        ?>
                        <li>
                            <a class="has-arrow" href="mailbox.php" aria-expanded="false"><span class="educate-icon educate-charts icon-wrap"></span> <span class="mini-click-non">Plans</span></a>
                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                <li><a title="Bar Charts" href="../Plan/savingPlan.php"><span class="mini-sub-pro">Saving Plans</span></a></li>
                                <li><a title="Line Charts" href="../Plan/FDplan.php"><span class="mini-sub-pro">FD Plans</span></a></li>                                
                                <li><a title="Line Charts" href="../Plan/loanPlan.php"><span class="mini-sub-pro">Loan Interest Plans</span></a></li>                                
                            </ul>
                        </li>
                        <!-- Branches sidebar-->
                        <li>
                            <a class="has-arrow" href="all-courses.php" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Branches</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Branches List" href="../Branch/branch.php"><span class="mini-sub-pro">Branches List</span></a></li>
                                <li><a title="Add Branches" href="../Branch/add-branch.php"><span class="mini-sub-pro">Add Branch</span></a></li>
                            </ul>
                        </li>
                        <!-- Branches sidebar-->

                        <li>
                            <a class="has-arrow" href="all-professors.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Managers</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Staff" href="../Head_manager/all-manager.php"><span class="mini-sub-pro">All Managers</span></a></li>
                                <li><a title="Add Staff" href="../Head_manager/add-manger.php"><span class="mini-sub-pro">Add Manager</span></a></li>                               
                            </ul>
                        </li>
                        <?php
                            }
                        ?>
                        <li>
                            <a class="has-arrow" href="all-courses.php" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Departments</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Departments List" href="departments.php"><span class="mini-sub-pro">Departments List</span></a></li>
                                <li><a title="Add Departments" href="add-department.php"><span class="mini-sub-pro">Add Departments</span></a></li>
                                <li><a title="Edit Departments" href="edit-department.php"><span class="mini-sub-pro">Edit Departments</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.php" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">Mailbox</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="mailbox.php"><span class="mini-sub-pro">Inbox</span></a></li>
                                <li><a title="View Mail" href="mailbox-view.php"><span class="mini-sub-pro">View Mail</span></a></li>
                                <li><a title="Compose Mail" href="mailbox-compose.php"><span class="mini-sub-pro">Compose Mail</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.php" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Interface</span></a>
                            <ul class="submenu-angle interface-mini-nb-dp" aria-expanded="false">
                                <li><a title="Google Map" href="google-map.php"><span class="mini-sub-pro">Google Map</span></a></li>
                                <li><a title="Data Maps" href="data-maps.php"><span class="mini-sub-pro">Data Maps</span></a></li>
                                <li><a title="Pdf Viewer" href="pdf-viewer.php"><span class="mini-sub-pro">Pdf Viewer</span></a></li>
                                <li><a title="X-Editable" href="x-editable.php"><span class="mini-sub-pro">X-Editable</span></a></li>
                                <li><a title="Code Editor" href="code-editor.php"><span class="mini-sub-pro">Code Editor</span></a></li>
                                <li><a title="Tree View" href="tree-view.php"><span class="mini-sub-pro">Tree View</span></a></li>
                                <li><a title="Preloader" href="preloader.php"><span class="mini-sub-pro">Preloader</span></a></li>
                                <li><a title="Images Cropper" href="images-cropper.php"><span class="mini-sub-pro">Images Cropper</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.php" aria-expanded="false"><span class="educate-icon educate-charts icon-wrap"></span> <span class="mini-click-non">Charts</span></a>
                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                <li><a title="Bar Charts" href="bar-charts.php"><span class="mini-sub-pro">Bar Charts</span></a></li>
                                <li><a title="Line Charts" href="line-charts.php"><span class="mini-sub-pro">Line Charts</span></a></li>
                                <li><a title="Area Charts" href="area-charts.php"><span class="mini-sub-pro">Area Charts</span></a></li>
                                <li><a title="Rounded Charts" href="rounded-chart.php"><span class="mini-sub-pro">Rounded Charts</span></a></li>
                                <li><a title="C3 Charts" href="c3.php"><span class="mini-sub-pro">C3 Charts</span></a></li>
                                <li><a title="Sparkline Charts" href="sparkline.php"><span class="mini-sub-pro">Sparkline Charts</span></a></li>
                                <li><a title="Peity Charts" href="peity.php"><span class="mini-sub-pro">Peity Charts</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Data Tables</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="static-table.php"><span class="mini-sub-pro">Static Table</span></a></li>
                                <li><a title="Data Table" href="data-table.php"><span class="mini-sub-pro">Data Table</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.php" aria-expanded="false"><span class="educate-icon educate-form icon-wrap"></span> <span class="mini-click-non">Forms Elements</span></a>
                            <ul class="submenu-angle form-mini-nb-dp" aria-expanded="false">
                                <li><a title="Basic Form Elements" href="basic-form-element.php"><span class="mini-sub-pro">Bc Form Elements</span></a></li>
                                <li><a title="Advance Form Elements" href="advance-form-element.php"><span class="mini-sub-pro">Ad Form Elements</span></a></li>
                                <li><a title="Password Meter" href="password-meter.php"><span class="mini-sub-pro">Password Meter</span></a></li>
                                <li><a title="Multi Upload" href="multi-upload.php"><span class="mini-sub-pro">Multi Upload</span></a></li>
                                <li><a title="Text Editor" href="tinymc.php"><span class="mini-sub-pro">Text Editor</span></a></li>
                                <li><a title="Dual List Box" href="dual-list-box.php"><span class="mini-sub-pro">Dual List Box</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.php" aria-expanded="false"><span class="educate-icon educate-apps icon-wrap"></span> <span class="mini-click-non">App views</span></a>
                            <ul class="submenu-angle app-mini-nb-dp" aria-expanded="false">
                                <li><a title="Notifications" href="notifications.php"><span class="mini-sub-pro">Notifications</span></a></li>
                                <li><a title="Alerts" href="alerts.php"><span class="mini-sub-pro">Alerts</span></a></li>
                                <li><a title="Modals" href="modals.php"><span class="mini-sub-pro">Modals</span></a></li>
                                <li><a title="Buttons" href="buttons.php"><span class="mini-sub-pro">Buttons</span></a></li>
                                <li><a title="Tabs" href="tabs.php"><span class="mini-sub-pro">Tabs</span></a></li>
                                <li><a title="Accordion" href="accordion.php"><span class="mini-sub-pro">Accordion</span></a></li>
                            </ul>
                        </li>
                        <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Pages</span></a>
                            <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                                <li><a title="Login" href="login.php"><span class="mini-sub-pro">Login</span></a></li>
                                <li><a title="Register" href="register.php"><span class="mini-sub-pro">Register</span></a></li>
                                <li><a title="Lock" href="lock.php"><span class="mini-sub-pro">Lock</span></a></li>
                                <li><a title="Password Recovery" href="password-recovery.php"><span class="mini-sub-pro">Password Recovery</span></a></li>
                                <li><a title="404 Page" href="404.php"><span class="mini-sub-pro">404 Page</span></a></li>
                                <li><a title="500 Page" href="500.php"><span class="mini-sub-pro">500 Page</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
        <!-- End Header menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.php"><img class="main-logo" src="../img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                </li>                                                                    
                                                <li class="nav-item"><a href="#" class="nav-link">Complain</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="../img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>                                                                                                                                                                    
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>                                                                                                                   
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Pending Loan</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="../<?php echo $loginedUser->getDp()?>" alt="" />
															<span class="admin-name"><?php echo $loginedUser->getFname(); ?></span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">                                                        
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>                                                        
                                                        <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Change Password</a>
                                                        </li>
                                                        <li><a href="../logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.php">Dashboard v.1</a></li>
                                                <li><a href="index-1.php">Dashboard v.2</a></li>
                                                <li><a href="index-3.php">Dashboard v.3</a></li>
                                                <li><a href="analytics.php">Analytics</a></li>
                                                <li><a href="widgets.php">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="events.php">Event</a></li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="all-professors.php">All Professors</a>
                                                </li>
                                                <li><a href="add-professor.php">Add Professor</a>
                                                </li>
                                                <li><a href="edit-professor.php">Edit Professor</a>
                                                </li>
                                                <li><a href="professor-profile.php">Professor Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="all-students.php">All Students</a>
                                                </li>
                                                <li><a href="add-student.php">Add Student</a>
                                                </li>
                                                <li><a href="edit-student.php">Edit Student</a>
                                                </li>
                                                <li><a href="student-profile.php">Student Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="all-courses.php">All Courses</a>
                                                </li>
                                                <li><a href="add-course.php">Add Course</a>
                                                </li>
                                                <li><a href="edit-course.php">Edit Course</a>
                                                </li>
                                                <li><a href="course-profile.php">Courses Info</a>
                                                </li>
                                                <li><a href="course-payment.php">Courses Payment</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="library-assets.php">Library Assets</a>
                                                </li>
                                                <li><a href="add-library-assets.php">Add Library Asset</a>
                                                </li>
                                                <li><a href="edit-library-assets.php">Edit Library Asset</a>
                                                </li>
                                            </ul>
                                        </li>            

                                        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demodepart" class="collapse dropdown-header-top">
                                                <li><a href="departments.php">Departments List</a>
                                                </li>
                                                <li><a href="add-department.php">Add Departments</a>
                                                </li>
                                                <li><a href="edit-department.php">Edit Departments</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.php">Inbox</a>
                                                </li>
                                                <li><a href="mailbox-view.php">View Mail</a>
                                                </li>
                                                <li><a href="mailbox-compose.php">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.php">Google Map</a>
                                                </li>
                                                <li><a href="data-maps.php">Data Maps</a>
                                                </li>
                                                <li><a href="pdf-viewer.php">Pdf Viewer</a>
                                                </li>
                                                <li><a href="x-editable.php">X-Editable</a>
                                                </li>
                                                <li><a href="code-editor.php">Code Editor</a>
                                                </li>
                                                <li><a href="tree-view.php">Tree View</a>
                                                </li>
                                                <li><a href="preloader.php">Preloader</a>
                                                </li>
                                                <li><a href="images-cropper.php">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.php">Bar Charts</a>
                                                </li>
                                                <li><a href="line-charts.php">Line Charts</a>
                                                </li>
                                                <li><a href="area-charts.php">Area Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.php">Rounded Charts</a>
                                                </li>
                                                <li><a href="c3.php">C3 Charts</a>
                                                </li>
                                                <li><a href="sparkline.php">Sparkline Charts</a>
                                                </li>
                                                <li><a href="peity.php">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.php">Static Table</a>
                                                </li>
                                                <li><a href="data-table.php">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.php">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.php">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.php">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.php">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.php">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.php">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.php">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.php">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.php">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.php">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.php">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.php">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.php">Login</a>
                                                </li>
                                                <li><a href="register.php">Register</a>
                                                </li>
                                                <li><a href="lock.php">Lock</a>
                                                </li>
                                                <li><a href="password-recovery.php">Password Recovery</a>
                                                </li>
                                                <li><a href="404.php">404 Page</a></li>
                                                <li><a href="500.php">500 Page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->