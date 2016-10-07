<?php

$cn = filter_input(INPUT_POST, 'clientname', FILTER_SANITIZE_STRING) or die('missing parameter');
$ca = filter_input(INPUT_POST, 'clientaddress', FILTER_SANITIZE_STRING) or die('missing parameter');
$cc = filter_input(INPUT_POST, 'clientcontact', FILTER_SANITIZE_STRING) or die('missing parameter');
$cp = filter_input(INPUT_POST, 'clientphone', FILTER_VALIDATE_INT) or die('missing parameter');
$cz = filter_input(INPUT_POST, 'clientzip', FILTER_VALIDATE_INT) or die('missing parameter');

require_once 'dbcon.php';
$sql = 'INSERT INTO `client`(`client_name`, `client_adress`, `client_contact_person`, `client_contact_phone`, `code_zip_code_ID`) VALUES (?,?,?,?,?)';
$stmt = $link->prepare($sql);
$stmt->bind_param('sssii', $cn, $ca, $cc, $cp, $cz);


if($stmt->execute()){
    
    echo "yay, it worked";
}else {
    echo "nope";
}




?>
<html>

    <head></head>
    
    <body>
    
    <br>
<br>
<br>
<a href="clientlist.php">Back to clientlist</a>
    
    </body>

</html>

<!--echo '<li><a href="clientlist.php?cid='.$cid.'">Tilbage til clientlist</a></li>'.PHP_EOL;-->