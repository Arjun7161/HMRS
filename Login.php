<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="stylelogin.css">

</head>
<body>
    <form action="home.php" method="post">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])) { ?>
           <p class="error"><?php echo $_GET['error']; ?></p>
           <?php } ?> 
        
        <label >Email</label>
        <input type="text" name="loginemail"><br>
        <label >Password</label>
        <input type="password" name="loginpassword"><br>

        <Button type="submit">Login</Button>
    </form>
</body>
</html>