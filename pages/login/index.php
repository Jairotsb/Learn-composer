<?php
session_start();
if (isset($_SESSION['user_name'])) {
    header("Location: ../");
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
    <h1 class="greettings">Bem vindo ao My Message</h1>

    <form id="form" method="POST">
        <label for="name">Digite aqui seu nome: </label>
        <input type="text" name="name" id="lblName" />
    </form>


    <script src="src/index.js"></script>
</body>

</html>