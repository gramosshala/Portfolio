<?php
include("Databases.php");


class contact
{

    function __construct()
    {

    }

    function getConnection()
    {

        $database = new Databases();
        $conn = $database->getConnection();

        return $conn;
    }

    function insertdata()
    {

        $con = $this->getConnection();

        $emri = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sql = "INSERT INTO contact (name,email,subject,message) VALUES ('$emri','$email','$subject','$message')";

        if ($con->query($sql) === TRUE) {
            header("Location: ../index.php");
        } else {


        }
        $con->close();
    }

}

$obj = new contact();
$obj->insertdata();