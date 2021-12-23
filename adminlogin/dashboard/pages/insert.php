<?php 
require_once("config.php");
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	
if ($username != "" && $password != ""){

        $sql_query = "select * from admin where username='".$username."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
		
		$count = mysqli_num_rows($result);
     

        if($count > 0){
            $_SESSION['uname'] = $username;
            header('Location: dashboard.php');
        }else{
            echo "Invalid username and password";
        }

    }

}