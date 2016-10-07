<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<body>
<h1>Projekt detaljer</h1>
<ul>
<?php
require_once 'dbcon.php';
$cid = filter_input(INPUT_GET, 'cid', FILTER_VALIDATE_INT) or die('Missing/illegal parameter');
$sql = 'SELECT p.project_name, p.project_startdate, p.project_enddate, p.client_client_id
FROM project p
WHERE p.client_client_id=?';
$stmt = $link->prepare($sql);
$stmt->bind_param('i', $cid);
$stmt->execute();
$stmt->bind_result($pname, $ppstart, $ppslut, $pclient);
while($stmt->fetch()) {
	echo '<li>Projektnavn: '.$pname.'</li>'.PHP_EOL;
    echo '<li>Startdate: '.$ppstart.'</li>'.PHP_EOL;
    echo '<li>Enddate: '.$ppslut.'</li>'.PHP_EOL;
    echo '<li>Client number: '.$pclient.'</li>'.PHP_EOL;
    
    
    echo '<li><a href="resources.php?cid='.$cid.'">Project resources</a></li>'.PHP_EOL;
}
  
?>
    
    
</ul>
</body>
</html>