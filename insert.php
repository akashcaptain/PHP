<?php
$server = "localhost";
$user = "root";
$pwd = "";
$db = "test";
$port = "3307";
// create mysql connection
$conn = new mysqli($server,$user,$pwd,$db,$port);
if ( !$conn ){
    die ( "Connection faild ".$conn->connect_error);
}else{
    echo " Connection successful";
}
$sql = "insert into info( Name,Email,Mob No,DOB) values('$_POST[name]','$_POST[email]','$_POST[mob]','$_POST[dt]')";
if ($conn->query($sql) == TRUE){
    echo "Record ";
}else{
    echo "Error".$conn->error;
    echo "<br>";
    echo $sql;
}
?>