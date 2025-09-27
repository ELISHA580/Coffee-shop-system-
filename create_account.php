<?php 
    session_start();
    $conn = mysqli_connect("localhost","root","","pongwe");

    if (isset($_POST['firstname'])) {
        $Fname = $_POST['firstname'];
        $Sname = $_POST['secondname'];
        $Uname = $_POST['username'];
        $telephone = $_POST['phone'];
        $email = $_POST['email'];
        $passcode = $_POST['password'];

        $sql = "INSERT INTO register (`Fname`, `Sname`, `Uname`, `telephone`, `email`, `passcode`) VALUES ('$Fname', '$Sname', '$Uname', '$telephone', '$email', '$passcode')";

        mysqli_query($conn, $sql);
            header('location: success.php');
    }
        else {
            echo "An error occured.";
        }
    
?>