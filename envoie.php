<?php
session_start();


if (!isset($_SESSION['submitted'])) {
    header('Location: index.php');
    exit;
}

unset($_SESSION['submitted']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Envoie</title>
</head>
<body>
    <div class="container">
    <div class="alert alert-success" role="alert">
        Votre message a été envoyé avec succes :)
</div>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Nom: <?= $_SESSION['nom'] ?></h5>
        <h6 class="card-subtitle mb-2 text-muted">Email: <?= $_SESSION['email'] ?></h6>
        <h6 class="card-subtitle mb-2 text-muted">Téléphonne: <?= $_SESSION['tel'] ?></h6>
        <p class="card-text">Message: <?= $_SESSION['message'] ?></p>
</div>

        
    </div>



</body>
</html>




























