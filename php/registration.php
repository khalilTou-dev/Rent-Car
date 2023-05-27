<?php include ("Client.php");?>
<?php
    $username = $_POST['name'];
    $email = $_POST['email'];
    $cin = $_POST['cin'];
    $password=$_POST['password'];

    $client = new Client();
    $ok = $client->insert($username,$email,$cin,$password);
    if ($ok == FALSE)
        { echo "Probleme d'insertion ";}
    else
        {
header('Refresh:0.1;url=../login.html');// redirection vers createclient apres l'affichage de message
echo '<script>
  alert("insertion effectuer avec succées");

</script>
';
        }
?>