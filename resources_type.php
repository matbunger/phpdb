<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<body>
<h1>Projekt resources</h1>
<ul>
<?php
require_once 'dbcon.php';
$cid = filter_input(INPUT_GET, 'cid', FILTER_VALIDATE_INT) or die('Missing/illegal parameter');
$sql = 'SELECT r.resources_name, r.resource_detail
FROM resources r
WHERE r.resources_id=?';
$stmt = $link->prepare($sql);
$stmt->bind_param('i', $cid);
$stmt->execute();
$stmt->bind_result($rname, $rdetail);
while($stmt->fetch()) {
	echo '<li>Resource name: '.$rname.'</li>'.PHP_EOL;
    echo '<li>Resource details: '.$rdetail.'</li>'.PHP_EOL;
    
    
    
    
    echo '<li><a href="clientlist.php?cid='.$cid.'">Tilbage til client list</a></li>'.PHP_EOL;
}
?>
  
</ul>
 <p>Vælg din resource</p>
    <form action="addresttoprojekt.php">
            <select name="rid">
           
            	<option value="bmw">BMW</option>
                <option value="tesla">Tesla</option>
                <option value="lada">Lada</option>
                <option value="rr">Range Rover</option>
                <option value=""volvo>Volvo</option>
                <option value="andet">Andet</option>
            </select>   
    
    </form>
    
    
    
    
    
    
    
</body>
</html>