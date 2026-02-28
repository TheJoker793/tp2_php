<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<?php
include("./data/my_data.php")
?>
<h1 class="text-center">Liste avec boucle for</h1>

<table class="table table-bordered">
    <tr>
        <?php 
for($i=0; $i<12; $i++){

    if ($i != 0 && $i % 3 == 0) {
        echo "</tr><tr>";
    }

    echo '<td>' . ($i+1) . '</td>';
    echo '<td style="background-color:' . $couleurs[$i] . '">' . $mois[$i] . '</td>';
}

        ?>
    </tr>





</table>

<h1 class="text-center">Liste avec boucle foreach </h1>

<table class="table table-bordered">
    <tr>
    <?php
    foreach($mois as $index => $nomMois){
        echo '<td>' . ($index + 1) . '</td>'; 
        echo '<td style="background-color:' . $couleurs[$index] . '">' . $nomMois . '</td>';

        if (($index + 1) % 3 == 0) { 
            echo "</tr><tr>"; 
        }
    }
    ?>
    </tr>
</table>

<h1 class="text-center">Liste des jours fr/en</h1>
<table class="table table-bordered bg-light">
    <?php 
    foreach($days as $fr => $en) {
        echo "<tr>";
            echo "<td>Français: $fr </td>";
            echo "<td style='color:blue'>Anglais: $en</td>";
        echo "</tr>";
    }
    ?>
</table>




    
</body>
</html>