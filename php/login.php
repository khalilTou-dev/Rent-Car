<?php include ("Client.php");?>
<?php

    $email = $_POST['email'];
    $password = $_POST['password'];

    $rec = new Client();
    $res = $rec->checkcompte($email);
    $ligne = $res->fetch();
    $ok = $rec->checkcompte($email);
    $count = $ok->rowCount();
    if ($email == "admin@gmail.com" and $password == "admin"){
     header("Refresh:0.1;url=../logadmin.html");
     echo '<script>
     alert("login as admin successfully");
     
     </script>
     '; 
    }
    else if ($count == 0)
    { 
        header('Refresh:5;url=../login.html');
        echo '<script>
          alert(" compte n existe pas");
        
        </script>
        ';
   }else if ($ligne[4] != $password){
        header('Refresh:0.1;url=../login.html');
        echo '<script>
        alert("password incorrect");
        
        </script>
        ';
   }else{
          header("location:../indexlog.php?id=$ligne[0]");
          echo '<script>
          alert("login successfully");
          
          </script>
          '; 
        /*header('Refresh:0.1;url=../indexlog.html');
        echo '<script>
        alert("login successfully");
        
        </script>
        ';*/
   }