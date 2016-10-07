<?php
$upname = filter_input(INPUT_POST, 'clientnameupdate', FILTER_SANITIZE_STRING) or die('Missing/illegal parameter');
$upnewname = filter_input(INPUT_POST, 'clientnamenewupdate', FILTER_SANITIZE_STRING) or die('Missing/illegal parameter');
echo $upname;
echo $upnewname;
require_once 'dbcon.php';
$sql = "UPDATE client
set client_name = ?
where client_name = ?";
$stmt = $link->prepare($sql);
$stmt->bind_param("ss", $upnewname, $upname);
$stmt->execute();

if($stmt->affected_rows > 0) {
	echo 'Client updated';
}
else {
	echo 'Client NOT updated';
}

?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

    
<br>
<br>
<br>
<a href="clientlist.php">Back to clientlist</a> 
    
    
</body>
</html>