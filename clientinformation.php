<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<body>
<h1>Clientinformation</h1>
<ul>
<?php
require_once 'dbcon.php';
$cid = filter_input(INPUT_GET, 'cid', FILTER_VALIDATE_INT) or die('Missing/illegal parameter');
$sql = 'SELECT c.client_adress, c.client_contact_person, c.client_contact_phone, z.zip_code_id, z.zip_city
FROM client c, zip_code z
WHERE client_id=?
AND c.code_zip_code_id=z.zip_code_id;';
$stmt = $link->prepare($sql);
$stmt->bind_param('i', $cid);
$stmt->execute();
$stmt->bind_result($cadress, $ccontact, $cphone, $zcode, $zcity);
while($stmt->fetch()) {
	echo '<li>Adresse: '.$cadress.'</li>'.PHP_EOL;
    echo '<li>Navn: '.$ccontact.'</li>'.PHP_EOL;
    echo '<li>TLF.: '.$cphone.'</li>'.PHP_EOL;
    echo '<li>Postnummer: '.$zcode.'</li>'.PHP_EOL;
    echo '<li>By: '.$zcity.'</li>'.PHP_EOL;
    
    echo '<li><a href="projectlist.php?cid='.$cid.'">Projekt detaljer</a></li>'.PHP_EOL;
}
?>
    
    
</ul>
    
    
    
   
    
    
    
</body>
</html>



