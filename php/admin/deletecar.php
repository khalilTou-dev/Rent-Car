<?php include ("../car.php");?>
<?php
    // récupération l'id d'evenement a supprimer
    $id = $_GET['matricule'];
    $rec = new Car();
    // appeler la fonction delete qui permet de supprimer un evenement
    $ok = $rec->delete($id);
    if ($ok == FALSE)
    { echo "Probleme de suppression ";}
else
{
    header('Refresh:0.1;url=listeCars.php');// redirection vers la liste des evenements  apres la suppression
        echo '<script>
        alert("suppression effectuer avec succées");

        </script>
        ';
    
 
}
?>
