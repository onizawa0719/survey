<?php
try
{
//１.データベースに接続する
$dsn = 'mysql:dbname=phpkiso1;host=localhost';
$user= 'root';
$password= '';
$dbh= new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

?>

<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
 <html>
 	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
 		<title>PHP基礎</title>
 	</head>
 	<body>
 		<?php
 			$nickname=$_POST['nickname'];
	 		$email=$_POST['email'];
	 		$goiken=$_POST['goiken'];

	 		$nickname= htmlspecialchars($nickname);
	 		$email= htmlspecialchars($email);
	 		$goiken= htmlspecialchars($goiken);

 			//2.SQLで指令をだす。
 			$sql = 'INSERT INTO anketo (nickname, email, goiken) VALUES("'.$nickname.'","'.$email.'","'.$goiken.'")';
 			
 			//echo $sqi;
 			$stmt = $dbh->prepare($sql);
 			
 			$stmt->execute();


 			//データベースを切断する
 			$dbh = null;
			}
			 	catch(Exception $e)
 			{
 				print 'ただいま障害により大変ご迷惑をおかけしております。';
 			}

	 		print $nickname;
	 		print '様<br />';
 			echo 'ご意見ありがとうございました。<br />';
 			echo '頂いたご意見『';
 			echo $goiken;
 			echo '』<br />';
 			echo $email;
 			echo 'にメールを送りましたので確認してください。';


 		?>
 	</body>
 </html>