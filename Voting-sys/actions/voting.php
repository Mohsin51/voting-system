<?php
session_start();
include_once "connect.php";
$votes=$_POST['groupvotes'];
$totalvotes=$votes+1;
$gid=$_POST['groupid'];

$uid=$_SESSION['id'];
$updatevotes=mysqli_query($con,"UPDATE `userdata` set votes='$votes' WHERE id='$gid'");
$updatestatus=mysqli_query($con,"UPDATE `userdata` set status=1 WHERE id='$uid'");
if($updatevotes and $updatestatus){
    $getgroups=mysqli_query($con,"SELECT username,photo,votes,id from `userdata` WHERE standard='group'");
    $groups=mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
    $_SESSION['status']=1;
    echo "<script>
    alert('Voted successfully')
    window.location='../partials/dashboard.php'
    </script>";
} else{
    echo "<script>
    alert('Techanical Error !! Vote after sometime')
    window.location='../partials/dashboard.php'
    </script>";
}


?>