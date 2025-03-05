<?php
include("header_link.php");
include("manubar.php");
include('db_connection.php');
?>

<?php
// $conn = mysqli_connect('localhost', 'root', '', 'rg_soumya');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch carousel images
$sql = "SELECT * FROM carousel";
$result = $conn->query($sql);
?>

<section>
    <!-- <div> -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            $first = true;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $activeClass = $first ? 'active' : '';
                    echo '<div class="carousel-item ' . $activeClass . '">';
                    echo '<img src="admin/upload/' . $row['image'] . '" class="d-block w-100 h-100" alt="...">';
                    if ($row['caption']) {
                        echo '<div class="carousel-caption d-none d-md-block">' . $row['caption'] . '</div>';
                    }
                    echo '</div>';
                    $first = false;
                }
            } else {
                echo '<p>No images found in the carousel.</p>';
            }
            ?>

        </div>

        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- </div> -->
</section>



<section class="search-sec">
    <div class="container">
        <form action="index-book_action.php" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <span class="label">Patient Name</span>
                            <input type="text" name="name" id="name" class="form-control search-slt" placeholder="Enter Your Name">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <span class="label">Enter Age</span>
                            <input type="number" name="number" id="number" class="form-control search-slt" placeholder="Enter Your Age">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <span class="label">Select Servicee</span>
                            <select name="service" class="form-control search-slt" id="service">
                                <option>Select Service</option>
                                <option>Cardiology</option>
                                <option>Neurology</option>
                                <option>Gastroenterology</option>
                                <option>Orthopaedic</option>
                                <option>Oncology</option>
                                <option>Gynecology</option>
                                <option>Dermatology</option>
                                <option>Ophthalmology</option>
                                <option>pediatrics</option>
                                <option>Endocrinology</option>
                                <option>Urology</option>
                                <option>Nephrology</option>
                                <option>Pulmonology</option>
                                <option>Rheumatology</option>
                                <option>Neurosurgery</option>
                                <option>Radiology</option>
                                <option>Plastic surgery</option>
                                <option>Neonatology</option>
                                <option>Vascular Surgery</option>
                                <option>Psychiatry</option>
                                <option>Dentistry</option>
                                <option>ENT(Ear, Nose, Throat)</option>
                                <option>Hysterectomy</option>
                                <option>Circumcision</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <div class="submit">
                                <button type="button" class="btn btn-info wrn-btn" onclick="return formvalidation();">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<?php
// $conn = mysqli_connect('localhost', 'root', '', 'rg_soumya');
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

$query = "SELECT * FROM card";
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Query failed: ' . mysqli_error($conn));
}
?>

<section class="our-webcoderskull">
    <div class="container" data-aos="fade-down-left">
        <ul class="row">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['name'];
                $image = $row['image'];
                // $url = "appointment.php";
            ?>
                <li class="col-6 col-md-4 col-lg-2">
                    <a href="<?php echo $row['url']; ?>">
                        <div class="cnt-block equal-hight" style="height: 150px;">
                            <figure>
                                <img src="admin/upload/<?php echo $image; ?>" class="img-responsive" alt="<?php echo htmlspecialchars($name); ?>">
                            </figure>
                            <h4><?php echo htmlspecialchars($name); ?></h4>
                        </div>
                    </a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
</section>




