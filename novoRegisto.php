<?php

  
    include ('layout/header.php');
   
    include ('layout/footer.php');

?>

<body>
    <div id="formBodyReg">
        <h1>Register</h1>

        <form action="process.php" method="POST">

            <input type="text" name="nome" placeholder="Full name" maxlength="30">
            <input type="tel" name="tel" placeholder="Phone" maxlength="30">
            <input type="email" name="email" placeholder="Username" maxlength="40">
            <input type="password"  name="senha" placeholder="Password" maxlength="15">
            <input type="password"  name="confSenha" placeholder="Confirm Password" maxlength="15">
            <input type="submit" value="REGIST">

        </form>
    </div>
</body>