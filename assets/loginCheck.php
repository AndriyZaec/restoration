<?php
 
  $con = mysqli_connect("localhost","root","785019","restoration");

if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die;
     }

if(isset($_POST['e_mail'])){
        $result = $con->query("SELECT pass FROM restoration.resturant where `e-mail`='".$_POST['e_mail']."' LIMIT 1");
            if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()) {
                    if(md5($_POST['pass'])==$row['pass']){ 
                        echo("confirm");
                    }
                    else{
                        echo("dec");
                    }
                }  
            }else{
                echo("dec");
            }
        }	
?>