<!-- ===============================tab-=================================== -->
<section class="clinic_parts">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-nav">
                    <ul class="nav justify-content-center ">
                        <li class="nav-item">
                            <a class="nav-link active" id="nav-Specialties-tab" data-toggle="tab"
                                href="#nav-Specialties" role="tab" aria-controls="nav-Specialties"
                                aria-selected="true">Specialties</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-Procedures-tab" data-toggle="tab" href="#nav-Procedures"
                                role="tab" aria-controls="nav-Procedures" aria-selected="false">Doctor's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav_Pro-Health_tab" data-toggle="tab" href="#nav_Pro-Health"
                                role="tab" aria-controls="Three" aria-selected="false">Pro-Health</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content py-sm-5 py-4">
                    <div class="tab-pane fade show active" id="nav-Specialties" role="tabpanel"
                        aria-labelledby="nav-Specialties-tab">
                        <div class="row justify-content-center text-center">
                            <div class="col-md-12">
                                <h2>Explore our Centres of Clinical Excellence</h2>
                                <p class="sub-hdng pt-1">
                                    <!-- Our medical team is dedicated to providing the highest quality care to our patiens. -->
                                    A hospital and a clinic are both healthcare facilities, but they differ in terms
                                    of their size, scope of services, and purpose.
                                    A hospital is a larger facility that provides a wide range of medical services,
                                    including emergency care, surgery, and inpatientcare.
                                    A clinic, on the other hand, is a smaller facility that provides outpatient
                                    care, which means patients are not admitted overnight.
                                    Clinics often specialize in specific areas of medicine, such as pediatrics,
                                    cardiology, or dermatology.
                                    <br>
                                    <br>
                                    "Learn about the world class health care we provide"
                                </p>
                            </div>
                            <div class="col-md-5" data-aos="fade-up-right">
                                <div class="clinic_img">
                                    <img src="assets/img/clinical1.jpg" class="img-fluid" alt="health" />
                                </div>
                            </div>
                            <?php
                            // Create connection
                            // $conn = mysqli_connect('localhost', 'root', '', 'rg_soumya');
                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            // Fetch the clinic data from the 'card' table
                            $sql = "SELECT id, name, icon FROM tab";
                            $result = $conn->query($sql);
                            ?>
                            <div class="col-md-7" data-aos="fade-up-left">
                                <div class="text-center pt-lg-0 pt-4">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <ul class="clinic_item_area">
                                                <?php
                                                // Check if there are any results
                                                if ($result->num_rows > 0) {
                                                    // Output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                        // Display each clinic specialty dynamically
                                                        echo '<li>
                                    <a href="#" class="pg-widget" id="#">
                                        <div class="box">
                                            <img src="admin/upload/' . $row['icon'] . '" alt="icon">
                                            <h5>' . $row['name'] . '</h5>
                                        </div>
                                    </a>
                                </li>';
                                                    }
                                                } else {
                                                    echo "No results";
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-Procedures" role="tabpanel"
                        aria-labelledby="nav-Procedures-tab">
                        <!-- <?php
                                $sql = "SELECT * FROM doctor";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo '
                        <div class="col-md-3">
                            <div class="profile-sidebar">
                                <div class="profile-userpic">
                                    <a href="appointment.php">
                                        <img src="assets/img/doctor/<?php echo $image; ?>" class="img-responsive rounded mx-auto d-block" alt="">
                                    </a>
                                </div>
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name">
                                        <a href="">
                                            ' . htmlspecialchars($row['name']) . '
                                        </a>
                                    </div>
                                    <div class="profile-usertitle-job">
                                        <a href="">
                                            ' . htmlspecialchars($row['qualification']) . '
                                        </a>
                                    </div>
                                </div>
                                <div class="profile-userbuttons">
                                    <a href="appointment.php">
                                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                            APPOINTMENT</button></a>
                                    <a href="contact.php">
                                        <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                            Message</button></a>
                                </div>
                                <div class="profile-usermenu">
                                    <ul class="nav">
                                        <li class="active">
                                            <a href="#">
                                                <i class="glyphicon glyphicon-home"></i>
                                                Overview </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="glyphicon glyphicon-user"></i>
                                                Account Settings </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="glyphicon glyphicon-ok"></i>
                                                Tasks </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="glyphicon glyphicon-flag"></i>
                                                Help </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>';
                                    }
                                } else {
                                    echo "No doctors found.";
                                }
                                ?> -->

                        <div class="container">
                            <div class="row profile">
                                <div class="col-md-3">
                                    <div class="profile-sidebar">
                                        <div class="profile-userpic">
                                            <a href="appointment.php">
                                                <img src="assets/img/doctor/D1.png"
                                                    class="img-responsive rounded mx-auto d-block" alt="">
                                            </a>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name">
                                                <a href="">
                                                    Dr. P Jana
                                                </a>
                                            </div>
                                            <div class="profile-usertitle-job">
                                                <a href="">
                                                    MBBS (1971), MD (1979), Dip. Card. (1976), FCCP
                                                </a>
                                            </div>
                                        </div>
                                        <div class="profile-userbuttons">
                                            <a href="appointment.php">
                                                <button type="button" class="btn btn-success btn-sm">
                                                    <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                                    APPOINTMENT</button></a>
                                            <a href="contact.php">
                                                <button type="button" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                                    Message</button></a>
                                        </div>
                                        <div class="profile-usermenu">
                                            <ul class="nav">
                                                <li class="active">
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-home"></i>
                                                        Overview </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-user"></i>
                                                        Account Settings </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank">
                                                        <i class="glyphicon glyphicon-ok"></i>
                                                        Tasks </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-flag"></i>
                                                        Help </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="profile-sidebar">
                                        <div class="profile-userpic">
                                            <a href="appointment.php">
                                                <img src="assets/img/doctor/D3.png"
                                                    class="img-responsive rounded mx-auto d-block" alt="">
                                            </a>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name">
                                                <a href="">
                                                    Dr. Aritra Konar
                                                </a>
                                            </div>
                                            <div class="profile-usertitle-job">
                                                <a href="">
                                                    MBBS, MD (MEDICINE),DM (CARDIOLOGY), FCCP
                                                </a>
                                            </div>
                                        </div>
                                        <div class="profile-userbuttons">
                                            <a href="appointment.php">
                                                <button type="button" class="btn btn-success btn-sm"><i
                                                        class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                    APPOINTMENT</button></a>
                                            <a href="contact.php">
                                                <button type="button" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                                    Message</button></a>
                                        </div>
                                        <div class="profile-usermenu">
                                            <ul class="nav">
                                                <li class="active">
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-home"></i>
                                                        Overview </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-user"></i>
                                                        Account Settings </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank">
                                                        <i class="glyphicon glyphicon-ok"></i>
                                                        Tasks </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-flag"></i>
                                                        Help </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="profile-sidebar">
                                        <div class="profile-userpic">
                                            <a href="appointment.php">
                                                <img src="assets/img/doctor/D2.png"
                                                    class="img-responsive rounded mx-auto d-block" alt="">
                                            </a>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name">
                                                <a href="">
                                                    Dr. A K Bardhan
                                                </a>
                                            </div>
                                            <div class="profile-usertitle-job">
                                                <a href="">
                                                    MBBS (1971), MD (1979), Dip. Card. (1976), FCCP
                                                </a>
                                            </div>
                                        </div>
                                        <div class="profile-userbuttons">
                                            <a href="appointment.php">
                                                <button type="button" class="btn btn-success btn-sm">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                    APPOINTMENT</button></a>
                                            <a href="contact.php">
                                                <button type="button" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                                    Message</button></a>
                                        </div>
                                        <div class="profile-usermenu">
                                            <ul class="nav">
                                                <li class="active">
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-home"></i>
                                                        Overview </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-user"></i>
                                                        Account Settings </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank">
                                                        <i class="glyphicon glyphicon-ok"></i>
                                                        Tasks </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-flag"></i>
                                                        Help </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="profile-sidebar">
                                        <div class="profile-userpic">
                                            <a href="appointment.php">
                                                <img src="assets/img/doctor/D5.png"
                                                    class="img-responsive rounded mx-auto d-block" alt="">
                                            </a>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name">
                                                <a href="">
                                                    Dr. Abraham Oomman
                                                </a>
                                            </div>
                                            <div class="profile-usertitle-job">
                                                <a href="">
                                                    MBBS, MD - General Medicine, DM - Cardiology, DNB - Cardiology
                                                </a>
                                            </div>
                                        </div>
                                        <div class="profile-userbuttons">
                                            <a href="appointment.php">
                                                <button type="button" class="btn btn-success btn-sm">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                    APPOINTMENT</button></a>
                                            <a href="contact.php">
                                                <button type="button" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                                    Message</button></a>
                                        </div>
                                        <div class="profile-usermenu">
                                            <ul class="nav">
                                                <li class="active">
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-home"></i>
                                                        Overview </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-user"></i>
                                                        Account Settings </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank">
                                                        <i class="glyphicon glyphicon-ok"></i>
                                                        Tasks </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-flag"></i>
                                                        Help </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row profile">
                                <div class="col-md-3">
                                    <div class="profile-sidebar">
                                        <div class="profile-userpic">
                                            <a href="appointment.php">
                                                <img src="assets/img/doctor/D4.png"
                                                    class="img-responsive rounded mx-auto d-block" alt="">
                                            </a>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name">
                                                <a href="">
                                                    Dr. ak pariya
                                                </a>
                                            </div>
                                            <div class="profile-usertitle-job">
                                                <a href="">
                                                    MBBS (1971), MD (1979), Dip. Card. (1976), FCCP
                                                </a>
                                            </div>
                                        </div>
                                        <div class="profile-userbuttons">
                                            <a href="appointment.php">
                                                <button type="button" class="btn btn-success btn-sm"><i
                                                        class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                    APPOINTMENT</button></a>
                                            <a href="contact.php">
                                                <button type="button" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                                    Message</button></a>
                                        </div>
                                        <div class="profile-usermenu">
                                            <ul class="nav">
                                                <li class="active">
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-home"></i>
                                                        Overview </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-user"></i>
                                                        Account Settings </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank">
                                                        <i class="glyphicon glyphicon-ok"></i>
                                                        Tasks </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-flag"></i>
                                                        Help </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="profile-sidebar">
                                        <div class="profile-userpic">
                                            <a href="appointment.php">
                                                <img src="assets/img/doctor/D6.png"
                                                    class="img-responsive rounded mx-auto d-block" alt="">
                                            </a>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name">
                                                <a href="">
                                                    Dr. A Sreenivas Kumar
                                                </a>
                                            </div>
                                            <div class="profile-usertitle-job">
                                                <a href="">
                                                    MBBS, MD(Gen Med), DM(Cardio)SGPGI, FACC(USA)
                                                </a>
                                            </div>
                                        </div>
                                        <div class="profile-userbuttons">
                                            <a href="appointment.php">
                                                <button type="button" class="btn btn-success btn-sm"><i
                                                        class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                    APPOINTMENT</button></a>
                                            <a href="contact.php">
                                                <button type="button" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                                    Message</button></a>
                                        </div>
                                        <div class="profile-usermenu">
                                            <ul class="nav">
                                                <li class="active">
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-home"></i>
                                                        Overview </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-user"></i>
                                                        Account Settings </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank">
                                                        <i class="glyphicon glyphicon-ok"></i>
                                                        Tasks </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-flag"></i>
                                                        Help </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="profile-sidebar">
                                        <div class="profile-userpic">
                                            <a href="appointment.php">
                                                <img src="assets/img/doctor/D9.png"
                                                    class="img-responsive rounded mx-auto d-block" alt="">
                                            </a>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name">
                                                <a href="">
                                                    Dr. Abhijit Vilas Kulkarni
                                                </a>
                                            </div>
                                            <div class="profile-usertitle-job">
                                                <a href="">
                                                    MBBS(1997), MD(1998), DM (Cardiology), plastic surgery
                                                </a>
                                            </div>
                                        </div>
                                        <div class="profile-userbuttons">
                                            <a href="appointment.php">
                                                <button type="button" class="btn btn-success btn-sm"><i
                                                        class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                    APPOINTMENT</button></a>
                                            <a href="contact.php">
                                                <button type="button" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                                    Message</button></a>
                                        </div>
                                        <div class="profile-usermenu">
                                            <ul class="nav">
                                                <li class="active">
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-home"></i>
                                                        Overview </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-user"></i>
                                                        Account Settings </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank">
                                                        <i class="glyphicon glyphicon-ok"></i>
                                                        Tasks </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-flag"></i>
                                                        Help </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="profile-sidebar">
                                        <div class="profile-userpic">
                                            <a href="appointment.php">
                                                <img src="assets/img/doctor/D8.jpg"
                                                    class="img-responsive rounded mx-auto d-block" alt="">
                                            </a>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name">
                                                <a href="">
                                                    Dr. S Pradhan
                                                </a>
                                            </div>
                                            <div class="profile-usertitle-job">
                                                <a href="">
                                                    MBBS (1971), MD (1979), Dip. Card. (1976), FCCP
                                                </a>
                                            </div>
                                        </div>
                                        <div class="profile-userbuttons">
                                            <a href="appointment.php">
                                                <button type="button" class="btn btn-success btn-sm"><i
                                                        class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                    APPOINTMENT</button></a>
                                            <a href="contact.php">
                                                <button type="button" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                                    Message</button></a>
                                        </div>
                                        <div class="profile-usermenu">
                                            <ul class="nav">
                                                <li class="active">
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-home"></i>
                                                        Overview </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-user"></i>
                                                        Account Settings </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank">
                                                        <i class="glyphicon glyphicon-ok"></i>
                                                        Tasks </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-flag"></i>
                                                        Help </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade p-3" id="nav_Pro-Health" role="tabpanel"
                        aria-labelledby="nav_Pro-Health_tab">
                        <h5 class="card-title">Good Health, Good Day</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <a href="#" class="btn btn-primary">Book To Pro-Health</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!---======================== Departments =========================--->

