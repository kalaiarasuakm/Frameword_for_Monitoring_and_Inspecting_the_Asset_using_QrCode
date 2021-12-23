<?php
/* Attempt MySQL server linkection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check linkection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);


// attempt insert query execution
$sql = "INSERT INTO moderator(firstname, lastname, username, password) VALUES ('$firstname', '$lastname', '$username', '$password')";
if(mysqli_query($link, $sql)){
    header('Location: account.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close linkection
mysqli_close($link);
?>