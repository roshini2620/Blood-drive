<?php 
  
$conn = ""; 
   
try { 
    $servername = "localhost"; 
    $dbname = "loginPage"; 
    $username = "root"; 
    $password = ""; 
   
    $conn = new PDO( 
        "mysql:host=$servername; dbname=loginPage", 
        $username, $password
    ); 
      
   $conn->setAttribute(PDO::ATTR_ERRMODE, 
                    PDO::ERRMODE_EXCEPTION); 
} 
catch(PDOException $e) { 
    echo "Connection failed: " . $e->getMessage(); 
} 
  
?> 