<!-- <?php
        // Fetch departments from the database
        $sql = "SELECT * FROM department";
        $result = $conn->query($sql);
        // $departments = $result->fetchAll(PDO::FETCH_ASSOC);
        ?>

<div class="department-tabs">
    <div class="container">
        <div class="row">
            <div class="col-md-3 tab-navs">
                <div class="heading">
                    <h4>Our Departments</h4>
                </div>
                <ul class="nav nav-pills">
                    <?php foreach ($result as $index => $result) {
                        $description = $result['description'];
                        $image = $result['image'];
                    ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($index === 0 ? 'active' : ''); ?>"
                                id="nav-<?php echo strtolower(str_replace(' ', '-', $result['name'])); ?>-tab"
                                data-toggle="tab" href="#tab<?php echo ($index + 1); ?>" role="tab"
                                aria-controls="nav-<?php echo strtolower(str_replace(' ', '-', $result['name'])); ?>"
                                aria-selected="<?php echo ($index === 0 ? 'true' : 'false'); ?>">
                                <?php echo $result['name']; ?>
                            </a>
                        </li>
                        <?php
                    }
                        ?>
                </ul>
            </div>

            <div class="col-md-9 tab-contents2">
                <div class="opening-info row">
                    <div class="tab-content tab-content-info">
                        <h3><?php echo $description; ?></h3>
                        <img src="admin/upload/<?php echo $image; ?>" style="width:100px;height:100px;">
                        <h3><?php echo $result['opening_hours']; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="department-tabs ">
    <div class="container">
        <div class="row">
            <div class="col-md-3 tab-navs" data-aos="zoom-in-down">
                <div class="heading">
                    <h4>Our Departments</h4>
                </div>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-Specialties-tab" data-toggle="tab"
                            href="#tab1" role="tab" aria-controls="nav-Specialties"
                            aria-selected="true">Medecine and Health</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-Procedures-tab" data-toggle="tab" href="#tab2"
                            role="tab" aria-controls="nav-Procedures" aria-selected="false">Dental Care and Surgery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-Procedures-tab" data-toggle="tab" href="#tab3"
                            role="tab" aria-controls="nav-Procedures" aria-selected="false">Eye Treatment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-Procedures-tab" data-toggle="tab" href="#tab4"
                            role="tab" aria-controls="nav-Procedures" aria-selected="false">Children Chare</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-Procedures-tab" data-toggle="tab" href="#tab5"
                            role="tab" aria-controls="nav-Procedures" aria-selected="false">Nuclear magnetic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav_Pro-Health_tab" data-toggle="tab" href="#tab6"
                            role="tab" aria-controls="Three" aria-selected="false">Traumatology</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 tab-contents2" data-aos="zoom-out-up">
                <div class="row">
                    <div class="tab-content tab-content-info">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                            aria-labelledby="nav-Specialties-tab">
                            <div class="col-md-6 medical_title">
                                <div class="info title">
                                    <div class="thumb">
                                        <img src="assets/img/deparment.jpg" alt="Thumb" style="height: 100%; width:100%;">
                                    </div>
                                    <h3>Medecine and Health</h3>
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too
                                        say adieus who direct esteem. It esteems luckily mr or picture placing
                                        drawing no. Apartments frequently or motionless on reasonable projecting
                                        expression. Way mrs end gave tall walk fact bed.
                                    </p>
                                    <p>
                                        Placing assured be if removed it besides on. Far shed each high read are men
                                        over day.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 opening-hours">
                                <div class="opening-info">
                                    <h4>Opening Times</h4>
                                    <ul>
                                        <li>Sunday <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                        </li>
                                        <li>Monday <div class="pull-right"> 8.00 am - 4.00 pm </div>
                                        </li>
                                        <li>Tuesday <div class="pull-right"> 9.00 am - 6.00 pm </div>
                                        </li>
                                        <li>Wednesday <div class="pull-right"> 10.00 am - 7.00 pm </div>
                                        </li>
                                        <li>Thursday <div class="pull-right"> 11.00 am - 9.00 pm </div>
                                        </li>
                                        <li>Friday <div class="pull-right"> 12.00 am - 12.00 pm </div>
                                        </li>
                                        <li>Saturday <div class="pull-right closed"> Closed </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade show" id="tab2" role="tabpanel"
                            aria-labelledby="nav-Specialties-tab">
                            <div class="col-md-6 medical_title">
                                <div class="info title">
                                    <div class="thumb">
                                        <img src="assets/img/deparment1.jpg" alt="Thumb">
                                    </div>
                                    <h3>Dental Care and Surgery</h3>
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too
                                        say adieus who direct esteem. It esteems luckily mr or picture placing
                                        drawing no. Apartments frequently or motionless on reasonable projecting
                                        expression. Way mrs end gave tall walk fact bed.
                                    </p>
                                    <p>
                                        Placing assured be if removed it besides on. Far shed each high read are men
                                        over day.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 opening-hours">
                                <div class="opening-info">
                                    <h4>Opening Hours</h4>
                                    <ul>
                                        <li>Sunday <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                        </li>
                                        <li>Monday <div class="pull-right"> 8.00 am - 4.00 pm </div>
                                        </li>
                                        <li>Tuesday <div class="pull-right"> 9.00 am - 6.00 pm </div>
                                        </li>
                                        <li>Wednesday <div class="pull-right"> 10.00 am - 7.00 pm </div>
                                        </li>
                                        <li>Thursday <div class="pull-right"> 11.00 am - 9.00 pm </div>
                                        </li>
                                        <li>Friday <div class="pull-right"> 12.00 am - 12.00 pm </div>
                                        </li>
                                        <li>Saturday <div class="pull-right closed"> Closed </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade show" id="tab3" role="tabpanel"
                            aria-labelledby="nav-Specialties-tab">
                            <div class="col-md-6 medical_title">
                                <div class="info title">
                                    <div class="thumb">
                                        <img src="assets/img/deparment2.jpg" alt="Thumb">
                                    </div>
                                    <h3>Eye Treatment</h3>
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too
                                        say adieus who direct esteem. It esteems luckily mr or picture placing
                                        drawing no. Apartments frequently or motionless on reasonable projecting
                                        expression. Way mrs end gave tall walk fact bed.
                                    </p>
                                    <p>
                                        Placing assured be if removed it besides on. Far shed each high read are men
                                        over day.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 opening-hours">
                                <div class="opening-info">
                                    <h4>Opening Hours</h4>
                                    <ul>
                                        <li>Sunday <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                        </li>
                                        <li>Monday <div class="pull-right"> 8.00 am - 4.00 pm </div>
                                        </li>
                                        <li>Tuesday <div class="pull-right"> 9.00 am - 6.00 pm </div>
                                        </li>
                                        <li>Wednesday <div class="pull-right"> 10.00 am - 7.00 pm </div>
                                        </li>
                                        <li>Thursday <div class="pull-right"> 11.00 am - 9.00 pm </div>
                                        </li>
                                        <li>Friday <div class="pull-right"> 12.00 am - 12.00 pm </div>
                                        </li>
                                        <li>Saturday <div class="pull-right closed"> Closed </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade show" id="tab4" role="tabpanel"
                            aria-labelledby="nav-Specialties-tab">
                            <div class="col-md-6 medical_title">
                                <div class="info title">
                                    <div class="thumb">
                                        <img src="assets/img/deparment3.jpg" alt="Thumb">
                                    </div>
                                    <h3>Children Chare</h3>
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too
                                        say adieus who direct esteem. It esteems luckily mr or picture placing
                                        drawing no. Apartments frequently or motionless on reasonable projecting
                                        expression. Way mrs end gave tall walk fact bed.
                                    </p>
                                    <p>
                                        Placing assured be if removed it besides on. Far shed each high read are men
                                        over day.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 opening-hours">
                                <div class="opening-info">
                                    <h4>Opening Hours</h4>
                                    <ul>
                                        <li>Sunday <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                        </li>
                                        <li>Monday <div class="pull-right"> 8.00 am - 4.00 pm </div>
                                        </li>
                                        <li>Tuesday <div class="pull-right"> 9.00 am - 6.00 pm </div>
                                        </li>
                                        <li>Wednesday <div class="pull-right"> 10.00 am - 7.00 pm </div>
                                        </li>
                                        <li>Thursday <div class="pull-right"> 11.00 am - 9.00 pm </div>
                                        </li>
                                        <li>Friday <div class="pull-right"> 12.00 am - 12.00 pm </div>
                                        </li>
                                        <li>Saturday <div class="pull-right closed"> Closed </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade show" id="tab5" role="tabpanel"
                            aria-labelledby="nav-Specialties-tab">
                            <div class="col-md-6 medical_title">
                                <div class="info title">
                                    <div class="thumb">
                                        <img src="assets/img/deparment4.jpg" alt="Thumb">
                                    </div>
                                    <h3>Nuclear magnetic</h3>
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too
                                        say adieus who direct esteem. It esteems luckily mr or picture placing
                                        drawing no. Apartments frequently or motionless on reasonable projecting
                                        expression. Way mrs end gave tall walk fact bed.
                                    </p>
                                    <p>
                                        Placing assured be if removed it besides on. Far shed each high read are men
                                        over day.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 opening-hours">
                                <div class="opening-info">
                                    <h4>Opening Hours</h4>
                                    <ul>
                                        <li>Sunday <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                        </li>
                                        <li>Monday <div class="pull-right"> 8.00 am - 4.00 pm </div>
                                        </li>
                                        <li>Tuesday <div class="pull-right"> 9.00 am - 6.00 pm </div>
                                        </li>
                                        <li>Wednesday <div class="pull-right"> 10.00 am - 7.00 pm </div>
                                        </li>
                                        <li>Thursday <div class="pull-right"> 11.00 am - 9.00 pm </div>
                                        </li>
                                        <li>Friday <div class="pull-right"> 12.00 am - 12.00 pm </div>
                                        </li>
                                        <li>Saturday <div class="pull-right closed"> Closed </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade show" id="tab6" role="tabpanel"
                            aria-labelledby="nav-Specialties-tab">
                            <div class="col-md-6 medical_title">
                                <div class="info title">
                                    <div class="thumb">
                                        <img src="assets/img/deparment5.jpg" alt="Thumb">
                                    </div>
                                    <h3>Traumatology</h3>
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too
                                        say adieus who direct esteem. It esteems luckily mr or picture placing
                                        drawing no. Apartments frequently or motionless on reasonable projecting
                                        expression. Way mrs end gave tall walk fact bed.
                                    </p>
                                    <p>
                                        Placing assured be if removed it besides on. Far shed each high read are men
                                        over day.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 opening-hours">
                                <div class="opening-info">
                                    <h4>Opening Hours</h4>
                                    <ul>
                                        <li>Sunday <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                        </li>
                                        <li>Monday <div class="pull-right"> 8.00 am - 4.00 pm </div>
                                        </li>
                                        <li>Tuesday <div class="pull-right"> 9.00 am - 6.00 pm </div>
                                        </li>
                                        <li>Wednesday <div class="pull-right"> 10.00 am - 7.00 pm </div>
                                        </li>
                                        <li>Thursday <div class="pull-right"> 11.00 am - 9.00 pm </div>
                                        </li>
                                        <li>Friday <div class="pull-right"> 12.00 am - 12.00 pm </div>
                                        </li>
                                        <li>Saturday <div class="pull-right closed"> Closed </div>
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
</div>

