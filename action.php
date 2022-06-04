<?php
 if(    isset($_POST['name']) || isset($_POST['mail']) || isset($_POST['tele']) || isset($_POST['feedback']) )
{
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $tele=$_POST['tele'];
    $feedback=$_POST['doubts'];
}


$conn= new mysqli('localhost','root','','test');

if($conn->connect_error)
{
    die($conn->connect_error);
    echo "nithis";
}
else{
    
    $stmt=$conn->prepare("insert into registration(name,mail,tele,feedback)values(?,?,?,?)");
    $stmt->bind_param("ssis",$name,$mail,$tele,$feedback);
    $stmt->execute();
    echo "Registration Successfull.You will be getting call with in 24 Hours.........";
    $stmt->close();
    $conn->close();
}

 
?>  