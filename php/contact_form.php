<?php
include_once 'connection.php';
try
{
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(!empty($_POST['first-name']) && !empty($_POST['last-name']) && !empty($_POST['email'])) {
            $fname = $_POST['first-name'];
            $lname = $_POST['last-name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $database = new Connection();
            $db = $database->openConnection();
            
            // inserting data into create table using prepare statement to prevent from sql injections
            $stm = $db->prepare("INSERT INTO contact (fname,lname,email,subject,message) VALUES ( :fname, :lname, :email, :subject, :message)") ;
            // inserting a record
            $stm->execute(array(':fname' => $fname , ':lname' => $lname , ':email' => $email, ':subject' => $subject, ':message' => $message));
            echo "New record created successfully";
        }
    }
    else {
        echo "There was an issue adding the data to the database";
    }
    
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}
?>