<!-- -----------------Departments end-------------- -->

<!-- ===================================service section======================= -->

<section id="services" class="bg-light pt-100 pb-70" data-aos="fade-up"
     data-aos-anchor-placement="center-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <h2 class="title">What <span>Service</span> We
                    Offer
                </h2>
                <p class=" mt-3 ">One of the first major discoveries relevant to the field of pulmonology was the discovery of pulmonary circulation. Originally, it was thought that blood reaching the right side of the heart passed through small</p>
                <a class="btn btn-primary my-5" href="error.php">More Info </a>
            </div>
            <div class="col-lg-7">
                <div class="row card-items">
                    <div class="col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- <i class="fa fa-comments"></i> -->
                                <img src="assets/img/service.png" style="width: 100%; height:100%;">
                                <a href="#">
                                    <h5 class="card-title">Digital Health Facilities</h5>
                                </a>
                                <!-- <p class="card-text"> Health Facility Registry is a comprehensive repository of health facilities of the country across modern and traditional systems of medicine.
                                    It includes both public and private health facilities including hospitals, clinics, diagnostic laboratories and imaging centers, pharmacies, etc</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- <i class="fa fa-cc-paypal" aria-hidden="true"></i> -->
                                <img src="assets/img/service1.png" style="width: 100%; height:100%;">
                                <a href="#">
                                    <h5 class="card-title">Intensive Care Unit (ICU)</h5>
                                </a>
                                <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- <i class="fa fa-envelope-open"></i> -->
                                <img src="assets/img/service2.png" style="height: 100%; width:100%;">
                                <a href="#">
                                    <h5 class="card-title"> Quick Ambulance</h5>
                                </a>
                                <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="assets/img/service3.jpg" style="height: 100%; width:100%;">
                                <!-- <i class="fa fa-phone"></i> -->
                                <a href="#">
                                    <h5 class="card-title">Bills & Insurance</h5>
                                </a>
                                <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================client section================================= -->

