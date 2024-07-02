<?php

   include('dbconnection.php');

   if(isset($_POST['SubmitBtn']))
   {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $query = "insert into candidate(name, age, gender,email,phone,other) values('$name','$age', '$gender','$email','$phone', '$desc')";
    $run = mysqli_query($con, $query);
    if($run)
    {
        echo"Data inserted successfully!!";
    }
    else{
        echo"Data Not inserted !!";
    }
   }








?>