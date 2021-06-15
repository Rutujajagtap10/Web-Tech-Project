<?php

include 'connectC.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$message = $_POST['message']; // Get Comment from form

	$sql = "INSERT INTO contacts (name, email, message)
			VALUES ('$name', '$email', '$message')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Contact info added successfully.')</script>";
	} else {
		echo "<script>alert('contact does not add.')</script>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Resposive Conatact Us page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Any query or question about the information regarding our website please do ask frankly. We are always help you. Use following information to reach us.
            </p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
                    <div class="text">
                        <h2>Address</h2>
                        <p>Malegoan(Bk.),<br>baramati,pune India<br>Pin-code 413115</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h2>Phone</h2>
                        <p>(02112)254424</p>
                    </div>
                </div>

                <div class="box">
                  <div class="icon"><i class="fa fa-envelope-open" aria-hidden="true"></i></div>
                  
                    <div class="text">
                        <h2>Email</h2>
                        <p>coembk.office@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="" method="POST">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea  name="message" required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input  type="Submit" name="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>