<section class="client_section ">
    <div class="container">
        <div class="heading_container heading_center">
            <!-- <h2>
                    Patient Review
                </h2> -->
        </div>
    </div>
    <div id="customCarousel2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="box">
                                <div class="img-box">
                                    <img src="assets/img/client.jpg" alt="">
                                </div>
                                <div class="detail-box">
                                    <div class="client_info">
                                        <div class="client_name">
                                            <h5>
                                                Anirban Jana
                                            </h5>
                                            <h6>
                                                Patient of Dentistry
                                            </h6>
                                        </div>
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                    <p>
                                        Mr Hawary performed the procedure vey professionally.
                                        He visited me on the ward shortly after the procedure to check on how I was
                                        progressing post operation.
                                        He subsequently checked up on me early the following morning (which was a
                                        Sunday).
                                        Overall, I was very satisfied.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="box">
                                <div class="img-box">
                                    <img src="assets/img/client.jpg" alt="">
                                </div>
                                <div class="detail-box">
                                    <div class="client_info">
                                        <div class="client_name">
                                            <h5>
                                                Priyajit Shaoo
                                            </h5>
                                            <h6>
                                                Patient of Cardiology
                                            </h6>
                                        </div>
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                    <p>
                                        Since getting my spinal cord stimulator my life has changed so much.
                                        I have been able to come off the heavy painkillers which made me so tired
                                        and did not take the pain away.
                                        The neuromodulation team at Barts are brilliant.
                                        Can’t praise you enough!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="box">
                                <div class="img-box">
                                    <img src="assets/img/client.jpg" alt="">
                                </div>
                                <div class="detail-box">
                                    <div class="client_info">
                                        <div class="client_name">
                                            <h5>
                                                Pijus Jana
                                            </h5>
                                            <h6>
                                                Patient of Psychiatry
                                            </h6>
                                        </div>
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                    <p>
                                        Dr Shalaby is highly professional, patient and attentive.
                                        He listened closely to evaluate for an appropriate diagnosis and was
                                        communicative and empathetic throughout the consultation.
                                        He was detailed in his approach and had helpful solutions.
                                        Highly recommended.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#customCarousel2" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel2" data-slide-to="1"></li>
            <li data-target="#customCarousel2" data-slide-to="2"></li>
        </ol>
    </div>
