<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact Us - Brand</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="../https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="../assets/css/vanilla-zoom.min.css">
</head>

<body>
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Log In</h2>
                </div>
                <form method="post" action="login.php" name="logInForm" onsubmit="return validateForm()>
                    <div class="mb-3"><label class="form-label" for="name">Username</label><input class="form-control" type="text" id="name" name="uname"></div>
                    <div class="mb-3"><label class="form-label" for="subject">Password</label><input class="form-control" type="password" name="pword"></div>
                    <div class="mb-3"><input type="submit" class="btn btn-primary" value ="Login"></div>
                    <div><a href="../index.php">Create an Account</a></div>
                </form>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="footer-copyright">
            <p>© 2022 Mayele Jr</p>
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
            var uname = document.logInForm.uname.value;
            var pword = document.logInForm.pword.value;

            // Defining error variables with a default value
            var unameErr = pwordErr = true;


            // Validate email address
            if (uname == "") {
                printError("emailErr", "Please enter your email address");
            } else {
                // Regular expression for basic email validation
                var regex = /^[a-zA-Z\s]+$/;
                if (regex.test(uname) === false) {
                    printError("emailErr", "Please enter a valid email address");
                } else {
                    printError("usernameErr", "");
                    unameErr = false;
                }
            }

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

            // Prevent the form from being submitted if there are any errors
            if ((unameErr || pwordErr ) == true) {
                return false;
            }
        };
    </script>

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="../assets/js/vanilla-zoom.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>