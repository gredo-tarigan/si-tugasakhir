<?php
function OpenCon()
 {
 $dbhost = "remotemysql.com";
 $dbuser = "4zfOiEEhb1";
 $dbpass = "j7mrJstwWY";
 $db = "4zfOiEEhb1";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 return $conn;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }

?>