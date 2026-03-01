<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Contact</title>
</head>
<body>
<div class="container mt-3">
    <h1 class="text-center bg-secondary text-dark p-3">
    Contacter nous!
</h1>

<div class="text-dark">
    Veuillez fournir votre nom et adresse email puis votre message
</div>
<div class="text-danger ">
    * Champs obligatoire
</div>



<?php

$nom=$email=$telephonne=$message="";
$nomErr=$emailErr=$messageErr="";
$isValid=true;
		function test_input($data) {
			$data = trim($data);//suppression des éspaces inutiles "  salah  "=> "salah"
			$data = stripslashes($data); // supprime les antislash  " salah\'s"=> "salah's"
			$data = htmlspecialchars($data);// empéche le XSS(sécurité)
			return $data;
		}	


    if (!empty($_POST)) {
      if (empty($_POST["nom"])) {
        $isValid=false;
        $nomErr="Le nom est un champs obligatoire";
      }
      else{
        $nom=test_input($_POST["nom"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
          $nomErr="Seuls les lettres et l'espace sont permis";
          $isValid=false;
        }
      
      if (empty($_POST["email"])) {
        $isValid=false;
        $emailErr="Le email est un champs obligatoire";
      }
      else{
        $email=test_input($_POST['email']);
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailErr = "Format adresse mail invalide";
					$isValid=false;
									
        }

		if (!empty($_POST['tel'])) {
			$tel = test_input($_POST['tel']);
		}

if (empty($_POST["message"])) {
    $messageErr = "Message obligatoire";
    $isValid = false;
} else {
    $message = test_input($_POST["message"]);
}

      if ($isValid) {
      $_SESSION['form_submitted'] = true;
      header(header: 'Location:envoie.php');
			exit;

      }



      }




      }



    }

?>






<form class="form-group" action="<?= htmlspecialchars(string: $_SERVER["PHP_SELF"]); ?>" method="post">
<div class="mb-3">
  <label for="nom" class="form-label">Nom: <span class="text-danger">* <?= $nomErr ?> </span>  </label>
  <input type="text" name="nom" class="form-control" id="nom" placeholder="saisir votre nom">
</div>


<div class="mb-3">
  <label for="email" class="form-label">Email: <span class="text-danger">* <?= $emailErr ?>  </span> </label>
  <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
</div>

<div class="mb-3">
  <label for="tel" class="form-label">Teléphone: </label>
  <input type="text" class="form-control" name="tel" id="tel" value="(+216) ">
</div>

<div class="mb-3">
      <label for="message">Message: <span class="text-danger">* <?= $messageErr ?></label>
    <textarea class="form-control" name="message" placeholder="Votre message" id="message"></textarea>

</div>

<button type="submit" class="btn btn-success btn-sm">Envoyer</button>
<button type="reset" class="btn btn-warning btn-sm">Annuler</button>


</form>







</div>
    

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>