                <!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com

*/ -->
                <!DOCTYPE html>
                <html lang="en">
                <?php
                include("../connection/connect.php");
                error_reporting(0);
                session_start();

                ?>

                <head>
                    <!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com

*/ -->

                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">

                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <meta name="description" content="">
                    <meta name="author" content="">
                    <title>All Users</title>
                    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
                    <link href="css/helper.css" rel="stylesheet">
                    <link href="css/style.css" rel="stylesheet">
                </head>
                <!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com

*/ -->

                <body class="fix-header fix-sidebar">

                    <div class="preloader">
                        <svg class="circular" viewBox="25 25 50 50">
                            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                        </svg>
                    </div>
                    <div id="main-wrapper">

                        <div class="header">
                            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="dashboard.php">

                                        <span><img src="images/icn.png" alt="homepage" class="dark-logo" /></span>
                                    </a>
                                </div>
                                <div class="navbar-collapse">

                                    <ul class="navbar-nav mr-auto mt-md-0">

                                        <!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com

*/ -->



                                    </ul>

                                    <ul class="navbar-nav my-lg-0">



                                        <li class="nav-item dropdown">

                                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                                <ul>
                                                    <li>
                                                        <div class="drop-title">Notifications</div>
                                                    </li>

                                                    <li>
                                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com

*/ -->


                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/bookingSystem/user-icn.png" alt="user" class="profile-pic" /></a>
                                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                                <ul class="dropdown-user">
                                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com

*/ -->


                        <div class="left-sidebar">

                            <div class="scroll-sidebar">

                                <nav class="sidebar-nav">
                                    <ul id="sidebarnav">
                                        <li class="nav-devider"></li>
                                        <li class="nav-label">Home</li>
                                        <li> <a href="dashboard.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                                        <li class="nav-label">Log</li>
                                        <li> <a href="all_users.php"> <span><i class="fa fa-user f-s-20 "></i></span><span>Users</span></a></li>
                                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Restaurant</span></a>
                                            <ul aria-expanded="false" class="collapse">
                                                <li><a href="all_restaurant.php">All Restaurants</a></li>
                                                <li><a href="add_category.php">Add Category</a></li>
                                                <li><a href="add_restaurant.php">Add Restaurant</a></li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a class="has-arrow" href="#" aria-expanded="false">
                                                <i class="fa fa-archive f-s-20 color-warning"></i>
                                                <span class="hide-menu">Grocery</span>
                                            </a>
                                            <ul aria-expanded="false" class="collapse">
                                                <li><a href="add_grocery.php">Add Grocery</a></li>
                                                <li><a href="all_groceries.php">All Groceries</a></li>
                                            </ul>
                                        </li>
                                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery" aria-hidden="true"></i><span class="hide-menu">Menu</span></a>
                                            <ul aria-expanded="false" class="collapse">
                                                <li><a href="all_menu.php">All Menues</a></li>
                                                <li><a href="add_menu.php">Add Menu</a></li>
                                                <!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com

*/ -->


                                            </ul>
                                        </li>

                                        <li> <a href="all_orders.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Orders</span></a></li>

                                    </ul>
                                </nav>

                            </div>

                        </div>
                        <!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com

*/ -->

                        <div class="page-wrapper">
                            <div style="padding-top: 10px;">
                                <marquee onMouseOver="this.stop()" onMouseOut="this.start()"> <a href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a> is the sole owner of this script. It is not suitable for personal use. And releasing it in demo version. Besides, it is being provided for free only from <a href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a>. For any of your problems contact us on <a href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a> facebook group / page or message <a href="https://www.facebook.com/dev.mhrony">MH RONY</a> on facebook. Thanks for staying with <a href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a>.</marquee>
                            </div>

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">

                                        <div class="col-lg-12">
                                            <div class="card card-outline-primary">
                                                <div class="card-header">
                                                    <h4 class="m-b-0 text-white">All Users</h4>
                                                </div>

                                                <div class="table-responsive m-t-40">
                                                    <table id="myTable" class="table table-bordered table-striped table-hover">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th>Username</th>
                                                                <th>FirstName</th>
                                                                <th>LastName</th>
                                                                <th>Email</th>
                                                                <th>Phone</th>
                                                                <th>Address</th>
                                                                <th>Reg-Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com

*/ -->


                                                            <?php
                                                            $sql = "SELECT * FROM users order by u_id desc";
                                                            $query = mysqli_query($db, $sql);

                                                            if (!mysqli_num_rows($query) > 0) {
                                                                echo '<td colspan="7"><center>No Users</center></td>';
                                                            } else {
                                                                while ($rows = mysqli_fetch_array($query)) {



                                                                    echo ' <tr><td>' . $rows['username'] . '</td>
																								<td>' . $rows['f_name'] . '</td>
																								<td>' . $rows['l_name'] . '</td>
																								<td>' . $rows['email'] . '</td>
																								<td>' . $rows['phone'] . '</td>
																								<td>' . $rows['address'] . '</td>																								
																								<td>' . $rows['date'] . '</td>
																									 <td><a href="delete_users.php?user_del=' . $rows['u_id'] . '" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a> 
																									 <a href="update_users.php?user_upd=' . $rows['u_id'] . '" " class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="fa fa-edit"></i></a>
																									</td></tr>';
                                                                }
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com

*/ -->

                    </div>
                    <?php include "include/footer.php" ?>

                    </div>

                    </div>
                    <!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com

*/ -->

                    <script src="js/lib/jquery/jquery.min.js"></script>>
                    <script src="js/lib/bootstrap/js/popper.min.js"></script>
                    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
                    <script src="js/jquery.slimscroll.js"></script>
                    <script src="js/sidebarmenu.js"></script>
                    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
                    <script src="js/custom.min.js"></script>

                    <!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com

*/ -->

                </body>

                </html>
                <!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com

*/ -->