<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="style.css">
        <style>
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
.addcarf{
    font-size: 20px;
}
.addcar{
display: inline-block;
    position: absolute;
    top: 40px;
    left: 370px;
}
.removecar{
    display: inline-block;
    position: absolute;
    top: 40px;
    left: 500px;
}
.price{
    display: inline-block;
    position: absolute;
    top: 40px;
    left: 670px;
}
.logout{
    display: inline-block;
    position: absolute;
    top: 40px;
    left: 890px;
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
.msg{
    display: inline-block;
    margin-left: 600;
}
        </style>
    </head>
    <body>
        <div class="header">
            <div class="nav">
                <nav>
                    <li><a href="aboutus.php"><b>About us</b></a></li>
                    <li><a href="contactus.php"><b>Contact us</b></a></li>
                    <li><a href="cars.php"><b>Cars</b></a></li>
                    <li><a href="index.php"><b>Home</b></a></li>
                    
                </nav>

                <!-- Admin login logout msg  -->

                <div class="msg">
                    <h2>
                    <?php
                    if(isset($_GET['Message'])){
                        echo $_GET['Message'];
                    }
                    
                    ?>
                    </h2>
                </div>

            </div>
            
                <img src="mainlogo.jpeg" alt="logo" style="
                    height: 96px;
                    width: 120px;
                    margin-top: 20px;
                    margin-left: 30px;
                ">

                <!-- if admin login then buttons appear -->

                <?php
                session_start();
                if(isset($_SESSION['uname']) && isset($_SESSION['pass']))
                {
                if((($_SESSION['uname']=="modhwadiya" && $_SESSION['pass']=="123")) or (($_SESSION['uname']=="hardik" && $_SESSION['pass']=="123"))){
                    
                        ?>
                <div>
           <div class="addcar">
                <form action="addcar.php" method="POST">
                    <input type="submit" name="Add Car" class="addcarf" value="Add Car">
                </form>
             </div>
          
             <div class="removecar">
                <form action="removecar.php" method="POST">
                    <input type="submit" name="Remove Cars" class="addcarf" value="Remove Car">
                </form>
                </div>
                <div class="price">
                <form action="changeprice.php" method="POST">
                    <input type="submit" name="Change Car Prices" class="addcarf" value="Change Car Price">
                </form>
                </div>
                <div class="logout">
                <form action="logout.php" method="POST">
                    <input type="submit" name="Logout" class="addcarf" value="Log out">
                </form>
                </div>
             </div>
             </div>
                </div>
             </div>
             <?php
            }
                }
        ?>

                <!-- truecar quote -->

            <div class="hometitle">
                <pre><h1 id="qu">
                     You're a true car
                 Enthusiast if you remember
                          PEOPLE,
                   Not by their name,
                   But by the car they
                          Drive</h1></pre>
             </div>
        </div>
        
        <!-- footer start -->
        
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