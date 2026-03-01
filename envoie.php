<?php
session_start();

if (empty($_SESSION['form_submitted'])) {
    header('Location: index.php');
    exit;
}

// Détruire le jeton après usage (évite le rechargement de page)
unset($_SESSION['form_submitted']);
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
        
    </div>



</body>
</html>




























