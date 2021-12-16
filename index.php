<?php

  
    include ('layout/header.php');
   
    include ('layout/footer.php');

    require_once './classes/users.php';
    $u = new User();

?>

<body>
    <div id="formBody">
        <h1>Login</h1>

        <form method="POST">
            <input type="email" name="email" placeholder="Username">
            <input type="password" name="senha"  placeholder="Password">
            <input type="submit" value="ACCESS">
            <a href="novoRegisto.php" class="reg">Not registered yet? <strong> Sign in </strong></a>

        </form>
    </div>

<?php

if (!empty($_POST['email'])) {
    
   
        $email=addslashes($_POST['email']);
        $senha=addslashes($_POST['senha']);
        
        //verificar se esta preenchido

        if(!empty($email)&&!empty($senha)){
            $u->connectar(
                "hrsistema",
                "localhost",
                "root",
                ""
            );

            if($u->msgErro == ""){
                if ($u->logar($email,$senha)){
                    header("location: areaPriv.php");
                }else {
                    ?>
                    <div>
                        Email and pass incorrect !
                     </div>
                    <?php
                    
                }
            }
            
        }else {
            ?>
            <div>
           <?php echo "ERROR ".$u->msgErro; ?>
            </div>
            <?php
            
            
    }
}else {

    ?>
    <div>
    Preencha todos os campos!
    </div>
    <?php
    
}

?>
</body>