</section>
<!-- =============================end client section======================== -->



<!-- <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="our-team-main">
                    <div class="team-front">
                        <img src="http://placehold.it/110x110/9c27b0/fff?text=Dilip" class="img-fluid" />
                        <h3>Dilip Kevat</h3>
                        <p>Web Designer</p>
                    </div>
                    <div class="team-back">
                        <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="our-team-main">
                    <div class="team-front">
                        <img src="http://placehold.it/110x110/336699/fff?text=Dilip" class="img-fluid" />
                        <h3>Dilip Kevat</h3>
                        <p>Web Designer</p>
                    </div>
                    <div class="team-back">
                        <span>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                            dolor.
                            Aenean massa. Cum sociis
                            natoque penatibus et magnis dis parturient montes,
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                            dolor.
                            Aenean massa. Cum sociis
                            natoque.
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="our-team-main">
                    <div class="team-front">
                        <img src="http://placehold.it/110x110/607d8b/fff?text=Dilip" class="img-fluid" />
                        <h3>Dilip Kevat</h3>
                        <p>Web Designer</p>
                    </div>
                    <div class="team-back">
                        <span>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                            dolor.
                            Aenean massa. Cum sociis
                            natoque penatibus et magnis dis parturient montes,
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                            dolor.
                            Aenean massa. Cum sociis
                            natoque.
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="our-team-main">
                    <div class="team-front">
                        <img src="http://placehold.it/110x110/4caf50/fff?text=Dilip" class="img-fluid" />
                        <h3>Dilip Kevat</h3>
                        <p>Web Designer</p>
                    </div>
                    <div class="team-back">
                        <span>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                            dolor.
                            Aenean massa. Cum sociis
                            natoque penatibus et magnis dis parturient montes,
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                            dolor.
                            Aenean massa. Cum sociis
                            natoque.
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="our-team-main">
                    <div class="team-front">
                        <img src="http://placehold.it/110x110/e91e63/fff?text=Dilip" class="img-fluid" />
                        <h3>Dilip Kevat</h3>
                        <p>Web Designer</p>
                    </div>
                    <div class="team-back">
                        <span>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                            dolor.
                            Aenean massa. Cum sociis
                            natoque penatibus et magnis dis parturient montes,
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                            dolor.
                            Aenean massa. Cum sociis
                            natoque.
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="our-team-main">
                    <div class="team-front">
                        <img src="http://placehold.it/110x110/2196f3/fff?text=Dilip" class="img-fluid" />
                        <h3>Dilip Kevat</h3>
                        <p>Web Designer</p>
                    </div>
                    <div class="team-back">
                        <span>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                            dolor.
                            Aenean massa. Cum sociis
                            natoque penatibus et magnis dis parturient montes,
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                            dolor.
                            Aenean massa. Cum sociis
                            natoque.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


