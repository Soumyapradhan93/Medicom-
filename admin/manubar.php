<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fa fa-hospital-o me-2"></i> MEDICOM</div>
            <div class="nav nav-tabs flex-colum">
                <div class="list-group list-group-flush my-3">
                    <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                            class="fa fa-registered me-2"></i> All Users</a>
                    <a href="Doctor_Appointment.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                            class="fa fa-user-md me-2"></i> Doctors Appointment</a>
                    <a href="card.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                            class="fa fa-user me-2"></i> Manage facilities</a>
                    <a href="user_contact.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                            class="fa fa-paperclip me-2"></i> Reports</a>
                    <a href="carousel.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                            class="fa fa-shopping-cart me-2"></i>MNG carousel</a>
                    <a href="tab.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                            class="fa fa-medkit me-2"></i> specialties</a>
                    <a href="department.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                            class="fa fa-heartbeat me-2"></i> Deparment</a>
                    <a href="doctor.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                        class="fa fa-gift me-2"></i> MNG Doctor</a>
                    <a href="login_page.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold "><i
                            class="fa fa-power-off me-2"></i>Logout</a>
                </div>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user me-2"></i>
                                <?php echo $_SESSION['username']; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="login_page.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>