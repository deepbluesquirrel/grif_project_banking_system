<?php
session_start();
include('connect.php');
if(isset($_GET['name']))
{$name=$_GET['name'];}

if(isset($_POST['submit']))
{
    $from=$_POST['name'];
    $to=$_POST['to'];
    $amount=$_POST['amount'];
    $aa=mysqli_query($conn,"select*from customer where name='$from'");
    $bb=mysqli_fetch_array($aa);
    $c=$bb['balance']-$amount;
    $a=mysqli_query($conn,"select*from customer where name='$to'");
    $b=mysqli_fetch_array($a);
    $f=$b['balance']+$amount;
    if($c<'0')
    {
        echo"<script>alert('Process cannot be completed due to insufficient balance');</script>";
        echo '<script>window.close();</script>';
    }
    else
    {
        $d=mysqli_query($conn,"insert into transfer values('$from','$to',$amount)");
        $e=mysqli_query($conn,"update customer set balance=$c where name='$from';");
        $g=mysqli_query($conn,"update customer set balance=$f where name='$to';");
      echo '<script>window.close();</script>';
    }  
}
echo"
<style>
input[type='text'],select{
    width:90%;
    padding:5px;
    border-radius:5px;
    display:flex;
    justify-content:center;
}
input[type='submit']{
    background-color:navy;
    color:white;
    padding:5px;
    border-radius:5px;
}
body{
    width:100%;
    height:100%;
    padding:5px; 
    border: 2px solid black;
    background-color:black;
    border-radius:10px;
}
label
{
    color:white;
    font-weight:bold;
}

</style>
<title>Transaction</title>
<form method='post' action='transfer.php'>
<div class='container'>
<h1><u style='color:white;'>Y bank</u></h1>
<label>From:</label>
<input type='text' value='$name' name='name'><br>
<label>To:</label>
   ";$sql=mysqli_query($conn,"select name from customer where name!= '$name'");
   echo "<select name='to'>";
    while($row=mysqli_fetch_array($sql))
    {
        echo "<option value='$row[name]'>$row[name]";
    }
    echo"
    </select><br>
    <label>Amount</label>
    <input type='text' name='amount'><br>
    <input type='submit' name='submit' value='Transfer'>
    </div>
    </form>
   ";
?>