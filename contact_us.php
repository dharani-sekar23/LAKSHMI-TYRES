<?php
$con = mysqli_connect("localhost","root","","tyre");

if(isset($_POST['submit_btn']))
{
    $username=$_POST['name'];
    $email=$_POST['email'];
    $phone_number=$_POST['phone_number'];
    $comments=$_POST["comments"];
    $query="INSERT INTO contact VALUES('$username','$email','$phone_number','$comments')";
    $query_run = mysqli_query($con, $query);
    if($query_run){
        echo "successfully inserted";
    }
    else{
        echo "insertion failed";
    }
}

?>