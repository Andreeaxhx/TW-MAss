<?php

    session_start();
    require '../bd/bd.php';

    $errors = array();

    $typeMakeup = "";
    $waterproofMakeup = "";
    $colorEyes1 = "";
    $colorEyes2 = "";
    $colorEyes3 = "";
    $noEyeshadow = "";
    $falseEyelashes = "";
    $typeEyelashes = "";
    $colorLips1 = "";
    $colorLips2 = "";
    $colorLips3 = "";
    $lipstick = "";
    $time = "";

    if(isset($_SESSION['username'])){
        if(isset($_POST['submitBtn'])){

            //"<script type='text/javascript'>alert('Hei');</script>";
            if(isset($_POST['typeMakeup'])){
                $typeMakeup = mysqli_real_escape_string($db, $_POST['typeMakeup']);
            }
            if(isset($_POST['waterproofMakeup'])){
                $waterproofMakeup = mysqli_real_escape_string($db, $_POST['waterproofMakeup']);
            }
            if(isset($_POST['colorEyes1'])){
                $colorEyes1 = mysqli_real_escape_string($db, $_POST['colorEyes1']);
            }
            if(isset($_POST['colorEyes2'])){
                $colorEyes2 = mysqli_real_escape_string($db, $_POST['colorEyes2']);
            }
            if(isset($_POST['colorEyes3'])){
                $colorEyes3 = mysqli_real_escape_string($db, $_POST['colorEyes3']);
            }
            if(isset($_POST['noEyeshadow'])){
                $noEyeshadow = mysqli_real_escape_string($db, $_POST['noEyeshadow']);
            }
            if(isset($_POST['falseEyelashes'])){
                $falseEyelashes = mysqli_real_escape_string($db, $_POST['falseEyelashes']);
            }
            if(isset($_POST['typeEyelashes'])){
                $typeEyelashes = mysqli_real_escape_string($db, $_POST['typeEyelashes']);
            }
            if(isset($_POST['colorLips1'])){
                $colorLips1 = mysqli_real_escape_string($db, $_POST['colorLips1']);
            }
            if(isset($_POST['colorLips2'])){
                $colorLips2 = mysqli_real_escape_string($db, $_POST['colorLips2']);
            }
            if(isset($_POST['colorLips3'])){
                $colorLips3 = mysqli_real_escape_string($db, $_POST['colorLips3']);
            }
            if(isset($_POST['lipstick'])){
                $lipstick = mysqli_real_escape_string($db, $_POST['lipstick']);
            }
            if(isset($_POST['time'])){
                $time = mysqli_real_escape_string($db, $_POST['time']);
            }


            if(empty($typeMakeup)){
                array_push($errors, "Please insert the type of make-up!");
            }

            if(empty($waterproofMakeup)){
                array_push($errors, "Please input your choice of waterproof make-up!");
            }

            if($colorEyes1 == '#000000' and $colorEyes2  == '#000000' and $colorEyes3 == '#000000'){
                if(empty($noEyeshadow)){
                    array_push($errors, "Please insert your choice of eye shadow!");
                }
            }

            if(empty($falseEyelashes)){
                array_push($errors, "Please insert your choice of false eyelashes!");
            }

            if(empty($colorLips1) and empty($colorLips2) and empty($colorLips3)){
                if(empty($lipstick)){
                    array_push($errors, "Please insert your choice of lipstick!");
                }
            }

            if(empty($time)){
                array_push($errors, "Please choose a time!");
            }

            if($colorEyes1 == '-' or $colorEyes2  == '-' and $colorEyes3 == '-'){
                    
            }

            if(count($errors) == 0){

                if($noEyeshadow == 'noEyeshadow'){
                    $colorEyes1 = '-';
                    $colorEyes2  = '-';
                    $colorEyes3 == '-';
                }

                if($lipstick == 'noLipstick'){
                    $colorLips1 = '-';
                    $colorLips2  = '-';
                    $colorLips3 = '-';
                }

                if($colorLips1 == '#000000'){
                    $colorLips1 = '-';
                }
                if($colorLips2 == '#000000'){
                    $colorLips2 = '-';
                }
                if($colorLips3 == '#000000'){
                    $colorLips3 = '-';
                }

                if($colorEyes1 == '#000000'){
                    $colorEyes1 = '-';
                }
                if($colorEyes2 == '#000000'){
                    $colorEyes2 = '-';
                }
                if($colorEyes3 == '#000000'){
                    $colorEyes3 = '-';
                }


                $query="INSERT INTO makeup(username,typeMakeup,waterproofMakeup,colorEyes1,colorEyes2,colorEyes3,noEyeshadow,falseEyelashes,typeEyelashes,colorLips1,colorLips2,colorLips3,lipstick,timePeriod)
                    VALUES ('" . $_SESSION['username'] . "',' $typeMakeup ',' $waterproofMakeup ',' $colorEyes1 ',' $colorEyes2 ',' $colorEyes3 ',' $noEyeshadow ',' $falseEyelashes ',' $typeEyelashes ',' $colorLips1 ',' $colorLips2 ',' $colorLips3 ',' $lipstick ',' $time ')";
                mysqli_query($db, $query);

                //echo $query;
            
                //header('location: ../HTML/tumay_register.php');
                    
            }

            //session_destroy();

        }
    }
    else{
        array_push($errors, "Please login first!");
    }

?>