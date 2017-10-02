<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="mobilestyle.css">

<title>Login</title>
</head>
<body>

<form id="login" method="POST" action="login2.php" >

<div class="info">
<label><b>User Name: </b></label>
<input type="text" name="username" id="uname" />
<label><b>Password: </b></label>
<input type="password" name="password" id="pword"/>
</div>


<input type='submit' name='Submit' value='Enter' id='enter'/>


</form>

<?php  
if(isset($_POST['Submit'])) 
{
  $userName = $_POST['username'];
  $passWord = $_POST['password'];
    if($userName == "Crenshaw" && $passWord == "4444")    
      {                                      
       $_SESSION['username']=$user;
      echo 'cool';            
        }
       else{
        echo "Try Again ";        
        }   
}
 ?>
</body>
</html>