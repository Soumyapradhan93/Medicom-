<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="styles.css"> Optional: Custom CSS -->
</head>

<style>
    .sidebar {
        height: 100vh;
        position: fixed;
        /* Fixed sidebar */
        top: 0;
        /* Stay at the top */
        left: 0;
        /* Align to the left */
        padding-top: 20px;
        /* Padding at the top */
    }

    .sidebar .nav-link {
        font-weight: 500;
        color: #333;
    }

    .sidebar .nav-link.active {
        color: #007bff;
        /* Active link color */
        font-weight: bold;
        /* Bold active link */
    }
</style>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Left Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <h4 class="text-center">Profile Menu</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#overview" data-toggle="tab">
                                Overview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#settings" data-toggle="tab">
                                Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#activity" data-toggle="tab">
                                Activity
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#privacy" data-toggle="tab">
                                Privacy
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="overview">
                        <h2>Overview</h2>
                        <p>This is the overview section of the profile.</p>
                    </div>
                    <div class="tab-pane fade" id="settings">
                        <h2>Settings</h2>
                        <p>This is the settings section of the profile.</p>
                    </div>
                    <div class="tab-pane fade" id="activity">
                        <h2>Activity</h2>
                        <p>This is the activity section of the profile.</p>
                    </div>
                    <div class="tab-pane fade" id="privacy">
                        <h2>Privacy</h2>
                        <p>This is the privacy section of the profile.</p>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>