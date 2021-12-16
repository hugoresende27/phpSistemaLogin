<?php

  
    include ('layout/header.php');
   
    include ('layout/footer.php');

    session_start();
    if(!isset($_SESSION['id_user'])){
        header("location: index.php");
        exit;
    }

?>


<div>
                    
    <h1>"BEM VINDO!"</h1>
    <a href="logout.php">SAIR</a>

</div>