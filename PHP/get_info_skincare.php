<?php

    session_start();
    require '../bd/bd.php';

    //echo $_SESSION['username'];
    $errors = array();

    $q1 = "";
    $q2= "";
    $q3 = "";
    $q4 = "";
    $q5 = "";
    $q6 = "";
    $q7 = "";

    if(isset($_SESSION['username'])){
        if(isset($_POST['submitBtn'])){

            //"<script type='text/javascript'>alert('Hei');</script>";
            if(isset($_POST['q1'])){
                $q1 = mysqli_real_escape_string($db, $_POST['q1']);
            }
            if(isset($_POST['q2'])){
                $q2 = mysqli_real_escape_string($db, $_POST['q2']);
            }
            if(isset($_POST['q3'])){
                $q3 = mysqli_real_escape_string($db, $_POST['q3']);
            }
            if(isset($_POST['q4'])){
                $q4 = mysqli_real_escape_string($db, $_POST['q4']);
            }
            if(isset($_POST['q5'])){
                $q5 = mysqli_real_escape_string($db, $_POST['q5']);
            }
            if(isset($_POST['q6'])){
                $q6 = mysqli_real_escape_string($db, $_POST['q6']);
            }
            if(isset($_POST['q7'])){
                $q7 = mysqli_real_escape_string($db, $_POST['q7']);
            }
            


            if(empty($q1) || empty($q2) || empty($q3) ||  empty($q4) ||  empty($q5) ||  empty($q6) ||  empty($q7)){
                array_push($errors, "Please answear all the questions!");
            }

            if(count($errors) == 0){

                $query="INSERT INTO skincare(username,q1,q2,q3,q4,q5,q6,q7)
                    VALUES ('" . $_SESSION['username'] . "', ' $q1 ',' $q2 ',' $q3 ',' $q4 ',' $q5 ',' $q6 ',' $q7 ')";
                mysqli_query($db, $query);
            
                header('location: ../HTML/tumay_register.php');
                    
            }

            //session_destroy();

        }
    }
    else{
        array_push($errors, "Please login first!");
    }

?>