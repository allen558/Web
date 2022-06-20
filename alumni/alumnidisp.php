<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Features - Brand</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="../assets/css/vanilla-zoom.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><img src="../assets/img/scenery/school_logo.jpg" style="width: 80px;"><a class="navbar-brand logo" href="#">Msolwa Secondary School</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="../home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="alumnid.php">ALUMNI</a></li>
                    <li class="nav-item"><a class="nav-link" href="../staff.php">STAFF</a></li>
                    <li class="nav-item"><a class="nav-link" href="../about-us.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="../contact-us.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="cv.php">CV</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page">
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Alumni Information</h2>
                    <p>The table below displays the Alumni information:</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <?php
                            $id = $_SESSION['id'];
                            $query = "SELECT * FROM course_subjects WHERE std_id='$id'";
                            $results = mysqli_query($link, $query);

                            echo "<table class=\"table\">
                                <tr>
                                    <th>Alumnus Name</th>
                                      <th>Year Of Enrollment</th>
                                      <th>Year Of Graduation</th>
                                      <th>Head Master/Mistress</th>
                                      <th>Famous Teacher</th>
                                      <th>Summary Of Results</th>
                                      <th>Current Occupation</th>
                                      <th>Address</th>
                                      <th>Email</th>
                                      <th>Phone</th>

                                </tr>";

                                while ($row = mysqli_fetch_array($results)) {
                                echo "<tr>";
                                    echo "<td>" . $row['course_name'] . "</td>";
                                    echo "<td>" . $row['course_code'] . "</td>";
                                    echo "<td>" . $row['course_description'] . "</td>";
                                    echo "<td>" . $row['offering_dept'] . "</td>";
                                    echo "<td>" . $row['academic_year'] . "</td>";
                                    echo "<td>" . $row['semester'] . "</td>";
                                    echo "<td>" . $row['instructor'] . "</td>";
                                    echo "<td>" . $row['grade_unit'] . "</td>";

                                    echo "</tr>";
                                }
                                echo "</table>";

                            mysqli_close($link);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col"><a href="alumnid.php">Update Alumni information</a></div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="footer-copyright">
            <p>© 2022&nbsp;Mayele Jr<br><br></p>
        </div>
    </footer>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="../assets/js/vanilla-zoom.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>