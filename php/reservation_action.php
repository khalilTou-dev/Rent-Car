<?php include("Reservation.php"); ?>
<?php include("Car.php"); ?>
<?php include("Chauffeur.php"); ?>

<?php
  $id = $_GET['idCli'];
  $prix = $_GET['prix'];

  $nomcli = $_POST['name'];
  $cin = $_POST['cin'];
  $numtel = $_POST['phone'];
  $matricule = $_POST['matricule'];
  $type = $_POST['type'];
  $image = $_POST['image'];
  $datedeb = $_POST['datedeb'];
  $datefin = $_POST['datefin'];
  $idchauf = $_POST['chauf'];
  $time1 = strtotime($datedeb);
  $date1 = date('Y-m-d', $time1);
  $time2 = strtotime($datefin);
  $date2 = date('Y-m-d', $time2);
  
  $chauf = new Chauffeur();
  $resC = $chauf->findchauf($idchauf);
  $prixChauf = $resC->fetch();

  $reservation = new Reservation();
  $res = $reservation->listparvoit($matricule);
  echo "<script>";
  while ($ligne = $res->fetch()){
    if(($date1>=$ligne[5] and $date1<=$ligne[6])or($date2>=$ligne[5] and $date2<=$ligne[6])){
      echo 'juste';
      echo $ligne[5]."  ".$ligne[6];
      header("location:../reservation.php?idCli=$id&matricule=$matricule&type=$type&prix=$prix&image=$image");
      echo '<script>
      alert("désolé cette date est reservé pour cette voiture");
  
    </script>';
    }
  }

  $diff = abs($time2 - $time1);
  $retour = array();

  $tmp = $diff;
  $retour['second'] = $tmp % 60;

  $tmp = floor(($tmp - $retour['second']) / 60);
  $retour['minute'] = $tmp % 60;

  $tmp = floor(($tmp - $retour['minute']) / 60);
  $retour['hour'] = $tmp % 24;

  $tmp = floor(($tmp - $retour['hour'])  / 24);
  $retour['day'] = $tmp;
  //echo $retour['day'];
  
  $prixTot = $prix * $retour['day'];
  if ($idchauf != 0)
    $prixTot = $prixTot + ($prixChauf[2] * $retour['day']);

  $ok = $reservation->insert($nomcli, $cin, $numtel, $matricule, $date1, $date2, $prixTot, $idchauf);
  if ($ok == FALSE) {
    echo "Probleme d'insertion ";
  } else {
    header("location:../facture.php?cin=$cin&id=$id"); 
    echo '<script>alert("insertion effectuer avec succées");</script>';
  }
?>