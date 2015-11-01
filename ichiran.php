<?php
try
{
//１.データベースに接続する
$dsn = 'mysql:dbname=phpkiso1;host=localhost';
$user= 'root';
$password= '';
$dbh= new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

$sql = 'SELECT * FROM `anketo` WHERE 1';

$stmt = $dbh->prepare($sql);
$stmt->execute();

//$dbh = null;

?>

<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
 	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
 		<title>PHP基礎</title>
 	</head>
 	<body>
 		<?php
 			while(1)
 			{
 				$rec = $stmt->fetch(PDO::FETCH_ASSOC);
 				if($rec==false)
 				{
 					//処理を中止する
 					break;

 				}
 				 //連想配列のかたちで一行分のデータを\習得
 				//keyカラム
 				echo $rec['code'];
 				echo $rec['nickname'];
 				echo $rec['email'];
 				echo $rec['goiken'];
 				echo '<br />';
 			}

 			$dbh = null;
 		?>
 	</body>
</html>
<?php
}catch(exeption $e){
	echo 'エラーが発生しました';
}
?>