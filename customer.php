<?php
session_start();
include('connect.php');
$name=$_GET['name'];
$sql=mysqli_fetch_array(mysqli_query($conn,"select*from customer where name='$name'"));
?> 
<html>
    <head>
        <title>Customer</title>
        <meta http-equiv="refresh" content="2">
        <style>

body {
	margin: 0;
	background: linear-gradient(45deg, #48a09d, #5f2c82);
	font-family: sans-serif;
	font-weight: 100;
 }
 div{
     width:50%;
     position:relative;
     top:30px;
     left:20px;
     padding:10px;
    border: 2px solid white;
 }
 label{
     color:white;
     padding:5px;
 }
 a{
     color:white;
     float:left;
     text-decoration:none;
     background-color:navy;
     padding:5px;
     border-radius:10px;
     float:right;
 }
</style>
    </head>
    <body>
        <div>
        <a   href='' target="popup" onclick="window.open('transfer.php?name=<?php echo $name; ?>','name','top=200,left=400,width=600,height=400')">Transfer</a><br>
        <br>    <label>Name : <?php echo $sql['name']; ?></label><br>
            <label>Email : <?php echo $sql['email']; ?></label><br>
            <label>Balance : <?php echo $sql['balance']; ?></label>
            
</div>
        
    </body>
</html>