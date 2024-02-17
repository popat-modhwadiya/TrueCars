<html>
    <head>
        <title>About us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <style>
            @media screen and (max-width: 420px) { /*According to mobile size you can change the width*/
    .bt-contact{
        padding-left: 100px;/* give some less px value */
    }
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
.about h2{
    /* position: absolute;  */
    color: white;
    margin-top: 30px;
    margin-left: 108px;
} 
.about{
    background-color: black;
    opacity: 0.8;
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
            </div>

                <img src="mainlogo.jpeg" alt="logo" style="
                    height: 96px;
                    width: 120px;
                    margin-top: 20px;
                    margin-left: 30px;
                ">

                <!-- about us msg  -->

                 <div class="about">
                    <pre> <h2><b><div style="color:rgb(246, 191, 29);">                    TrueCars</div>
                    TrueCars is a web-based project that was developed using HTML, CSS, PHP, and MySQL in December 2022. 

                    <div style="color:rgb(246, 191, 29);">                    Key features :</div>
                        - Buy cars.
                        - Add and remove cars.
                        - Change car prices.
                        - Fires mail locally using SMTP
                    <div style="color:rgb(246, 191, 29);">                    Developed by :</div>
                        - Popat Modhwadiya
                        - Hardik Kuchhadiya     
                        <div style="color:rgb(246, 191, 29);">                    Guided by :</div>
                    Mr. VANRAJ DANGAR SIR
                       - LECTURER COMPUTER ENGINEERING                                 
                          Government Polytechnic Porbandar      </b></h2></pre> 
                      <br>
                </div>

                <!-- about us msg end  -->

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