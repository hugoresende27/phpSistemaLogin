<?php

  
    include ('layout/header.php');
   
    include ('layout/footer.php');

?>

<body>
    <div id="formBodyReg">
        <h1>Register</h1>

        <form action="process.php" method="POST">

            <input type="text" placeholder="Full name">
            <input type="tel" placeholder="Phone">
            <input type="email" placeholder="Username">
            <input type="password"  placeholder="Password">
            <input type="password"  placeholder="Confirm Password">
            <input type="submit" value="REGIST">

        </form>
    </div>
</body>