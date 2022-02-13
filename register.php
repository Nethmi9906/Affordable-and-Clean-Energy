<html>
    <head>
</head>
<body>





<?php 
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "clean_energy";


$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn==false){

    die("Connection Failed:".mysqli_connect_error());
}

$uname=$_REQUEST['uname'];
$mail=$_REQUEST['mail'];


?>
</body>
</html>