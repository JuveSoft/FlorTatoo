<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
<link rel="stylesheet" href="estilo.css" type="text/css">
<style>
*{
    padding:0px;
    margin:0px;
    font-family:Century gothic;
}
body{
    background-color: #ededed;
}
form{
    widtH:700px;
    margin:auto;
    background-color:#8bf;
    margin-top:100px;
}
input{
    margin:15px;
    padding: 10px;
    min-width:640px;

    font-size:18px;
    border:none;
}
input[type="submit"]{
    margin-botton:15px;
    margin-top:5px;
    margin-left: 15px;
    padding: 10px;
    min-width:640px;
    
}
textarea{
    margin: 14px;
    padding:8px;
    min-width:640px;
    max-width:640px;
    min-height:100px;
    max-height:200px;
    font-size:18px;
    border:none;
}


</style>
</head>
<body>
 <form action="method="post">
<input type="text" placeholder="Nombre" name="nombre" required="">
<input type="email" placeholder="E-mail" name="email" required="">
<input type="text" placeholder="Asunto" name="asunto" required="">
<textarea placeholder="Mensaje" name="msg" id="" cols="30" rows="10"></textarea>
<input type="submit" name="enviar">
 </form>
 <?php

include ("enviaCorreo.php")



?>
</body>
</html>