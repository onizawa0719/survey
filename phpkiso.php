<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
 <html>
 	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
 		<title>PHP基礎</title>
 	</head>
 	<body>
 		<?php
 			$nickname='ooooo';
 			$email='iiiii';
 			$goiken='uuuuu';

			$dsn = 'mysql:dbname=phpkiso;host=localhost';
			$user= 'root';
			$password= '';
			$dbh= new PDO($dsn,$user,$password);
			$dbh->query('SET NAMES utf8');

 			$sql = 'INSERT INTO anketo (nickname, email, goiken) VALUES("'.$nickname.'","'.$email.'","'.$goiken.'")';
 			$stmt = $dbh->prepare($sql);
 			$stmt->execute();

 			print_r($dbh);
 			print_r($stmt);

 			$dbh = null;
 		?>
 	</body>
 </html>