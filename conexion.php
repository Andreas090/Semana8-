
<?php 

$servername = "localhost";
$username = "root";
$pass = "12345678";
$db = "agencia"; 

$conn = new mysqli("localhost", "root", "12345678", "agencia");  

if ($conn->connect_errno) {
    die ("ERROR: ". $conn->connect_errno); 
    
}

echo "Conectado"; 




?> 