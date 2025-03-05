<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-black fixed-top">
                <h5>MEDICOM</h5>
                <a class="navbar-brand" href="index.php"><img src="assets/img/page_logo.png" class="logo_img" />
                    <!-- <p>Doctoral</p> -->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav ml-auto topnav">
                        <li class="nav-item font-weight-bold active">
                            <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item font-weight-bold ">
                            <a class="nav-link" href="Doctors_information.php">
                                Doctor's
                            </a>
                        </li>
                        <li class="nav-item font-weight-bold">
                            <a class="nav-link" href="department.php">Departments</a>
                        </li>
                        <li class="nav-item font-weight-bold">
                            <a class="nav-link" href="service.php">Services</a>
                        </li>
                        <li class="nav-item font-weight-bold dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Resources
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="error.php">Specialties</a>
                                <a class="dropdown-item" href="error.php">Pre-Health</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="error.php">Online Payment</a>
                            </div>
                        </li>
                        <!-- <li class="nav-item font-weight-bold">
                            <a class="nav-link" href="error.php">Medical Shop</a>
                        </li> -->
                        <li class="nav-item font-weight-bold">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user">
                                    <p>
                                        <!-- Profile -->
                                    </p>
                                </i>
                            </a>


                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>
                                <?php
                                if (isset($_SESSION['username'])) {
                                ?>
                                    <a class="dropdown-item" href="profile.php">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        Profile</a>
                                    <a class="dropdown-item" href="logout.php">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                        logout</a>
                                <?php
                                } else {
                                ?>
                                    <a class="dropdown-item" href="login_page.php">Login</a>
                                <?php
                                }
                                ?>
                                <!-- <a class="dropdown-item" href="login_page.php">Login</a>
                                <a class="dropdown-item" href="Register_from.php">Register</a> -->
                            </div>
                        </li>
                    </div>
                </div>
        </div>
        </nav>
        </div>
    </header>