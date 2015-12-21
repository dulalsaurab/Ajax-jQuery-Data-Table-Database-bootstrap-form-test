<?php
    $name=$mobile=$phone=$email=$address=$companyname=$companyaddress=$companyemail=$companynumber="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=$_POST["name"];
        $mobile=$_POST["mobile"];
        $phone=$_POST["phone"];
        $email=$_POST["email"];
        $address=$_POST["address"];
        $companyaddress=$_POST["companyaddress"];
        $companyname=$_POST["companyname"];
        $companyemail=$_POST["companyemail"];
        $companynumber=$_POST["companynumber"];
    }
    echo "You have entered: ";
    $conn = new mysqli("localhost", "root", "", "telephone",8080);
    // $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO directory (name, phoneno, mobileno, email, address, companyname, companyaddress, companyno, companyemail)
    VALUES ('$name', '$phone', '$mobile', '$email', '$address', '$companyname', '$companyaddress', '$companynumber', '$companyemail')";

    if ($conn->query($sql) === TRUE) {
       header('Location:./formSubmission.php?message=sucess'); 
    } else {
       header('Location:./formSubmission.php?message=failure'); 
    }

    $conn->close();
?>
