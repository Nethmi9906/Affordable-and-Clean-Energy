<html>
    <head>
</head>
<body>





<?php 


$conn=mysqli_connect("localhost","root","12345","clean_energy");

if($conn==false){

    die("Connection Failed:".mysqli_connect_error());
}

$Username=$_REQUEST['uname'];
$Email=$_REQUEST['mail'];

$sql= "INSERT INTO register VALUES ('$Username','$Email')";
if(mysqli_query($conn,$sql)){
    echo "<h3>Data Added Successfully!</h3>"
}
else{
    echo "ERROR".mysqli_error($conn);
}
mysqli_close($conn);



?>
</body>
</html>