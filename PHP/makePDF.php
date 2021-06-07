<link rel="stylesheet" href="../CSS/productsController.css">
<?php

    require '../PHP/libraries/vendor/autoload.php';
    require '../bd/bd.php';

    
    
    if(isset($_POST['submit-btn'])){
        $order = $_POST['order'];
        $type = $_POST['type'];
        //echo $order;
        //echo $type;
        if($type == 'pdf'){
            $mpdf = new \Mpdf\Mpdf();
            $info = '';
            $query2 = $db->query("SELECT * FROM products ORDER BY $order LIMIT 10");
            if($query2->num_rows > 0){
                $col = 0;
                $order="productPrice";
                switch ($order) {
                    case "createdAt":
                        $name = "newest";
                    break;
                    case "productPrice":
                        $name = "product price";
                    break;
                    default:
                        echo "Your favorite color is neither red, blue, nor green!";
                }
                
                $info .= "<h1 class='title'> Top products ordered by ". $name ."<h1>";
                $info .= "<table id='t01' cellpadding='0'>";
                $info .= "<tr>";
                        
                while($row = $query2->fetch_assoc()){
                            $imageURL = '../PHP/uploads/'. $row["fileName"];
                            $productTitle = $row["productTitle"];
                            if($col % 3 == 0){
                                $info .= "</tr>";
                                $info .="<tr>";
                            }
                        
                            $info .= "<td>";
                            $info .= "<figure>";
                            $info .= "<img style='display:block;' width='400px' height='400px' src='". $imageURL . "'/>";
                            $info .= " <figcaption class='caption'>";
                            $info .= "<p>" . (int)$col + 1 .". ". $productTitle . "<p>";
                            $info .= "</figcaption>";
                            $info .= "</figure>";
                            $info .= "</td>";
                    
                            $col++;
                        }
                        
                        $info .= "</tr>";
                        $info .= "</table>";
                        $mpdf->WriteHTML($info);
                        $mpdf->Output('myFile.pdf','D');
            }
            else{
                echo "<h1 style='text-align: center'> We are sorry! It looks like there are no products available yet! <h1>";
            }
        }
    else if($type == "html"){
        $myfile = fopen("top.html", "w") or die("Unable to open file!");
        $query = $db->query("SELECT * FROM products ORDER BY $order LIMIT 10");
            if($query->num_rows > 0){
                $col = 0;
                $order="productPrice";
                switch ($order) {
                    case "createdAt":
                        $name = "newest";
                    break;
                    case "productPrice":
                        $name = "product price";
                    break;
                    default:
                        echo "Your favorite color is neither red, blue, nor green!";
                }
                $txt = "<h1 class='title'> Top products ordered by ". $name ."<h1>";
                fwrite($myfile, $txt);
                $txt = "<table id='t01' cellpadding='0'>";
                fwrite($myfile, $txt);
                $txt = "<tr>";
                fwrite($myfile, $txt);        
                while($row = $query->fetch_assoc()){
                            $imageURL = '../PHP/uploads/'. $row["fileName"];
                            $productTitle = $row["productTitle"];
                            if($col % 3 == 0){
                                $txt = "</tr>";
                                fwrite($myfile, $txt);
                                $txt ="<tr>";
                                fwrite($myfile, $txt);
                            }
                        
                            $txt = "<td>";
                            fwrite($myfile, $txt);
                            $txt = "<figure>";
                            fwrite($myfile, $txt);
                            $txt = "<img style='display:block;' width='400px' height='400px' src='". $imageURL . "'/>";
                            fwrite($myfile, $txt);
                            $txt = " <figcaption class='caption'>";
                            fwrite($myfile, $txt);
                            $txt = "<p>" . (int)$col + 1 .". ". $productTitle . "<p>";
                            fwrite($myfile, $txt);
                            $txt = "</figcaption>";
                            fwrite($myfile, $txt);
                            $txt = "</figure>";
                            fwrite($myfile, $txt);
                            $txt = "</td>";
                            fwrite($myfile, $txt);
                    
                            $col++;
                        }
                        
                        $txt = "</tr>";
                        fwrite($myfile, $txt);
                        $txt = "</table>";
                        fwrite($myfile, $txt);
                        fclose($myfile);
                        
                        header('Content-Type: application/octet-stream');
                        header('Content-Disposition: attachment; filename='.basename('top.html'));
                        header('Expires: 0');
                        header('Cache-Control: must-revalidate');
                        header('Pragma: public');
                        header('Content-Length: ' . filesize('top.html'));
                        readfile('top.html');

            }
            
    }
}

?>