<!-- =================Contact us=============== -->

<section id="form">
    <h1>Contact</h1>
    <!-- <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-text text-center">
                        <h6>Contact us through <span class="not_sure_span">thakurayush511@gmail.com</span><br />
                            reach out to us on phone 8219743301 </h6>
                    </div>
                </div>
            </div> -->
    <form action="contact_action.php" method="post">
        <div class="container form-box">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-ara">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group name">
                                    <input type="text " class="form-control name-text" id="fname" placeholder="First-name" name="fname">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group name">
                                    <input type="text" class="form-control" id="lname" placeholder="last-name" name="lname">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group phone">
                                <input type="email" class="form-control" id="mail" placeholder="Mail" name="mail">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group phone">
                                <input type="number" class="form-control" id="pnumber" placeholder="Phone-Number" name="number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group massge">
                                <textarea class="form-control" rows="5" placeholder="Message" id="comment" name="comment"></textarea>
                            </div>
                        </div>
                        <div class="row buton-form">
                            <div class="buton-form">
                                <!-- <a> -->
                                <button type="submit" onclick="return validation();">Submit</button>
                                <!-- </a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 empty-div-form"></div>
                <div class="col-lg-5">
                    <div class="map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13578.350870882019!2d76.72664628403336!3d31.699836950967995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3904df2b45c39f79%3A0x7c4cce8149cb5540!2sSarkaghat%2C+Himachal+Pradesh+175024!5e0!3m2!1sen!2sin!4v1551328657489" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>


