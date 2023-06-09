<?php

$pa="1234";

//the subject
$sub = "my forgot password in eldercare";
//the message
$msg = "hello we have revice a request to get your password it is ";
//recipient email here
$rec = "eldercaresystem01@gmail.com";
//send email
mail($rec,$sub,$msg);

?>