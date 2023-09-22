<?php
  session_start();
  if(!isset($_SESSION['auth'])){
    session_unset();
    header("Location: ./login.php");
  }
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Management Admin</title>

    <link rel="icon" href="img/mini_logo.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

    <!-- date picker -->
     <link rel="stylesheet" href="vendors/datepicker/date-picker.css" />

     <link rel="stylesheet" href="vendors/vectormap-home/vectormap-2.0.2.css" />
     
     <!-- scrollabe  -->
     <link rel="stylesheet" href="vendors/scroll/scrollable.css" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />
    <!-- text editor css -->
    <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />
    <!-- morris css -->
    <link rel="stylesheet" href="vendors/morris/morris.css">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

    <!-- menu css  -->
    <link rel="stylesheet" href="css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>
<body class="crm_body_bg">
    


<!-- main content part here -->
 
 <!-- sidebar  -->
<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href="index.html"><img src="img/logo.png" alt=""></a>
        <a class="small_logo" href="index.html"><img src="img/mini_logo.png" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="">
            <a class="has-arrow" href="index.html#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/dashboard.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>User Management </span>
                </div>
            </a>
            <ul>
                <li><a href="index_2.html">Default</a></li>
              <li><a href="index_3.html">Dark Sidebar</a></li>
              <li><a href="index.html">Light Sidebar</a></li>
            </ul>
        </li>
        <li class="">
            <a class="has-arrow" href="index.html#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/2.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Application </span>
                </div>
            </a>
            <ul>
              <li><a href="editor.html">editor</a></li>
              <li><a href="mail_box.html">Mail Box</a></li>
              <li><a href="chat.html">Chat</a></li>
              <li><a href="faq.html">FAQ</a></li>
            </ul>
        </li>
        <li class="">
            <a   class="has-arrow" href="index.html#" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="img/menu-icon/3.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Pages</span>
            </div>
            </a>
            <ul>
              <li><a href="login.html">Login</a></li>
              <li><a href="resister.html">Register</a></li>
              <li><a href="error_400.html">Error 404</a></li>
              <li><a href="error_500.html">Error 500</a></li>
              <li><a href="forgot_pass.html">Forgot Password</a></li>
              <li><a href="gallery.html">Gallery</a></li>
            </ul>
        </li>
        <li class="">
            <a   class="has-arrow" href="index.html#" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="img/menu-icon/4.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Admins</span>
            </div>
            </a>
            <ul>
              <li><a href="admin_list.html">Admin List</a></li>
              <li><a href="add_new_admin.html">Add New Admin</a></li>
            </ul>
        </li>
        <li class="">
            <a   class="has-arrow" href="index.html#" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="img/menu-icon/11.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Role & Permissions</span>
            </div>
            </a>
            <ul>
              <li><a href="module_setting.html">Module Setting</a></li>
              <li><a href="role_permissions.html">Role & Permissions</a></li>
            </ul>
        </li>
        <li class="">
            <a  href="navs.html" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="img/menu-icon/12.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Navs</span>
            </div>
            </a>
        </li>
        <li class="">
            <a   class="has-arrow" href="index.html#" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="img/menu-icon/5.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Users</span>
            </div>
            </a>
            <ul>
              <li><a href="user_list.html">Users List</a></li>
              <li><a href="add_new_user.html">Add New User</a></li>
            </ul>
        </li>
        <li>
            <a href="Builder.html" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/6.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Builder </span>
                </div>
            </a>
        </li>
        <li class="">
            <a  href="invoice.html" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="img/menu-icon/7.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Invoice</span>
            </div>
            </a>
        </li>
        

        <li class="">
          <a   class="has-arrow" href="index.html#" aria-expanded="false">
            <div class="nav_icon_small">
                <img src="img/menu-icon/12.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Maps</span>
            </div>
          </a>
          <ul>
            <li><a href="mapjs.html">Maps JS</a></li>
            <li><a href="vector_map.html">Vector Maps</a></li>
          </ul>
        </li>


      </ul>
</nav>
 <!--/ sidebar  -->

 <section class="main_content dashboard_part large_header_bg">
        <!-- menu  -->
    <div class="container-fluid no-gutters">
        <div class="row">
            <div class="col-lg-12 p-0 ">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="line_icon open_miniSide d-none d-lg-block">
                        <img src="img/line_img.png" alt="">
                    </div>
                    <div class="serach_field-area d-flex align-items-center">
                        <div class="search_inner">
                            <form action="index.html#">
                                <div class="search_field">
                                    <input type="text" placeholder="Search">
                                </div>
                                <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                            </form>
                        </div>
                    </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                            <li>
                                <a class="bell_notification_clicker" href="index.html#"> <img src="img/icon/bell.svg" alt="">
                                    <span>2</span>
                                </a>
                                <!-- Menu_NOtification_Wrap  -->
                            <div class="Menu_NOtification_Wrap">
                                <div class="notification_Header">
                                    <h4>Notifications</h4>
                                </div>
                                <div class="Notification_body">
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="index.html#"><img src="img/staf/2.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="index.html#"><h5>Cool Marketing </h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="index.html#"><img src="img/staf/4.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="index.html#"><h5>Awesome packages</h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="index.html#"><img src="img/staf/3.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="index.html#"><h5>what a packages</h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="index.html#"><img src="img/staf/2.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="index.html#"><h5>Cool Marketing </h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="index.html#"><img src="img/staf/4.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="index.html#"><h5>Awesome packages</h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="index.html#"><img src="img/staf/3.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="index.html#"><h5>what a packages</h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nofity_footer">
                                    <div class="submit_button text-center pt_20">
                                        <a href="index.html#" class="btn_1">See More</a>
                                    </div>
                                </div>
                            </div>
                            <!--/ Menu_NOtification_Wrap  -->
                            </li>
                            <li>
                                <a class="CHATBOX_open" href="index.html#"> <img src="img/icon/msg.svg" alt=""> <span>2</span>  </a>
                            </li>
                        </div>
                        <div class="profile_info">
                          <div class="row">
                          <h4><?=$_SESSION['auth']['name']?></h4>

                            <img src="<?= isset($_SESSION['auth']['profile']) ? "../uploades/user".$_SESSION['auth']['profile'] : "https://api.dicebear.com/7.x/initials/svg?seed=<?=" .$_SESSION['auth']['name']?> " alt="#">

                          </div>
                            <div class="profile_info_iner">
                                <div class="profile_author_name">
                                    <p>Neurologist </p>
                                    <h5>Dr. Robar Smith</h5>
                                </div>
                                <div class="profile_info_details">
                                    <a href="./profile.php">My Profile </a>
                                    <a href="index.html#">Settings</a>
                                    <a href="../controller/logOut.php">Log Out </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
