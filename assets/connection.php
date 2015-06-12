<?php
class Connection {    
    function connect() {
        $con = mysqli_connect("localhost","root","785019","restoration");

        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die;
        }
    }
}
?>