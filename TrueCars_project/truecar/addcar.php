<html>
    <head>
        <title>Add car</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <style>
     h5{
      color: black;
}
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
    </style>
    <body>
        <div class="header">

        <!-- admin fill details of car and car will be added in website -->

            <div class="msg">
                <?php
                        $db = mysqli_connect("localhost", "root", "", "truecar");
                        $val = mysqli_query($db,"select 1 from `cars`");
                            if(!$val)
                            {
                                $sql="CREATE TABLE cars (
                                    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                    filename VARCHAR(30) NOT NULL,
                                    name VARCHAR(30) NOT NULL,
                                    email VARCHAR(50),
                                    price VARCHAR(50),
                                    detail TEXT
                                    )";
                                mysqli_query($db, $sql);
                                }

                      if (isset($_POST['add'])) {

                        $filename = $_FILES["uploadfile"]["name"];
                        $tempname = $_FILES["uploadfile"]["tmp_name"];
                        $name=$_POST['name'];
                        $price=$_POST['price'];
                        $email=$_POST['email'];
                        $detail=$_POST['detail'];
                        $folder = "./image/" . $filename;
                        
                        
                        $sql = "INSERT INTO cars (filename,name,price,detail,email) VALUES ('$filename','$name','$price','$detail','$email')";
                        mysqli_query($db, $sql);
                        if (move_uploaded_file($tempname, $folder)) {
                            echo "<h1>Car added successfully</h1>";
                        } else {
                            echo "<h1>Failed to add car</h1>";
                        }
                    } 
                ?>
            </div>
            <img src="mainlogo.jpeg" alt="logo" style="
                    height: 96px;
                    width: 120px;
                    margin-top: 20px;
                    margin-left: 30px;
                ">

                <!-- admin fill up car details -->

            <div id="main" >
            <form method="POST" action="" enctype="multipart/form-data">

                <label for="name">CAR NAME :</label>
                <input type="text" id="name" name="name" placeholder="car name.." required>
                <label for="price">CAR PRICE :</label>
                <input type="text" id="price" name="price" placeholder="car price.." required>
                <label for="email">COMPANY MAIL :</label>
                <input type="text" id="email" name="email" placeholder="company email.." required>
                <label for="email">CAR IMAGE :</label>
                <input type="file" required name="uploadfile" value="" />
                <label for="details">CAR DETAILS</label>
                <textarea id="detail" name="detail" placeholder="Write car details.." style="height:200px"></textarea>

                <input type="submit" value="ADD CAR" name="add">
            </form>
            <br>
            <!-- when admin click on done button he will redirect to home page -->

            <form action="index.php" style="position: absolute;top: 615px;left: 200px;">
                <input type="submit" name="DONE" value="DONE">
            </form>
            </div>
        </div>
    </body>
</html>