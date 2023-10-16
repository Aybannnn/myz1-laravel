<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('style/homepage.css')}}">
    <link rel="stylesheet" href="{{url('style/responsive.css')}}">
    <link rel="stylesheet" href="{{url('style/main.css')}}">
    <link rel="stylesheet" href="{{url('style/animation.css')}}">
    <title>myZ1 Homepage</title>
</head>
<style>
    main{
        animation: transitionIn-Y-bottom 0.5s;
    }
    .right-section{
        animation: transitionIn-Y-bottom  0.5s;
    }
</style>
<body>

<div class="page-header">
    <img src="{{asset('images/parts/Screenshot 2023-09-29 082533.png')}}">
</div>
<!--HEADER-->
    <div class="container-fluid">
        <!--SIDEBAR-->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="images/images/zone-grn-2-1 (2).png">
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar close">
                <ul class="nav-links">
                    <li>
                        <a href="../user/user-homepage.php" class="active">
                            <span class="material-icons-sharp">
                                home
                            </span>
                            <h3>Homepage</h3>
                        </a>
                    </li>
                    <li>
                        <a href="../user/user-booking.php">
                            <span class="material-icons-sharp">
                                add_circle
                            </span>
                            <h3>Add Booking</h3>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="#">Equipment</a></li>
                            <li><a href="#">Services</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span class="material-icons-sharp">
                                report
                            </span>
                            <h3>Report</h3>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="create.html">Create Report</a></li>
                            <li><a href="#">Track Report</a></li>
                            <li><a href="#">View Status</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span class="material-icons-sharp">
                                question_answer
                            </span>
                            <h3>FAQ</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="material-icons-sharp">
                                feedback
                            </span>
                            <h3>Feedback</h3>
                        </a>
                    </li>
                    <li>
                        <a href="../logout.php">
                            <span class="material-icons-sharp">
                                logout
                            </span>
                            <h3>Logout</h3>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <!--SIDEBAR-->

        <!--MIDDLE CONTENT-->
        <main>
            <div class="announcement-bg"></div>
                <h1><span>ANNOUNCEMENTS</span></h1>
            <!--FEATURED ANNOUNCEMENTS-->
            <div class="featured-list">
                <h2>Featured</h2>
                <div class="row">
                    <div class="col">
                        <div class="featured-img"></div>
                        <h5>Lorem Ipsum</h5>
                        <p>September 00, 2023</p>
                    </div>
                    <div class="col">
                        <div class="featured-img"></div>
                        <h5>Lorem Ipsum</h5>
                        <p>September 00, 2023</p>
                    </div>
                    <div class="col">
                        <div class="featured-img"></div>
                        <h5>Lorem Ipsum</h5>
                        <p>September 00, 2023</p>
                    </div>
                    <div class="col">
                        <div class="featured-img"></div>
                        <h5>Lorem Ipsum</h5>
                        <p>September 00, 2023</p>
                    </div>
                </div>
            </div>
            <!--RECENT ANNOUNCEMENTS-->
            <div class="recent-announcement">
                <h2>Recent</h2>
                <h1>September</h1>
                <div class="row2">
                    <div class="col2">
                        <div class="grid-item-one"></div>
                        <span class="grid-item-two">
                            <h5>Lorem Ipsum <span class="material-icons-sharp">more_vert</span></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <h6>September 00, 2023</h6>
                        </span>
                    </div>
                </div>
                <div class="row2">
                    <div class="col2">
                        <div class="grid-item-one"></div>
                        <span class="grid-item-two">
                            <h5>Lorem Ipsum <span class="material-icons-sharp">more_vert</span></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <h6>September 00, 2023</h6>
                        </span>
                    </div>
                </div>
                <div class="row2">
                    <div class="col2">
                        <div class="grid-item-one"></div>
                        <span class="grid-item-two">
                            <h5>Lorem Ipsum <span class="material-icons-sharp">more_vert</span></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <h6>September 00, 2023</h6>
                        </span>
                    </div>
                </div>
                <a href="#">Show All</a>
            </div>
        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="logo">
                </div>
            </div>

            <div class="reminders">
                <div class="header">
                    <h2>Reminders</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Add Reminder</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--FOOTER-->
<div class="footer">
    <img src="{{asset('images/zonefooter.png')}}">
</div>
<!--FOOTER-->

<script src="script/homepage.js"></script>
</body>

</html>