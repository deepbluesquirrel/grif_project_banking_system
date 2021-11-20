<?php
session_start();
include('connect.php');
$sql=mysqli_query($conn,'select*from customer');
echo"<table border='1'>
    <th>Name</th>
    <th>Email</th>
    <th>Balance</th>";
while($row=mysqli_fetch_array($sql))
{
    echo"
    <tr>
    <td><a style='text-decoration:none; color:white;'href='customer.php?name=$row[name]'>$row[name]</td>
    <td>$row[email]</td>
    <td>$row[balance]</td>
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
	margin: 0;
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
	top: 50%;
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
	<body>
<a id='hist' href='paymentstatus.php'>Payment History</a>
</body>
</html>