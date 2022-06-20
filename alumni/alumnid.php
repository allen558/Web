<?php session_start();
if (!isset($_SESSION['id'])) {
    header("Location: ../alumni/alumnidisp.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact Us - Brand</title>
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
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Alumni</h2>
                    <p>Please register as an Alumni here:</p>
                </div>
                <form name="cform" method="post" action="courses.php" onsubmit="return validateForm()">
                    <div class="mb-3"><label class="form-label" for="name">Almnus Name</label><input class="form-control" type="text" id="name" name="alname"></div>
                    <div class="mb-3"><label class="form-label" for="subject">Date of Enrollment</label><input class="form-control" type="date" name="doe"></div>
                    <div class="mb-3"><label class="form-label" for="subject">Date of Graduation</label><input class="form-control" type="date" name="dog"></div>
                    <div class="mb-3"><label class="form-label" for="subject">Head Master(Mistress) Name</label><input class="form-control" type="text" id="subject" name="hname"></div>
                    <div class="mb-3"><label class="form-label" for="subject">Famous Teacher Name</label><input class="form-control" type="text" id="subject-1" name="tname"></div>
                    <div class="mb-3"><label class="form-label" for="subject">Summary of Results</label><select class="form-select" name="sor">
                            <optgroup label="Please select your Division">
                                <option value="1" selected="">Div 1</option>
                                <option value="2">Div 2</option>
                                <option value="3">Div 3</option>
                                <option value="4">Div 4</option>
                                <option value="0">Div 0</option>
                                <option value=""></option>
                            </optgroup>
                        </select></div>
                    <div class="mb-3"><label class="form-label" for="name">Current Occupation</label><input class="form-control" type="text" id="name-1" name="co"></div>
                    <div class="mb-3"><label class="form-label" for="subject">Address</label><input class="form-control" type="text" id="subject-4" name="add"></div>
                    <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control" type="email" id="email" name="email"></div>
                    <div class="mb-3"><label class="form-label" for="message">Phone Number</label><input class="form-control" type="tel" name="phone"></div>
                    <div class="mb-3"><a class="btn btn-primary" role="button" href="alumnidisp.php">Submit</a></div>
                    <div class="mb-3"><a href="alumnidisp.php">View Alumni information</a></div>
                </form>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="footer-copyright">
            <p>© 2022&nbsp;Mayele Jr<br><br></p>
        </div>
    </footer>

    <script>
        // Defining a function to display error message
        function printError(elemId, hintMsg) {
            document.getElementById(elemId).innerHTML = hintMsg;
        }

        // Defining a function to validate form
        function validateForm() {
            // Retrieving the values of form elements
            var alname = document.cform.alname.value;
            var doe = document.cform.doe.value;
            var dog = document.cform.dog.value;
            var hname = document.cform.hname.value;
            var tname  = document.cform.tname.value;
            var sor = document.cform.sor.value;
            var co  = document.cform.co.value;
            var add = document.cform.add.value;
            var email = document.cform.email.value;
            var phone = document.cform.phone.value;


            // Defining error variables with a default value
            var alnameErr = dogErr = doeErr = hnameErr = tnameErr = sorErr = coErr  = addErr = emailErr = phoneErr = true;

            // Validate name
            if (hname == "") {
                printError("hnameErr", "Please enter head master/mistress name");
            } else {
                var regex = /^[a-zA-Z\s]+$/;
                if (regex.test(hname) === false || hname >30) {
                    printError("hnameErr", "Please enter a valid name not exceeding 30 characters");
                } else {
                    printError("hnameErr", "");
                    hnameErr = false;
                }
            }

            if (tname == "") {
                printError("tnameErr", "Please enter famous teacher name");
            } else {
                var regex = /^[a-zA-Z\s]+$/;
                if (regex.test(tname) === false || tname >30) {
                    printError("tnameErr", "Please enter a valid name not exceeding 30 characters");
                } else {
                    printError("tnameErr", "");
                    tnameErr = false;
                }
            }

            if (co == "") {
                printError("codeErr", "Please enter your current occupation");
            } else {
                var regex = /^[a-zA-Z\s]+$/;
                if (regex.test(co) === false || co > 20 ) {
                    printError("codeErr", "Please enter a valid occupation not exceeding 20 characters");
                } else {
                    printError("codeErr", "");
                    codeErr = false;
                }
            }

            // Prevent the form from being submitted if there are any errors
            if ((hnameErr || tmnameErr || coErr ||  ) == true) {
                return false;
            }
        }

    </script>

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="../assets/js/vanilla-zoom.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>