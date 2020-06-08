<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Acceso</title>         
        <link href="assets/css/reset.css" rel="stylesheet" >
        <link href="assets/css/supersized.css" rel="stylesheet" >
        <link href="assets/css/style.css" rel="stylesheet" >
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel="stylesheet" >           
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/lib-resources.js"></script>
        <script src="assets/js/verifyLogUser.js"></script>        
    </head>
    <body>
        <div class="page-container">            
            <form method="POST" id="frm_login">
                <h1>Login</h1>               
                <input type="text" name="username" id="username" class="username" placeholder="Usuario">
                <input type="password" name="password" id="password" class="password" placeholder="Contraseña">
                <button type="submit" id="submit">Ingresar</button>
                <div class="error"><span>+</span></div>
            </form>
        </div>
    </body>
</html>