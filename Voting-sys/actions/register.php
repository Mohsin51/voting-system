<?php
include_once "connect.php";
if(isset($_POST['submit'])){
    $username=trim($_POST['username']);
    $phone=$_POST['phone'];
    $pass=$_POST['userpass'];
    $cpass=$_POST['usercpass'];
    $file=$_FILES['photo']['name'];
    $tmp_name=$_FILES['photo']['tmp_name'];
    $standard=$_POST['std'];
    // Username verification
    $pattern="/^[a-zA-Z\s]{3,15}$/";
    if(empty($username)){
        echo "First enter your name";
    } elseif(!preg_match($pattern,$username)){
        echo "Invalid Name";
    } 
    if($pass!=$cpass){
        echo "<script>
        alert('Password problem')
        window.location='../partials/registration.php'
        </script>";
    }
    else{
        move_uploaded_file($tmp_name,"../uploads/$file");
        $sql="INSERT INTO `userdata` (username,mobile,password,photo,standard,status,votes) VALUES ('$username','$phone','$pass','$file','$standard',0,0)";
        $result=mysqli_query($con,$sql);
        if($result){
        echo "<script>
        alert('Registrstion Successfully')
        window.location='../'
        </script>";
        }
    } 
}


?>