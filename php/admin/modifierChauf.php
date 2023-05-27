<?php include ("../Chauffeur.php");?>
<?php
    // récuperation des donnee du formulaire ainsi que l'id de l'evenement a modifier
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    
    $chauf = new Chauffeur();
    // appeler la fonction update qui permet de modifier un evenement
    $ok = $chauf->update($nom,$prix,$id);
    if ($ok == FALSE)
        { echo "Probleme de modification ";}
    else
    {
        header('Refresh:0.1;url=listeChauffeur.php');// redirection vers la liste des evenement apres l'affichage de message alert
        echo '<script>
        alert("modification effectuer avec succées");
        </script>
        ';// le message d'alert
    }
?>
