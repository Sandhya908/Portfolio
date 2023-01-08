<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="contact";
//create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error){   
    die("Connection failed: ".$conn->connect_error);
}
//sql to create a table
$sql = "CREATE TABLE Contactinfo(first_name VARCHAR(20) NOT NULL,last_name VARCHAR(20), email VARCHAR(50) NOT NULL,phno VARCHAR(10) NOT NULL)";
 if($conn->query($sql)=== TRUE){
     echo "Table Contactinfo created successfully";
}else{   echo "Error creating a table: ".$conn->error;
}
$conn ->close();
?>