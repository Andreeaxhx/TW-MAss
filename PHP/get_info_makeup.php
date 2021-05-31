<?php

    session_start();
    require '../bd/bd.php';

    $errors = array();

    $age = "";
    $gender = "";
    $hairColor = "";
    $hairType = "";
    $skinColor = "";
    $faceShape = "";
    $eyesColor = "";

    if(isset($_POST['submitBtn'])){

        //echo "<script type='text/javascript'>alert('Hei');</script>";
        if(isset($_POST['age'])){
            $age = mysqli_real_escape_string($db, $_POST['age']);
        }
        if(isset($_POST['gender'])){
            $gender = mysqli_real_escape_string($db, $_POST['gender']);
        }
        if(isset($_POST['hairColor'])){
            $hairColor = mysqli_real_escape_string($db, $_POST['hairColor']);
        }
        if(isset($_POST['hairType'])){
            $hairType = mysqli_real_escape_string($db, $_POST['hairType']);
        }
        if(isset($_POST['skinColor'])){
            $skinColor = mysqli_real_escape_string($db, $_POST['skinColor']);
        }
        if(isset($_POST['face'])){
            $faceShape = mysqli_real_escape_string($db, $_POST['face']);
        }
        if(isset($_POST['eyesColor'])){
            $eyesColor = mysqli_real_escape_string($db, $_POST['eyesColor']);
        }


        if(empty($age)){
            array_push($errors, "Please insert your age!");
        }

        if(empty($gender)){
            array_push($errors, "Please input your gender!");
        }

        if(empty($hairColor)){
            array_push($errors, "Please insert your hair color!");
        }

        if(empty($hairType)){
            array_push($errors, "Please insert your hair type!");
        }

        if(empty($skinColor)){
            array_push($errors, "Please insert your skin color!");
        }

        if(empty($faceShape)){
            array_push($errors, "Please insert your face shape!");
        }

        if(empty($eyesColor)){
            array_push($errors, "Please insert your eyes color!");
        }

        //$username = $_SESSION['username']; 

        if(count($errors) == 0){
            $query="INSERT INTO traits(age,gender,hairColor,hairType,skinColor,faceShape,eyesColor)
                VALUES (' $age ',' $gender ',' $hairColor ',' $hairType ',' $skinColor ',' $faceShape ',' $eyesColor ')";
            mysqli_query($db, $query);
        
            header('location: ../HTML/tumay_register.php');
                
        }

        session_destroy();

    }

?>