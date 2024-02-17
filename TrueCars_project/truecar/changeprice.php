
<html>
    <head>
        <title>Remove car</title>
        <link rel="stylesheet" href="style.css">
        <style>
             .msg{
                display: inline-block;
                position: absolute;
                top: 15px;
                left: 550px;
                color: white;
            }
            #display{
                width:100%;
            }
            #done{
                display: inline-block;
    position: absolute;
    top: 10px;
    right: 300px;
            }
            
            .checkbox{
                margin-left: 600px;

            }
            .cars{
                display: inline-block;
                border: solid black;
                margin-left: 75px;
                margin-top: 20px;
                height:620px;
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
            
            /* .detail{
                display: inline-block;
                margin-left: 10px;
                color : rgb(246, 191, 29)
            } */
            h1{
                color:black;
                display: inline-block;
                margin-top: 10px;
                margin-left: 10px;
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
            #remove{
                display: inline-block;
    margin-left: 400;

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
            <img src="mainlogo.jpeg" alt="logo" style="
                    height: 96px;
                    width: 120px;
                    margin-top: 20px;
                    margin-left: 30px;
                ">
                <h1 id="removecars" style="color:white;margin-left: 920px;">Update cars prices</h1>
                <form id="done" action="index.php" >
                <input type="submit" name="DONE" value="DONE">
            </form>
                
            </div>
        </div>
        <div  class="msg" >
        <?php
                      if (isset($_POST['update'])) {
                       
                       $price=$_POST['newprice'];
                       $name=$_POST['name'];
                        
                        $db = mysqli_connect("localhost", "root", "", "truecar");
                       
                         
                            $sql = "UPDATE cars SET price='$price' WHERE name='$name'";
                        
                        if (mysqli_query($db, $sql)) {
                            ?>
                          
                       <h1 style="color: white;">  "Price updated successfully"</h1>
                        <?php
                    }
                    
                    else{?>
                        <h1 style="color: white;">"Price not updated "</h1>   
                        <?php
                    }
                    } 
                
                ?>
        </div>
        <div id="display">
		<?php
        $db = mysqli_connect("localhost", "root", "", "truecar");
		$query = " select * from cars ";
		$result = mysqli_query($db, $query);
        
		while ($data = mysqli_fetch_assoc($result)) {
		?>
            <div class="cars">
            <form method="POST" action="" enctype="multipart/form-data">
                    <h1>CAR NAME : </h1><h1 class="detail"><?php echo $data['name']; ?></h1><br>
                    
                    <input type="hidden" name="name" value="<?php echo $data['name']; ?>">
                    <div class="carimg"><img src="./image/<?php echo $data['filename']; ?>"></div><br>
                    <h1>CAR PRICE : </h1><h1 class="detail"><?php echo $data['price']; ?></h1><br>
                    <h1>CAR PRICE : </h1><input type="text" name="newprice" required placeholder="new price" style="color:black"><br>
           
            
                    <input  type="submit" value="Update" name="update">
                    </form>
                    </div>
		<?php
		}
		?>
                    
                  
        

	<hr>
        
    </body>
</html>
