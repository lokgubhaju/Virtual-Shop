<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
    $_SESSION['message'] = "You must log in before viewing your profile page!";
    header("location: error.php");
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
<!DOCTYPE html>
<html >
<head>
    <title>Welcome <?= $first_name.' '.$last_name ?></title>
    <?php include 'css/css.html'; ?>
    <?php include 'navbar.html' ?>
</head>

<body>
<div class="form">
    <h1>Welcome</h1>
    <h2><?php echo $first_name.' '.$last_name; ?></h2>
    <p><?= $email ?></p>

    <a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>

</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/index.js"></script>

</body>
</html>
