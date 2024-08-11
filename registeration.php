<?php
$fullname = $_POST['fname'];
$email = $_POST['emailid'];
$pass = $_POST['password'];
$age = $_POST['age'];

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'demo';

$conn = mysqli_connect($server,$username,$password,$dbname);

if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}

else
{
$sql= " INSERT INTO `registeration` (`fname`, `emailid`, `password`, `age`) 
        VALUES ('$fullname', '$email', '$pass', '$age')";
$result = mysqli_query($conn,$sql);

if($result==true)
{
?>
<script>
    alert("Thank You! Registeration Successfull...");
    location.assign('index.html');
</script>
<?php
}
}
?>