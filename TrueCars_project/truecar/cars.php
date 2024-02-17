<html>
    <head>
        <title>Cars</title>
        <link rel="stylesheet" href="style.css">
        <style>
            .msg{
                display: inline-block;
                position: absolute;
                top: 15px;
                left: 550px;
            }
            #display{
                width:100%;
            }
            .cars{
                display: inline-block;
                border: solid black;
                margin-left: 75px;
                margin-top: 20px;
                height:780px;
                font-size:10px;
            }
           .carimg{
                display: inline-block;
                margin-top: 10px;
            }
            .carimg img{
                height: 420px;
                width:630px;
            }
            
            .detail{
                display: inline-block;
                margin-left: 10px;
                color : rgb(246, 191, 29)
            }
            h1{
                color:black;
                display: inline-block;
                margin-top: 10px;
                margin-left: 10px;
            }
            .des{
                display: inline-block;
                margin-left: 10px;
                color : rgb(246, 191, 29);
                width:620px;
                overflow-x: hidden;
                overflow-y: auto;
                text-align:justify;
                height: 150px;
                overflow-x: hidden;
                overflow-y: auto;
                text-align:justify;
            }
            input[type=submit] {
                background-color: rgb(246, 191, 29);
                color: white;
                padding: 12px 20px;
                border: solid black;
                border-radius: 4px;
                cursor: pointer;
                margin-left: 50px;
                margin-top: 10px;
                margin-bottom: 5px;
                font-size: 20px;
            }

            input[type=submit]:hover {
                 background-color: #45a049;
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
    </head>
    <body>
        <div class="header" style="height:18%;">
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

            <!-- message when user by car -->

            <div class="msg">
                <h3><?php
                if(isset($_GET['Message'])){
                    echo $_GET['Message'];
                }?></h3>
            </div>
        </div>
         
        <!-- to displaying all the car -->

        <div id="display">
		<?php
        $db = mysqli_connect("localhost", "root", "", "truecar");
		$query = " select * from cars ";
		$result = mysqli_query($db, $query);
        
		while ($data = mysqli_fetch_assoc($result)) {
		?>
            <div class="cars">
                <form action="buynow.php" method="POST">
                    <h1>CAR NAME : </h1><h1 class="detail"><?php echo $data['name']; ?></h1><br>
                    <div class="carimg"><img src="./image/<?php echo $data['filename']; ?>"></div><br>
                    <h1>CAR PRICE : </h1><h1 class="detail"><?php echo $data['price']; ?></h1><br>
                    <h1>CAR Details : </h1>
                    <br><h1 class="des">     
                    <?php echo $data['detail']; ?></h1>
                    <input type="hidden" name="email" value="<?php echo $data['email']; ?>">
                 <!-- for sending to appropiate company -->
                    <input type="hidden" name="name" value="<?php echo $data['name']; ?>">
                    <br>
                    <input  type="submit" name="buycar" value="BUY NOW">
                </form>

            </div>
		<?php
		}
		?>

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