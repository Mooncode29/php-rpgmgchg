<?php

require 'users.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Table</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php

?>
<table>
	<tr>
		<th>Id</th>
		<th>email</th>
		<th>creé le</th>
	</tr>
<?php foreach ($tab as $client):?>
	<tr>
		<td><?= $client->getId();?></td>
		<td><?=$client->getEmail();?></td>
		<td><?=$client->getCreatedAt();?></td>
	</tr>
<?php endforeach?>
</table>
</body>
</html>