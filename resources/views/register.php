
<!--- used by index.php -->
<!DOCTYPE html>
<html>
<head >
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link rel="stylesheet "  href="app.css">



</head>

<body class="background">

<form method="POST" action="index.php">
<div class="form">
     <h2 style="color: rgb(33, 59, 59);" >Register</h2>


   
    <input type="name" id="name" name="name" placeholder="Full name" >
    <input   type="password" id="password" name="password" placeholder="Password ">
    <input style="color: gray;" type="date" id="date-input">
    <input type="email" id="email" name="email" placeholder="Email" >
    <input type="phonenumber" id="phonenumber" name="phonenumber" placeholder="Phone number">
    <select name="" id="">
        <option value="Woman"> Female</option>
        <option value="Man"> Male</option>  
        <option value="Robot"> Robot</option>  
    </select>
   <div style="display: flex; text-align: center; justify-content: center; gap:5px;">

    <input style="cursor: pointer;width:80px;" type="submit" name="send" value="Send" id=" button">
    </div>
    <div class="inscri">
          <p >Have a account ?<a id="register" name="register" class="register" href="./login.php"><b style="color: rgb(42, 73, 73);">Login</b></a>
          </p>  
    </form>
    

</body>
</html>