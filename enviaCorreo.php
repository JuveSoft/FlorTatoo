<?php

if(isset($_POST['name'])){
    if(!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty(P_POST['email'])){
        $name=$_POST['name'];
        $asunto=$_POST['asunto'];
        $msg=$_POST['msg']; 
        $mail=$POST_['email'];
        $header="From: noreply@example.com" . "\r\n";
        $header.="Reply-to: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail=$mail($email,$asunto,$msg,$header);
        if($mail){
            echo "<h4>¡Mail enviado con exito !!</h4>";
        }

    }
}


?>