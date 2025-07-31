
<!--- used by index2.php -->
<!DOCTYPE html>
<html>
<head >
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link rel="stylesheet "  href="app.css">



</head>

<body class="background">

<form method="POST" action="index2.php">
<div class="form">
     <h2 style="color: rgb(33, 59, 59);" >Update password</h2>

   
    <input type="email" id="email" name="email" placeholder="Email" >
    <input   type="password" id="password" name="newpassword" placeholder="New Password ">
    <input   type="password" id="password" name="newpassword1" placeholder="Confirme New Password ">
   <div style="display: flex; text-align: center; justify-content: center; gap:5px;">

    <input style="cursor: pointer;width:80px;" type="submit" name="change" value="change" id=" button">
    </div>
    
    </form>
    

</body>
</html>