<html lang="en">
<head>
    <title>Contact Us</title>
    <link rel="icon" href="MalNu%20Logo.png">
    <link href="FinalProject_MalNuFighter_Benjamin_May.css" rel="stylesheet">
    <script src="FinalProject_MalNuFighter_Benjamin_May.js"></script>
    <!-- <script src="contactValidation.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
if (!empty($_POST['fullName'])) {
    // Establishing Connection with Server
    $con = mysqli_connect("localhost", "root", "", "malnu_fighter");
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    //Attempted Data Sanitation
    function getData($field) {
        if (!isset($_POST[$field])) {
            $data = "";
        }
        else {
            $data = trim($_POST[$field]);
            $data = htmlspecialchars($data);
        }
        return $data;
    }
//End of Data Sanitation
  //  print_r($_POST);
    $name = getData("fullName");
    $email = getData("email");
    $subject = getData("subject");
    $message = getData("message");
    /*$name = $_POST['fullName'];
    $email =$_POST['email'];// $_POST['email'];
    $subject =$_POST['subject'];// $_POST['subject'];
    $message = $_POST['message'];//$_POST['message'];*/
    if ($name == "" || $subject == "" || $message == "") {
        echo "<p>MESSAGE NOT RECEIVED! PLEASE GO BACK AND COMPLETE ALL FIELDS IN THE FORM.</p>";
        mysqli_close($con); // Closing Connection with Server
        echo " <p>Go <a href='contactm.php'>back</a> to the form</p>";
    } else {
        $s1 = "INSERT INTO contact_form (fullName, email, subject, message)
            VALUES ('" . $name . "','" . $email . "','" . $subject . "','" . $message . "')";
        if (!mysqli_query($con, $s1)) {
            echo "<p>MESSAGE NOT RECEIVED! PLEASE GO BACK AND COMPLETE ALL FIELDS IN THE FORM.</p>";
        } else {
            echo "<p>THANK YOU FOR YOUR MESSAGE!</p>";
        }
        mysqli_close($con); // Closing Connection with Server
        echo " <p>Go <a href='contactm.php'>back</a> to the form</p>";
    }
}
else {
    //echo "<a href='contactmain.php'>back</a>";
    echo '<header id="header">
    <img src="MalNu_NameLogo2.png" alt="MalNu Logo" class="floatLeft" id="logo" width="330">
    <!-- test content -->
    <div id="hideButton" class="hide">
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Menu</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="index.html">Home</a>
                <a href="urbanGardening.html">Urban Gardening</a>
                <a href="produce.html">Nutrient Rich Produce & Recipes</a>
                <a href="compost.html">Urban Composting 101</a>
                <a href="messageBoard.html">Community Message Board</a>
                <a href="http://localhost/contactm.php">Contact Us</a>
            </div>
        </div>
    </div>
    <div id="hideMenu">
        <div class="visibleMenu">
            <div id="myVisibleMenu" class="menu-content">
                <a href="index.html">Home |</a>
                <a href="urbanGardening.html">Urban Gardening |</a>
                <a href="produce.html">Nutrient Rich Produce & Recipes |</a>
                <a href="compost.html">Urban Composting 101 |</a>
                <a href="messageBoard.html">Community Message Board |</a>
                <a href="http://localhost/contactm.php">Contact Us</a>
            </div>
        </div>
    </div>
</header>
<main>
    <form class="floatLeft" action="contactm.php" method="POST">
        <h2>Contact Us</h2>
        <div>
            <label for="fullName">Full Name:</label>
            <input type="text" name="fullName" id="fullName" placeholder="Enter Name..." required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="name@domain.com" required>
        </div>
        <div>
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject" placeholder="Enter Message Subject..." required>
        </div>
        <div>
            <label for="message">How can we help you?</label>
            <textarea name="message" id="message" placeholder="Type message here..." required rows="5" 
            cols="50"></textarea>
        </div>
        <div id="formErrors"></div>
        <div>
            <input type="submit" name="submit" id="submit" value="Send">
        </div>
    </form>
    <address>
        <p>
            Email: <a href="mailto:mayb@union.edu">mayb@union.edu</a>
        </p>
        <p>
            MalNu Fighter<br>
            807 Union Street<br>
            Schenectady, NY 12308
        </p>
    </address>
    <div class="mapouter" style="padding:0 0 200px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2926.610495187219!2d-73.93178738515074!3d42
        .817716414069885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89de6de5d853ace3%3A0x7c4f2b18944634f1!2s
        Union%20College!5e0!3m2!1sen!2sus!4v1580682475682!5m2!1sen!2sus"
                width="600" height="450" style="border:0;" allowfullscreen=""></iframe>
    </div>
</main>
<footer class="clear">
    <h1>MalNu Fighter</h1>
    <h3>Fighting Malnutrition in America</h3>
    <p>MalNu Fighter was established in 2020 as the final project in a Computer Science Web Programming
        class at Union College.</p>
</footer>
    ';
}
?>
</body>
</html>