<!-- =------------------footer-------------- -->
<section id="footer">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4" data-aos="fade-right">
                <h5>Address</h5>
                <ul class="list-unstyled quick-links">
                    <li>
                        <a href="#"><i class="fa fa-map-o">
                                Vill-Padmapukuria, P.O + P.S- Contai, Dist-Purba Medinipur, W.B(721401)</a></i>
                    </li>
                    <li><i class="fa fa-phone" aria-hidden="true">
                            <a href="#">
                                9382508712 /
                            </a>
                            <a href="#">
                                7602694191
                            </a>
                        </i>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope-o"
                                aria-hidden="true"></i>soumyaphadhan.2004@gmail.com</a>
                    </li><br>
                    <!-- <footer>
                        <iframe src="https://www.google.com/maps/embed?..." width="200" height="250" frameborder="0"
                            style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </footer> -->
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4" data-aos="fade-left" style="padding-left: 100px;">
                <h5>Quick links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a href="Doctors_information.php"><i class="fa fa-angle-double-right"></i>Doctor,s</a></li>
                    <li><a href="department.php"><i class="fa fa-angle-double-right"></i>Departments</a></li>
                    <li><a href="service.php"><i class="fa fa-angle-double-right"></i>Services</a></li>
                    <li><a href="error.php"><i class="fa fa-angle-double-right"></i>Quick Ambulance</a></li>
                    <li><a href="contact.php"><i class="fa fa-angle-double-right"></i>Contact</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4" data-aos="fade-up-right">
                <div class="footer-widget">
                    <h5>Departments</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="department.php"><i class="fa fa-angle-double-right"></i>Medecine and Health</a></li>
                        <li><a href="department.php"><i class="fa fa-angle-double-right"></i>Dental Care and Surgery</a></li>
                        <li><a href="department.php"><i class="fa fa-angle-double-right"></i>Eye Treatment</a></li>
                        <li><a href="department.php"><i class="fa fa-angle-double-right"></i>Children Chare</a></li>
                        <li><a href="department.php" title="Design and developed by"><i
                                    class="fa fa-angle-double-right"></i>Nuclear magnetic</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Traumatology</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5" data-aos="fade-up-left">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white" data-aos="fade-down-right">
                <p><u><a href="#">SOUMYA PRADHAN</a></u> CCLMS student Of BCA22</p>
                <p class="h6">© All right Reversed.<a class="text-green ml-2" href="#" target="_blank">SOUMYA
                        PRADHAN</a></p>
            </div>
            <hr>
        </div>
    </div>
</section>

<?php
include("footer_link.php");
?>