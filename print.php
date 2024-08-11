<!DOCTYPE html>
<html lang="en">
<head>
    <title>Print| Attendence</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
<link rel="stylesheet" href="css/style3.css">

</head>
<body>
<div class="header">
        <img src="images/logo.png" alt="">
        <h1>Student Attendence Summary</h1>
        <a href="index.html"><button><i class="fa fa-user"></i> Sign Out</button></a>
       </div>
   
       <div class="para">
           <p>A New Innovation To Life</p>
       </div>

<center>       
<div class="tab">
<table border=2px>
    
<thead >
<tr> 
<th>Sno</th>
<th>Date</th>
<th>Tehreem Masood</th>
<th>Dua Qaiser</th>
<th>Ayesha Rana</th>
<th>Hira Zeeshan</th>
</tr>
<thead>

<tbody>
 <?php   
include 'connect.php';
$sql="select * from `attendence`";
$result=mysqli_query($conn,$sql);  
while($rows=mysqli_fetch_assoc($result))
{  
?>             
<tr>
<td><?php echo $rows['id']; ?></td>
<td><?php echo $rows['date']; ?></td>
<td><?php echo $rows['statusA1']; ?></td>

<td><?php echo $rows['statusA2']; ?></td>
<td><?php echo $rows['statusA3']; ?></td>
<td><?php echo $rows['statusA4']; ?></td>
</tr>
<?php
} 
?>   
</tbody>
</table>
</div> 

<div class="backbtn"><a href="home.html"><button>Back</button></a></div>
</center>
<div class="footer">
        <p>@All Copyrights Reseverd By Soften Solution | 2022</p>
    </div>
</body>
</html>
