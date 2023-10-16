<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="style/equipment_page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Homepage</title>
</head>

<body>
<!--HEADER-->
<div class="page-header">
    <img src="images/images/parts/Screenshot 2023-09-29 082533.png" alt="">
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
                        <a href="myZ1-homepage.html">
                            <span class="material-icons-sharp">
                                home
                            </span>
                            <h3>Homepage</h3>
                        </a>
                    </li>
                    <li>
                        <a href="myZ1-booking.html"  class="active">
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
                        <a href="#divOne">
                            <span class="material-icons-sharp">
                                login
                            </span>
                            <h3>Login</h3>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <!--SIDEBAR-->

        <!--MIDDLE CONTENT-->
        <main>
            <div class="announcement-bg"></div>
                <h1><span>Equipment Name</span></h1>
                <div class="container2-fluid">
                    <h2>Availability</h2>
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

            <!--TIME-->
            <div class="containertime-fluid">
                <div class="time-header">
                    <h3>Time</h3>
                </div>
                <div class="time-body">
                    <div class="row">
                        <div class="col">
                            <input type="radio" id="time" style="width: 18px; height: 18px;">
                            <label for="time">1:00 pm - 3:00 pm</label>
                        </div>
                        <div class="col" class="active">
                            <input type="radio" id="time" style="width: 18px; height: 18px;">
                            <label for="time">1:00 pm - 3:00 pm</label>
                        </div>
                        <div class="col">
                            <input type="radio" id="time" style="width: 18px; height: 18px;">
                            <label for="time">1:00 pm - 3:00 pm</label>
                        </div>
                        <div class="col">
                            <input type="radio" id="time" style="width: 18px; height: 18px;">
                            <label for="time">1:00 pm - 3:00 pm</label>
                        </div>
                    </div>
                </div>
                <div class="proceed">
                    <button>Proceed</button>
                </div>
            </div>
        </div>
    </div>

    <!--FOOTER-->
    <div class="footer">
        <img src="images/images/zone logo.png">
    </div>
    <!--FOOTER-->
<!--LOGIN MODAL-->
<div class="overlay" id="divOne">
    <div class="login-logo">
        <img src="images/images/zone-yt-cover-wht-2-removebg-preview.png">
    </div>
    <div class="wrapper">
        <h1>Welcome to Z1</h1>
        <a href="myZ1.html" class="close" style="color: white;">
            <span class="material-icons-sharp">
                close
            </span>
        </a>
        <div class="container2">
            <form>
                <div class="form_floating">
                    <div class="form-icon">
                        <span class="material-icons-sharp">
                            account_circle
                        </span>
                    </div>
                    <input type="text" class="form-control" id="floatingInput" name="email" placeholder="Email Address" required>
                </div>
                <div class="form_floating">
                    <div class="form-icon">
                        <span class="material-icons-sharp">
                            visibility
                        </span>
                    </div>
                    <input type="password" class="form-control" id="floatingPassowrd" name="password" placeholder="Password" required>
                </div>
                <a href="#" class="pass-forgot">Forgot Password?</a>
            </form>
        </div>
        <a href="#" class="submit">Go <span class="material-icons-sharp">chevron_right</span></a>
        <div class="sign-up">
            <h6>Or sign-in with</h6>
            <img src="images/images/google-g-2015-logo-png-transparent.png">
        </div>
    </div>
    <div class="ellipse"></div>
    <div class="ellipse-2"></div>
    <div class="ellipse-3"></div>
    <div class="ellipse-4"></div>
</div>
<!--LOGIN MODAL-->
    <script src="script/homepage.js"></script>
</body>

</html>