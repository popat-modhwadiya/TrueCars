<html>
    <head>
        <title>Contact us</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <style>
     h5{
      color: black;
}
.email{
    font-size: 20px;
    position: absolute;
    top: 639px;
    left: 600px;
}
input[type=text],textarea {
  width: 100%;
  color : black;                     
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;

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
}
label{
    font-size: 20px;
}
.footer{
    
    background-color: black;
    padding: 20px 20px 20px 20px;
}
.div1{
    display: inline-block;
    margin-left: 65px;
}
.div2{
    display: inline-block;
    margin-left: 350px;
}
.div2 a:link {
  color: blue;
}

/* visited link */
.div2 a:visited {
  color: purple;
}
    </style>
    <body>
        <div class="header">
            <div class="nav">
                <nav>
                    <li><a href="aboutus.php"><b>About us</b></a></li>
                    <li><a href="contactus.php"><b>Contact us</b></a></li>
                    <li><a href="cars.php"><b>Cars</b></a></li>
                    <li><a href="index.php"><b>Home</b></a></li>
                    
                </nav>
                <img src="mainlogo.jpeg" alt="logo" style="
                    height: 96px;
                    width: 120px;
                    margin-top: 20px;
                    margin-left: 30px;
                ">
            </div>
            <div class="email">
                <?php
                         if(isset($_POST['btn']))
                         {
                             $name=$_POST['name'];
                             $mno=$_POST['mno'];
                             $email=$_POST['email'];
                             $subject=$_POST['subject'];
                             $msg="Name : $name \n Mobile no : $mno \n Email : $email \n subject : $subject";
                             $to="kuchhadiyahardik03@gmail.com";
                         
                         $to_email = "kuchhadiyahardik03@gmail.com";
                         $subject = "Contact from truecar";
                         $headers = "From: popatmodhwadiya27@gmail.com";
                          
                         $mail=mail($to_email, $subject,$msg, $headers);
                         if($mail)
                         {
                            echo "<h1>Your responce is submitted</h1>";
                         }
                         else{
                            echo "<h1>Your responce is not submitted</h1>";
                         }
                         }    
                ?>
            </div>
            
            <div id="main" >
            <form action="" method="post">

                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name.." required>
                <label for="mno">Mobile number</label>
                <input type="text" id="mno" name="mno" placeholder="Your mobile number.." required>
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Your email address.." required>

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit" name="btn">
            </form>
            </div>
        </div>
        <hr>
        <div class="footer">
            <footer style="font-size:25px;">
                <div class="div1">
                    <p><b>Sell your cars in our website <br> Contact us : modhwadiya*********@gmail.com</b></p><br>
                    <p>&copy 2022-2025 @truecar.com</p><br>
                    <p>Thank you for visiting truecar </p>
                </div>
                <div class="div2">
                    <p><b>Also visit these websites :</p>
                    <a href="https://www.cardekho.com/" target="_blank">CarDekho</a><br>
                    <a href="https://www.carwale.com/" target="_blank">CarWale</a><br>
                    <a href="https://www.cartrade.com/" target="_blank">Cartrade</a><br>
                    <a href="https://www.cars24.com/" target="_blank">Cara24</a><br>
                    <a href="https://www.zigwheels.com/newcars" target="_blank">ZigWheels</a><br>
                </div>
                <div class="admin" style="display : inline-block;">
                    <a href="login.php" target="_self">Are you admin?</a>
                </div> 
            </footer>
        </div>
    </body>
</html>