<?php
    session_start();

    if($_SESSION['username'] !== ""){
        $user = $_SESSION['username'];
        echo "Bonjour $user";
    }
    else{
        header('Location: inscription.php');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>