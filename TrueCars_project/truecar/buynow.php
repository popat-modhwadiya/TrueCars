<html>
    <head>
        <title>Buy car</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <style>
     h5{
      color: black;
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
                <?php
                        $carname=$_POST['name'];
                        $to_email=$_POST['email'];
                ?>
            <img src="mainlogo.jpeg" alt="logo" style="
                    height: 96px;
                    width: 120px;
                    margin-top: 20px;
                    margin-left: 30px;
                ">

            <!-- user fill their detail for buying car which sends to company -->

            <div id="main" >
            <form method="POST" action="buynowmail.php">

                
            <label for="uname">Name</label>
                <input type="text" id="name" name="uname" placeholder="Your name.." required>
                <label for="mno">Mobile number</label>
                <input type="text" id="mno" name="mno" placeholder="Your mobile number.." required>
                <label for="uemail">Email</label>
                <input type="text" id="email" name="uemail" placeholder="Your email address.." required>
                <label for="address">Address : </label>
                <textarea id="address" name="address" placeholder="Write your address.." style="height:200px"></textarea>
                <!-- for sending to appropiate company -->
                <input type="hidden" name="name" value="<?php echo $carname; ?>">
                    <input type="hidden" name="email" value="<?php echo $to_email; ?>">
                <input type="submit" value="DONE" name="done">
            </form>
        </div>
    </body>
</html>