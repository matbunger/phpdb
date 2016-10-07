<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<body>
<?php
$cid = filter_input(INPUT_GET, 'cid', FILTER_VALIDATE_INT) or die('Missing/illegal parameter');
require_once 'dbcon.php';
$sql = 'SELECT p.project_name FROM project WHERE project_id=?';
$stmt = $link->prepare($sql);
$stmt->bind_param('i', $fid);
$stmt->execute();
$stmt->bind_result($pname);
while ($stmt->fetch()) {}
echo 'project navn:'.$pname;
?>
<form method="post" action="edit.php">
	<input type="hidden" name="pid" value="<?=$pid?>" >
	New title: <input type="text" name="pname" placeholder="Project Navn" value="<?=$pname?>" />
    <input type="submit" name="action" value="submit" />
</form>
</body>
</html>