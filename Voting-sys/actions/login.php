<?php
include_once "connect.php";
session_start();
if(isset($_POST['submit'])){
    $username=trim($_POST['username']);
    $phone=$_POST['phone'];
    $pass=$_POST['userpass'];
    $std=$_POST['std'];

    $sql="SELECT * FROM userdata WHERE username='$username' AND mobile='$phone' AND password='$pass' AND standard='$std'";

    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $sql="SELECT username,photo,votes,id FROM `userdata` WHERE standard='group'";
        $resultgroup=mysqli_query($con,$sql);
        if(mysqli_num_rows($resultgroup)>0){
            $groups=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
            $_SESSION['groups']=$groups;
        }
        $data=mysqli_fetch_array($result);
        $_SESSION['id']=$data['id'];
        $_SESSION['status']=$data['status'];
        $_SESSION['data']=$data;
            echo "<script>
            window.location='../partials/dashboard.php'
            </script>";
    } else{
        echo "<script>
        alert('Invalid Credential');
        window.loation='../'
        </script>";
    }
}



?>