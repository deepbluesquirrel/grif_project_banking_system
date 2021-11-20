<?php
session_start();
include('connect.php');
$sql=mysqli_query($conn,'select*from transfer');
echo"<table border='1'>
    <br><br><br><th style='position:static;''>Sent Account</th>
    <th style='position:static;'>Receiver Account</th>
    <th style='position:static;'>Amount</th>";
while($row=mysqli_fetch_array($sql))
{
    echo"
    <tr>
    <td>$row[fcust]</td>
    <td>$row[tcust]</td>
    <td>$row[amount]</td>
    </tr>";
    
}
echo "
<table>";
;?> 
<html>
    <head>
        <title>Customer</title>
        <style>
#hist{
     color:white;
     float:left;
     text-decoration:none;
     background-color:navy;
     padding:5px;
     border-radius:10px;
     float:right;
 }
body {
	margin-top: ;
	background: linear-gradient(45deg, #49a09d, #5f2c82);
	font-family: sans-serif;
	font-weight: 100;
}

table {
    
	width: 800px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
    position: absolute;
    bottom:10%;
	left: 50%;
	transform: translate(-50%, -50%);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
}

th {
	text-align: left;
}



tr:hover {
			background-color: rgba(255,255,255,0.3);
		}
	td {
		position: relative;
		&:hover {
			&:before {
				content: "";
				position: absolute;
				left: 0;
				right: 0;
				top: -9999px;
				bottom: -9999px;
				background-color: rgba(255,255,255,0.2);
				z-index: -1;
			}
		}
	}
}

</style>
    </head>
</html>