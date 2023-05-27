<?php include ("../Car.php");?>
<?php
    //récuperation des donnee du formulaire
    $matricule = $_POST['matricule'];
    $marque = $_POST['marque'];
    $type = $_POST['type'];
    $prix = $_POST['prix'];
    $image1 = "assets/images/cars/";
    $image = $image1 . $_POST['image'];
    $rec = new Car();
    $ok = $rec->insert($matricule,$marque,$type,$prix,$image);
    if ($ok == FALSE)
        { echo "Probleme d'insertion ";}
    else
    {
        header('Refresh:0.1;url=listeCars.php');// 
        echo '<script>
        alert("insertion effectuer avec succées");
        </script>
        ';// le message d'alert
    }
?>
