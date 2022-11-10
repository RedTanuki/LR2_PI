
<?php
$id = (int) $_GET['id'];

$connect = mysqli_connect('localhost', 'root', '', 'lar');
if (!$connect) {
die('Error connect to database');}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Покупатели</title>
</head>
<body>
<table>
<tr> 
  <th>Адреса</th>
</tr>
<?php
//WHERE `id_b` = '%" . $id . "%'
//ORDER BY `create_adr`";

$rs = mysqli_query($connect, "SELECT `city`, `street`,`house`,`floor`,`flat`,`code` 
							FROM `address` 
							WHERE `id_b` =  ".$id);
 while($row1 = mysqli_fetch_assoc($rs)) 
	
	{
	$addr = $row1['city'];
	$addr = $addr . ', улица ';
	$addr = $addr . $row1['street'];
		$addr = $addr . ', дом ';
	$addr = $addr . $row1['house'];
		$addr = $addr . ',  этаж ';
	$addr = $addr . $row1['floor'];
		$addr = $addr . ', ';
	$addr = $addr . $row1['flat'];
		$addr = $addr . ',  код ';
	$addr = $addr . $row1['code'];
	
	echo "<tr style=\"color:seagreen; line-height:500pt\>
	<td>$addr</td>
	</tr>";

	}
	?>
</table>



<table>
<tr> 
  <th>ID</th>
  <th>Имя</th>
  <th>Фамилия</th>
  <th>E-mail</th>
  <th>Блокировка</th>
  <th>Телефон</th>
  <th>Дата создания</th>
</tr>
<?php
$rs = mysqli_query($connect, "SELECT * FROM `buyer` WHERE `id` =  ".$id);
 while($row = mysqli_fetch_assoc($rs)) 
	
	{
	$id = $row['id'];
	$sname = $row['sname'];
	$fname = $row['fname'];
	$email = $row['email'];
	$block = $row['block'];
	$phone = $row['phone'];
	$created_buyer = $row['created_buyer'];
	
	echo "<tr> 
      <td>$id</td>
      <td>$sname</td>
	  <td>$fname</td>
	  <td>$email</td>
	  <td>$block</td>
	  <td>$phone</td>
	  <td>$created_buyer</td>
    </tr>";
	}
?>
</table>
</body>
</html>
