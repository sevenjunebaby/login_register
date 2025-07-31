
<!--- used by index1.php -->
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="app.css">

</head>
<body class="background">
    <div class="form">
        <form   method="POST"  action="index1.php">
            <label for="username"></label>
            <input class="input" type="text" id="username" name="username" placeholder="Username">
            <label for="password"></label>
            <input class="input" type="password" id="password" name="password" autocomplete="off" placeholder="Password">
  
            
      <br>
      <p style="height: 5px;"><a href="./forgetpassword.php">Forget Password ! </a>
</p>
        
          
        <input id="btn" value="send" name="send" type="submit" style="cursor: pointer;width:80px;">
          </form>
        

        <div class="inscri">
          <p >Have a account ?<a id="register" name="register" class="register" href="./register.php"><b style="color: rgb(42, 73, 73);">Register</b></a>
          </p>




</body>
