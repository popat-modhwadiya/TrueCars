<?php
                                $carname=$_POST['name'];
                                $to_email=$_POST['email']; //company mail in which mail is send
                                $name=$_POST['uname'];
                                $mno=$_POST['mno'];
                                $email=$_POST['uemail'];//user mail
                                $address=$_POST['address'];
                                $msg="Name : $name \n Mobile no : $mno \n Email : $email  \n Address : $address \n Car name : $carname";
                                
                            
                                $subject = "Contact from truecar";
                        
                                $headers = "From: modhwadiya*********@gmail.com";
                                
                                $mail=mail($to_email, $subject,$msg, $headers);
                                if($mail)
                                {
                                    // msg that car is booked which display in cars page
                                    $Message = urlencode("Your $carname is booked company will contact you soon...");
                                    //redirect to cars page
                                    header("Location:cars.php?Message=".$Message);
                                    die;
                                }
                                else{
                                    //if their is any problem this msg is shown
                                    $Message = urlencode("Some error occured please try after some time ");
                                    header("Location:cars.php?Message=".$Message);
                                    die;
                                    
                                }
    ?>