<?php 
    session_start();
    if(!isset($_SESSION['user_name'])){
        header("Location: pages/login/");
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Message</title>
</head>
<body>
        
        <input type="hidden" id="lblName" value="<?= $_SESSION['user_name'] ?>"/>


        <label for="message">Digite aqui sua mensagem:</label>
        <input type="text" name="message" id="lblMessage"/>
        

        <div id="lblResponse"></div>

        <a href="src/php/exit.php">SAIR</a>


        <script src="src/index.js"></script> 
</body>
</html>