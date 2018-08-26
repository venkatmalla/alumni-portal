<?php
/*include_once('config.php');

$user=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * FROM users where username='".$user."' and password='".$password."'";

$res=mysqli_query($con,$query);

if($res){
    echo "success";
    header("location: http://iidt.edu.in");
}else{
    echo "wrong password";
}
*/

include_once('config.php');

$user=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * FROM users where username='".$user."' and password='".$password."'";

$res=mysqli_query($con,$query);
$rowcount=mysqli_num_rows($res);

if($rowcount>0){
  header ("location: http://iidt.edu.in");
}else{
    echo "wrong password";
}