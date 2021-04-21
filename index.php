<?php
session_start();
if (!isset($_SESSION['user_name'])) {
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
    <link rel="stylesheet" href="src/index.css">
</head>

<body>
        <div class="input-message">
            <input type="text" name="message" class="message" id="lblMessage" />
        </div><input type="hidden" id="lblName" value="<?= $_SESSION['user_name'] ?>" />
        <a href="src/php/exit.php">SAIR</a>
        <div class="messages-box" id="lblResponse"></div>
    
        <script src="src/index.js"></script>
</body>

</html>