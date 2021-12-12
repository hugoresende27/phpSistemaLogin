<?php

  
    include ('layout/header.php');
   
    include ('layout/footer.php');

?>

<body>
    <div id="formBody">
        <h1>Login</h1>

        <form action="process.php" method="POST">
            <input type="email" placeholder="Username">
            <input type="password"  placeholder="Password">
            <input type="submit" value="ACCESS">
            <a href="" class="reg">Not registered yet? <strong> Sign in </strong></a>

        </form>
    </div>
</body>