<?php

Class User{

    /////////////VAR PARA USAR NAS 3 FUNÇÕES//////////////////////
    private $pdo;
    public $msgErro="";

    ///////////////////////CONNECTAR///////////////////////////////
    public function connectar($nome, $host, $user, $senha){
        global $pdo;//global para saber q é a mesma var, senão cria nova var $pdo

        try{
            $pdo = new PDO(
            'mysql:dbname='.$nome.
            ";host=".$host,
            $user,$senha);
        } catch (PDOException $e){
            $msgErro = $e->getMessage();
        }

    }

    ///////////////////////REGISTAR///////////////////////////////
    public function registar($nome, $tel, $email, $senha){
        global $pdo;
        //VERIFICAR SE JÁ EXISTE EMAIL REGISTADO
        $sql = $pdo->prepare("SELECT id_user FROM users WHERE email =:e");
        $sql->bindValue(":e",$email);
        $sql->execute();
        if ($sql->rowCount() > 0 )
        {
            return false; //JA EXISTE EMAIL, SEM SUCESSO
        }
        //CASO NÃO EXISTA AINDA O EMAIL, VAI REGISTAR
        else 
        {
            $sql= $pdo->prepare("INSERT INTO users ('nome','telefone','email','senha') 
                                            VALUES (:n,:t,:e,:s)
            ");
            $sql->bindValue(":n",$nome);
            $sql->bindValue(":t",$tel);
            $sql->bindValue(":e",$email);
            $sql->bindValue(":s",$senha);
            $sql->execute();
            return true; //SUCESSO NO REGISTO
        }

    }
    
    ///////////////////////LOGAR///////////////////////////////
    public function logar($email,$senha){
        global $pdo;

    }
}


?>