<?php
$host = "localhost"; 
$user = "root"; 
$pwd = ""; 
try{ 
$conn = new PDO( "mysql:host=$host;dbname=dprojb", $user, $pwd); 
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 
//echo "Connected successfully"; 
} 
catch(Exception $e){ 
echo ("Internal Login Error, Please Contact Web Site Support");
$error = "Error message: ".$e->getMessage() ." Error at line: ".$e->getLine()."  in a file named :  ".$e->getFile(); 
error_log($error);  
return;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

</body>

</html>
