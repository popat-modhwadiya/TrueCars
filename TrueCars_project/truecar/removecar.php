<html>

<head>
    <title>Remove car</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .msg {
            display: inline-block;
            position: absolute;
            top: 15px;
            left: 550px;
            color: white;
        }

        #display {
            width: 100%;
        }

        #done{
                display: inline-block;
    position: absolute;
    top: 10px;
    right: 300px;
            }

        #removecars {
            position: absolute;
            color: white;
            font-size: 40px;
            margin-left: 1080;
            margin-top: 80px;
        }

        .checkbox {
            margin-left: 600px;

        }

        .cars {
            display: inline-block;
            border: solid black;
            margin-left: 75px;
            margin-top: 20px;
            height: 500px;
            font-size: 10px;
        }

        .carimg {
            display: inline-block;
            margin-top: 10px;
        }

        .carimg img {
            height: 420px;
            width: 630px;
        }

        /* .detail{
                display: inline-block;
                margin-left: 10px;
                color : rgb(246, 191, 29)
            } */
        h1 {
            color: black;
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

        #remove {
            display: inline-block;
            margin-left: 670px;

        }

        .footer {

            background-color: black;
            padding: 20px 20px 20px 20px;
        }

        .div1 {
            display: inline-block;
            margin-left: 65px;
        }

        .div2 {
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
            <h4 id="removecars">Remove cars</h4>
            <img src="mainlogo.jpeg" alt="logo" style="
                    height: 96px;
                    width: 120px;
                    margin-top: 20px;
                    margin-left: 30px;
                ">
        </div>
    </div>
    <div class="msg">
        <?php
        if (isset($_POST['remove'])) {
            $cout = 0;
            $flag = 0;
            if(isset($_POST['p']))//if admin not select cars
            {
            $p = $_POST['p'];

            $db = mysqli_connect("localhost", "root", "", "truecar");

            foreach ($p as $v) {//geting all car names which admin select for delete
                if ($p > 0) {

                    $sql = "DELETE FROM cars WHERE name='$v'";

                    if (mysqli_query($db, $sql)) {
                        $cout++;//counter which counts how many cars deleting
                    } else {
                        ?>
                <h1 style="color: white;">Failed to Remove car</h1>"<?php
                        $flag = 1;
                    }
                }
            }
        }
             else {//if admin not select any cars
                ?>
                <h1 style="color: white;">please select cars</h1><?php
                    $flag=1;
                }
            
            if ($flag == 0) { ?>
                <h1 style="color: white;"> <?php echo "$cout cars Removed successfully"; ?></h1>
        <?php
            }
        }

        ?>
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
                <form method="POST" action="" enctype="multipart/form-data">
                    <h1>CAR NAME : </h1>
                    <h1 class="detail"><?php echo $data['name']; ?></h1><br>

                    <!-- checkbox for selecting multiple cars -->

                    <input style="margin-left: 600px;" type="checkbox" name="p[]" value="<?php echo $data['name']; ?>"><br>
                    <div class="carimg"><img src="./image/<?php echo $data['filename']; ?>"></div><br>
            </div>
        <?php
        }
        ?>
        <br>
        <input id="remove" type="submit" value="Remove CARs" name="remove">
        </form>

         <!-- when admin click on done button he will redirect to home page -->

        <form id="done" action="index.php">
            <input type="submit" name="DONE" value="DONE">
        </form>


        <hr>

</body>

</html>