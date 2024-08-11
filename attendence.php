<?php
$date = $_POST['date'];
$statusA1 = $_POST['statusA1'];
$statusA2 = $_POST['statusA2'];
$statusA3 = $_POST['statusA3'];
$statusA4 = $_POST['statusA4'];
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
$sql= " INSERT INTO `attendence` (`date`,`statusA1`,`statusA2`,`statusA3`,`statusA4`) 
        VALUES ('$date','$statusA1','$statusA2','$statusA3','$statusA4')";
$result = mysqli_query($conn,$sql);

if($result==true)
{
?>
<script>
    alert("Attendence Submitted Successfully..!");
    location.assign('index.html');
</script>
<?php
}
}
?>