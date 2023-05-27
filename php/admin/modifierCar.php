<?php include ("../Car.php");?>
<?php
    // récuperation des donnee du formulaire ainsi que l'id de l'evenement a modifier
    $matricule = $_POST['matricule'];
    $marque = $_POST['marque'];
    $type = $_POST['type'];
    $prix = $_POST['prix'];
    
    $car = new Car();
    // appeler la fonction update qui permet de modifier un evenement
    $ok = $car->update($marque,$type,$prix,$matricule,);
    if ($ok == FALSE)
        { echo "Probleme d'insertion ";}
    else
    {
        header('Refresh:0.1;url=listeCars.php');// redirection vers la liste des evenement apres l'affichage de message alert
        echo '<script>
        alert("modification effectuer avec succées");
        </script>
        ';// le message d'alert
    }
?>
