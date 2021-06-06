<?php

    require '../PHP/libraries/vendor/autoload.php';
    //require '../bd/bd.php';

    $mpdf = new \Mpdf\Mpdf();
    $info = '';
    $info .= '<h1>Your details!</h1>';
    $info .= '<h5>Tudor!</h5>';

    if(isset($_POST['submitBtn'])){
        $mpdf->WriteHTML($info);
        $mpdf->Output('myFile.pdf','D');
    }
?>