<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     <!-- css link here -->
    <link rel="stylesheet" href="kev.css">
</head>
<body>
    <form action="sign_in.php" method="POST">
        <?php if(isset($_GET['error'])) { ?>
            <div class="error"><?php 
                echo $_GET['error']?></div>
       <?php } ?>
          <h2>Login</h2>
          <div>
              <label for="uname">Username</label>
              <input type="text" name="uname">
          </div>
          <div>
              <label for="pass">Password</label>
              <input type="password" name="pass">
          </div>
          <button type="submit" name="login"> Login</button>
    </form>
</body>
</html>