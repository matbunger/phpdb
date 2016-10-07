<?php
$delname = filter_input(INPUT_POST, 'clientnamedelete', FILTER_SANITIZE_STRING) or die('Missing/illegal parameter');

require_once 'dbcon.php';
$sql = 'DELETE FROM client
Where client_name = ?';
$stmt = $link->prepare($sql);
$stmt->bind_param('s', $delname);
$stmt->execute();

if($stmt->affected_rows > 0) {
	echo 'Client deleted';
}
else {
	echo 'Client NOT deleted';
}


/**echo '<li><a href="clientlist.php?cid='.$cid.'">clientlist</a></li>';**/

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
    
    
    
</body></html>