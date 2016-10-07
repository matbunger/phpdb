<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Clientlist</title>
</head>
<body>
<h1>Clientlist</h1>
<ul>
<?php
require_once 'dbcon.php';
$sql = 'SELECT client_id, client_name FROM client';
$stmt = $link->prepare($sql);
$stmt->execute();
$stmt->bind_result($cid, $cnam);
while($stmt->fetch()) {
	echo '<li><a href="clientinformation.php?cid='.$cid.'">'.$cnam.'</a></li>'.PHP_EOL;
}
?>

<br>
<hr>
</ul>
       <center> <h2>Add new client</h2>

    <form method="post" action="newclient.php"> 
    Name <br><input type="text" name="clientname"> <br>
    <br>Adress<br> <input type="text" name="clientaddress"> <br>
    <br>Contact name <br><input type="text" name="clientcontact"> <br>
    <br>Phone<br> <input type="text" name="clientphone"> <br>
    <br>Zipcode<br> <input type="text" name="clientzip">
    <br><br>  <input type="submit" value="Add">
    </form>
    
    <br>
<hr>
    
    <h2>Delete client</h2>
    <form method="post" action="delete.php">
    Client name <br><input type="text" name="clientnamedelete"> <br>
    <br>  <input type="submit" value="Delete">
    </form>
        <br>
<hr>      
    
        
       <h2>Update client name</h2>
    <form method="post" action="update.php"> 
    Client name<br><input type="text" name="clientnameupdate"> <br><br>
    New client name <br><input type="text" name="clientnamenewupdate"> <br>   
    <br>
    <input type="submit" value="Update">
        </form>
             
         <br>
        <br>
        <br> <br>
        <br>
        <br>
    </center>
        
        
</body>
</html>