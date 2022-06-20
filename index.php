<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact Us - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
</head>

<body>
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Register</h2>
                    <p>Please register yourself here:</p>
                </div>
                <form method="post" name="logInForm" onsubmit="return validateForm()" action="./register/register.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3"><label class="form-label" for="name">First name</label><input class="form-control" type="text" id="name" name="fname"></div>
                    <div class="mb-3"><label class="form-label" for="subject">Middle name<br></label><input class="form-control" type="text" id="subject" name="mname"></div>
                    <div class="mb-3"><label class="form-label" for="subject">Surname</label><input class="form-control" type="text" id="subject-1" name="sname"></div>
                    <div class="mb-3"><label class="form-label" for="subject">Username</label><input class="form-control" type="text" id="subject-2" name="uname"></div>
                    <div class="mb-3"><label class="form-label" for="subject">Date of Birth</label><input class="form-control" type="date" name="dob"></div>
                    <div class="mb-3"><label class="form-label" for="subject">Password</label><input class="form-control" type="password" name="pword"></div>
                    <div class="mb-3"><label class="form-label" for="subject">CV</label><input class="form-control" type="file" name="cv"></div>
                    <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control" type="email" id="email" name="email"></div>
                    <div class="mb-3"><label class="form-label" for="subject">Phone Number</label><input class="form-control" type="tel" name="phone"></div>
                    <div class="mb-3"><label class="form-label" for="message">Facebook</label><input class="form-control" type="text" name="fb"></div>
                    <div class="mb-3"><label class="form-label" for="message">Twitter</label><input class="form-control" type="text" name="twitt"></div>
                    <div class="mb-3"><label class="form-label" for="message">Instagram</label><input class="form-control" type="text" name="ig"></div>
                    <div class="mb-3"><input type="submit" class="btn btn-primary" value="Register"</input></div>
                    <div class="mb-3"><a href="./login/logind.php">Log In</a></div>
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
            var fname = document.logInForm.fname.value;
            var mname = document.logInForm.mname.value;
            var sname = document.logInForm.sname.value;
            var uname = document.logInForm.uname.value;
            var dob = document.logInForm.dob.value;
            var email = document.logInForm.email.value;
            var pword = document.logInForm.pword.value;
            var phone = document.logInForm.phone.value;
            var fb = document.logInForm.fb.value;
            var twitt = document.logInForm.twitt.value;
            var ig = document.logInForm.ig.value;



            // Defining error variables with a default value
            var nameErr = emailErr = passwordErr = mobileErr = true;

            if (fname == "") {
                printError("nameErr", "Please enter your name");
            } else {
                var regex = /^[a-zA-Z\s]+$/;
                if (regex.test(fname) === false) {
                    printError("nameErr", "Please enter a valid name");
                } else {
                    printError("nameErr", "");
                    nameErr = false;
                }
            }

            if (mname == "") {
                printError("nameErr", "Please enter your name");
            } else {
                var regex = /^[a-zA-Z\s]+$/;
                if (regex.test(mname) === false) {
                    printError("nameErr", "Please enter a valid name");
                } else {
                    printError("nameErr", "");
                    nameErr = false;
                }
            }

            if (sname == "") {
                printError("nameErr", "Please enter your name");
            } else {
                var regex = /^[a-zA-Z\s]+$/;
                if (regex.test(sname) === false) {
                    printError("nameErr", "Please enter a valid name");
                } else {
                    printError("nameErr", "");
                    nameErr = false;
                }
            }

            if (uname == "") {
                printError("nameErr", "Please enter your name");
            } else {
                var regex = /^[a-zA-Z\s]+$/;
                if (regex.test(uname) === false) {
                    printError("nameErr", "Please enter a valid name");
                } else {
                    printError("nameErr", "");
                    nameErr = false;
                }
            }

            if (dob == "") {
                printError("nameErr", "Please enter your name");
            }

            // Validate email address
            if (email == "") {
                printError("emailErr", "Please enter your email address");
            } else {
                // Regular expression for basic email validation
                var regex = /^\S+@\S+\.\S+$/;
                if (regex.test(email) === false) {
                    printError("emailErr", "Please enter a valid email address");
                } else {
                    printError("emailErr", "");
                    emailErr = false;
                }
            }

            // Validate password number
            if (pword == "") {
                printError("passwordErr", "Please enter your password");
            } else {
                // var regex = /^[1-9]\d{9}$/;
                var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
                if (regex.test(pword) === false) {
                    printError("passwordErr", "password contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character");
                } else {
                    printError("passwordErr", "");
                    passwordErr = false;
                }
            }

            /*if (fname == "") {
                printError("nameErr", "Please enter your name");
            }*/

            // Validate mobile number
            if (phone == "") {
                printError("mobileErr", "Please enter your mobile number");
            } else {
                // var regex = /^[1-9]\d{10}$/;
                if (phone.length < 10 ) {
                    printError("mobileErr", "Please enter a valid 10 digit mobile number");
                } else {
                    printError("mobileErr", "");
                    mobileErr = false;
                }
            }

            if (fb == "") {
                printError("nameErr", "Please enter your name");
            } else {
                var regex = /^[a-zA-Z\s]+$/;
                if (regex.test(fb) === false) {
                    printError("nameErr", "Please enter a valid name");
                } else {
                    printError("nameErr", "");
                    nameErr = false;
                }
            }

            if (twitt == "") {
                printError("nameErr", "Please enter your name");
            } else {
                var regex = /^[a-zA-Z\s]+$/;
                if (regex.test(twitt) === false) {
                    printError("nameErr", "Please enter a valid name");
                } else {
                    printError("nameErr", "");
                    nameErr = false;
                }
            }

            if (ig == "") {
                printError("nameErr", "Please enter your name");
            } else {
                var regex = /^[a-zA-Z\s]+$/;
                if (regex.test(ig) === false) {
                    printError("nameErr", "Please enter a valid name");
                } else {
                    printError("nameErr", "");
                    nameErr = false;
                }
            }

            // Prevent the form from being submitted if there are any errors
            if ((emailErr || passwordErr || mobileErr || nameErr) == true) {
                // event.preventDefault()
                return false;
            }
        };
    </script>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>