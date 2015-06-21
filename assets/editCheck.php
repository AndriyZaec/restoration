<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
    if(isset($_POST['name']) && isset($_POST['email'])){
        $con = mysqli_connect("localhost","root","785019","restoration");

        if($_POST['name']==''){
            echo "<div class='alert alert-danger'>Ви не ввели інформацію в поля обов'якові для заповнення!</div>";
        }else{
        if($_POST['tel']==''){
            $_POST['tel']='';
        }
        if($_POST['address']==''){
            $_POST['address']='';
        }
        if($_POST['description']==''){
            $_POST['description']='';
        }

        if (mysqli_connect_errno())
        {
            echo "Помилка: " . mysqli_connect_error();
            die;
        }
        $sql="UPDATE resturant SET name='".$_POST['name']."', tel='".$_POST['tel']."', address='".$_POST['address']."', descript='".$_POST['description']."' WHERE `e-mail`='".$_POST['email']."'";

        if($con->query($sql)===true){
            echo "<div class='alert alert-success'>Інформацію успішно змінено</div>";
        }
        else{
            echo "<div class='alert alert-danger'>Ви не ввели інформацію в поля обов'якові для заповнення!</div>";
        }
        }

    }else{
        echo "<div class='alert alert-danger'>Ви не ввели інформацію в поля обов'якові для заповнення!</div>";
    }