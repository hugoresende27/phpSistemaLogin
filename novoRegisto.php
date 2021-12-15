<?php

  
    include ('layout/header.php');
   
    include ('layout/footer.php');
    require_once './classes/users.php';
    $u = new User;
?>

<body>
    <div id="formBodyReg">
        <h1>Register</h1>

        <form method="POST">

            <input type="text" name="nome" placeholder="Full name" maxlength="30">
            <input type="tel" name="tel" placeholder="Phone" maxlength="30">
            <input type="email" name="email" placeholder="Username" maxlength="40">
            <input type="password"  name="senha" placeholder="Password" maxlength="15">
            <input type="password"  name="confSenha" placeholder="Confirm Password" maxlength="15">
            <input type="submit" value="REGIST">
           
        </form>
        <div class="text-center">
            <a class="btn btn-info" href="index.php">HOME</a>
        </div>
    </div>

<?php 
//verificar se clicou no botão
if (isset($_POST['nome'])) {
    $nome =addslashes($_POST['nome']);  //addslashes para proteger de injection
    $tel=addslashes($_POST['tel']);
    $email=addslashes($_POST['email']);
    $senha=addslashes($_POST['senha']);
    $confSenha=addslashes($_POST['confSenha']);
    //verificar se esta preenchido

    if(!empty($nome)&&!empty($tel)&&!empty($email)&&!empty($senha)&&!empty($confSenha)){
        $u->connectar(
            "hrsistema",
            "localhost",
            "root",
            ""
        );
        if($u->msgErro == "")//se não tiver erro
        {
            if ($senha == $confSenha){
                if($u->registar($nome,$tel,$email,$senha)){
                    echo "Registo com sucesso, faça login agora";
                    
                    
                    
                } else {
                    echo "Email já registado!";
                }
            } else {
                echo "Senha e confirmar senha diferentes!! ";
            }
            
        }
        else
        {
            echo "ERRO ".$u->msgErro;
        }

    } else {
        echo "Preencha todos os campos!";
    }

}



?>
</body>