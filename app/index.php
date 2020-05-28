<?php
 
 echo "HI WORLD";

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 
    $param = $_POST['param'];

    echo "El parametro es -> "+$param+"";

    /*$ImageName = $_POST['image_name'];

    $_FILES['fichero_usuario'];
    
    $ImagePath = "images/imagen.png";

    file_put_contents($ImagePath,base64_decode($ImageData));

    echo "Your Image Has Been Uploaded.";*/

?>