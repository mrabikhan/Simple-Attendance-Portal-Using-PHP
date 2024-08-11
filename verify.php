<?php
$severname="localhost";
$username="root";
$password="";
$dbname="demo";
$conn=mysqli_connect($severname,$username,$password,$dbname);

if(isset($_REQUEST['submitlog']))
{
    $email=$_REQUEST['emailid'];
    $pass=$_REQUEST['password'];
    $sql="select * from `registeration` where emailid='$email' and password='$pass'";
    $result=mysqli_query($conn,$sql);
    $rows=mysqli_num_rows($result);
     


    if($rows==true)
    {
    ?>
    <script>
    alert("Login Successfull");
    location.replace("select.html");
    </script>
    <?php   
    }

    else
    {    
     echo"<center><h1>There is no data in database!</h1></center>";
    }
}
?>