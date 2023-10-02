<html>
<head>

</head>

<?php
session_start();
 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db_connect.php";

// Grab the username and password from the form and set them to variables.
$username = addslashes($_POST['username']);
$password = $_POST['password'];

// Print the username and password to the screen.
echo "<h2>You attempted to login with " . $username . " and " . $password . "</h2>";

// Prepared statements instead of a single statement so it is more secured.
$stmt = $mysqli->prepare ("SELECT id, username, password FROM eqq3vu9i1kc3tbqw.users WHERE username = ?");
$stmt->bind_param("s", $username);

$stmt->execute();
$stmt->store_result();

$stmt->bind_result($userid, $username, $fetched_pass);

// If 1 record was found the username matches
if ($stmt->num_rows == 1 ) 
{
    // Print that a username was found.
    echo "Found 1 person with that username<br>";
    $stmt->fetch();
    if (password_verify($password, $fetched_pass)) {
        echo " pw matches<br>";
        echo "<p>Login success</p>"; 
        $_SESSION['username'] = $username;
        $_SESSION['userid'] = $userid;
    }
    else {
        echo "Password does not match<br>";
    }
    

} else {
    echo "0 results. Not logged in<br>";
    $_SESSION =  [];
    session_destroy();
}

echo "Session variable = ";
print_r($_SESSION);

echo "<br>";

echo "<a href='index.php'>Return to main page</a>";

?>

</html>
