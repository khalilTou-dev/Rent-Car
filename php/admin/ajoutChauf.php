<?php include ("../Chauffeur.php");?>
<?php
    //récuperation des donnee du formulaire
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $rec = new Chauffeur();
    $ok = $rec->insert($nom,$prix);
    if ($ok == FALSE)
        { echo "Probleme d'insertion ";}
    else
    {
        header('Refresh:0.1;url=listeChauffeur.php');// 
        echo '<script>
        alert("insertion effectuer avec succées");
        </script>
        ';// le message d'alert
    }
?>
