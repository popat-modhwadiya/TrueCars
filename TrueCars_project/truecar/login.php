


<!DOCTYPE html>

<!-- <html lang="en" dir="ltr"> -->
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>

.msg{
    font-size: 12px;
    position: absolute;
    top: 665px;
    left: 500px;
}
input[type=text],input[type=file],textarea {
  width: 100%;
  color : black;                     
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: rgb(246, 191, 29);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

#main {
  border-radius: 5px;
  padding: 20px;
  margin-left: 30%;
  margin-right: 30%;
  position: absolute;
    top: 0px;   
}
label{
    font-size: 20px;
}
#main {
  border-radius: 5px;
  padding: 20px;
  margin-left: 30%;
  margin-right: 30%;
  margin-top: 250px;
  position: absolute;
    top: 0px;   
}

     </style>
   </head>
<body>
  <div class="header">
    <div class="msg">
    <?php
if (isset($_POST['login'])) {

$db = mysqli_connect("localhost", "root", "", "truecar");
    $username = $_POST['uname'];
    $password = $_POST['password'];

    if((($username == "hardik") and ($password == "123")) or (($username == "modhwadiya") and ($password == "123")))
    {
      session_start();
      $_SESSION['uname']=$username;
      $_SESSION['pass']=$password;
      $Message = urlencode("Login successfully");
        header("Location:index.php?Message=".$Message);
        die;
    }
    else
    {
      ?>
      <h1 style="color:white">Please do not try to login if you are not admin</h1>
      <?php
    }
  }
?>
    </div>
    
    <div id="main">
      <form method="post" action="" >
      <label for="name">ADMIN NAME :</label>
                <input type="text" id="uname" name="uname" placeholder="admin name.." required>
                <label for="price">PASSWORD :</label>
                <input type="text" id="password" name="password" placeholder="password.." required>
                <input type="submit" value="Login" name="login">
      </form>
    </div>
  </div>

</body>
</html>
